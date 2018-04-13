<?php require "header.php" ?>



</head>
<div class="section" style="margin-top: 50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel panel-heading text-center">
                        <h3>DANH SÁCH KHÁCH HÀNG</h3>
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
</div>

<script src="../public/js/view_customers.js"></script>
</body>
</html>