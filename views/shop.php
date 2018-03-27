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
        .myStyle {
            display: none;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        header {
            background-color: lavender;
        }
       body {
           background-color: while ;
       }

        footer {
            background-color: white;
        }
    </style>

</head>
<body>

<header>
    <div class="header-top">
        <div class="container-fluid" style="background-color: #F0F0E9">
            <div class="row">
                <div class="col-md-3">
                    <a href="#"><img src="../images/logo.png
                                     style="width: 300px; height: 50px;"></a>
                </div>
                <div class="col-md-6">

                    <div class="input-group" style="margin: 10px 0px 20px 100px;"
                         style="float: right">
                        <input type="text" class="form-control"> <span
                                class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
							</span>
                    </div>

                </div>
                <div class="col-md-3" style="float: right">
                    <ul class="nav navbar-nav">
                        <li><a href="">Giỏ hàng</a></li>
                        <li><a href="">Đăng nhập</a></li>


                    </ul>
                </div>

            </div>

        </div>
    </div>
    <div class="header-bottom">

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
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <img class="mySlides" src="../source%20image/hic.jpg"
                         style="width: 60%"> <img class="mySlides"
                                                  src="../source%20image/Khai-tr_ng-2018-.jpg" style="width: 60%">
                    <img class="mySlides" src="../source%20image/S9-LEN-DOI_1_.jpg"
                         style="width: 60%"> <img class="mySlides"
                                                  src="../source%20image/y7-pro2.jpg" style="width: 60%">

                    <script>
                        var myIndex = 0;
                        carousel();

                        function carousel() {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            for (i = 0; i < x.length; i++) {
                                x[i].style.display = "none";
                            }
                            myIndex++;
                            if (myIndex > x.length) {myIndex = 1}
                            x[myIndex-1].style.display = "block";
                            setTimeout(carousel, 3000); // Change image every 3 seconds
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>

</header>
<hr>
<!-- BODYYYYYYYYYYYYYYYY-->
<section class="section">
    <div class="row">
       <div class="col-md-2">
           <div class="left-sidebar">
               <div class="wrap">
                   <div class="container">
                       <div class="side-bar" style="width: 280px;">
                           <div class="box-left-wrap visible-lg-block" id="boxleft-wrap">
                               <div class="panel-group box-left" id="boxleft" role="tablist"
                                    aria-multiselectable="true">

                                   <div class="panel panel-info">
                                       <div class="panel-heading" role="tab" id="heading-price">
                                           <h4 class="panel-title">
                                               <a class="accordion-toggle" data-toggle="collapse"
                                                  data-parent="#boxleft" href="#collapse-price"
                                                  aria-expanded="true" aria-controls="collapse-price"> Giá </a>
                                           </h4>
                                       </div>
                                       <div id="collapse-price" class="panel-collapse collapse in"
                                            role="tabpanel" aria-labelledby="heading-price">
                                           <div class="list-group">
                                               <div class="list-group-item">
                                                   <a rel="nofollow" href="" class="list-group-item">0&nbsp;þ
                                                       - 10.000.000&nbsp;þ <span>(153)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=10000000%252C20000000"
                                                      class="list-group-item">10.000.000&nbsp;þ -
                                                       20.000.000&nbsp;þ <span>(82)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=20000000%252C30000000"
                                                      class="list-group-item">20.000.000&nbsp;þ -
                                                       30.000.000&nbsp;þ <span>(19)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=30000000%252C40000000"
                                                      class="list-group-item">30.000.000&nbsp;þ -
                                                       40.000.000&nbsp;þ <span>(5)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=40000000%252C50000000"
                                                      class="list-group-item">40.000.000&nbsp;þ -
                                                       50.000.000&nbsp;þ <span>(6)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=50000000%252C60000000"
                                                      class="list-group-item">50.000.000&nbsp;þ -
                                                       60.000.000&nbsp;þ <span>(2)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=60000000%252C70000000"
                                                      class="list-group-item">60.000.000&nbsp;þ -
                                                       70.000.000&nbsp;þ <span>(7)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=70000000%252C80000000"
                                                      class="list-group-item">70.000.000&nbsp;þ -
                                                       80.000.000&nbsp;þ <span>(1)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=80000000%252C90000000"
                                                      class="list-group-item">80.000.000&nbsp;þ -
                                                       90.000.000&nbsp;þ <span>(1)</span>
                                                   </a>
                                               </div>

                                               <div class="list-group-item">
                                                   <a rel="nofollow"
                                                      href="/tivi-thiet-bi-nghe-nhin/c4221?src=mega-menu&amp;price=160000000%252C170000000"
                                                      class="list-group-item">160.000.000&nbsp;þ -
                                                       170.000.000&nbsp;þ <span>(1)</span>
                                                   </a>
                                               </div>

                                           </div>

                                           <div class="slider-wrap">
                                               <p class="slider-title">Ho?c ch?n giá khác</p>
                                               <div class="slider slider-horizontal" id="">
                                                   <div class="slider-track">
                                                       <div class="slider-track-low"
                                                            style="left: 0px; width: 0%;"></div>
                                                       <div class="slider-selection"
                                                            style="left: 0%; width: 100%;"></div>
                                                       <div class="slider-track-high"
                                                            style="right: 0px; width: 0%;"></div>
                                                   </div>
                                                   <div class="tooltip tooltip-main top hide"
                                                        role="presentation" style="left: 50%; margin-left: 0px;">
                                                       <div class="tooltip-arrow"></div>
                                                       <div class="tooltip-inner">109.000 ð ð?n 169.299.000 ð</div>
                                                   </div>
                                                   <div class="tooltip tooltip-min top hide"
                                                        role="presentation" style="left: 0%; margin-left: 0px;">
                                                       <div class="tooltip-arrow"></div>
                                                       <div class="tooltip-inner">109.000 ð</div>
                                                   </div>
                                                   <div class="tooltip tooltip-max top hide"
                                                        role="presentation" style="left: 100%; margin-left: 0px;">
                                                       <div class="tooltip-arrow"></div>
                                                       <div class="tooltip-inner">169.299.000 ð</div>
                                                   </div>
                                                   <div class="slider-handle min-slider-handle round"
                                                        role="slider" aria-valuemin="109000"
                                                        aria-valuemax="169299000" aria-valuenow="109000"
                                                        aria-valuetext="109.000 ð" tabindex="0" style="left: 0%;"></div>
                                                   <div class="slider-handle max-slider-handle round"
                                                        role="slider" aria-valuemin="109000"
                                                        aria-valuemax="169299000" aria-valuenow="169299000"
                                                        aria-valuetext="169.299.000 ð" tabindex="0"
                                                        style="left: 100%;"></div>
                                               </div>
                                               <input id="price-slider" type="text"
                                                      value="109000,169299000" data-slider-min="109000"
                                                      data-slider-max="169299000" data-slider-step="100"
                                                      data-slider-value="[109000,169299000]"
                                                      style="display: none;" data-value="109000,169299000">
                                               <!-- <p class="slider-title">
                                                   <span>109.000 þ</span>
                                                   <span>169.299.000 þ</span>
                                               </p> -->
                                               <input class="slide-input slide-from" value="109000"> <span>-</span>
                                               <input class="slide-input slide-to" value="169299000">
                                           </div>

                                       </div>
                                   </div>





                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

        <!-- SHOW PRODUCTS -->
        <div class="col-md-8 col-md-offset-1">
            <div class="row" >
                <div class="list-product" id="list-product">



                </div>
            </div>
        </div>
    </div>
</section>
<footer>
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
</footer>

<script src="../public/js/show_list_product.js">

</script>
</body>
</html>