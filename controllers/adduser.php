<?php
    require_once "DBConnect.php";

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    $name = $_REQUEST['name'];
    $birthday = $_REQUEST['birthday'];
    $phone = $_REQUEST['phone'];
    $address = $_REQUEST['address'];
    $salary = $_REQUEST['salary'];
    
    $sql_check_username = "SELECT username FROM account WHERE username = '" . $user . "' ";
    $rs1 = $conn->query($sql_check_username);
    
    if ($rs1->num_rows > 0) {
        echo "username existed";
    } else {
        $sql_insert = "INSERT INTO account VALUES ('$user','$pass','employee','active')";
    
        $sql_insert2 = "INSERT INTO employee VALUES (null,'$name','$birthday', '$address','$phone','$salary','$user')";
        if ($conn->query($sql_insert) && $conn->query($sql_insert2)) {
            header("https://google.com");
            echo "success";
        }
    }
?>