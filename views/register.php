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

    <style>
        body {
            padding-top:0px;
        }
        fieldset {
            border: thin solid #ccc;
            border-radius: 4px;
            padding: 20px;
            padding-left: 40px;
            background: #fbfbfb;
        }
        legend {
            color: #678;
        }
        .form-control {
            width: 95%;
        }
        label small {
            color: #678 !important;
        }
        span.req {
            color:maroon;
            font-size: 112%;
        }
        .btn {
            margin-right: 20px;
        }
    </style>
</head>
<body>


<div class="section">

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                    <fieldset>

                    <form >
                        <legend class="text-center">REGISTER<span class="req"><small> required *</small></span></legend>
                        <div class="form-group">
                            <label for="name"><span class="req">* </span> Họ Tên: </label>
                            <input class="form-control" type="text"  name="name" id = "name" required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="birthday"><span class="req">* </span> Ngày Sinh: </label>
                            <input class="form-control" type="date"  id = "birthday" name="birthday" required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Địa Chỉ: </label>
                            <input class="form-control" required type="text" name="address" id = "address"  />
                            <div class="status" id="status"></div>
                        </div>


                        <div class="form-group">
                            <label for="phonenumber"><span class="req">* </span> Số Điện Thoại: </label>
                            <input required type="text" id="phonenumber" name="phonenumber" class="form-control phone" maxlength="28" ;"/>
                            <span id="msgphone" class="confirmMessage"></span>
                        </div>

                        <div class="form-group">
                            <label for="username"><span class="req">* </span> Tên Tài Khoản:  </label>
                            <input class="form-control" type="text" id = "username"  name="username" required />
                            <div id="errLast"></div>
                        </div>

                        <div class="form-group">
                            <label for="password"><span class="req">* </span> Mật Khẩu: </label>
                            <input required  type="password" class="form-control inputpass"  id="password" name="password"/>
                        </div>

                        <div class="form-group">
                            <label for="password2"><span class="req">* </span> Xác Nhận Mật Khẩu: </label>
                            <input required  type="password" class="form-control inputpass"   id="password2" name="password2" onkeyup="checkPass(); return false;"/>
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>


                        <div class="form-group text-center">
                        <button class="btn btn-success"  id="btnRegister"  onclick="register()">Đăng ký</button>
                        <button class="btn btn-success"  id="btnCancel"  onclick="cancel()">Hủy</button>
                        </div>

                    </form>

                    </fieldset>



            </div><!-- ends col-6 -->



        </div>
    </div>
</div><!--/section-->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/register.js"></script>
</body>
</html>