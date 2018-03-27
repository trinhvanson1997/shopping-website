<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 20/03/2018
 * Time: 10:41 AM
 */

require_once 'DBConnect.php';

if (isset($_REQUEST['username'])) {
    $username = $_REQUEST["username"];

    $sql = "select customer.*,password from customer,account where customer.username = '$username' and customer.username = account.username;";
    $rs = $conn->query($sql);

    $row = $rs->fetch_assoc();
    $msg = json_encode($row);
    echo $msg;
}


?>