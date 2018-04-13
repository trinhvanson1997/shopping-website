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

            }
        };
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