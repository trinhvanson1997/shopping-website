function loadData(page) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            msg = JSON.parse(this.responseText);
            showTableEmm(msg);
        }
    };
    xhttp.open("GET","../controllers/get_all_employee.php?page="+page);
    xhttp.send();
}

window.onload = loadData(1);

function showTableEmm(msg) {
    command = "";
    for(var i = 0;i < msg.length; i++){
        salary =  msg[i].salary.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +" VNĐ";

        command += '<tr>' +
                  
            '                    <td>'+msg[i].id+'</td>' +
            '                    <td>'+msg[i].name +'</td>' +
            '                    <td>'+msg[i].birthday+'</td>' +
            '                    <td>'+msg[i].phone+'</td>' +
            '                    <td>'+salary+'</td>' +
            '<td ><i class="fa fa-edit blue" title="sua" style="cursor: pointer;padding-right: 10px; font-size: 20px;" onclick="showmodal('+i+')"></i><span> \ </span> <i class="fa fa-trash-o" title="xóa" style="cursor: pointer;font-size: 20px;" onclick="del('+i+')"></i></td>' +
                '</tr>';
    }
    document.getElementById("admin_emm").innerHTML = command;
}

function showmodal(i){

   document.getElementById("name1").value = msg[i].name;
   document.getElementById("birthday1").value = msg[i].birthday;
   document.getElementById("address1").value = msg[i].address;
   document.getElementById("phonenumber1").value = msg[i].phone;
   document.getElementById("salary1").value = msg[i].salary;
   document.getElementById("user1").value = msg[i].username;
    $("#myModal1").modal();
}

var btnRegister = document.getElementById("btnSua");
var btnCancel = document.getElementById("btnCancel1");

function update(){

    event.preventDefault();

    var pass = document.getElementById("password11");
    var name = document.getElementById("name1");
    var birthday = document.getElementById("birthday1");
    var phone = document.getElementById("phonenumber1");
    var address = document.getElementById("address1");
    var salary = document.getElementById("salary1");
    var pass2 = document.getElementById("password21");
    var user = document.getElementById("user1");
    color = user.style.getPropertyValue("borderColor");


    if (name.value == ""  || address.value == "" || pass.value == "" || phone.value == "" || salary.value == ""|| user.value=="") {

    alert("Các trường dữ liệu không được để trống");
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

                if (msg == "update ko thanh cong") {
                    alert("Cập nhật thất bại");
                }
                else if (msg == 'success') {
                    alert("Cập nhật thành công");
                    window.location = 'admin-employee.php';
                }
            }
        };
        xhttp.open("POST", "../controllers/update.php?request=edit");
        xhttp.send(data);

    }
return false;
}

function cancel(){
    event.preventDefault();
    window.location = 'admin-employee.php';
}

function checkPass1()
{

    var pass1 = document.getElementById('password11');
    var pass2 = document.getElementById('password21');

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

function del(i) {
   var username = msg[i].username;

    //yêu cầu chấp nhận tài khoản với username ở hàng i cột j
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            //alert(this.responseText);
            if (this.responseText) {

                location.reload();
            }
            else {
                alert("Xóa tài khoản thất bại do lỗi không xác định");
            }

        }
    };


    xhttp.open("GET", "../controllers/update.php?request=delete&username="+username, true);
    xhttp.send();
}

function searchEmp() {
    var str = document.getElementById("order-search").value.toLowerCase();

    var temp =[];
    for(var i = 0; i<msg.length;i++){

        if(msg[i].name.toLowerCase().includes(str)){
            temp.push(msg[i]);
        }
    }

    showTableEmm(temp);
}



