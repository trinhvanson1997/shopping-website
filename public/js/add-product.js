function addProduct(){

    event.preventDefault();


    var name = document.getElementById("name").value;
    var type = "";
    if(document.getElementById("type1").checked){
        type = document.getElementById("type1").value;
    }
    if(document.getElementById("type2").checked){
        type = document.getElementById("type2").value;
    }
    if(document.getElementById("type3").checked){
        type = document.getElementById("type3").value;
    }
    if(document.getElementById("type4").checked){
        type = document.getElementById("type4").value;
    }
    var inventory = document.getElementById("inventory").value;
    var buy_price = document.getElementById("buy_price").value;
    var sell_price = document.getElementById("sell_price").value;
    var entry_date = document.getElementById("entry_date").value;
    var brand = document.getElementById("brand").value;
    var size = document.getElementById("size").value;




    if (name == ""  || type == "" || inventory == "" || buy_price== "" || sell_price == "" || entry_date == "" || brand == "" || size =="") {

        alert("Các trường dữ liệu không được để trống");
    }
    else {


        var data = new FormData;
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
                    alert("Thêm sản phẩm thành công");
                }
                else if (msg == 0) {
                    alert("Thêm sản phẩm thất bại");

                }
                window.location = 'admin-product.php';
            }
        };
        xhttp.open("POST", "../controllers/add-product.php");
        xhttp.send(data);

    }
    return false;
}

function cancel(){
    event.preventDefault();
    window.location = 'admin-product.php';
}
