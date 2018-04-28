<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'shop';

$conn = new mysqli($host, $user, $pass, $db_name);

$conn->set_charset("UTF-8");

$conn->query("SET NAMES utf8");

/*$result = $conn->query("SELECT * FROM account;");

while (($row = $result->fetch_assoc()) != null){
    echo "<br>" . $row['username'] . " - " .$row['password'];
}*/


?>