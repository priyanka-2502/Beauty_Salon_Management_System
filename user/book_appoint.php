<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {

    $uid=$_SESSION['bpmsuid'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $msg=$_POST['message'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblbook(UserID,AptNumber,AptDate,AptTime,Message) value('$uid','$aptnumber','$adate','$atime','$msg')");

    if ($query) {
$ret=mysqli_query($con,"select AptNumber from tblbook where tblbook.UserID='$uid' order by ID desc limit 1;");
$result=mysqli_fetch_array($ret);
$_SESSION['aptno']=$result['AptNumber'];
 echo "<script>window.location.href='thank_you.php'</script>";  
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  
?>

<?php
include('includes/header.php');
?>
<section>
<div class="appoint1" style=" background-image: url(../images/brush-and-face-powder.jpg);  background-size:cover;
    background-repeat: no-repeat; ">
    <br><br><br>
<div class="box4">
<h1 style="text-align: center;font-size: 35px;font-family: 'Great Vibes', cursive;">
Beauty Salon Management</h1><br>



<h1 style="text-align: center;font-size: 25px;">APPOINTMENT FORM</h1><br>





<form method="post">
                        <div style="padding-top: 30px;">
                            <label>Appointment Date</label>
                            <br><br>
                            <input type="date" class="form-control appointment_date" placeholder="Date" name="adate" id='adate' required="true"></div>
                        
                            <div style="padding-top: 30px;">
                            <label>Appointment Time</label>
                            <br><br>
                            <input type="time" class="form-control appointment_time" placeholder="Time" name="atime" id='atime' required="true"></div>

                        <div style="padding-top: 30px;">
                        <label>Message</label>
                        <br><br>
                        <textarea class="form-control" id="message" name="message" placeholder="Services you would like to do.." required=""></textarea></div>
                        <br>
                        <button type="submit" class="btn btn-info" name="submit">Make an Appointment</button>
                    </form>
</div>

</div>
</div>
        

</section>
<?php } ?>
</body>
</html>