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
$file = json_encode($arr);
echo $file;

?>
