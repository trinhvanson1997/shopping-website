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
                if(msg.status == 'locked'){
                    alert("Tài khoản đã bị khóa");
                }
                if(msg.res == "correct"){
                    if(msg.status == "active"){
                        alert("Bạn đã đăng nhập thành công");
                        if(msg.position=='manager'){
                            window.location = "../admin-views/home.php";
                        }
                        else{
                            window.location = "../admin-views/home2.php";
                        }
                    }
                    if(msg.status=='locked'){
                        alert('Tài khoản đã bị khóa');
                    }

                }
                else if(msg.res == "incorrect"){
                    alert("Thông tin tài khoản hoặc mật khẩu không chính xác!");
                }

            }
        };
        xhttp.open("GET", "../controllers/login-process-admin.php?username="+username+"&password="+password);
        xhttp.send();
    }
    return false;
}

function gotoRegister() {
    event.preventDefault();
    window.location = 'register.php';
    return false;
}