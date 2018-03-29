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
                        <a class="navbar-brand" href="#">BK Shop</a>
                    </div>
                    <center>
                        <div class="navbar-collapse collapse" id="navbar-main">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#home">HOME</a>
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
                                    echo '  <div class="nav navbar-right" style="margin-right: 10px;">

                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="line-height: 50px;color: #777;text-decoration: none;">
                                    Xin chào, '. $_SESSION['username'] .' <span class="caret"></span></a>
                                <ul class="dropdown-menu" >
                                    <li>  <a href="change_info.php" >Tài khoản</a></li>
                                    <li><a href="" >Giỏ hàng</a></li>
                                    <li><a href="" >Thoát</a></li>
                                </ul>
                            </div>

                        </div>';
                                }
                                ?>



                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
 <!-- CREATE BANNER SLIDESHOW -->
    <div class="header-middle" id="banner" style="margin-top: 55px;">
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active" >
                        <img src="../images/la.jpg" alt="Los Angeles" style="width:100%;height: 400px;">
                    </div>

                    <div class="item">
                        <img src="../images/chicago.jpg" alt="Chicago" style="width:100%;height: 400px;">
                    </div>

                    <div class="item">
                        <img src="../images/ny.jpg" alt="New york" style="width:100%;height: 400px;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>

</header>
<hr>
<!-- BODYYYYYYYYYYYYYYYY-->
<div class="container" style="padding-bottom: 20px;">
    <p class="modal-title text-center" style="color:orange; font-size: 30px; font-family: 'Roboto', sans-serif" id="products">PRODUCTS</p>
</div>
<section class="section" >
   <div class="container"style="background-color: #b2bec3">
       <div class="row"  style="margin-top: 20px">
            <!-- create menu sidebar -->

           <div class=" list-group col-md-3 " style="padding-left: 15px;">
               <div class="list-group-item  text-center " style="background-color: #428bca;color:white;">DANH MỤC SẢN PHẨM</div>

               <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>THỜI TRANG NỮ  <span class="caret"></span></b></a>
               <div class="collapse" id="demo1">
                   <a href="" class="list-group-item">ÁO</a>
                   <a href="" class="list-group-item">VÁY</a>
                   <a href="" class="list-group-item">THUN NỈ</a>
                   <a href="" class="list-group-item">TRANG PHỤC ĐÔNG</a>
               </div>

               <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>THỜI TRANG NAM  <span class="caret"></span></b></a>
               <div class="collapse" id="demo2">
                   <a href="" class="list-group-item">ÁO SƠ MI</a>
                   <a href="" class="list-group-item">ÁO KHOÁC & VEST</a>
                   <a href="" class="list-group-item">QUẦN</a>
                   <a href="" class="list-group-item">ÁO LEN</a>
               </div>

               <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>TÚI SÁCH  <span class="caret"></span></b></a>
               <div class="collapse" id="demo3">
                   <a href="" class="list-group-item">TÚI XÁCH NỮ</a>
                   <a href="" class="list-group-item">TÚI ĐEO CHÉO NỮ</a>
                   <a href="" class="list-group-item">BALO THỜI TRANG</a>
                   <a href="" class="list-group-item">PHỤ KIỆN TÚI VÍ</a>
               </div>

               <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>THỂ THAO & DU LỊCH  <span class="caret"></span></b></a>
               <div class="collapse" id="demo4">
                   <a href="" class="list-group-item">BALO</a>
                   <a href="" class="list-group-item">DỤNG CỤ THỂ DỤC</a>

               </div>
           </div>
           <!-- SHOW PRODUCTS -->
           <div class="col-md-9 ">
               <div class="row" >
                   <div class="list-product" id="list-product">



                   </div>
               </div>

                <!-- create pagination -->
               <div class="text-center">
                   <div class="pagination" >
                       <a href="#">&laquo;</a>
                       <a href="#">1</a>
                       <a href="#" class="active">2</a>
                       <a href="#">3</a>
                       <a href="#">4</a>
                       <a href="#">5</a>
                       <a href="#">6</a>
                       <a href="#">&raquo;</a>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>


<hr>
<div class="container" style="padding-bottom: 20px;">
    <p class="modal-title text-center" style="color:orange; font-size: 30px; font-family: 'Roboto', sans-serif" id="products">LOCATION</p>
</div>
<footer>
    <!-- create maps -->
  <div class="container" id="location">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="google-map">
                  <div id="googleMap" style="height: 400px; width: 100%;"></div>

                  Add Google Map
                  <script>
                      function initMap() {
                          var uluru = {lat: 21.0089137, lng: 105.8562802};
                          var map = new google.maps.Map(document.getElementById("googleMap"), {
                              zoom: 100,
                              center: uluru,
                              zoom: 16
                          });
                          var marker = new google.maps.Marker({
                              position: uluru,
                              map: map
                          });
                      }
                  </script>
                  <script async defer
                          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbkOBi-458tGiaTCpyZmddDXrPv6klvBc&callback=initMap">
                  </script>
              </div>
          </div>
      </div>
  </div>

    <!-- create footer -->
    <div class="nav navbar-default">
        <div class="container  ">
            <div class="navbar-text navbar-right">
                &copy; Copyright 2018, Hanoi University Of Science And Technology
            </div>
        </div>
    </div>
</footer>

<script src="../public/js/show_list_product.js"></script>
<script src="../public/js/login_index.js"></script>
</body>
</html>