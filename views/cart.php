<?php require 'header.php' ?>

</head>

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

                <?php
                    $total = 0;

                    foreach($_SESSION['cart'] as $id => $value){
                        $temp = intval($value['price']) * intval($value['quantity']);

                        echo '
                        <tr>
                    <td>'. $id .'</td>
                    <td>'. $value['name'] .'</td>
                    <td>'. number_format($value['price']) .' VNĐ</td>
                    <td><input class="text-center" type="text" value="'. $value['quantity'] .'" size="3"></td>
                    <td>'. number_format($temp) .' VNĐ</td>
                </tr>
                        ';
                        $total += $temp;
                    }

                ?>

                </tbody>
            </table>

            <div class="col-md-12"><span><h1>TỔNG TIỀN: <?php echo number_format($total). ' VNĐ'; ?></h1></span></div>
        </div>
    </div>
</section>

</body>
</html>
