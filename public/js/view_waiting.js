function loadData() {

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var msg = JSON.parse(this.responseText);
            command = "";

            for (var i = 0; i < msg.length; i++) {

                command +=
                    "<tr>" +
                    "<td>" + msg[i].id + "</td>" +
                    "<td>" + msg[i].name + "</td>" +
                    "<td>" + msg[i].birthday + "</td>" +
                    "<td>" + msg[i].address + "</td>" +
                    "<td>" + msg[i].phone + "</td>" +
                    "<td>" + msg[i].username + "</td>" +
                    "<td>waiting</td>" +

                    //vì có cả thanh tiêu đề hàng 0 ta bắt đầu với hàng 1
                    "<td><i class='fa fa-check' title='Chấp nhận' style='cursor: pointer;padding-right: 10px' onclick='accept(" + (i + 1) + ",5)'></i>" +
                    "<i class='fa fa-times' title='Xóa khỏi duyệt' style='cursor: pointer;padding-right: 10px' onclick='deny(" + (i + 1) + ",5)'></i></td>" +
                    "</tr>";
            }
            document.getElementById('table_body').innerHTML = command;
        }
    }
    xhttp.open("GET", "../controllers/get_list_waiting.php");
    xhttp.send();
}


window.onload = loadData();

function accept(i, j) {
    username = document.getElementById('table_waiting').rows[i].cells[j].innerHTML;

    //yêu cầu chấp nhận tài khoản với username ở hàng i cột j
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var msg = this.responseText;
            if (msg) {
                alert("Phê duyệt tài khoản thành công");
                location.reload();
            }
            else {
                alert("Phê duyệt tài khoản thất bại do lỗi không xác định");
            }

        }
    }

    xhttp.open("GET", "../controllers/acc_customer_process.php?username=" + username + "&request=accept", true);
    xhttp.send();
}

function deny(i, j) {
    username = document.getElementById('table_waiting').rows[i].cells[j].innerHTML;
    //yêu cầu chấp nhận tài khoản với username ở hàng i cột j
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            //alert(this.responseText);
            if (this.responseText) {
                alert("Từ chối tài khoản thành công");
                location.reload();
            }
            else {
                alert("Từ chối tài khoản thất bại do lỗi không xác định");
            }

        }
    }


    xhttp.open("GET", "../controllers/acc_customer_process.php?username=" + username + "&request=deny", true);
    xhttp.send();
}

