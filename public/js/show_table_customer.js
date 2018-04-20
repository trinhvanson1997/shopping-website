function loadData() {

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            msg = JSON.parse(this.responseText);
            printBody(msg);
        }
    };
    xhttp.open("GET", "../controllers/get_all_customers.php");
    xhttp.send();
}

function printBody(msg) {
    command = "";

    for (var i = 0; i < msg.length; i++) {

        command +=
            "<tr class='text-center'>" +
            "<td>" + msg[i].id + "</td>" +
            "<td>" + msg[i].name + "</td>" +
            "<td>" + msg[i].birthday + "</td>" +
            "<td>" + msg[i].address + "</td>" +
            "<td>" + msg[i].phone + "</td>" +
            "<td>" + msg[i].username + "</td>" +
            "<td>" + msg[i].status + "</td>";

        if (msg[i].status == 'active') {
            //vì có cả thanh tiêu đề hàng 0 ta bắt đầu với hàng 1
            command += "<td ><i class='fa fa-lock blue' title='khóa' style='cursor: pointer;padding-right: 10px; font-size: 20px;' onclick='lock(" + (i + 1) + ",5)'></i><span> \ </span> <i class='fa fa-trash-o' title='xóa' style='cursor: pointer;font-size: 20px;' onclick='delete_cus(" + (i + 1) + ",5)'></i></td>" +
                "</tr>";
        } else {
            command += "<td ><i class='fa fa-unlock blue' title='mở khóa' style='cursor: pointer;padding-right: 10px;font-size: 20px;' onclick='unlock(" + (i + 1) + ",5)'></i>  <i class='fa fa-trash-o' title='xóa' style='cursor: pointer;font-size: 20px;' onclick='delete_cus(" + (i + 1) + ",5)'></i></td>" +
                "</tr>";
        }
    }
    document.getElementById('table_body').innerHTML = command;
}

window.onload = loadData;

function lock(i, j) {
    username = document.getElementById('table_waiting').rows[i].cells[j].innerHTML;

    //yêu cầu chấp nhận tài khoản với username ở hàng i cột j
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var msg = this.responseText;
            if (msg) {

                location.reload();
            }
            else {
                alert("Khóa tài khoản thất bại do lỗi không xác định");
            }

        }
    };

    xhttp.open("GET", "../controllers/acc_customer_process.php?username=" + username + "&request=lock", true);
    xhttp.send();
}

function unlock(i, j) {
    username = document.getElementById('table_waiting').rows[i].cells[j].innerHTML;
    //yêu cầu chấp nhận tài khoản với username ở hàng i cột j
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            //alert(this.responseText);
            if (this.responseText) {

                location.reload();
            }
            else {
                alert("Mở khóa tài khoản thất bại do lỗi không xác định");
            }

        }
    };


    xhttp.open("GET", "../controllers/acc_customer_process.php?username=" + username + "&request=unlock", true);
    xhttp.send();
}


function delete_cus(i, j) {
    username = document.getElementById('table_waiting').rows[i].cells[j].innerHTML;
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


    xhttp.open("GET", "../controllers/acc_customer_process.php?username=" + username + "&request=delete", true);
    xhttp.send();
}

function searchBill() {
    var str = document.getElementById("order-search").value.toLowerCase();

    var temp =[];
    for(var i = 0; i<msg.length;i++){

        if(msg[i].name.toLowerCase().includes(str)){
            temp.push(msg[i]);
        }
    }

    printBody(temp);
}
