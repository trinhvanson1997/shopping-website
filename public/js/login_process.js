function checkLogin() {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username == "" || password == ""){
        document.getElementById("errors").innerHTML = '<div class="alert alert-danger">\n' +
            '                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">\n' +
            '                                            &times;\n' +
            '                                        </button>\n' +
            '                                        <strong>Cảnh báo!</strong> Các trường thông tin cần được điền \n' +
            '                                    </div>';

        return;
    }
    else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (ev) {
            if(this.readyState == 4 && this.status == 200){
                var msg = JSON.parse(this.responseText);
alert(this.responseText);

                if(msg.res == "correct"){
                   if(msg.status == "active"){
                       if(msg.position == "manager"){
                            alert("Bạn đã đăng nhập với tư cách Quản lý");
                            window.location = 'home.php';
                       }
                       else if(msg.position == "employee"){
                           alert("Bạn đã đăng nhập với tư cách Nhân viên");
                       }
                       else{
                           alert("Bạn đã đăng nhập với tư cách Khách hàng");
                       }
                   }
                   else if(msg.status == "locked"){
                       alert("Tài khoản này đã bị khóa!")
                   }
                   else if(msg.status == "waiting"){
                       alert("Tài khoản này đang chờ được phê duyệt");
                   }
                }
                else if(msg.res == "incorrect"){
                    alert("Thông tin tài khoản hoặc mật khẩu không chính xác!");
                }
            }
        }
        xhttp.open("GET", "../controllers/login_process.php?username="+username+"&password="+password);
        xhttp.send();
    }
    return false;
}

function gotoRegister() {
    event.preventDefault();
    window.location = 'register.php';
    return false;
}