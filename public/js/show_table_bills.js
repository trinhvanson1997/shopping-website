function loadData() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
             msg = JSON.parse(this.responseText);


            showTableBills(msg);
        }
    };
    xhttp.open("GET","../controllers/get_all_bill.php");
    xhttp.send();
}

window.onload = loadData();

function showTableBills(msg) {
    command = "";

    for(var i = 0;i < msg.length ; i++){
        var detail = getBillDetail(msg[i].id);
    total = msg[i].total.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") +" VNĐ";
        var body_detail = printBodyBillDetail(detail);

        command += '<tr>' +
            '                <td>'+ msg[i].id +'</td>' +
            '                <td>'+ msg[i].emp_id + '</td>' +
            '                <td>'+msg[i].cus_id+'</td>' +
            '                <td>'+total+'</td>' +
            '                <td>'+msg[i].buy_date+'</td> ' +
            '                <td>'+msg[i].process_date+'</td> ' +
            '                <td>'+msg[i].status+'</td> ' +
            '                <td> ' +
            '                    <button class="btn btn-info" data-toggle="collapse" data-target="#demo'+i+'">Xem chi tiết <i ' +
            '                                class="caret"></i></button> ' +
            '                </td> ';

            if(msg[i].status == 'processing'){
                command +=    '<td> <i class="fa fa-check-square" onclick="processBill('+msg[i].id+')" title="Xử lý đơn" style="cursor: pointer;padding-right: 15px;font-size: 20px;color:green;"></i> ' +
                   ' <i class="fa fa-ban" onclick="destroyBill('+msg[i].id+')" title="Hủy đơn hàng" style="cursor: pointer;padding-right: 15px;font-size: 20px;color:red;"></i>' +
                    '                </td> ' ;
            }
            else{
                command += '<td> </td>';
            }
            command +=
            '            </tr> ' +
            ' ' +
            '            <tr> ' +
            '                <td colspan="9"> ' +
            '                   <div id="demo'+i+'" class="collapse "> ' +
            '                       <ul class="nav nav-tabs"> ' +
            '                           <li class="active"> ' +
            '                               <a data-toggle="tab"> ' +
            '                                   <i class="green icon-reorder bigger-110"></i> ' +
            '                                   <b>Chi tiết đơn hàng mã  ' +  msg[i].id+
        '                               </b></a> ' +
            '                           </li> ' +
            '                       </ul> ' +
            ' ' +
            '                       <div class="tab-content"> ' +
            ' ' +
            '                           <div class="row"> ' +
            '                               <div class="col-md-12"> ' +
            '                                   <table class="table table-dark table-bordered text-center"> ' +
            '                                       <thead> ' +
            '                                       <tr> ' +
            '                                           <th>STT</th> ' +
            '                                           <th>Mã sản phẩm</th> ' +
            '                                           <th>Tên sản phẩm</th> ' +
            '                                           <th>Số lượng</th> ' +
            '                                           <th>Giá bán</th> ' +
            '                                           <th>Thành tiền</th> ' +
            ' ' +
            '                                       </tr> ' +
            '                                       </thead> ' +
            '                                       <tbody> ' +
          body_detail+
            '                                       </tbody> ' +
            '                                   </table> ' +
            '                               </div> ' +
            ' ' +
            ' ' +
            '                           </div> ' +
            ' ' +
            ' ' +
            ' ' +
            '                       </div> ' +
            '                   </div> ' +
            ' ' +
            '                </td> ' +
            '            </tr>';
    }

    document.getElementById("table_body").innerHTML = command;
}

function printBodyBillDetail(detail){
    var str = '';

    for(var i = 0; i<detail.length;i++){

        var money = parseFloat(detail[i].sell_price) * parseFloat(detail[i].amount);

        str +=  '                                       <tr> ' +
            '                                           <td>'+(i+1)+'</td> ' +
            '                                           <td>'+detail[i].id+'</td> ' +
            '                                           <td>'+detail[i].name+'</td> ' +
            '                                           <td>'+detail[i].amount+'</td> ' +
            '                                           <td>'+detail[i].sell_price+'</td> ' +
            '                                           <td>'+money+'</td> ' +
            '                                       </tr> ';
    }
  return str;
}

function getBillDetail(bill_id) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
a = JSON.parse(this.responseText);

        }
    };
    xhttp.open("GET","../controllers/get_bill_detail.php?id="+bill_id, false);
    xhttp.send();
return a;
}

function show() {

    var ddl = document.getElementById("order_status");
    var selectedValue = ddl.options[ddl.selectedIndex].value;

    if(selectedValue == 0){
        var temp =[];
            for(var i = 0; i<msg.length;i++){
                if(msg[i].status == "processing"){
                    temp.push(msg[i])   ;
                }
            }
            showTableBills(temp);
    }
    else if(selectedValue == 1){
        var temp =[];
        for(var i = 0; i<msg.length;i++){
            if(msg[i].status == "done"){
                temp.push(msg[i]);
            }
        }
        showTableBills(temp);
    }
    else if(selectedValue == 2){
        var temp =[];
        for(var i = 0; i<msg.length;i++){
            if(msg[i].status == "destroy"){
                temp.push(msg[i]);
            }
        }
        showTableBills(temp);
    }
    /* else if(selectedValue == 2){

     }*/
}

function processBill(id) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          if(this.responseText==1){
              alert("Xử lý đơn hàng thành công");
              location.reload();
          }

          else if(this.responseText == 0){
              alert("Số lượng hàng trong kho không đủ");
          }

        }
    };
    xhttp.open("GET","../controllers/bill-process.php?action=accept&id="+id);
    xhttp.send();
}


function destroyBill(id) {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            if(this.responseText==1){
                alert("Hủy đơn hàng thành công");
            }
            else{
                alert("Hủy đơn hàng thất bại");
            }
            location.reload();
        }
    };
    xhttp.open("GET","../controllers/bill-process.php?action=destroy&id="+id);
    xhttp.send();
}

function searchBill() {
    var str = document.getElementById("order-search").value;

    var temp =[];
    for(var i = 0; i<msg.length;i++){
        if(msg[i].id.startsWith(str)){
            temp.push(msg[i]);
        }
    }
    showTableBills(temp);
}

function searchByDate() {
    var date1 = document.getElementById("search-date-from").value;
    var date2 = document.getElementById("search-date-to").value;

    var temp =[];
    for(var i = 0; i<msg.length;i++){
        if(msg[i].buy_date > date1 && msg[i].buy_date <date2){
            temp.push(msg[i]);
        }
    }
    showTableBills(temp);
}
