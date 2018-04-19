<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 21/03/2018
 * Time: 23:38 PM
 */

require_once "DBConnect.php";

$arr = [];
$sql = "SELECT * FROM bill

ORDER BY buy_date DESC ;";
$rs = $conn->query($sql);

while (($row = $rs->fetch_assoc()) != null) {
    array_push($arr, $row);

}

$file = json_encode($arr);
echo $file;
?>