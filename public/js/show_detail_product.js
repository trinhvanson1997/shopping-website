	function loadData() {

	    xhttp = new XMLHttpRequest();
	    xhttp.onreadystatechange = function (ev) {
	        if (xhttp.readyState == 4 && xhttp.status == 200) {
	            msg = JSON.parse(this.responseText);
	            printBody(msg);
	        }
	    };
	    xhttp.open("GET", "../controllers/get_product_detail.php");
	    xhttp.send();
	}
	function printBody(msg) {
	    document.getElementById('pic').src = "../images/"+msg[0].img;
	    document.getElementById('name_product').innerHTML ="" msg[0].name;
	    document.getElementById('brand_product').innerHTML = msg[0].brand;
	    document.getElementById('size_product').innerHTML = msg[0].size;
	    document.getElementById('detail_product').innerHTML = msg[0].detail;
	}	
	window.onload = loadData;