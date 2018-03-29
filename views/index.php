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


    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/css/prettyPhoto.css" rel="stylesheet">
    <link href="../bootstrap/css/price-range.css" rel="stylesheet">
    <link href="../bootstrap/css/animate.css" rel="stylesheet">
    <link href="../bootstrap/css/main.css" rel="stylesheet">
    <link href="../bootstrap/css/responsive.css" rel="stylesheet">
    <link href="../bootstrap/css/pagination.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="images/ico/apple-touch-icon-57-precomposed.png">


    <style>


    /*    header {
            background-color: lavender;
        }*/
    /*   body {
           background-color: white ;
           background-image: url("../images/background.jpg");
           background-repeat: repeat;
       }*/

  /*      footer {
            background-color: white;
        }*/
    </style>

</head>
<body>

<header>
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
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-default">Login</button>
                            <span>Or</span>
                            <button type="button" class="btn btn-default" ><a href="register.php" style="color:black ;">Register</a></button>
                        </form>

                    </div>
                </center>
            </div>
        </div>
    </div>
  <!--  <div class="header-bottom">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="container-fluid">
                    <nav class="nav navbar-default">
                        <div class="nav navbar-header">
                            <a class="navbar-brand href="#" >HOME</a>
                        </div>
                        <div class="collapse navbar-collapse" id="#myNavbar">
                            <ul class="nav navbar-nav">

                                <li class="dropdown"><a class="dropdown-toggle"
                                                        data-toggle="dropdown" href="#">Áo nam <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="https://google.com.vn">Áo cộc tay</a></li>
                                        <li><a href="#">Áo sơ mi</a></li>
                                        <li><a href="#">Áo len</a></li>
                                    </ul></li>

                                <li class="dropdown"><a class="dropdown-toggle"
                                                        data-toggle="dropdown" href="#">Áo nữ <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a
                                                    href="https://vui69.net/hinh-nen-girl-xinh/m/bikini-xinh/b/bo-anh-girl-xinh-bikini-cung-voi-duong-cong-nong-bong.html">Bikini</a></li>
                                        <li><a href="#">Áo dài</a></li>
                                        <li><a href="#">Áo mưa</a></li>
                                    </ul></li>
                                <li class="dropdown"><a class="dropdown-toggle"
                                                        data-toggle="dropdown" href="#">Quần nam <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Quần âu</a></li>
                                        <li><a href="#">Quần jean</a></li>
                                        <li><a href="#">Quần chun</a></li>
                                    </ul></li>
                                <li class="dropdown"><a class="dropdown-toggle"
                                                        data-toggle="dropdown" href="#">Quần nữ <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Quần ren</a></li>
                                        <li><a href="#">Quần ngắn 10cm</a></li>
                                        <li><a href="#">Quần váy ngắn</a></li>
                                    </ul></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>-->

    <!-- CREATE BANNER SLIDESHOW -->
    <div class="header-middle" id="banner">
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
<section class="section">
   <div class="container" >
       <div class="row">
            <!-- create menu sidebar -->
           <div class="col-md-3 sidebar-offcanvas" id="sidebar">
               <ul class="list-group">
                   <li class="list-group-item active text-center " style="background-color: #428bca;color:white;">DANH MỤC SẢN PHẨM</li>
                   <a href="#" class="list-group-item">QUẦN NAM</a>
                   <a href="#" class="list-group-item">ÁO NAM</a>
                   <a href="#" class="list-group-item">QUẦN NỮ</a>
                   <a href="#" class="list-group-item">ÁO NỮ</a>

               </ul>
           </div><!--/.sidebar-offcanvas-->

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
</footer>

<script src="../public/js/show_list_product.js">

</script>
</body>
</html>