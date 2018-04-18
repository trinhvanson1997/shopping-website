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
            Quản lý nhân viên
        </h1>
    </div>
    <div class="col-md-12">
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Tên nhân viên</th>
                    <th class="text-center">Ngày sinh</th>
                    <th class="text-center">Số điện thoại</th>
                    <th class="text-center">Lương</th>
                </tr>
            </thead>

            <tbody id="admin_emm">

            </tbody>
        </table>
    </div>
</div>

<script src="../public/js/show_table_emloyee.js"></script>