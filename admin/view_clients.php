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
mysqli_query($con,"delete from tbluser where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='view_clients.php'</script>";
          }

  ?>
  <body style="background-color:plum;">
<div class="clients">
  <marquee><h3><b>CUSTOMER DETAILS:<b></marquee></h3>
  <table class="table table-bordered table-hover">
     <thead>
       <tr style="background-color:black;"> 
       <th>SR.NO</th>
        <th>NAME</th>
        <th>MOBILE NUMBER</th>
        <th>EMAIL</th>
         <th>REGISTRATION DATE</th>
         <th>ACTION</th>
         </tr> 
        </thead> 
        <tbody style="background-color:white;color:black;">
<?php
$ret=mysqli_query($con,"select *from  tbluser");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> 
              <th style="width:30px;" scope="row"><?php echo $cnt;?></th> 
              <td style="width:100px;"><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td> 
              <td style="width:60px;"><?php  echo $row['MobileNumber'];?></td>
              <td style="width:100px;"><?php  echo $row['Email'];?></td>
              <td style="width:50px;"><?php  echo $row['RegDate'];?></td> 
						 	<td style="width:30px;"> 
              <a href="assign_services.php?addid=<?php echo $row['ID'];?>" class="btn btn-primary">Assign Services</a><br><br>
<a href="view_clients.php?delid=<?php echo $row['ID'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
						 		</td> 
                </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> 
</table> 
				<?php } ?>
        </div>
</body>
  