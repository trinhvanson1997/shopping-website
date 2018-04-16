<?php
session_start();

if ($_GET['action'] == 'add') {
            $id = $_GET['id'];
            $name = $_GET['name'];
            $price = $_GET['price'];
            $inventory = $_GET['inventory'];

           if(isset($_SESSION['username'])){
           	 //Neu da co san pham nay trong gio hang, tang so luong len 1
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity']++;
            } else {
                $_SESSION['cart'][$id] = array(
                    "name" => $name,
                    "quantity" => 1,
                    "price" => $price,
                    "inventory" => $inventory
                );
            }
            echo 1;
           }
           else echo 0;
         
          
        } else if ($_GET['action'] == "delete") {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            echo "<script>window.location = '../views/cart.php'</script>";
       }

if($_GET['action'] == 'increase'){
	$id = $_GET['id'];
	$_SESSION['cart'][$id]['quantity']++;
	echo 1;
}
else if($_GET['action'] == 'decrease'){
	$id = $_GET['id'];
	$_SESSION['cart'][$id]['quantity']--;
	echo 1;
}

/*echo "<pre>";
print_r($_SESSION['cart']);
echo "<pre>";*/




?>