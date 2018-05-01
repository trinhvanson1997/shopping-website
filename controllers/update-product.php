<?php
require 'DBConnect.php';
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$type = $_REQUEST['type'];
$inventory = $_REQUEST['inventory'];
$buy = $_REQUEST['buy_price'];
$sell = $_REQUEST['sell_price'];
$entry = $_REQUEST['entry_date'];
$brand = $_REQUEST['brand'];
$size = $_REQUEST['size'];

$sql = "
    UPDATE product
    SET name = '$name', type_id = '$type', inventory = $inventory, buy_price = $buy,
    sell_price = $sell, entry_date = '$entry', brand = '$brand', size = '$size'
    WHERE id = $id;
";

if($conn->query($sql)){
    echo 1;
}
else
    echo 0;
?>