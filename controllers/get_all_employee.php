<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 18/04/2018
 * Time: 10:32
 */
require 'DBConnect.php';

if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    $sql = "SELECT * FROM employee LIMIT ". ($page - 1) * 9 . ", 9;";
    $rs = $conn->query($sql);

    $arr = [];

    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }

    $sql = "SELECT count(*) FROM employee ;";
    $rs = $conn->query($sql);
    $row = $rs->fetch_assoc();

    $arr1 = ['count'=> $row['count(*)']];
    array_push($arr,$arr1);

    $file = json_encode($arr);
    echo $file;
}

?>