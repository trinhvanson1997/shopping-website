<?php require

"header1.php"; ?>

<div class="container" style="margin-top: 50px;">

    <div class="col-md-12 text-left">
        <h1 style="color: orange; font-size: 30px">
            Quản lý nhân viên
        </h1>
    </div>

    <div class="form-group col-md-3 padd-0">
        <input type="text" class="form-control" id="order-search" placeholder="Nhập tên nhân viên để tìm kiếm" onkeyup="searchBill()" ">

    </div>
    <div class="col-md-9 text-right">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 0px">
            <i class="fa fa-plus-circle"></i>
            THÊM NHÂN VIÊN</button>
    </div>


    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">THÊM NHÂN VIÊN</h4>
        </div>
        <div class="panel-body">
        <form >
                        <div class="form-group">
                            <label for="name"><span class="req">* </span> Họ Tên: </label>
                            <input class="form-control" type="text"  name="name" id = "name"  required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="birthday"><span class="req">* </span> Ngày Sinh: </label>
                            <input class="form-control" type="date"  id = "birthday" name="birthday" required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Địa Chỉ: </label>
                            <input class="form-control" required type="text" name="address" id = "address"  />
                            <div class="status" id="status"></div>
                        </div>


                        <div class="form-group">
                            <label for="phonenumber"><span class="req">* </span> Số Điện Thoại: </label>
                            <input required type="text" id="phonenumber" name="phonenumber" class="form-control phone" maxlength="28" "/>
                            <span id="msgphone" class="confirmMessage"></span>
                        </div>
                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Luong: </label>
                            <input class="form-control" required type="text" name="salary" id = "salary"  />
                            <div class="status" id="status"></div>
                        </div>

                        <div class="form-group">
                            <label for="username"><span class="req">* </span> Tên Tài Khoản:  </label>
                            <input class="form-control" type="text" id = "user"  name="username" required />
                            <div id="errLast"></div>
                        </div>

                        <div class="form-group">
                            <label for="password"><span class="req">* </span> Mật Khẩu: </label>
                            <input required  type="password" class="form-control inputpass"  id="password1" name="password"/>
                        </div>

                        <div class="form-group">
                            <label for="password2"><span class="req">* </span> Xác Nhận Mật Khẩu: </label>
                            <input required  type="password" class="form-control inputpass"   id="password2" name="password2" onkeyup="checkPass(); return false;"/>
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>


                        <div class="form-group text-center">
                        <button class="btn btn-success"  id="btnThem"  onclick="register()">Register</button>
                        <button class="btn btn-success"  id="btnCancel"  onclick="cancel()">Cancel</button>
                        </div>

                    </form>
                </div>
      </div>
      
    </div>
  </div>
    
    <div class="col-md-12">
        <table class="table table-hover table-bordered text-center" id="table-emp">
            <thead>
                <tr>
                
                    <th class="text-center">ID</th>
                    <th class="text-center">Tên nhân viên</th>
                    <th class="text-center">Ngày sinh</th>
                    <th class="text-center">Số điện thoại</th>
                    <th class="text-center">Lương</th>
                    <th class="text-center">Hanh dong</th>
                </tr>
            </thead>

            <tbody id="admin_emm">

            </tbody>
        </table>
    </div>
</div>


    <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sua thong tin</h4>
        </div>
        <div class="panel-body">
        <form >
                        <div class="form-group">
                            <label for="name"><span class="req">* </span> Họ Tên: </label>
                            <input class="form-control" type="text"  name="name" id = "name1"  required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="birthday"><span class="req">* </span> Ngày Sinh: </label>
                            <input class="form-control" type="date"  id = "birthday1" name="birthday" required />
                            <div id="errFirst"></div>
                        </div>

                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Địa Chỉ: </label>
                            <input class="form-control" required type="text" name="address" id = "address1"  />
                            <div class="status" id="status"></div>
                        </div>


                        <div class="form-group">
                            <label for="phonenumber"><span class="req">* </span> Số Điện Thoại: </label>
                            <input required type="text" id="phonenumber1" name="phonenumber" class="form-control phone" maxlength="28" "/>
                            <span id="msgphone" class="confirmMessage"></span>
                        </div>
                        <div class="form-group">
                            <label for="address"><span class="req">* </span> Luong: </label>
                            <input class="form-control" required type="text" name="salary" id = "salary1"  />
                            <div class="status" id="status"></div>
                        </div>

                        <div class="form-group">
                            <label for="username"><span class="req">* </span> Tên Tài Khoản:  </label>
                            <input disabled class="form-control" type="text" id = "user1"  name="username" required />
                            <div id="errLast"></div>
                        </div>

                        <div class="form-group">
                            <label for="password"><span class="req">* </span> Mật Khẩu: </label>
                            <input required  type="password" class="form-control inputpass"  id="password11" name="password"/>
                        </div>

                        <div class="form-group">
                            <label for="password2"><span class="req">* </span> Xác Nhận Mật Khẩu: </label>
                            <input required  type="password" class="form-control inputpass"   id="password21" name="password2" onkeyup="checkPass1(); return false;"/>
                            <span id="confirmMessage" class="confirmMessage"></span>
                        </div>


                        <div class="form-group text-center">
                        <button class="btn btn-success"  id="btnSua"  onclick="update()">Sua</button>
                        <button class="btn btn-success"  id="btnCancel1"  onclick="cancel()">Cancel</button>
                        </div>

                    </form>
                </div>
      </div>
      
    </div>
    </div>


<script src="../public/js/show_table_emloyee.js"></script>
<script src="../public/js/adduser.js"></script>

        </body>
        </html>
