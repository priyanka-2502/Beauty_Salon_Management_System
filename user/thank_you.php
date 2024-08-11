<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

  }

  ?>
<?php
include('includes/header.php')
?>
<section>
<div class="appoint">
    <br><br>
    <div class="thank-you">
        <h1 style="color:black;font-size:100px;text-align:center;"><b>THANKYOU.... !</b></h1>
</div>
<br><br>
<div>
<h2 class="w3ls_head" style="color:black;font-size:50px;text-align:center;">THANKYOU FOR BOOKING AN APPOINTMENT.<br>
YOUR APPOINTMENT NUMBER IS <?php echo $_SESSION['aptno'];?> </h2>
</div>
</div>
</section>