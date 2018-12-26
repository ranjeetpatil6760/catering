<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Catering Bill</title>
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
					<a href="index.php">Home</a>
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
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Make Catering Bill</h2>
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
								 <!-- <input class="input-xlarge focused" id="focusedInput" type="date" placeholder="" name="date"> -->

<?PHP

$date=date("Y-m-d");

echo"<input type='date' class='input-xlarge focused' name='date'  id='datepicker' 
value='$date' required >";

$ids=$_GET['id'];

$result = mysqli_query($con,"SELECT * FROM event_info where c_id='$ids'");
 while($row = mysqli_fetch_array($result))
{
?>

								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="focusedInput">Event Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Event Name" name="event_name" value="<?php echo $row['event_name']?>" ena>
								</div>
							</div>


							  <div class="control-group">
								<label class="control-label" for="focusedInput">Customer Name:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Customer Name" name="name" value="<?php echo $row['cust_name']?>">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Contact:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Mobile Number" name="contact" value="<?php echo $row['cust_phone']?>">
								</div>

							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Address:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Address" name="address" value="<?php echo $row['cust_add'] ?>">
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="focusedInput">Number of People:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" placeholder="Address" name="address" value="<?php echo $row['qty'] ?>">
								</div>
							  </div>
							  
						        <div class="control-group">
								<label class="control-label" for="selectError">Add Items</label>
								<div class="controls">
									<div id="itemRows">

				
								  Items:<select id="selectError" data-rel="chosen" size="4" name="item_name">
								  	
								
<?php
}
								  $q1= "SELECT * FROM cat_orders where c_id='$ids'";
$result = mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	?>
	<option><?php echo $row['d_name']?></option>
<?php
}
?>
	
</select>
							

								

Quantity: <input type="text" name="add_qty" size="4" />

Price: <input type="text" name="add_price" />

 <input type="hidden" name="add_total" /> <br><input onclick="addRow(this.form);" type="button" class="btn btn-primary" value="+Add Item" name="Butn"/><br>
<span><h3>Order details:</h3></span></div>


<script type="text/javascript">
	document.cookie = "flag =0";
	 
var rowNum = 0;
var sum=0;
var rt=0;
function addRow(frm) {
rowNum ++;
var row = '<p id="rowNum'+rowNum+'"> Item: <input type="select" name="dname[]" size="4" value="'+frm.item_name.value+'" readonly="true">Quantity: <input type="text" name="dqty[]" size="4" value="'+frm.add_qty.value+'" readonly="true">Price: <input type="text" name="price[]" value="'+frm.add_price.value+'" readonly="true">Amount: <input type="text" name="Tprice[]" value="'+frm.add_price.value*frm.add_qty.value+'" readonly="true"><br> <input type="button" class="btn btn-danger" value="-Remove" onclick="removeRow('+rowNum+','+frm.add_price.value*frm.add_qty.value+');"><br></p>';
 sum+=frm.add_price.value*frm.add_qty.value;
jQuery('#itemRows').append(row);
frm.item_name.value = '';
frm.add_qty.value = '';
frm.add_price.value = '';
frm.add_total.value = '';
$('#stotal').val(sum);
 
}
function removeRow(rnum,rt) {
jQuery('#rowNum'+rnum).remove();
var curnt_val=$('#stotal').val();
curnt_val=curnt_val-rt;
$('#stotal').val(curnt_val);
sum=curnt_val;
curnt_val=0;

}
var orowNum = 0;
var ort=0;
function addoRow(frm) {
orowNum ++;
var orow = '<p id="orowNum'+orowNum+'">Item: <input type="text" name="oname[]" size="4" value="'+frm.add_oitem.value+'" readonly="true">Quantity: <input type="text" name="oqty[]" size="4" value="'+frm.add_oqty.value+'" readonly="true"> Price: <input type="text" name="oprice[]" value="'+frm.add_oprice.value+'" readonly="true">Amount: <input type="text" name="oTprice[]" value="'+frm.add_oprice.value*frm.add_oqty.value+'" readonly="true"> <input type="button" class="btn btn-danger" value="-Remove" onclick="removeORow('+orowNum+','+frm.add_oprice.value*frm.add_oqty.value+');"><br></p>';
 sum+=frm.add_oprice.value*frm.add_oqty.value;
jQuery('#itemoRows').append(orow);
frm.add_oitem.value = '';
frm.add_oqty.value = '';
frm.add_oprice.value = '';
frm.add_ototal.value = '';
$('#stotal').val(sum);
 document.cookie = "flag =123";
}
function removeORow(rnum,ort) {
jQuery('#orowNum'+rnum).remove();
var ocurnt_val=$('#stotal').val();
ocurnt_val=ocurnt_val-ort;
}


