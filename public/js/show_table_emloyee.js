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
    for(var i = 0;i < msg.length-1; i++){
        command += '<tr>' +
            '                    <td>'+msg[i].id+'</td>' +
            '                    <td>'+msg[i].name +'</td>' +
            '                    <td>'+msg[i].birthday+'</td>' +
            '                    <td>'+msg[i].phone+'</td>' +
            '                    <td>'+ msg[i].salary+'</td>' +
            '                </tr>';
    }
    document.getElementById("admin_emm").innerHTML = command;
}



