<?php include_once "head2.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <title>View Waiting</title>
</head>
<body>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        <h3>Awaiting Approval</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered" id="table_waiting">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Birthday</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Username</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="table_body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script src="../public/js/view_waiting.js"></script>
</body>
</html>