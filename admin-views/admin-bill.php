<?php


    require "header1.php";

?>


<div class="container" style="margin-top: 50px;">
    <div class="col-md-12 text-left">
        <h1 style="color: orange; font-size: 30px">
            ĐƠN HÀNG
        </h1>
    </div>

    <div class="form-group col-md-3 padd-0">
<input type="text" class="form-control" id="order-search" placeholder="Nhập mã đơn hàng để tìm kiếm" onkeyup="searchBill()" ">

    </div>

    <div class="form-group col-md-9 padd-0" style="padding-left: 5px;">
        <div class="col-md-9 padd-0">

            <div class="col-md-6 padd-0" style="padding-left: 6px;">
                <div class="input-daterange input-group" id="datepicker">
                    <input type="date" class="input-sm form-control" id="search-date-from" placeholder="Từ ngày" name="start">
                    <span class="input-group-addon">to</span>
                    <input type="date" class="input-sm form-control" id="search-date-to" placeholder="Đến ngày" name="end">
                </div>
            </div>
            <div class="col-md-3 padd-0" style="padding-left: 5px;">
                <button style="box-shadow: none;margin-top: 0px" type="button" class="btn btn-primary btn-large" onclick="searchByDate()"><i class="fa fa-search"></i> Tìm kiếm
                </button>

            </div>
            </div>
        </div>
    <div class="col-md-12">
        <table class="table table-hover table-bordered text-center">
            <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Mã nhân viên</th>
                <th>Mã khách hàng</th>
                <th>Tổng tiền</th>
                <th>Ngày mua hàng</th>
                <th>Ngày xử lý đơn</th>
                <th>
                    <select class="text-center" id="order_status" onchange="show()">
                        <option selected value="-1"><b>Trạng thái</b></option>
                        <option value="0"><b>processing</b></option>
                        <option value="1"><b>done</b></option>
                       <option value="2"><b>destroy</b></option>
                    </select>
                </th>

                <th></th>
            </tr>
            </thead>
            <tbody id="table_body">




            </tbody>
        </table>
    </div>
</div>

<script src="../public/js/show_table_bills.js"></script>

</body>
</html>
