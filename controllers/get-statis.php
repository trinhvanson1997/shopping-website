<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 21/03/2018
 * Time: 23:38 PM
 */

require 'DBConnect.php';

$arr = [];
$sql = "SELECT * FROM bill
WHERE status = 'done'
ORDER BY buy_date DESC ;";
$rs = $conn->query($sql);

while (($row = $rs->fetch_assoc()) != null) {
    array_push($arr, $row);

}

$file = json_encode($arr);
echo $file;
?>