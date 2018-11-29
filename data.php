<?php
header('Content-Type: application/json');

include "db.php";

$sqlQuery = "SELECT c_id,cust_name,total FROM cater_customer_info ORDER BY c_id";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}



echo json_encode($data);
?>