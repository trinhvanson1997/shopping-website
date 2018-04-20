<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 18/04/2018
 * Time: 10:32
 */
require 'DBConnect.php';

if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'];
    $sql = "SELECT e.* FROM employee as e, account where e.username=account.username and 
      status='active';
  ";
    $rs = $conn->query($sql);

    $arr = [];

    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }

;

    $file = json_encode($arr);
    echo $file;
}

?>