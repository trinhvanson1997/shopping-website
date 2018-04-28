function loadData() {

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            msg = JSON.parse(this.responseText);
            show_table_product(msg);

        }
    };
    xhttp.open("GET", "../controllers/get-product-admin.php");
    xhttp.send();
}
window.onload = loadData();




function show_table_product(msg) {
    command = "";
    for (var i = 0;i < msg.length - 1;i++) {

         buy = msg[i].sell_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +" VNĐ";
         sell = msg[i].buy_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +" VNĐ";

        command += '  <tr>' +
            '                    <td>' +
                                   + msg[i].id   +   //ID
            '                    </td>' +
            '                    <td>' +
                                    msg[i].name.toString()+  // Tên
            '                    </td>' +
            '                    <td>' +
                                    sell  + //Giá
            '                    </td>' +
            '                   <td>' +
                                    buy+
            '                   </td>'+
            '                    <td>' +
                                    +msg[i].inventory+   //số lượng.
            '                    </td>' +
            '<td>'+msg[i].entry_date+'</td>'+
            '<td>'+msg[i].brand+'</td>'+

            '                </tr>';
    }

    document.getElementById('tableBody').innerHTML=command;
}

// window.onload = show_table_product();


