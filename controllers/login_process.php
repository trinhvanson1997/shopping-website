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
    $_SESSION["sess_username"] = $row['username'];
    $_SESSION["sess_position"] = $row['position'];
    $position = $row['position'];
    $status = $row['status'];


    $arr = array("res" => "correct", "position" => $position, "status" => $status);
    $file = json_encode($arr);
    echo $file;
    /* $sql_get_name = "SELECT name FROM account WHERE username = '".$username."'";
     $rs = mysqli_query($conn, $sql_get_name);
     $row_name = mysqli_fetch_row($rs);
     $_SESSION["sess_name"] = $row_name[0];*/

} else {
    $arr = array("res" => "incorrect", "position" => "", "status" => "");
    $file = json_encode($arr);
    echo $file;

}
?>