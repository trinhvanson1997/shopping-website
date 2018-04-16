<?php
	session_start();
	require "DBConnect.php";

date_default_timezone_set("Asia/Bangkok");

	$username = $_SESSION['username'];
	$cart = $_SESSION['cart'];
	$idCus = $_SESSION['id'];

	$curDate = date('Y-m-d H:i:s');

//tính tổng số tiền cần thanh toán
	$total  = 0;

	foreach ($_SESSION['cart'] as $id => $value) {
        $temp = intval($value['price']) * intval($value['quantity']);

        $total += $temp;

    }
//thêm đơn hàng vào bảng bill với trạng thái đang chờ xử lý
	$sql = "INSERT INTO bill VALUES (null, 1 , $idCus, $total,'$curDate ', null, 'processing')";
	$conn->query($sql);

//lấy ra id của đơn hàng vừa thêm
	$sql = "SELECT max(id) FROM bill  ";
	$rs = $conn->query($sql);
	$row = $rs->fetch_assoc();
	$bill_id = $row['max(id)'];

//thêm chi tiết đơn hàng vào bảng bill_detail đồng thời cập nhật số lượng sản phẩm
	foreach ($_SESSION['cart'] as $id => $value) {
        
	$sql = "INSERT INTO bill_detail VALUES (".$bill_id.", ".$id.", ".$value['quantity'].");";
	$conn->query($sql);

	$newValue = $value['inventory'] - $value['quantity'];

	$sql = "UPDATE product SET inventory = $newValue WHERE id = $id";
	$conn->query($sql);
    }

    //cho cart về trạng thái rỗng
	unset($_SESSION['cart']);
	$_SESSION['cart'] =Array();

	
    echo 1;

	?>
