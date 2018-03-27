<?php include_once "head2.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HOME - Khách Hàng</title>
</head>
<body>


<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel panel-heading text-center">
                        <h3>DANH SÁCH KHÁCH HÀNG</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered " id="table_waiting">
                            <thead >
                            <tr ">
                                <th style="text-align: center;">ID</th>
                                <th style="text-align: center;">Họ Tên</th>
                                <th style="text-align: center;">Ngày Sinh</th>
                                <th style="text-align: center;">Địa Chỉ</th>
                                <th style="text-align: center;">SĐT</th>
                                <th style="text-align: center;">Tài Khoản</th>
                                <th style="text-align: center;">Trạng Thái</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="table_body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script src="../public/js/view_customers.js"></script>
</body>
</html>