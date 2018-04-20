var btnRegister = document.getElementById("btnThem");
var btnCancel = document.getElementById("btnCancel");

function validatePhone() {

    phone = document.getElementById("phonenumber").value;

    msg = document.getElementById("msgphone");

    var filter = /^[0-9-+]+$/;
    if(!filter.test(phone)){
       msg.innerHTML = '<p>Số điện thoại bạn nhập không hợp lệ</p>';

    }
else{
        msg.innerHTML = '<p></p>';
    }

}

function checkPass()
{

    var pass1 = document.getElementById('password1');
    var pass2 = document.getElementById('password2');

    var message = document.getElementById('confirmMessage');

    var goodColor = "#66cc66";
    var badColor = "#ff6666";
   
    if(pass1.value == pass2.value){

        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Khớp mật khẩu";
    }else{

        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Không khớp mật khẩu đã nhập ở trên";
    }
}

function register(){

    event.preventDefault();


    var user = document.getElementById("user");
    var pass = document.getElementById("password1");
    var name = document.getElementById("name");
    var birthday = document.getElementById("birthday");
    var phone = document.getElementById("phonenumber");
    var address = document.getElementById("address");
    var salary = document.getElementById("salary");
    var pass2 = document.getElementById("password2");

    color = user.style.getPropertyValue("borderColor");


    if (name.value == ""  || address.value == "" || user.value == "" || pass.value == "" || phone.value == "" || salary.value == "") {

    alert("Các trường dữ liệu không được để trống, ĐM");
    }
    else {


        var data = new FormData;
        data.append('user', user.value);
        data.append('pass', pass.value);
        data.append('name', name.value);
        data.append('birthday', birthday.value);
        data.append('phone', phone.value);
        data.append('address', address.value);
        data.append('salary',salary.value);



        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (ev) {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var msg = this.responseText;

                if (msg == "username existed") {
                    alert("Tên đăng nhập đã tồn tại/nVui lòng chọn tên khác!");
                }
                else if (msg == 'success') {
                    alert("Đăng ký thành công");
                    window.location = 'admin-employee.php';
                }
            }
        };
        xhttp.open("POST", "../controllers/adduser.php");
        xhttp.send(data);

    }
return false;
}

  function cancel(){
    event.preventDefault();
    window.location = 'admin-employee.php';
}




