<?php

require "header1.php";
require '../controllers/get_all_products.php';
?>


<div class="container" style="margin-top: 50px;">
    <div class="col-md-12 text-left">
        <h1 style="font-size: 30px;color:orange;">DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="form-group col-md-3 padd-0">
        <input type="text" class="form-control" id="order-search" placeholder="Nhập tên sản phẩm để tìm kiếm" onkeyup="searchProduct()" ">

    </div>

    <div class="col-md-9 text-right" style="margin-bottom: 20px;">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 0px">
            <i class="fa fa-plus-circle"></i>
            THÊM SẢN PHẨM</button>
    </div>

    <div class="col-md-12">
        <table class="table table-hover table-bordered text-center">
            <thead>
            <tr>
                <th class="text-center">
                    ID
                </th>
                <th class="text-center">
                    Tên sản phẩm
                </th>
                <th class="text-center">
                    Giá bán
                </th>
                <th class="text-center">
                    Giá nhập
                </th>
                <th class="text-center">
                    Số lượng còn lại
                </th>
                <th class="text-center">
                    Ngày nhập cuối
                </th>
                <th class="text-center">
                    Thương hiệu
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody id = "tableBody">

            </tbody>

        </table>



    </div>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">THÊM SẢN PHẨM</h4>
                </div>
                <div class="panel-body">
                    <form >
                        <div class="form-group">
                            <label for="name"><span class="req">* </span> Tên sản phẩm </label>
                            <input class="form-control" type="text"  name="name" id = "name"  required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="birthday"><span class="req">* </span> Loại </label>
                            <label class="radio-inline">
                                <input type="radio" id="type1" value="ANU" name="type"> ANU
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="type2" value="QNU" name="type"> QNU
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="type3" value="ANA" name="type"> ANA
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="type4" value="QNA" name="type"> QNA
                            </label>

                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Số lượng </label>
                            <input class="form-control" required type="text" name="address" id = "inventory"  />
                            <div class="status" id="status"></div>
                        </div>


                        <div class="form-group">
                            <label for="phonenumber"><span class="req">* </span> Giá mua </label>
                            <input required type="text" id="buy_price" name="phonenumber" class="form-control phone" maxlength="28" "/>
                            <span id="msgphone" class="confirmMessage"></span>
                        </div>
                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Giá bán </label>
                            <input class="form-control" required type="text" name="salary" id = "sell_price"  />
                            <div class="status" id="status"></div>
                        </div>

                        <div class="form-group">
                            <label for="username"><span class="req">* </span> Ngày nhập hàng  </label>
                            <input class="form-control" type="date" id = "entry_date"  name="username" required />
                            <div id="errLast"></div>
                        </div>

                        <div class="form-group">
                            <label for="password"><span class="req">* </span> Thương hiệu </label>
                            <input required  type="text" class="form-control inputpass"  id="brand" />
                        </div>

                        <div class="form-group">
                            <label for="password2"><span class="req">* </span> Size </label>
                            <input required  type="text" class="form-control inputpass"   id="size" />
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>


                        <div class="form-group text-center">
                            <button class="btn btn-success"  id="btnThem"  onclick="addProduct()">Add Product</button>
                            <button class="btn btn-success"  id="btnCancel"  onclick="cancel()">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">SỬA THÔNG TIN SẢN PHẨM</h4>
                </div>
                <div class="panel-body">
                    <form >
                        <div class="form-group">
                            <label for="name"><span class="req">* </span> Mã sản phẩm </label>
                            <input class="form-control" type="text"  name="name" id = "id1"  disabled />

                        </div>
                        <div class="form-group">
                            <label for="name"><span class="req">* </span> Tên sản phẩm </label>
                            <input class="form-control" type="text"  name="name" id = "name1"  required />

                        </div>

                        <div class="form-group">
                            <label for="birthday"><span class="req">* </span> Loại </label>
                            <label class="radio-inline">
                                <input type="radio" id="type11" value="ANU" name="type"> ANU
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="type21" value="QNU" name="type"> QNU
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="type31" value="ANA" name="type"> ANA
                            </label>
                            <label class="radio-inline">
                                <input type="radio" id="type41" value="QNA" name="type"> QNA
                            </label>

                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Số lượng </label>
                            <input class="form-control" required type="text" name="address" id = "inventory1"  />

                        </div>


                        <div class="form-group">
                            <label for="phonenumber"><span class="req">* </span> Giá mua </label>
                            <input required type="text" id="buy_price1" name="phonenumber" class="form-control phone" maxlength="28" "/>
                            <span id="msgphone" class="confirmMessage"></span>
                        </div>
                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Giá bán </label>
                            <input class="form-control" required type="text" name="salary" id = "sell_price1"  />
                            <div class="status" id="status"></div>
                        </div>

                        <div class="form-group">
                            <label for="username"><span class="req">* </span> Ngày nhập hàng  </label>
                            <input class="form-control" type="date" id = "entry_date1"  name="username" required />

                        </div>

                        <div class="form-group">
                            <label for="password"><span class="req">* </span> Thương hiệu </label>
                            <input required  type="text" class="form-control inputpass"  id="brand1" />
                        </div>

                        <div class="form-group">
                            <label for="password2"><span class="req">* </span> Size </label>
                            <input required  type="text" class="form-control inputpass"   id="size1" />

                        </div>


                        <div class="form-group text-center">
                            <button class="btn btn-success"  onclick="editProduct()">Edit Product</button>
                            <button class="btn btn-success"    onclick="cancel()">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="../public/js/show_table_product.js"></script>
<script src="../public/js/add-product.js"></script>
</body>
</html>
