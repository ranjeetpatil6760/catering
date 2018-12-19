<?php
include 'db.php';
$ids=$_GET['id'];
mysqli_query($con,"delete from h_worker_info where w_hid='$ids'");
header("Location: h_worker.php");
?>