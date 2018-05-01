<?php
require 'DBConnect.php';

$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$inventory = $_REQUEST['inventory'];
$buy = $_REQUEST['buy_price'];
$sell = $_REQUEST['sell_price'];
$entry = $_REQUEST['entry_date'];
$brand = $_REQUEST['brand'];
$size = $_REQUEST['size'];

$sql = "INSERT INTO product values (null,'$name','$type',$inventory,
$buy,$sell,'2018-1-1 12:12:12','$brand','$size','product1.jpg')";

if($conn->query($sql)){
    echo 1;
}
else
    echo 0;
?>