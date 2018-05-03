<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <!-- Latest compiled and minified CSS & JS -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" media="screen"
          href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../bootstrap/css/main.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/css/prettyPhoto.css" rel="stylesheet">
    <link href="../bootstrap/css/price-range.css" rel="stylesheet">
    <link href="../bootstrap/css/animate.css" rel="stylesheet">

    <link href="../bootstrap/css/responsive.css" rel="stylesheet">
    <link href="../bootstrap/css/pagination.css" rel="stylesheet">


    <style>

    </style>

</head>

<body>

<header>

    <div class="header_top" id="header-top">
        <div class="header-top" id="home">
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <p class="navbar-brand">BK Shop Admin</p>
                    </div>

                    <div class="navbar-collapse collapse" id="navbar-main">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="home.php">HOME</a>
                            </li>

                            <li><a href="admin-product.php">Sản phẩm</a>
                            </li>
                            <li><a href="admin-bill.php">Đơn hàng</a>
                            </li>

                            <li><a href="admin-customer.php">Khách hàng</a>
                            </li>
                            <li>
                                <a href="admin-employee.php">Nhân viên</a>
                            </li>


                        </ul>
                        <div class="nav navbar-right">
                            <a href="#" class="text-right" data-toggle="dropdown"
                               style="line-height: 50px;color: #777;text-decoration: none;">
                                Xin chào, <?php echo $_SESSION['name']; ?>  </a>
                            <i class="glyphicon glyphicon-user" title="Tài khoản" style="cursor: pointer; padding-left: 20px;padding-right:20px;font-size: 20px"
                               onclick="
                                    window.location = 'change_info_manager.php';
                                  "></i>
                            <i class="glyphicon glyphicon-log-out" title="Đăng xuất" style="cursor: pointer; padding-left: 10px; padding-right: 20px;font-size: 20px"
                               onclick="
                                    window.location = '../controllers/logout-admin.php';
                                  "></i>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>

<div class="container" style="margin-top: 50px;">
    <div class="col-md-12 text-left">
        <h1 style="color: orange; font-size: 30px">
            THỐNG KÊ
        </h1>
    </div>

    <div class="col-md-11 text-right" style="padding-bottom: 20px">
        <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top: 0px" onclick="window.location = 'chart.php'">
            <i class="fa fa-bar-chart-o"></i>
            BIỂU ĐỒ</button>
    </div>


    <div class="col-md-12">
        <table class="table table-hover table-bordered text-center" id="table-bills">
            <thead>
            <tr>
                <th class="text-center">Mã đơn hàng</th>
                <th class="text-center">Mã nhân viên xử lý</th>
                <th class="text-center">Mã khách hàng</th>
                <th class="text-center">Tổng tiền</th>
                <th class="text-center">Ngày mua hàng</th>
                <th class="text-center">Ngày xử lý đơn</th>
                <th class="text-center">Chi tiết đơn hàng</th>
            </tr>
            </thead>
            <tbody id="table_body">


            </tbody>
        </table>
    </div>
</div>

<script src="../public/js/show-table-statis.js"></script>

</body>
</html>
