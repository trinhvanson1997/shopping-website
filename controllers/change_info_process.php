<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 20/03/2018
 * Time: 11:22 AM
 */

require_once 'DBConnect.php';

$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$name = $_REQUEST['name'];
$birthday = $_REQUEST['birthday'];
$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];


$sql_update_pass = "UPDATE account SET password = '" . $pass . "' WHERE username = '" . $user . "'";

$sql_update_cus = "UPDATE customer SET name ='$name', birthday='$birthday' , address = '$address' , phone='$phone' WHERE username = '$user'";
if ($conn->query($sql_update_pass)) {
    if ($conn->query($sql_update_cus)) {
        echo "success";
    }
} else {
    echo "fail";
}

?>