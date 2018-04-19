<?php

require_once "DBConnect.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $arr = [];
    $sql = "SELECT product.id, product.name, bd.amount,product.sell_price FROM bill_detail as bd , product
      WHERE bd.product_id = product.id AND bd.bill_id = '$id'";
    $rs = $conn->query($sql);

    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }


    $file = json_encode($arr);
    echo $file;
}

?>