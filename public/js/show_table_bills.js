function loadData() {
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function (ev) {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var msg = JSON.parse(this.responseText);


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

        var body_detail = printBodyBillDetail(detail);

        command += '<tr>' +
            '                <td>'+ msg[i].id +'</td>' +
            '                <td>'+ msg[i].emp_id + '</td>' +
            '                <td>'+msg[i].cus_id+'</td>' +
            '                <td>'+msg[i].total+'</td>' +
            '                <td>'+msg[i].buy_date+'</td> ' +
            '                <td>'+msg[i].process_date+'</td> ' +
            '                <td>'+msg[i].status+'</td> ' +
            '                <td> ' +
            '                    <button class="btn btn-info" data-toggle="collapse" data-target="#demo'+i+'">Xem chi tiết <i ' +
            '                                class="caret"></i></button> ' +
            '                </td> ' +
            '            </tr> ' +
            ' ' +
            '            <tr> ' +
            '                <td colspan="8"> ' +
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

