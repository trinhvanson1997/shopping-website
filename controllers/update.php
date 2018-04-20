<?php
    require_once "DBConnect.php";

   if($_REQUEST['request'] == 'edit'){
       $user = $_REQUEST['user'];
       $pass = $_REQUEST['pass'];
       $name = $_REQUEST['name'];
       $birthday = $_REQUEST['birthday'];
       $phone = $_REQUEST['phone'];
       $address = $_REQUEST['address'];
       $salary = $_REQUEST['salary'];


       $sql_update = "UPDATE account SET password ='$pass' WHERE username='$user'";

       $sql_update2 = "UPDATE employee SET name = '$name', birthday ='$birthday', address ='$address', phone='$phone', salary = $salary WHERE username='$user'";
       if ($conn->query($sql_update) && $conn->query($sql_update2)) {
           header("https://google.com");
           echo "success";
       }else{
           echo "update ko thanh cong";
       }
   }


if ($_REQUEST['request'] == "delete") {
       $username = $_REQUEST['username'];
    $sql1 = "UPDATE account SET status='deleted' WHERE username = '$username';";


    if ($conn->query($sql1)) {

        echo 1;

    } else {
        echo 0;
    }
}

   
?>