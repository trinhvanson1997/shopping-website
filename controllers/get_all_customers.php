<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 21/03/2018
 * Time: 23:38 PM
 */

require_once "DBConnect.php";

$arr = [];
$sql = "SELECT customer.*,status FROM customer,account 
WHERE customer.username = account.username and account.status in ('active','locked')
ORDER BY status ASC ;";
$rs = $conn->query($sql);

while (($row = $rs->fetch_assoc()) != null) {
    array_push($arr, $row);

}

$file = json_encode($arr);
echo $file;
?>