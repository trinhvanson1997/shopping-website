function loadData() {

     xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function (ev) {
         if (xhttp.readyState == 4 && xhttp.status == 200) {
             msg = JSON.parse(this.responseText);
                printBody(msg);
         }
     };
     xhttp.open("GET", "../controllers/get-history.php");
     xhttp.send();
}

function printBody(msg) {
    command = "";

    for (var i = 0; i < msg.length; i++) {
        var total = parseFloat(msg[i].sell_price) * parseFloat(msg[i].amount);

        command +=
            "<tr class='text-center'>" +
            "<td>" + (i+1)+ "</td>" +
            "<td>" + msg[i].name + "</td>" +
            "<td>" + msg[i].buy_date + "</td>" +
            "<td>" + msg[i].sell_price + "</td>" +
            "<td>" + msg[i].amount + "</td>" +
            "<td>" + total + "</td>" +
            "<td>" + msg[i].status + "</td>";


    }
    document.getElementById('table_body').innerHTML = command;
}

window.onload = loadData;
