<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container-fluid {
            height: 50px;
            background-color: #f9f9f9;
        }

        body {

            color: black;
        }

        a {
            text-decoration: none;
            line-height: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-10">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button"
                        data-toggle="dropdown"><span>Xin chào, <?php
                        echo $_SESSION["username"];
                        ?></span><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><a href="change_info.php">Tài khoản</a></li>
                    <li><a href="view_customers.php">Danh sách khách hàng</a></li>
                    <li><a href="view_waiting.php">Duyệt tài khoản</a></li>
                </ul>
            </div>
        </div>
        <!--<a href="index.php" type="button" onclick="logout"><span>Đăng xuất</span></a>
        <span>   </span>-->
    </div>

</div>

<script>

</script>
</body>
</html>