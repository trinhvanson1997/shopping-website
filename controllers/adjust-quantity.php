<?php
session_start();

if($_GET['action'] == 'increase'){
	$id = $_GET['id'];
	$_SESSION['cart'][$id]['quantity']++;
}
else if($_GET['action'] == 'decrease'){
	$id = $_GET['id'];
	$_SESSION['cart'][$id]['quantity']--;
}

/*echo "<pre>";
print_r($_SESSION['cart']);
echo "<pre>";*/

echo 1;


?>