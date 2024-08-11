<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsaid']==0)) {
  header('location:logout.php');
  } 
     ?>
<?php
include('includes/header.php');
//include('partials/login-check.php')


?>

<div class="dashboard">
<div class="main">
    <marquee><h1>WELCOME TO ADMIN PANEL DASHBOARD</h1></marquee>
</div>
<br><br>
<div class="row">
  <div class="column">
    <div class="card">
	<?php $query1=mysqli_query($con,"Select * from tbluser");
$totalcust=mysqli_num_rows($query1);
?>
      <h3>Total Customers</h3>
      <p style="font-size:100px;"><?php echo $totalcust;?></p>
     
    </div>
  </div>

  <div class="column">
    <div class="card">
	<?php $query2=mysqli_query($con,"Select * from tblbook");
$totalappointment=mysqli_num_rows($query2);
?>
      <h3>Total Appointment</h3>
      <p style="font-size:100px;"><?php echo $totalappointment;?></p>
     
    </div>
  </div>
  
  
  <div class="column">
    <div class="card">
	<?php $query3=mysqli_query($con,"Select * from tblbook where Status='Selected'");
$totalaccapt=mysqli_num_rows($query3);
?>
      <h3>Total Accepted Appointments</h3>
      <p style="font-size:100px;"><?php echo $totalaccapt;?></p>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card">
	<?php $query4=mysqli_query($con,"Select * from tblbook where Status='Rejected'");
$totalrejapt=mysqli_num_rows($query4);
?>
      <h3>Total Rejected Appointments</h3>
      <p style="font-size:100px;"><?php echo $totalrejapt;?></p>
     
    </div>
  </div>


<div class="column">
    <div class="card">
	<?php $query5=mysqli_query($con,"Select * from  tblservices");
$totalser=mysqli_num_rows($query5);
?>
      <h3>Total Services</h3>
      <p style="font-size:100px;"> <?php echo $totalser;?></p>
      
    </div>
  </div>
</div>
</div>

</div>
<br><br><br>

</body>
</html>