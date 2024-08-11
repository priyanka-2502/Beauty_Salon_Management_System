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
if($_GET['delid']){
$sid=$_GET['delid'];
mysqli_query($con,"delete from tblinvoice where BillingId ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='invoices.php'</script>";
          }


  ?>
  <body style="background-color:plum;">
	
  
<section>
<h3 class="title1"><marquee><b>INVOICE LIST</b></marquee></h3><br><br>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						
					<table class="table table-bordered table-hover">
							<thead>
							<tr style="background-color:black;"> 
								<th>SR.NO</th> 
								<th>INVOICE ID</th> 
								<th>CUSTOMER NAME</th> 
								<th>INVOICE DATE</th> 
								<th>ACTION</th>
							</tr> 
							</thead> 
							<tbody style="background-color:white;color:black;">
                            <?php
$ret=mysqli_query($con,"select distinct tbluser.FirstName,tbluser.LastName,tblinvoice.BillingId,date(tblinvoice.PostingDate) as invoicedate from  tbluser   
	join tblinvoice on tbluser.ID=tblinvoice.Userid  order by tblinvoice.ID desc");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> 
						 	<th scope="row"><?php echo $cnt;?></th> 
						 	<td><?php  echo $row['BillingId'];?></td>
						 	<td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
						 	<td><?php  echo $row['invoicedate'];?></td> 
						<td><a href="view_invoices.php?invoiceid=<?php  echo $row['BillingId'];?>" class="btn btn-primary">View</a>
<a href="invoices.php?delid=<?php echo $row['BillingId'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
						 		</td> 

						  </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
<?php } ?>
</section>
</body>