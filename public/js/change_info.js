var tfname = document.getElementById('name');
var tfbirth = document.getElementById('birthday');
var tfaddr = document.getElementById('address');
var tfphone = document.getElementById('phone');
var tfuser = document.getElementById('username');
var tfpass = document.getElementById('password');


document.getElementById("btnChange").addEventListener('click', function () {
    event.preventDefault();

    var data = new FormData;
    data.append('user', tfuser.value);
    data.append('pass', tfpass.value);
    data.append('name', tfname.value);
    data.append('birthday', tfbirth.value);
    data.append('phone', tfphone.value);
    data.append('address', tfaddr.value);


    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var msg = this.responseText;

            if (msg == "fail") {
                alert("Thay doi that bai");
            }
            else if (msg == "success") {
                alert("Cập nhật thông tin thành công.");

            }
            window.location = 'index.php';
        }
    };
    xhttp.open("POST", "../controllers/change_info_process.php");
    xhttp.send(data);
return false;
});

document.getElementById("btnCancel").addEventListener('click', function () {
    event.preventDefault();
    window.location = 'index.php';
});


var x = new XMLHttpRequest();
x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {

        //convert array string to abject
        var msg = JSON.parse(this.responseText);

        tfname.value = msg.name;
        tfbirth.value = msg.birthday;
        tfaddr.value = msg.address;
        tfphone.value = msg.phone;
        tfpass.value = msg.password;

    }

};
var str = tfuser.value;

x.open('GET', '../controllers/getInfoByUsername.php?username=' + str, true);
x.send();

