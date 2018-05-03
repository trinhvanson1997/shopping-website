					<?php include_once 'header.php' ?>
					<?php  
					if(isset($_GET['id']))
					{
						if(preg_match("/QNU/", $_GET['gender'])||preg_match("/ANU/", $_GET['gender'])) $gen = "Nữ";
						else $gen = "Nam";
					echo'
					<div class="container" style="padding-top:100px">
					    <div class="row">
					        <div class="col-md-12">
					            <div class="row" id="bg">
					                <div class="col-md-4">
					                    <img src="../images/'.$_GET['img'].'" id="pic" width="100%" style="padding-left: 5px";/>
					                </div>					                
					                <div class="col-md-8">
					                	<hr>
					                	    <h3>Sản phẩm chất lượng từ BK shop</h3>
					                	<hr>
					                    <div class="row" style="padding-left: 5px">
					                        <div class="col-xs-6 col-md-6">
					                            <ul class="pb-product-details-ul">
					                                <li><span class="fa fa-address-card">  Tên sản phẩm: '.$_GET['name'].'</span></li>
					                                <li><span class="fa fa-cut"> Size: '.$_GET['size'].'</span></li>
					                            
					                        

					                                
					                            </ul>
					                        </div>
					                        <div class="col-xs-6 col-md-6 pb-product-details-ul" id="col2">
					                        <ul class="pb-product-details-ul">
					                                <li><span class="fa fa-transgender">  Giới tính: '.$gen.'</span></li>
					                             
					                                  <li><span class="fa fa-paper-plane"> Thương hiệu: '.$_GET['brand'].'</span></li>
					                        </ul>
					                        </div>
					                    </div>
					                    <hr>
					                    <div class="row" style="padding-left: 5px;">
					                    	<div class="col-xs-6 col-md-6" id="col1">
					                    		<h3 style="color: orange; font-size: 30px" >Giá bán: '.number_format($_GET['price']).' VND</h3>
					                    	</div>
					                    	<div class="col-xs-6 col-md-6" id="col2">
					                    		<h3><button style="color: white ;font-size: 20px" class="btn btn-default add-to-cart"  onclick="addProduct('.$_GET['id'].', \''.$_GET['name'].'\', '.$_GET['price'].', '.$_GET['inventory'].')"  ><span class="fa fa-cart-plus"> ĐẶT HÀNG NGAY</span></button></h3>
					                    	</div>
					                    	<div class="col-xs-6 col-md-6 col-md-offset-6" id="col2">
					                    		<h3><button style="color: white;font-size: 18px" class="btn btn-default add-to-cart"  "  > <a href="index.php" style="color: white">TIẾP TỤC MUA HÀNG</a></button></h3>
					                    	</div>
					                	</div>
					                	<hr>
					                </div>
					            </div>
					            <hr>
					            <div class="text-bold text-bigger">THÔNG TIN CHI TIẾT</div>
					            <hr>
					            <div class="row">
					                    <div class="text-bold">
					                        <table class="table">
					                            <tbody class="td">
					                                <tr>
					                                    <td class="success">Tên sản phẩm</td>
					                                    <td class="name">'.$_GET['name'].'</td>
					                                </tr>
					                                <tr>
					                                    <td class="success">Giới tính</td>
					                                    <td class="gender">'.$gen.'</td>
					                                </tr>
					                                <tr>
					                                    <td class="success">Size</td>
					                                    <td class="size">'.$_GET['size'].'</td>
					                                </tr>
					                                <tr>
					                                    <td class="success">Thương hiệu</td>
					                                    <td class="brand">'.$_GET['brand'].'</td>
					                                </tr>
					                                <tr>
					                                    <td class="success">Giá bán</td>
					                                    <td class="price">'.number_format($_GET['price']).' VNĐ</td>
					                                </tr>
					                            
					                            </tbody>
					                        </table>
					                    </div>
					            </div>
					            <hr>
					            <div class="text-bold text-bigger">MÔ TẢ CHI TIẾT</div>
					            <div class="text-bold">
						            <hr>
						            '.$_GET['detail'].'
						            <hr>
					            </div>
					        </div>
					    </div>
					</div>
					</body>

					<style>
					    .pb-product-details-ul {
					        list-style-type: none;
					        padding-left: 0;
					        color: black;
					        padding-top: 5x;
					    }

					        .pb-product-details-ul > li {
					            font-size: 17px;
					        }

					    #bg {
					        background-color: white; 
					        border: 1px solid #f2f2f2;
					    }
					    .text-bold {
					    	font-weight: bold;
					    }
					    .text-bigger{
					    	font-size: 15px;
					    }
					    #col2 {
					        padding-left: 70px;
					    }
					    #col1{
					        padding-top: 7px;
					    }

					    .pb-product-details-fa > span {
					        padding-top: 20px;
					    }
					    .success{
					    	width: 15%;
					    }
					    .td > tr >td {
					    	border-style: ridge;
					    	border-width: 0.5px;
					    }</style>';
		}
		else echo'404 NOT FOUND';
?>
<?php include_once ('footer.php')?>
		<script src="../public/js/show_list_product.js"></script>
        <script src="../public/js/login_index.js"></script>			
					