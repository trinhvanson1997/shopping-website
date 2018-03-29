var btnRegister = document.getElementById("btnRegister");
var btnCancel = document.getElementById("btnCancel");


function register(){

    event.preventDefault();
    var user = document.getElementById("username");
    var pass = document.getElementById("password");
    var name = document.getElementById("name");
    var birthday = document.getElementById("birthday");
    var phone = document.getElementById("phone");
    var address = document.getElementById("address");
    var pass2 = document.getElementById("password2");

    color = user.style.getPropertyValue("borderColor");
    var goodColor = "#66cc66";
    var badColor = "#ff6666";

    if (name.value == "" || phone.value == "" || address.value == "" || user.value == "" || pass.value == "") {
      /*  document.getElementById("errors").innerHTML = '<div class="alert alert-danger">\n' +
            '                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">\n' +
            '                                        &times;\n' +
            '                                    </button>\n' +
            '                                    <strong>Warning!</strong> Một số trường còn trống\n' +
            '                                </div>';*/

    alert("Các trường dữ liệu không được để trống, ĐM");
    }
    else {
        var data = new FormData;
        data.append('user', user);
        data.append('pass', pass);
        data.append('name', name);
        data.append('birthday', birthday);
        data.append('phone', phone);
        data.append('address', address);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (ev) {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var msg = this.responseText;

                if (msg == "username existed") {
                    alert("Tên đăng nhập đã tồn tại/nVui lòng chọn tên khác!");
                }
                else if (msg == 'success') {
                    alert("Đăng ký thành công");
                    window.location = "login.php";
                }
            }
        }
        xhttp.open("POST", "../controllers/register_process.php");
        xhttp.send(data);

    }
    return false;
}

  function cancel(){
    event.preventDefault();
    window.location = 'index.php';
}



