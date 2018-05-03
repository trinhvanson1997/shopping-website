<?php

require_once '../controllers/get_date_bill.php';

?>
<!DOCTYPE HTML>
<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <!-- Latest compiled and minified CSS & JS -->
    <script
        src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" media="screen"
          href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../bootstrap/css/main.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/css/prettyPhoto.css" rel="stylesheet">
    <link href="../bootstrap/css/price-range.css" rel="stylesheet">
    <link href="../bootstrap/css/animate.css" rel="stylesheet">

    <link href="../bootstrap/css/responsive.css" rel="stylesheet">
    <link href="../bootstrap/css/pagination.css" rel="stylesheet">


    <script>
    window.onload = function () {
    
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title:{
            text: "BIEU DO DOANH THU"
        },
        axisY: {
            title: "Doanh thu VND",
            valueFormatString: "#0,,.",
            suffix: "000000 vnd",
        },
        axisX: { 
                interval: 2, 
                intervalType: "day", 
                valueFormatString: "DD-MM-YYYY", 
                labelAngle: -45
            }, 
        data: [{
            type: "spline",
            markerSize: 0,
            xValueFormatString: "YYYY-MM-DD",
            yValueFormatString: "#,##0.## vnd",
            xValueType:"dateTime",
            dataPoints: <?php echo json_encode($arr, JSON_NUMERIC_CHECK); ?>
        }]
    });
    
    chart.render();
    
    }
    </script>
</head>
<body>
	
	<div id="chartContainer" style="height: 400px; width: 100%;"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<div class="col-md-11 text-right" style="padding-bottom: 20px">
    <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-top: 0px" onclick="window.location = 'home.php'">
            CLOSE</button>
    </div>
</body>
</html> 