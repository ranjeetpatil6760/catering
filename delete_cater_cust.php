<?php
include 'db.php';
$ids=$_GET['id'];
mysqli_query($con,"delete from cater_customer_info where c_id='$ids'");
header("Location: Addcatbill.php");
?>