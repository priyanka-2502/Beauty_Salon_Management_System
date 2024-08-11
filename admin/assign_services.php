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
if(isset($_POST['submit'])){


$uid=intval($_GET['addid']);
$invoiceid=mt_rand(100000000, 999999999);
$sid=$_POST['sids'];
for($i=0;$i<count($sid);$i++){
   $svid=$sid[$i];
$ret=mysqli_query($con,"insert into tblinvoice(Userid,ServiceId,BillingId) values('$uid','$svid','$invoiceid');");


echo '<script>alert("Invoice created successfully. Invoice number is "+"'.$invoiceid.'")</script>';
echo "<script>window.location.href ='invoices.php'</script>";
}
}
 


  ?>
  <body style="background-color:plum;">
  <section>
  <h4>Assign Services:</h4>
<form method="post">
<table class="table table-bordered table-hover">
              <thead> 
              <tr style="background-color:black;"> 
                   <th>SR.NO.</th>
                    <th>SERVICE NAME</th>
                     <th>SERVICE PRICE</th>
                      <th>ACTION</th> 
                    </tr>
                   </thead> 
                   <tbody style="background-color:white;color:black;">
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

 <tr> 
<th scope="row"><?php echo $cnt;?></th> 
<td><?php  echo $row['ServiceName'];?></td> 
<td><?php  echo $row['Cost'];?></td> 
<td><input type="checkbox" name="sids[]" value="<?php  echo $row['ID'];?>" ></td> 
</tr>   
<?php 
$cnt=$cnt+1;
}?>
<tr>
<td colspan="4" align="center">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>		
</td>

</tr>

</tbody> </table> 
</form>
<?php } ?>
  </section>
</body>