$(document).ready(function(){
    $('#dcnt').change(function(){
    	var s=$('#stotal').val();
    	var d=$('#dcnt').val();
    	var a=s-((s*d)/100);
        $('#total').val(a);
    });
    $('#adv').change(function(){
    	var t=$('#total').val();
    	var a=$('#adv').val();
    	var e=t-a;
        $('#dues').val(e);
    });
});

</script>

<?php 
   $phpVar =  $_COOKIE['flag'];
   
   ?>


			
							  </div>
							</div>
                                <div class="control-group">
								<label class="control-label" for="selectError">Outsourced Items:</label>
								<div class="controls">
									<div id="itemoRows">
							Item: <input type="text" name="add_oitem" size="4" />
							Quantity: <input type="text" name="add_oqty" size="4" />
Price: <input type="text" name="add_oprice" /><br>
<input type="hidden" name="add_ototal" /> <input onclick="addoRow(this.form);" type="button" class="btn btn-primary" value="+Add Item" name="oButn" /><br>
<span><h3>Order details:</h3></span><hr></div>
<script type="text/javascript">
</script>

							  </div>
							</div>



							   <div class="control-group">
								<label class="control-label" for="focusedInput">Subtotal:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="stotal" type="text" placeholder="Rs." name="subtotal">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Discount:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="dcnt" type="text" placeholder="%" name="discount">
								</div>
							  </div>
							     <div class="control-group">
								<label class="control-label" for="focusedInput">Total:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="total" type="text" placeholder="Rs." name="total">
								</div>
							  </div>
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Advance:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="adv" type="text" placeholder="Rs." name="advance">
								</div>
							  </div>
							  	 <div class="control-group">
								<label class="control-label" for="focusedInput">Dues:</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="dues" type="text" placeholder="Rs." name="dues">
								</div>
							  </div>

							  	 <div class="control-group">
								<label class="control-label" for="focusedInput">Payment Status:</label>
								<div class="controls">
									
								<select data-rel="chosen" size="4" name="pay_status">
									<option>Full Payment</option>
									<option>Advance Payment</option>
									<option>No Payment</option>
								  </select>
							

								</div>
							  </div>	
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
$adv=$_POST['advance'];
$dues=$_POST['dues'];
$discount=$_POST['discount'];
$total=$_POST['total'];
$p_status=$_POST['pay_status'];
//inserting in hotel_customer_info
$qry="INSERT INTO cat_bill (date, c_id, discount, total,advance,dues,pay_status) VALUES ('$date','$ids','$discount','$total','$adv','$dues','$p_status')";
if(mysqli_query($con,$qry))
{
	echo "<script> alert('Stored successfully')";
	echo " </script>";
}
else
	{
	echo "<script> alert('Failed to store...Try Again!')";
	echo " </script>";
}
//inserting in cat_dishes
/*
$id= "SELECT * FROM cater_customer_info WHERE c_id = (SELECT MAX(c_id) FROM cater_customer_info)";
$result = mysqli_query($con,$id);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	$last_id = $row['c_id'];
}*/
foreach($_POST['dname'] as $cnt => $a) {
$sql = "INSERT INTO cat_dishes (d_name, c_id, d_qty, d_price, total) VALUES ('$a', '$ids', '".$_POST['dqty'][$cnt]."', '".$_POST['price'][$cnt]."', '".$_POST['Tprice'][$cnt]."');";
mysqli_query($con,$sql);
}
if($phpVar=="123")
{
foreach($_POST['oname'] as $ocnt => $oa) {
$osql = "INSERT INTO cat_dishes (outsource,d_name, c_id, d_qty, d_price, total) VALUES ('Yes','$oa', '$ids', '".$_POST['oqty'][$ocnt]."', '".$_POST['oprice'][$ocnt]."', '".$_POST['oTprice'][$ocnt]."');";
mysqli_query($con,$osql);
}
unset($_COOKIE['flag']);
$phpVar=0;
}
}
?>
<script type="text/javascript">
	$sum=0;
</script>
					
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
