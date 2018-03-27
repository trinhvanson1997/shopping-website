<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../public/css/register.css">
    <title>ĐĂNG KÝ</title>
</head>
<body>


<div class="section">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>ĐĂNG KÝ</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="post" role="form">

                        <div id="errors">

                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" name="" id="name" placeholder="Họ Tên">
                        </div>
                        <div class="form-group">

                            <input type="date" class="form-control" name="" id="birthday"
                                   placeholder="Ngày Sinh">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" name="" id="address"
                                   placeholder="Địa Chỉ">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" name="" id="phone"
                                   placeholder="Số Điện Thoại">
                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="" id="username"
                                   placeholder="Tên Tài Khoản">
                        </div>
                        <div class="form-group">

                            <input type="password" class="form-control" name="" id="password"
                                   placeholder="Mật Khẩu">
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" id="btnRegister">ĐĂNG KÝ</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" id="btnCancel">HỦY</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--/section-->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/register.js"></script>
</body>
</html>