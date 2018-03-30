<?php
session_start();
echo var_dump($_SESSION);
unset($_SESSION['username']);
unset($_SESSION['cart']);
    session_destroy();

?>