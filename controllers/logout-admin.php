<?php
	session_start();
 	session_destroy();
    echo "<script>window.location = '../admin-views/index.php';</script>";

?>