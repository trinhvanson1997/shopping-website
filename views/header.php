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

    <link rel="stylesheet" href="../public/css/detail_product.css" >



    <style>

    </style>

</head>

<body>

<header>

    <div class="header_top" id="header-top">
        <div class="header-top" id="home">
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" style="font-size: 35px;">BK Shop</a>
                    </div>
                    <center>
                        <div class="navbar-collapse collapse" id="navbar-main">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">HOME</a>
                                </li>

                                <li><a href="index.php#products">Products</a>
                                </li>
                                <li><a href="index.php#location">Locate</a>
                                </li>

                            </ul>




                                <?php
                                if(empty($_SESSION['username'])){
                                    echo '<form class="navbar-form navbar-right" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <button  class="btn btn-default" onclick="checkLogin()" >Login</button>
                                    <span>Or</span>
                                    <button  class="btn btn-default" ><a href="register.php" style="color:black ;text-decoration: none;">Register</a></button>
                                </form>
                            </div>';
                                }

                                   else{
                                       echo '  <div class="nav navbar-nav navbar-right">
                                                    <div class="dropdown">
                                                    <a href="cart.php" style="padding-right: 20px;" title="Xem giỏ hàng"><span><i class="fa fa-shopping-cart" style="font-size: 30px; color:orange;" ></i></span></a>
                                           
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                                                style="line-height: 50px;color: #777;text-decoration: none;font-size: 17px;">
                                                    Xin chào, '. $_SESSION['name'] .' <span class="caret"></span></a>
                                                <ul class="dropdown-menu" >
                                                    <li>  <a href="change_info.php" >Tài khoản</a></li>
                                                  
                                                    <li><a href="history.php" >Lịch sử </a></li>
                                                   
                                                    <li><a href="../controllers/logout.php" >Đăng xuất</a></li>
                                                </ul>
                                            </div>
                
                                        </div>';
                                   }

                                ?>





                    </center>
                </div>
            </div>
        </div>
    </div>

<!--</header>
</body>-->