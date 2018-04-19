<?php require 'index.php' ?>
/**
* Created by PhpStorm.
* User: MyPC
* Date: 16/04/2018
* Time: 18:30
*/


<div class="container" style="margin-top: 50px;">
    <div class="col-md-12 text-left">
        <h1 style="color: orange; font-size: 30px">
            ĐƠN HÀNG
        </h1>
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
                <th>Trạng thái</th>

                <th></th>
            </tr>
            </thead>
            <tbody id="table_body">




            </tbody>
        </table>
    </div>
</div>

<script src="../public/js/show_table_bills.js"></script>