<?php
require 'header.php';
 if(isset($_SESSION['username'])){
        if (count($_SESSION['cart']) == 0) {

        showMessage();
        }
        else showTableCart();
    }
    else {

        echo "<html><script>alert('Bạn cần đăng nhập để xem giỏ hàng');</script></html>";
        echo "<script>window.location = 'index.php'</script>";
    }
?>

<?php
function showTableCart()
{
    echo '</head>

<section>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-12 text-center" >
            <h1 style="font-size: 65px;color:orange;">Cart</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-hover table-bordered text-center" id="tableCart">
                <thead>
                <tr>
                    <th>
                        ID
                    </th>
                    <th>
                        Tên sản phẩm
                    </th>
                    <th>
                        Đơn giá
                    </th>
                    <th>
                        Số lượng
                    </th>
                    <th>
                        Tạm tính
                    </th>
                    <th colspan="" rowspan="" headers="" scope="">
                    </th>
                </tr>
                </thead>
                <tbody>

                ';
    $total = 0;
    $row = 1;
    $col = 4;

    foreach ($_SESSION['cart'] as $id => $value) {
        $temp = intval($value['price']) * intval($value['quantity']);

        echo '
                        <tr>
                    <td>' . $id . '</td>
                    <td>' . $value['name'] . '</td>
                    <td>' . number_format($value['price']) . ' VNĐ</td>
                    <td><div>
                        <button class="btn btn-default" onclick="decrease('.$row.','.$col.','.$value["inventory"].','.$value["price"].')"  id = "btnDec'.$row.'"><b>-</b></button>
                        <input class="text-center" type="text" value="' . $value['quantity'] . '" size="3" id="inputText'.$row.'" disabled>
                        <button class="btn btn-default" onclick="increase('.$row.','.$col.','.$value["inventory"].','.$value["price"].')"  id = "btnInc'.$row.'"><b>+</b></button>
                        </div>
                    </td>
                    <td>' . number_format($temp) . ' VNĐ</td>
                    <td><label class="label label-danger"><a href="../controllers/cart-process.php?action=delete&id=' . $id . '" style="color:white; text-decaration: none">Remove</a></label></td>
                </tr>
                        ';
        $total += $temp;

        $row++;
    }
    echo '

                </tbody>
            </table>

            <div class="col-md-4 col-md-offset-8"><span><h3>TỔNG TIỀN: <span id="totalMoney">' . number_format($total) . '</span> VNĐ</h3></span></div>
        </div>

        <div class="col-md-2">
            <button  class="btn btn-primary"><a href="index.php"  style="color:white; text-decaration: none">Tiếp tục mua hàng</a></button>
        </div>

        <div class="1 col-md-offset-1">
            <button class="btn btn-primary" onclick="checkout()">Thanh toán</button>
        </div>
        </div>
    </div>
</section>

</body>
<script>
   username = \''.$_SESSION['username'].'\' ;
   cart = '. json_encode($_SESSION['cart']) .';
</script>

<script src="../public/js/cart.js"></script>
</html>';
}


?>


<?php
function showMessage()
{
    echo '</head>

<section>
    <div class="container" style="margin-top: 50px;color:orange">
        <h1>Rỏ hàng rỗng</h1>
        <div>
       <button  class="btn btn-primary"><a href="index.php"  style="color:white; text-decaration: none">Quay lại</a></button>
    </div>
    </div>
    
</section>

</body>
</html>';
}

?>
