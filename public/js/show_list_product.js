function loadData() {

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            msg = JSON.parse(this.responseText);
            showListProducts(msg);
        }
    }
    xhttp.open("GET", "../controllers/get_all_products.php");
    xhttp.send();
}
window.onload = loadData();

function showListProducts(msg) {
    command = "";
    for(var i=0;i<msg.length;i++){
        price = msg[i].sell_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +" VNĐ";

        command += '<div class="col-md-4">' +
            '        <div class="product-image-wrapper" id="product'+msg[i].id+'">' +
            '                                <div class="single-products">' +
            '                                    <div class="productinfo text-center">' +
            '                                        <img src="../images/product'+msg[i].id+'.jpg" alt="" />' +
            '                                        <h2>'+price+'</h2>' +
            '                                        <p title="'+msg[i].name+'">'+msg[i].name+'</p>' +
            '                                        <a href="#" class="btn btn-default add-to-cart"><i' +
            '                                                    class="glyphicon glyphicon-shopping-cart"></i>Add to cart</a>' +
            '                                    </div>' +

            '                                </div>' +

            '                            </div>' +
            '                        </div>   ';
    }

    document.getElementById('list-product').innerHTML = command;
}