<?php require 'header.php';

    if (isset($_GET['action'])) {

        if (isset($_SESSION['username'])) {


            if ($_GET['action'] == 'add') {
                $id = $_GET['id'];
                $name = $_GET['name'];
                $price = $_GET['price'];

                //Neu da co san pham nay trong gio hang, tang so luong len 1
                if (isset($_SESSION['cart'][$id])) {
                    $_SESSION['cart'][$id]['quantity']++;
                } else {
                    $_SESSION['cart'][$id] = array(
                        "name" => $name,
                        "quantity" => 1,
                        "price" => $price
                    );
                }
//                echo "<pre>";
//                print_r($_SESSION);
//                echo "<pre>";
                showTableCart();
            } else if ($_GET['action'] == "delete") {
                $id = $_GET['id'];
                unset($_SESSION['cart'][$id]);
                if (count($_SESSION['cart']) == 0) {
                    showMessage();
                } else showTableCart();
            }


        } else {

            echo "<html><script>alert('Bạn cần đăng nhập để thêm sản phẩm vào giỏ');</script></html>";
            header('index.php');
        }
    }

?>

<?php
function showTableCart()
{
    echo '</head>

<section>
    <div class="container" style="margin-top: 50px;">
        <div class="col-md-12 text-center" >
            <h1 style="font-size: 65px;color:orange;">Cart</h1>
        </div>
        <div class="col-md-12">
            <table class="table table-hover table-bordered text-center">
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
                </tr>
                </thead>
                <tbody>

                ';
        $total = 0;

    foreach ($_SESSION['cart'] as $id => $value) {
        $temp = intval($value['price']) * intval($value['quantity']);

        echo '
                        <tr>
                    <td>' . $id . '</td>
                    <td>' . $value['name'] . '</td>
                    <td>' . number_format($value['price']) . ' VNĐ</td>
                    <td><input class="text-center" type="text" value="' . $value['quantity'] . '" size="3"></td>
                    <td>' . number_format($temp) . ' VNĐ</td>
                    <td><a href="cart.php?action=delete&id=' . $id . '">Remove</a></td>
                </tr>
                        ';
        $total += $temp;
    }
        echo '

                </tbody>
            </table>

            <div class="col-md-12"><span><h1>TỔNG TIỀN: '. number_format($total). ' VNĐ</h1></span></div>
        </div>
    </div>
</section>

</body>
</html>';
}

function showBodyTable()
{




}

?>


<?php
function showMessage()
{
    echo '</head>

<section>
    <div class="container" style="margin-top: 50px;">
        <h1>Ro hang rong</h1>
    </div>
</section>

</body>
</html>';
}

?>


