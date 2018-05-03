<?php 

require_once 'DBConnect.php';

$arr = [];
$sql = "SELECT DATE_FORMAT(buy_date, '%Y-%m-%d') AS x, SUM(total) AS y FROM bill GROUP BY DATE_FORMAT(buy_date, '%Y-%m-%d');";

$rs = $conn->query($sql);
while (($row = $rs->fetch_assoc()) != null) {
    $a = $row["x"];
    $row["x"] = strtotime($a)*1000;
    array_push($arr, $row);

}
?>