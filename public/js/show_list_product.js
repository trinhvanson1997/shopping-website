order = 'none';

function loadData(page) {

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            msg = JSON.parse(this.responseText);

            //do min(msg.length) = 1 , count(*)
            if(msg.length >1) {

                showListProducts(msg);

                number = msg[msg.length - 1].count;

                if (number % 9 == 0) {
                    number /= 9;
                }
                else {

                    number = parseInt(Math.floor((number / 9))) + 1;


                }
                showPagination(number, page);
            }
            else{
                document.getElementById('list-product').innerHTML = "<p style='font-size: 20px;color: white;text-align: center'>Không tìm thấy sản phẩm nào</p>";
                document.getElementById('pagination').innerHTML = "";
            }
        }
    };

    if(order == 'none'){
        xhttp.open("GET", "../controllers/get_all_products.php?page="+page);
    }
    else if(order == 'searchByName'){
        var key = document.getElementById("searchBox").value;
        xhttp.open('GET','../controllers/get-searched-products.php?action=search-by-name&page='+page+'&key='+key.toLowerCase());
    }
    else if(order == 'searchByPrice'){
        var from = document.getElementById("from").value;
        var to = document.getElementById("to").value;

        xhttp.open('GET','../controllers/get-searched-products.php?action=search-by-price&page='+page+'&from='+from+'&to='+to);
    }
    else {
        xhttp.open("GET", "../controllers/get-sorted-products.php?page="+page+"&order="+order);
    }
    xhttp.send();
}

//trang bat dau la trang 1
window.onload = loadData(1, order);

function showListProducts(msg) {
    command = "";
    for(var i=0;i<msg.length-1;i++){
        price = msg[i].sell_price.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +" VNĐ";

        command +=
            '<div class="col-md-4">' +
            '        <div class="product-image-wrapper" id="product'+msg[i].id+'">' +
            '           <div class="single-products">' +
            '               <div class="productinfo text-center">' +
            '                   <img src="../images/'+ msg[i].img +'" alt=""  />' +
            '                   <h2>'+price+'</h2>' +
            '                   <p title="'+msg[i].name+'">'+msg[i].name+'</p>' +
            '                   <a href="." class="btn btn-default add-to-cart" style="text-align: center"><i' +
            '                    class="glyphicon glyphicon-shopping-cart"></i>Add to cart</a>' +

            '                       <div class="overlay">' +

                                    '   <div class="texttt"> <p> Tên: '+msg[i].name+'</p></div>' +
                                    '   <div class="texttt"><p> NSX: '+msg[i].brand+'</p></div>' +
                                    '   <div class="texttt"><p> Size: '+msg[i].size+'</p></div>' +
                                    '   <div class="texttt"><p> Giá: '+price+'</p></div>' +
                                    '   <div class="texttt"><p> Còn : '+msg[i].inventory+' sản phẩm</p></div>' +
            '                           <div class="info">' +
                                        '   <button class="btn btn-default add-to-cart" onclick="addProduct('+msg[i].id+', \''+msg[i].name+'\', '+msg[i].sell_price+', '+msg[i].inventory+')"  ><i' +
                                        '   class="glyphicon glyphicon-shopping-cart"></i>Add to cart</button>' +
                '                       </div>'+
            '                        </div>'+
            '                </div>'+
            '            </div>'+

            '         </div>' +
            '   </div>   ';
    }

    document.getElementById('list-product').innerHTML = command;
}

function addProduct(id, name, price, inventory){
 
  xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
         
           if(this.responseText == 1){

            
                window.location = 'cart.php';
           }
           else alert('Bạn cần đăng nhập để thêm sản phẩm vào giỏ!');
        }
    };
    xhttp.open("GET", "../controllers/cart-process.php?action=add&id="+id+"&name="+name+"&price="+price+"&inventory="+inventory);
    xhttp.send();
}

function showPagination(numberPage,curPage) {


    command = '<a href="#product" onclick="prevPage('+numberPage+','+curPage+')">&laquo;</a>';
        for(i=1;i<=numberPage;i++){
           if(i == curPage){

               command += '<a href="#products" onclick="loadData('+i+')" class="active">'+i+'</a>';
           }
           else{
               command += '<a  href="#products" onclick="loadData('+i+')">'+i+'</a>';
           }
        }
        command += '<a href="#products" onclick="nextPage('+numberPage+','+curPage+')">&raquo;</a>';

document.getElementById('pagination').innerHTML = command;

}

function nextPage(numberPage,curPage) {

    if(curPage < numberPage){
        loadData(curPage+1);
    }
    else{

    }
}

function prevPage(numberPage,curPage) {
    if(curPage > 1){
        loadData(curPage-1);
    }
    else{

    }
}


//lọc sản phẩm theo giá

function arrangeByPrice(){

    var rdAscend = document.getElementById("ascending");
    var rdDescend = document.getElementById("descending");

    if(rdAscend.checked){
        order = 'ASC';
       loadData(1);
    }
    if(rdDescend.checked){
        order = 'DESC';
        loadData(1);
    }
}

//Tìm kiếm sản phẩm theo tên

function searchProducts() {
    order='searchByName';
  loadData(1);

}
//Tìm kiếm sản phẩm trong khoảng giá

function searchByPrice() {
    order = 'searchByPrice';
    loadData(1);
}