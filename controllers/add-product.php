<?php
require 'DBConnect.php';
date_default_timezone_set("Asia/Bangkok");
$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$inventory = $_REQUEST['inventory'];
$buy = $_REQUEST['buy_price'];
$sell = $_REQUEST['sell_price'];
$date = date("Y-m-d H:i:s");
$brand = $_REQUEST['brand'];
$size = $_REQUEST['size'];
$detail = $_REQUEST['detail'];

$sql = "INSERT INTO product values (null,'$name','$type',$inventory,
$buy,$sell,'$date','$brand','$size','product1.jpg','$detail')";

if($conn->query($sql)){
    echo 1;
}
else
    echo 0;
?>