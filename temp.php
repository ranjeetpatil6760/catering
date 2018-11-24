
<div class="invoice-header text-center">
						<h5><b>TAX INVOICE</b></h5>
						<h3 style="margin-top:10px;">SHREE CHINTAMANI SERVICES</h3>
						<h4 style="font-size:16px;">Sr. No. 32, Rahatni, Pimpri, Pune – 411017.</h4>
						<h5>Contact: (+91) 800 799 9393, (+91) 800 799 9393 </h5>
						<h5>GSTIN: 27ABCDE2292F1ZJ</h5>
					</div>

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
 $cols = 4;    // Define number of columns
 $counter = 1;     // Counter used to identify if we need to start or end a row
 $nbsp = $cols - ($rows % $cols);    // Calculate the number of blank columns
 
                echo '<table width="100%" align="center" cellpadding="4" cellspacing="1">';
 while ($row = $result->fetch_array()) {
 if(($counter % $cols) == 1) {    // Check if it's new row
 echo '<tr>'; 
 }
                   
 echo "<td>" . $row['items'] . "</td>";?>
 <td>
<input type="text" name="">
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