<?php
    session_start();
    require 'DBConnect.php';

    $sql = "
        select p.id,p.name,p.sell_price,bd.amount,b.buy_date,b.status
        from product as p,bill as b, bill_detail as bd
        where p.id = bd.product_id and bd.bill_id = b.id and b.cus_id=". $_SESSION['id']."
    ";

    $rs = $conn->query($sql);

    $arr = [];
    while (($row = $rs->fetch_assoc()) != null) {
        array_push($arr, $row);

    }

    $file = json_encode($arr);
    echo $file;

?>