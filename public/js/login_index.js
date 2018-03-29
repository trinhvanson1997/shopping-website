function checkLogin() {
    event.preventDefault();
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if(username == "" || password == ""){
        alert("Vui lòng điền đầy đủ các trường!");
    }
    else{
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (ev) {
            if(this.readyState == 4 && this.status == 200){
                var msg = JSON.parse(this.responseText);


                if(msg.res == "correct"){
                    if(msg.status == "active"){
                       header_top = document.getElementById('top-right');
                       header_top.innerHTML = ' <div class="nav navbar-right" style="margin-right: 10px;"> ' +
                           '<div class="dropdown">' +
                           '                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="line-height: 50px;color: #777;text-decoration: none;">' +
                           '                                   Xin chào, '+msg.username+' <span class="caret"></span></a>' +
                           '                           <ul class="dropdown-menu" >' +
                           '                               <li>  <a href="" >Tài khoản</a></li>' +
                           '                               <li><a href="" >Giỏ hàng</a></li>' +
                           '                               <li><a href="" >Thoát</a></li>' +
                           '                           </ul>' +
                           '                       </div>'+
                           '                       </div>';
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