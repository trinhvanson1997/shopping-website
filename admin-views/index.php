
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" media="screen" type="text/css" href="../public/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>ĐĂNG NHẬP</title>
</head>
<body>
<div class="section">
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h1>ĐĂNG NHẬP</h1>
                    </div>
                    <div class="panel-body">
                        <form action="" method="post" role="form" id="form-login">
                            <div id="errors">

                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control" name="username" id="username"
                                       placeholder="Tài Khoản">
                            </div>
                            <div class="form-group">

                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Mật Khẩu">
                            </div>
                            <div class="remember-pass">
                                <span><input type="checkbox" id="remember" checked></span>
                                <span><label>Nhớ mật khẩu</label></span>
                            </div>


                                    <button class="btn btn-primary btn-block" id="btnLogin" onclick="checkLogin()">ĐĂNG NHẬP</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/login_process.js"></script>
</body>
</html>