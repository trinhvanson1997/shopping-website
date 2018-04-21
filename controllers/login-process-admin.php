<?php
session_start();
require_once("DBConnect.php");


$username = $_REQUEST["username"];
$password = $_REQUEST["password"];

/*$username = 'son';
$password = 'son';*/

$sql = "SELECT * FROM account WHERE username = '" . $username . "' AND password = '" . $password . "';";
$result = $conn->query($sql);


if (!$result) {
    die("Cannot execute query");
}

if ($result->num_rows > 0) {
    //if account is correct, nagative to homepage and save $session value

    $row = $result->fetch_assoc();

    $_SESSION['position'] = $row['position'];


    $position = $row['position'];
    $status = $row['status'];

    $sql = "SELECT * FROM employee WHERE username = '" . $username . "' ;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['username'] = $username;

        $arr = array("username" => $_SESSION['username'], "name" => $_SESSION['name'], "res" => "correct", "position" => $position, "status" => $status);
        $file = json_encode($arr);
        echo $file;
    } else {
        $arr = array("res" => "incorrect");
        $file = json_encode($arr);
        echo $file;
    }

} else {
    $arr = array("res" => "incorrect");
    $file = json_encode($arr);
    echo $file;

}
?>