<?php
require 'DBConnect.php';
    $page = $_GET['page'];
    $type = $_GET['type'];

    $sql = "SELECT * FROM product WHERE inventory > 0 AND type_id = '". $type ."' LIMIT ". ($page - 1) * 12 . ", 12;";
    $rs = $conn->query($sql);

    $arr = [];

    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }

    $sql = "SELECT count(*) FROM product WHERE  inventory>0 AND type_id = '". $type ."';";
    $rs = $conn->query($sql);
    $row = $rs->fetch_assoc();

    $arr1 = ['count'=> $row['count(*)']];
    array_push($arr,$arr1);

    $file = json_encode($arr);
    echo $file;
?>