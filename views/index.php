<?php require 'header.php' ?>;


<!-- CREATE BANNER SLIDESHOW -->
<div class="header-mid" id="banner" style="margin-top: 55px;">
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../images/img1.png">
                </div>

                <div class="item">
                    <img src="../images/img2.png">
                </div>

                <div class="item">
                    <img src="../images/img3.png">
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
    <p class="modal-title text-center" style="color:orange; font-size: 30px; font-family: 'Roboto', sans-serif"
       id="products">PRODUCTS</p>

</div>

<div class="container" style="padding-bottom: 20px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-6">
            <div class="input-group">

                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" class="form-control" name="x" placeholder="Tìm kiếm theo tên sản phẩm" id="searchBox">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="searchProducts()"><span
                                class="glyphicon glyphicon-search"></span></button>
                </span>
            </div>
        </div>
    </div>

</div>

<section class="section">
    <div class="container" style="background-color: #b2bec3">
        <div class="row" style="margin-top: 20px">
            <!-- create menu sidebar -->

            <div class=" list-group col-md-3 " style="padding-left: 15px;">
                <div class="row">

                    <!-- create menu product -->
                    <div class="col-md-12">
                        <div class="list-group-item  text-center " style="background-color: #428bca;color:white;">DANH
                            MỤC SẢN PHẨM
                        </div>

                        <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse"><b>THỜI
                                TRANG NỮ <span class="caret"></span></b></a>
                        <div class="collapse" id="demo1">
                            <a  class="list-group-item" style="padding-left: 40px; cursor: pointer;" onclick="getProductByType('ANU')">ÁO NỮ THỜI TRANG</a>
                            <a  class="list-group-item" style="padding-left: 40px;cursor: pointer;" onclick="getProductByType('QNU')">QUẦN VÀ VÁY NỮ</a>

                        </div>

                        <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse"><b>THỜI
                                TRANG NAM <span class="caret"></span></b></a>
                        <div class="collapse" id="demo2">
                            <a class="list-group-item" style="padding-left: 40px;cursor: pointer;" onclick="getProductByType('QNA')">QUẦN NAM THỜI TRANG</a>
                            <a class="list-group-item" style="padding-left: 40px;cursor: pointer;" onclick="getProductByType('ANA')">ÁO NAM CÁC LOẠI</a>

                        </div>

                        <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse"><b>TÚI
                                SÁCH <span class="caret"></span></b></a>
                        <div class="collapse" id="demo3">
                            <a  class="list-group-item" style="padding-left: 40px; cursor: pointer;">TÚI XÁCH NỮ</a>
                            <a class="list-group-item" style="padding-left: 40px; cursor: pointer;">TÚI ĐEO CHÉO NỮ</a>
                            <a  class="list-group-item" style="padding-left: 40px; cursor: pointer;">BALO THỜI TRANG</a>
                            <a  class="list-group-item" style="padding-left: 40px; cursor: pointer;">PHỤ KIỆN TÚI VÍ</a>
                        </div>

                        <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse"><b>THỂ
                                THAO & DU LỊCH <span class="caret"></span></b></a>
                        <div class="collapse" id="demo4">
                            <a  class="list-group-item" style="padding-left: 40px; cursor: pointer;">BALO</a>
                            <a  class="list-group-item" style="padding-left: 40px; cursor: pointer;">DỤNG CỤ THỂ DỤC</a>

                        </div>
                    </div>

                    <!-- create arrange checkbox -->
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="list-group-item   " style="background-color: #428bca;color:white;">SẮP
                            XẾP THEO
                        </div>
                        <div class="list-group-item">
                            <form action="" method="post" role="form">
                                <table style="width: 100%">
                                    <body>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="ascending" name="radio">
                                                    Giá tăng dần
                                                </label>
                                            </div>
                                        </td>
                                        <td rowspan="2" style="text-align: center">
                                            <button type="button" class="btn btn-primary" onclick="arrangeByPrice()">
                                                LỌC
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" id="descending" name="radio">
                                                    Giá giảm dần
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    </body>
                                </table>

                            </form>
                        </div>
                    </div>


                    <!-- create filter by price -->
                    <div class="col-md-12" style="margin-top: 20px;">
                        <div class="list-group-item   " style="background-color: #428bca;color:white;">TÌM THEO KHOẢNG
                            GIÁ
                        </div>
                        <div class="list-group-item">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="from" maxlength="10">
                                    <span> - </span>

                                    <input type="text" class="form-control" id="to" maxlength="10">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-primary" onclick="searchByPrice()">
                                        LỌC
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- SHOW PRODUCTS -->
            <div class="col-md-9 ">
                <div class="row">
                    <div class="list-product" id="list-product">


                    </div>
                </div>

                <!-- create pagination -->
                <div class="text-center">
                    <div class="pagination" id="pagination">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<hr>
<div class="container" style="padding-bottom: 20px;">
    <p class="modal-title text-center" style="color:orange; font-size: 30px; font-family: 'Roboto', sans-serif"
       id="products">LOCATION</p>
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

<?php include 'footer.php'; ?>
</html>