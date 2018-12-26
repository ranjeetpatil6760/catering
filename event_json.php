<?php
include "db.php";
$status= array();
$result = mysqli_query($con,"SELECT * FROM event_info order by(c_id) desc");
if (mysqli_num_rows($result) > 0) {
   
    // products node
    $status["catering"] = array();
 while($row = mysqli_fetch_array($result))
{
$fields = array();

$fields['c_id'] =$row['c_id'];
$fields['o_dt'] = $row['o_dt']; 
$fields['cust_name'] = $row['cust_name'];
$fields['event_name'] =$row['event_name'];
$fields['date'] = $row['date'] ; 
$fields['cust_add'] =$row['cust_add'] ;
$fields['cust_phone'] = $row['cust_phone'] ;
$fields['qty'] = $row['qty'];

 array_push($status["catering"], $fields);
}

  $status["success"] = 1;
    echo json_encode($status);
} else {
    // no products found
    $status["success"] = 0;
    $status["message"] = "No status found";

    // echo no users JSON
    echo json_encode($status);
}

?>