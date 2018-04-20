<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../public/css/register.css">
    <title>Change Information</title>
</head>
<body>


<div class="section">
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>CHANGE INFORMATION</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="post" role="form">

                        <div id="errors">

                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="" id="name" placeholder="Type your name here">
                        </div>
                        <div class="form-group">
                            <label for="">Birthday</label>
                            <input type="date" class="form-control" name="" id="birthday"
                                   placeholder="Type your birthday here">
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="" id="address"
                                   placeholder="Type your address here">
                        </div>
                        <div class="form-group">
                            <label for="">Phone</label>
                            <input type="text" class="form-control" name="" id="phone"
                                   placeholder="Type your phone number here">
                        </div>

                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" name="" id="username"
                                   placeholder="Type your username here" value="<?php
                            echo $_SESSION['username'];
                            ?>">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control" name="" id="password"
                                   placeholder="Type your password here">
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" id="btnChange">Update</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-primary btn-block" id="btnCancel">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--/section-->

<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../public/js/change_info_cus.js">

</script>


</body>
</html>