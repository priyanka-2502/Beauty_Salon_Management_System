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
mysqli_query($con,"delete from tblbook where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='new_appointment.php'</script>";
          }

  ?>
  <body style="background-color:plum;">

<h3><marquee><b>NEW APPOINTMENTS:</b></marquee></h3>
<table class="table table-bordered table-hover">
               <thead> 
               <tr style="background-color:black;"> 
                   <th>SR.NO</th> 
                   <th> APPOINTMENT NO.</th>
                    <th>NAME</th>
                    <th>MOBILE NO.</th>
                     <th>APPOINTMENT DATE</th>
                     <th>APPOINTMENT TIME</th>
                     <th>MESSAGE</th>
							<th>STATUS</th>
              <th>ACTION</th>
             </tr> 
            </thead> 
            <tbody style="background-color:white;color:black;">
<?php
$ret=mysqli_query($con,"select tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblbook.ID as bid,tblbook.AptNumber,tblbook.AptDate,tblbook.AptTime,tblbook.Message,tblbook.BookingDate,tblbook.Status from tblbook join tbluser on tbluser.ID=tblbook.UserID where tblbook.Status is null");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr>
               <th scope="row"><?php echo $cnt;?></th>
                <td><?php  echo $row['AptNumber'];?></td> 
                <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                <td><?php  echo $row['MobileNumber'];?></td><td><?php  echo $row['AptDate'];?></td>
                 <td><?php  echo $row['AptTime'];?></td>
                 <td><?php  echo $row['Message'];?></td>
                 <?php if($row['Status']==""){ ?>

                     <td class="font-w600"><?php echo "Not Updated Yet"; ?></td>
                     <?php } else { ?>
                      <td><?php  echo $row['Status'];?></td><?php } ?> 
                      <td><a href="view_appointment.php?viewid=<?php echo $row['bid'];?>" class="btn btn-primary">View</a>
<a href="new_appointment.php?delid=<?php echo $row['bid'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody>
 </table> 

 <?php } ?>
</body>
