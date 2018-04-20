<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 27/03/2018
 * Time: 16:08 PM
 */
require 'DBConnect.php';


    $sql = "SELECT * FROM product;";
    $rs = $conn->query($sql);

    $arr = [];

    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }

    $sql = "SELECT count(*) FROM product ;";
    $rs = $conn->query($sql);
    $row = $rs->fetch_assoc();

    $arr1 = ['count'=> $row['count(*)']];
    array_push($arr,$arr1);

    $file = json_encode($arr);
    echo $file;


?>
