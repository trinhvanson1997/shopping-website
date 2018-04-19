<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 27/03/2018
 * Time: 16:08 PM
 */
require 'DBConnect.php';

$cmd = $_REQUEST['action'];
$page = $_REQUEST['page'];

if ($cmd == 'search-by-name') {
    $key = $_REQUEST['key'];

    $sql = "SELECT * FROM product WHERE lower(name) LIKE '%" . $key . "%' LIMIT " . ($page - 1) * 9 . ", 9;";


} else {
        $from =$_REQUEST['from'];
        $to =$_REQUEST['to'];

    $sql = "SELECT * FROM product WHERE sell_price > $from AND sell_price < $to LIMIT " . ($page - 1) * 9 . ", 9;";
}
$rs = $conn->query($sql);

$arr = [];

while (($row = $rs->fetch_assoc()) != null) {
    array_push($arr, $row);

}

if($cmd == 'search-by-name'){
$sql = "SELECT count(*) FROM product  WHERE lower(name) LIKE '%" . $key . "%';";
}
else{
    $sql = "SELECT count(*) FROM product  WHERE sell_price > $from AND sell_price < $to;";
}
$rs = $conn->query($sql);
$row = $rs->fetch_assoc();

$arr1 = ['count' => $row['count(*)']];
array_push($arr, $arr1);

$file = json_encode($arr);
echo $file;


?>
