<?php require 'header.php' ?>;

<?php

if(isset($_SESSION['username'])){
    if(isset($_GET['action']) && $_GET['action'] == 'add'){
        $id = $_GET['id'];
        $name = $_GET['name'];
        $price = $_GET['price'];

        //Neu da co san pham nay trong gio hang, tang so luong len 1
        if(isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id]['quantity']++;
        }
        else{
            $_SESSION['cart'][$id] = array(
                "name"  => $name,
                "quantity" => 1,
                "price" => $price
            );
        }


    }
}
?>

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
                        <img src="../images/img1.png" alt="Los Angeles" style="width:100%;height: 400px;">
                    </div>

                    <div class="item">
                        <img src="../images/img2.png" alt="Chicago" style="width:100%;height: 400px;">
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
                   <a href="" class="list-group-item" style="padding-left: 40px;">ÁO</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">VÁY</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">THUN NỈ</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">TRANG PHỤC ĐÔNG</a>
               </div>

               <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>THỜI TRANG NAM  <span class="caret"></span></b></a>
               <div class="collapse" id="demo2">
                   <a href="" class="list-group-item" style="padding-left: 40px;">ÁO SƠ MI</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">ÁO KHOÁC & VEST</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">QUẦN</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">ÁO LEN</a>
               </div>

               <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>TÚI SÁCH  <span class="caret"></span></b></a>
               <div class="collapse" id="demo3">
                   <a href="" class="list-group-item" style="padding-left: 40px;">TÚI XÁCH NỮ</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">TÚI ĐEO CHÉO NỮ</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">BALO THỜI TRANG</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">PHỤ KIỆN TÚI VÍ</a>
               </div>

               <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" ><b>THỂ THAO & DU LỊCH  <span class="caret"></span></b></a>
               <div class="collapse" id="demo4">
                   <a href="" class="list-group-item" style="padding-left: 40px;">BALO</a>
                   <a href="" class="list-group-item" style="padding-left: 40px;">DỤNG CỤ THỂ DỤC</a>

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
                   <div class="pagination" id="pagination">

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