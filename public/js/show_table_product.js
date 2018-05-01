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
            '<td ><i class="fa fa-edit blue" title="sua" style="cursor: pointer;padding-right: 10px; font-size: 20px;" onclick="showmodal('+i+')"></i></td>' +
            '                </tr>';
    }

    document.getElementById('tableBody').innerHTML=command;
}


function searchProduct() {
    var str = document.getElementById("order-search").value.toLowerCase();

    var temp =[];
    for(var i = 0; i<msg.length;i++){

        if(msg[i].name.toLowerCase().includes(str)){
            temp.push(msg[i]);
        }
    }

    show_table_product(temp);
}


function showmodal(i){
    document.getElementById("id1").value = msg[i].id;
    document.getElementById("name1").value = msg[i].name;
    document.getElementById("inventory1").value = msg[i].inventory;
    document.getElementById("buy_price1").value = msg[i].buy_price;
    document.getElementById("sell_price1").value = msg[i].sell_price;
    document.getElementById("entry_date1").value = msg[i].entry_date;
    document.getElementById("brand1").value = msg[i].brand;
    document.getElementById("size1").value = msg[i].size;
    $("#myModal1").modal();
}

function editProduct() {
    event.preventDefault();

var id = document.getElementById("id1").value;
    var name = document.getElementById("name1").value;
    var type = "";
    if(document.getElementById("type11").checked){
        type = document.getElementById("type11").value;
    }
    if(document.getElementById("type21").checked){
        type = document.getElementById("type21").value;
    }
    if(document.getElementById("type31").checked){
        type = document.getElementById("type31").value;
    }
    if(document.getElementById("type41").checked){
        type = document.getElementById("type41").value;
    }
    var inventory = document.getElementById("inventory1").value;
    var buy_price = document.getElementById("buy_price1").value;
    var sell_price = document.getElementById("sell_price1").value;
    var entry_date = document.getElementById("entry_date1").value;
    var brand = document.getElementById("brand1").value;
    var size = document.getElementById("size1").value;





    if (name == ""  || type == "" || inventory == "" || buy_price== "" || sell_price == "" || entry_date == "" || brand == "" || size =="") {

        alert("Các trường dữ liệu không được để trống");
    }
    else {


        var data = new FormData;
        data.append('id',id);
        data.append('name', name);
        data.append('type', type);
        data.append('inventory', inventory);
        data.append('buy_price', buy_price);
        data.append('sell_price', sell_price);
        data.append('entry_date', entry_date);
        data.append('brand',brand);
        data.append('size',size);



        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function (ev) {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var msg = this.responseText;

                if (msg == 1) {
                    alert("Sửa thông tin sản phẩm thành công");
                }
                else if (msg == 0) {
                    alert("Sửa thông tin sản phẩm thất bại");

                }
                window.location = 'admin-product.php';
            }
        };
        xhttp.open("POST", "../controllers/update-product.php");
        xhttp.send(data);

    }
    return false;
}
function cancel(){
    event.preventDefault();
    window.location = 'admin-product.php';
}

