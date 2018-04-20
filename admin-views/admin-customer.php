<?php

require "header1.php"; ?>

<div class="section" style="margin-top: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel panel-heading text-center">
                        <h3>DANH SÁCH KHÁCH HÀNG</h3>
                    </div>

                    <div class="form-group col-md-3 padd-0">
                        <input type="text" class="form-control" id="order-search" placeholder="Nhập tên khách hàng để tìm kiếm" onkeyup="searchBill()" ">

                    </div>

                    <div class="panel-body">
                        <table class="table table-bordered " id="table_waiting">
                            <thead >
                            <tr >
                                <th style="text-align: center;">ID</th>
                                <th style="text-align: center;">Họ Tên</th>
                                <th style="text-align: center;">Ngày Sinh</th>
                                <th style="text-align: center;">Địa Chỉ</th>
                                <th style="text-align: center;">SĐT</th>
                                <th style="text-align: center;">Tài Khoản</th>
                                <th style="text-align: center;">Trạng Thái</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="table_body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="../public/js/show_table_customer.js"></script>
</body>
</html>
