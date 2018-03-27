<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 21/03/2018
 * Time: 18:04 PM
 */

require_once "DBConnect.php";
$arr = [];
$sql = "SELECT customer.* FROM customer,account 
WHERE customer.username = account.username and account.status='waiting';";
$rs = $conn->query($sql);

while (($row = $rs->fetch_assoc()) != null) {
    array_push($arr, $row);
}

$file = json_encode($arr);
echo $file;
?>