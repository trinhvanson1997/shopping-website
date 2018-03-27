<?php
/**
 * Created by PhpStorm.
 * User: sontrinh
 * Date: 21/03/2018
 * Time: 19:55 PM
 */

require_once "DBConnect.php";

if (isset($_REQUEST['username']) && isset($_REQUEST['request'])) {
    $username = $_REQUEST['username'];
    $request = $_REQUEST['request'];
    $sql = "";
    if ($request == "accept" || $request == "unlock") {

        $sql = "UPDATE account SET status = 'active' WHERE username = '$username';";
    } else if ($request == "deny") {
        $sql = "UPDATE account SET status = 'deny' WHERE username = '$username';";
    } else if ($request == "lock") {
        $sql = "UPDATE account SET status = 'locked' WHERE username = '$username';";
    }
    if ($sql != "") {
        if ($conn->query($sql)) {
            echo 1;
        } else {
            echo 0;
        }
    }


    if ($request == "delete") {
        $sql1 = "DELETE FROM customer WHERE username = '$username';";
        $sql2 = "DELETE FROM account WHERE username = '$username';";

        if ($conn->query($sql1)) {
            if ($conn->query($sql2)) {
                echo 1;
            }
        } else {
            echo 0;
        }
    }

}

?>

