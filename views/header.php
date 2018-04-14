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

<body style="background: url("../images/chicago.jpg")">

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
                        <a class="navbar-brand" style="font-size: 35px;">BK Shop</a>
                    </div>
                    <center>
                        <div class="navbar-collapse collapse" id="navbar-main">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">HOME</a>
                                </li>

                                <li><a href="#products">Products</a>
                                </li>
                                <li><a href="#location">Locate</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">One more separated link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="top-right">
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
                                   if($_SESSION['position'] == 'manager'){
                                       echo '  <div class="nav navbar-right" style="margin-right: 10px;">

                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                                style="line-height: 50px;color: #777;text-decoration: none;">
                                    Xin chào, '. $_SESSION['username'] .' <span class="caret"></span></a>
                                <ul class="dropdown-menu" >
                                    <li>  <a href="change_info.php" >Tài khoản</a></li>
                                  
                                     <li><a href="view_waiting.php" >Duyệt tài khoản</a></li>
                                      <li><a href="view_customers.php" >Danh sách KH</a></li>
                                    <li><a href="#" >Thoát</a></li>
                                </ul>
                            </div>

                        </div>';
                                   }
                                   else{
                                       echo '  <div class="nav navbar-right">
                             
                                
                             
                            <div class="dropdown">
                           <span style="padding-right: 20px;line-height: 50px;"><i class="fa fa-shopping-cart" style="font-size: 30px; color:orange;" ></i></span>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" 
                                style="line-height: 50px;color: #777;text-decoration: none;font-size: 17px;">
                                    Xin chào, '. $_SESSION['username'] .' <span class="caret"></span></a>
                                <ul class="dropdown-menu" >
                                    <li>  <a href="change_info.php" >Tài khoản</a></li>
                                    <li><a href="cart.php" >Giỏ hàng</a></li>
                                   
                                    <li><a href="#" >Thoát</a></li>
                                </ul>
                            </div>

                        </div>';
                                   }
                                }
                                ?>



                            </div>
                    </center>
                </div>
            </div>
        </div>
    </div>

<!--</header>
</body>-->