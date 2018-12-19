<!DOCTYPE html>
<html lang="en">
<head>
<?php	include "db.php";?>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Hotel Bill Invoice</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
	
		
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
</head>

<body>


		<!-- start: Header -->
	<div>
          <?php include 'header.php';?>
	
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<?php include 'sidebar.html';?>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Invoice</a>
				</li>
			</ul>
			
	<!-- 		<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Form Elements</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Auto complete </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block">Start typing to activate auto complete!</p>
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Date input</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">File input</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Textarea WYSIWYG</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div>-->

			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Add item to list</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="" method="POST">
							<fieldset>
								 <div class="control-group">
								<label class="control-label" for="focusedInput">Date:</label>
								<div class="controls">
								<?PHP
$date=date("Y-m-d");

echo"<input type='date' class='input-xlarge focused' name='date'  id='datepicker' 
value='$date' required >";?>


								</div>
							  </div>
							  <!-- <div class="control-group">
								<label class="control-label" for="focusedInput">Customer Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Customer Name" name="name">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Contact:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Mobile Number" name="contact">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Address:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Address" name="address">
								</div>
							  </div> -->
							  
					
						       	        <div class="control-group">
								<label class="control-label" for="selectError">Add Items</label>
								<div class="controls">
									<div id="itemRows">

								  <select id="selectError" data-rel="chosen" size="4" name="i_name">
<?php

include "db.php";
								  $q1= "SELECT * FROM item_list";
$result = mysqli_query($con,$q1) or die (mysql_error());
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	?>
	<option><?php echo $row['items']?></option>
<?php
}
?>


								  </select>
							

								

Quantity: <input type="text" name="qty" size="2" />
<br><br>
<div class="control-group">
								<label class="control-label" for="selectError">Unit
								</label>
								<div class="controls">
									<div id="items">

	<select id="sel" data-rel="chosen" name="unit">
	<option>kg</option>
	<option>gm</option>
	<option>mg</option>
	<option>ltr</option>
	<option>nag</option>
	<option>dozen</option>
</select>
Price: <input type="text" name="price" size="2" />



<input type="hidden" name="add_total"/> <input onclick="addRow(this.form);" class="btn btn-primary" type="button" value="Add Items" /><br><br>

</div>
</div>
</div>

<script type="text/javascript">
var rowNum = 0;

function addRow(frm) {
rowNum ++;
var row = '<hr><div><p id="rowNum'+rowNum+'">Item: <input type="text" name="iname[]" size="4" value="'+frm.i_name.value+'">Quantity: <input type="text" name="iqty[]" size="2" value="'+frm.qty.value+'">Unit: <input type="text" name="iunit[]" size="2" value="'+frm.unit.value+'">Price: <input type="text" name="iprice[]" size="2" value="'+frm.price.value+'"><br><br><input  type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+');"><br></p></div>';
 

jQuery('#itemRows').append(row);
frm.i_name.value = '';
frm.qty.value = '';
frm.price.value = '';
frm.unit.value = '';
//frm.add_total.value = '';
//$('#stotal').val(sum);
}
function removeRow(rnum) {
jQuery('#rowNum'+rnum).remove();
}



</script>

							   
							  <div class="form-actions" >
								<button type="submit" class="btn btn-primary" name="save">Save changes</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						  </form>
						  <?php
include "db.php";
//$id1 = mysql_query("SELECT MAX(h_id) FROM hotel_customer_info");
//$id = "SELECT * FROM hotel_customer_info WHERE h_id = $id1 ";
if(isset($_POST['save']))
{
$date=$_POST['date'];


//inserting in inventory_stock_hotel


foreach($_POST['iname'] as $cnt => $a) {
$sql = "INSERT INTO inventory_stock_cater (date, item, qty, unit, price) VALUES ('$date',N'$a', '".$_POST['iqty'][$cnt]."','".$_POST['iunit'][$cnt]."', '".$_POST['iprice'][$cnt]."');";
if(mysqli_query($con,$sql))
{
	echo "<script> alert('Stored successfully')";
	echo " </script>";
}
else
	{
	echo "<script> alert('Failed to store...Try Again!')";
	echo " </script>";
}

//mysqli_query($con,$sql);
}

}						  

?>

					
					</div>
		
				</div><!--/span-->
			
			</div><!--/row-->
			
			

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary" name="save">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	 <?php include 'footer.html';?>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
