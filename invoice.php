
<!DOCTYPE html>
<html lang="en">
<head>
	
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Item Lists</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="invoice-box">
						

					<div class="invoice-header text-right">
						
						<span style="float:left;width: 20%;">
            <img src="img/logo.png"  
             width="100" height"100" />
        </span>
						
						<h4 style="font-size:16px;">अमोल साळवी <br><h5>9923296983</h5> </h4>
						<table align="right"><h4 ><tr><th style="font-size:16px;">अस्मिता  साळवी</th></h4>
							<h4 style="font-size:16px;"><th style="font-size:16px;">अनिल साळवी </th></h4></tr><tr><th><h5>9049400804</h5> </h4><th><h5>9823596983</h5></h4></tr></table></div><br><br>
						<h5 align="center"><b>967 'ई' वॉर्ड शाहूपुरी 6 वी गल्ली कोल्हापूर </b></h5>
					
				<hr style=" border-top: double ;" />
					<hr>
					<div style="width: 100%">
						<div style="width: 50%; float:left;">नाव: <input type="text" name=""><br>पत्ता: <input type="text" name=""></div>
						<div style="width: 50%; float:right;">दिनांक:<input type="date" name=""><br> फोन नंबर :<input type="text" name=""><br></div>
				
						<span>जेवणाचा मेनू :<input type="text" name=""></span>

					</div>
					<div class="invoice-body">					
											<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
						  	<?php
$con=mysqli_connect("localhost","root","","test");
mysqli_query($con,"SET character_set_results=utf8");  
mb_language('uni');  
mb_internal_encoding('UTF-8');  

mysqli_query($con,"set names 'utf8'"); 
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM item_list");
							  
$rows = $result->num_rows;    // Find total rows returned by database
 if($rows > 0) {
 $cols = 5;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
 ?><table style="height: 50%;" align="center" cellpadding="2" cellspacing="0">
                	<?php
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr style="width:1px">'; 
 }
                   
 echo "<td style='width: 10%;'>".$row['items']."</td>";?>
 <td >
 	
<input type="text" name="quantity" style="width: 40%;height:8px;">
</div>
</td>
<?php
 if(($counter % $cols) == 0) { // If it's last column in each row then counter remainder will be zero
 echo '</tr>'; 
 }
 $counter++;    // Increase the counter
 }
 $result->free();
 if($nbsp > 0) { // Add unused column in last row
 for ($i = 0; $i < $nbsp; $i++) { 
 echo '<td>&nbsp;</td>'; 
 }
 echo '</tr>';
 }
                echo '</table>';
            }
mysqli_close($con);
?>
						  </thead>   
						  <tbody>
							
							
							
						
						  </tbody>
					  </table>  
					</div>
				</div>
				<div class="text-center">
					<button class="btn btn-default print-btn" onclick="window.print();">Print</button>
				</div>			
			</div>			
		</div>
	</div>
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>