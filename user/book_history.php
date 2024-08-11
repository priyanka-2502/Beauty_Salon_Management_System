<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

  

  ?>
<?php
include('includes/header.php')
?>
<section>
  <div class="book_history">
<div class="history">
    <br><br>
    <div class="book_history">
       <marquee> <h1><b>YOUR APPOINTMENT HISTORY</b></h1> </marquee><br><br>

        <table class="table table-bordered table-hover">
            <tr style="background-color:lightblue;">
            <th>sr.no</th>
            <th>Appointment Number</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
            <th>Appointment Status</th>
            <th>Actions</th>
</tr>

<tbody>
                               
                               <tr>
                                   <?php
                                  $userid= $_SESSION['bpmsuid'];
$query=mysqli_query($con,"select tbluser.ID as uid, tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblbook.ID as bid,tblbook.AptNumber,tblbook.AptDate,tblbook.AptTime,tblbook.Message,tblbook.BookingDate,tblbook.Status from tblbook join tbluser on tbluser.ID=tblbook.UserID where tbluser.ID='$userid'");
$cnt=1;
             while($row=mysqli_fetch_array($query))
             { ?>
              <tr>
   <td><?php echo $cnt;?></td>
<td><?php echo $row['AptNumber'];?></td>
<td><p> <?php echo $row['AptDate']?> </p></td> 
<td><?php echo $row['AptTime']?></td> 
<td><?php $status=$row['Status'];
if($status==''){
echo "Waiting for confirmation";   
} else{
echo $status;
}
?>  </td>   

<td><a href="appoint-detail.php?aptnumber=<?php echo $row['AptNumber'];?>" class="btn btn-primary">View</a></td>       
</tr><?php $cnt=$cnt+1; } ?>
                            
                           </tbody>
<?php } ?>
        </table>
</div>
<div>

</div>
</div>
</div>
</section>