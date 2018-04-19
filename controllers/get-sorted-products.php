<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 27/03/2018
 * Time: 16:08 PM
 */
require 'DBConnect.php';

if(isset($_REQUEST['page']) && isset($_REQUEST['order'])){
    $page = $_REQUEST['page'];
    $order = $_REQUEST['order'];

    $sql = "SELECT * FROM product  ORDER BY sell_price $order LIMIT ". ($page - 1) * 9 . ", 9;";
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
}

?>
