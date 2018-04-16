function checkout(){
        xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
           if(this.responseText == 1){
            alert("bạn đã đặt hàng thành công");
            window.location = 'index.php';
           }
            
        }
    };
    xhttp.open("POST", "../controllers/checkout.php");
    xhttp.send();
}


function increase(row, col,inven,price) {
    input = document.getElementById("inputText"+row);
    currValue = input.value;

    if(currValue==inven){
        document.getElementById("btnInc"+row).disabled = true;
    }
    else{
        document.getElementById("btnInc"+row).disabled = false;
            xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
           if(this.responseText == 1){
          
            window.location = 'cart.php';
           }
            
        }
    };
    xhttp.open("GET", "../controllers/adjust-quantity.php?action=increase&id="+  document.getElementById("tableCart").rows[row].cells[0].innerHTML );
    xhttp.send();

    }

    if(input.value != 1){
        document.getElementById("btnDec"+row).disabled = false;
    }
}

function decrease(row, col, intven,price) {
    input = document.getElementById("inputText"+row);
    currValue =input.value;

    if(currValue==1){
        document.getElementById("btnDec"+row).disabled = true;
    }
    else{
        document.getElementById("btnDec"+row).disabled = false;
             xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
           if(this.responseText == 1){
          
            window.location = 'cart.php';
           }
            
        }
    };
    xhttp.open("GET", "../controllers/adjust-quantity.php?action=decrease&id="+  document.getElementById("tableCart").rows[row].cells[0].innerHTML );
    xhttp.send();
    }
    if(input.value != 1){
        document.getElementById("btnInc"+row).disabled = false;
    }

}

function convertMoney(s) {
    return s.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
}

