<?php
    require 'DBConnect.php';

    $action = $_GET['action'];
    $id = $_GET['id'];

    $date =date('Y-m-d H:i:s');

    if($action == 'accept'){
        $sql = "UPDATE bill SET status = 'done' , process_date='$date' WHERE id = $id";
    }

    if($action == 'destroy'){
        $sql = "UPDATE bill SET status = 'destroy' , process_date='$date' WHERE id = $id";
    }

    if($conn->query($sql)){
        echo 1;
    }
    else{
        echo 0;
    }

?>