<?php

require_once "DBConnect.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $arr = [];
    $sql = "SELECT product.img, product.name, product.sell_price,product.brand,product.size,product.detail FROM product
      WHERE product.id = '$id'";
    $rs = $conn->query($sql);

    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }


    $file = json_encode($arr);
    echo $file;
}

?>