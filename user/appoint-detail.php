<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>

<?php
include('includes/header.php');
?>
<body >
<section>
    <div>
        <h1 style="text-align:center;font-weight:bold;font-size:40px;padding:10px;">Appointment details</h1>
    </div>
    <?php
$cid=$_GET['aptnumber'];
$ret=mysqli_query($con,"select tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblbook.ID as bid,tblbook.AptNumber,tblbook.AptDate,tblbook.AptTime,tblbook.Message,tblbook.BookingDate,tblbook.Remark,tblbook.Status,tblbook.RemarkDate from tblbook join tbluser on tbluser.ID=tblbook.UserID where tblbook.AptNumber='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
    <table class="table table-bordered" >
                            <tr>
    <th style="border-color:black;">Appointment Number</th>
    <td style="border-color:black;"><?php  echo $row['AptNumber'];?></td>
  </tr>
  <tr>
<th style="border-color:black;">Name</th>
    <td style="border-color:black;"><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
  </tr>

<tr>
    <th style="border-color:black;">Email</th>
    <td style="border-color:black;"><?php  echo $row['Email'];?></td>
  </tr>
   <tr>
    <th style="border-color:black;">Mobile Number</th>
    <td style="border-color:black;"><?php  echo $row['MobileNumber'];?></td>
  </tr>
   <tr>
    <th style="border-color:black;">Appointment Date</th>
    <td style="border-color:black;"><?php  echo $row['AptDate'];?></td>
  </tr>
 
<tr>
    <th style="border-color:black;">Appointment Time</th>
    <td style="border-color:black;"><?php  echo $row['AptTime'];?></td>
  </tr>
  
  
  <tr>
    <th style="border-color:black;">Apply Date</th>
    <td style="border-color:black;"><?php  echo $row['BookingDate'];?></td>
  </tr>
  

<tr>
    <th style="border-color:black;">Status</th>
    <td style="border-color:black;"> <?php  
if($row['Status']=="")
{
  echo "Not Updated Yet";
}

if($row['Status']=="Selected")
{
  echo "Selected";
}

if($row['Status']=="Rejected")
{
  echo "Rejected";
}

     ;?></td>
  </tr>
                        </table><?php } }?>
                    </div> </div>
                
    </div>
   
    </div></div>
</section>
</body>