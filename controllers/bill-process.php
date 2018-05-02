<?php
require 'DBConnect.php';

$action = $_GET['action'];
$id = $_GET['id'];

$date = date('Y-m-d H:i:s');

$process = true;
$product = [];
$value = [];
if ($action == 'accept') {

    $sql1 = "SELECT * FROM bill_detail WHERE bill_id = $id";

    $rs = $conn->query($sql1);
    while(($row = $rs->fetch_assoc()) != null){
        $product_id = $row['product_id'];
        $amount =$row['amount'];
        array_push($product,$product_id);

        $sql2 = "Select inventory from product where id = $product_id";
        $rs2 = $conn->query($sql2);
        $row2 = $rs2->fetch_assoc();
        $inven = $row2['inventory'];
        array_push($value, $inven-$amount);

        if($inven < $amount){
            $process=false;
            echo 0;
            break;
        }

    }
}


if($process){
    for($i = 0;$i<count($product);$i++){
        $sql3 = "UPDATE product SET inventory = $value[$i] WHERE id = $product[$i]";
        $conn->query($sql3);

    }

    $sql4 = "UPDATE bill SET status = 'done' , process_date='$date' WHERE id = $id";
    $conn->query($sql4);
    echo 1;
}
if ($action == 'destroy') {
    $sql = "UPDATE bill SET status = 'destroy' ,   process_date='$date' WHERE id = $id";
    if ($conn->query($sql)) {
        echo 1;
    }

}



?>