<?php
include('includes/header.php');
?>

<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } else{



  ?>
  <body style="background-color:plum;">
<section>

<h3 class="title1">Invoice Details</h3>
					
	<?php
	$invid=intval($_GET['invoiceid']);
$ret=mysqli_query($con,"select DISTINCT  date(tblinvoice.PostingDate) as invoicedate,tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tbluser.RegDate
	from  tblinvoice 
	join tbluser on tbluser.ID=tblinvoice.Userid 
	where tblinvoice.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>				
<div class="table-responsive bs-example widget-shadow">
						<h4>Invoice #<?php echo $invid;?></h4>
						<table style="background-color:white;color:black;" class="table-bordered"> 
<tr>
<th colspan="6">Customer Details</th>	
</tr>
							 <tr> 
								<th>Name</th> 
								<td><?php echo $row['FirstName']?> <?php echo $row['LastName']?></td> 
								<th>Contact no.</th> 
								<td><?php echo $row['MobileNumber']?></td>
								<th>Email </th> 
								<td><?php echo $row['Email']?></td>
							</tr> 
							 <tr> 
								<th>Registration Date</th> 
								<td><?php echo $row['RegDate']?></td> 
								<th>Invoice Date</th> 
								<td colspan="3"><?php echo $row['invoicedate']?></td> 
							</tr> 
<?php }?>
</table> 
<table style="background-color:white;color:black;" class="table-bordered">
<tr>
<th colspan="3">Services Details</th>	
</tr>
<tr>
<th>sr.no.</th>	
<th>Service</th>
<th>Cost</th>
</tr>

<?php
$ret=mysqli_query($con,"select tblservices.ServiceName,tblservices.Cost  
	from  tblinvoice 
	join tblservices on tblservices.ID=tblinvoice.ServiceId 
	where tblinvoice.BillingId='$invid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
	?>

<tr>
<th><?php echo $cnt;?></th>
<td><?php echo $row['ServiceName']?></td>	
<td><?php echo $subtotal=$row['Cost']?></td>
</tr>
<?php 
$cnt=$cnt+1;
$gtotal+=$subtotal;
} ?>

<tr>
<th colspan="2" style="text-align:center">Grand Total</th>
<th><?php echo $gtotal?></th>	

</tr>
</table>
  <p style="margin-top:1%"  align="center">
  
</p>

					</div>
				<?php } ?>
</section>
</body>