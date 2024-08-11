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
mysqli_query($con,"delete from tblservices where ID ='$sid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='manage_services.php'</script>";
          }


  ?>
  <body style="background-color:plum;">
    
 
  
  <h4><marquee><B>UPDATE SERVICES:</B></marquee></h4>
  <table class="table table-bordered table-hover">
              <thead> 
              <tr style="background-color:black;"> 
                  <th style="width:10px";>SR.NO</th> 
                  <th style="width:100px";>SERVICE NAME</th> 
                  <th style="width:100px";>SERVICE PRICE</th>
                   <th style="width:100px";>DATE</th>
                   <th style="width:50px";>ACTION</th> 
                  </tr> 
                </thead>
                <tbody style="background-color:white;color:black;">
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

						 <tr> 
              <th scope="row">
                <?php echo $cnt;?>
              </th>
               <td><?php  echo $row['ServiceName'];?></td>
                <td><?php  echo $row['Cost'];?></td>
                <td><?php  echo $row['CreationDate'];?></td> 
                <td>
						 	<a href="update_services.php?editid=<?php echo $row['ID'];?>" class="btn btn-primary">Edit</a>
						 	<a href="manage_services.php?delid=<?php echo $row['ID'];?>" class="btn btn-danger" onClick="return confirm('Are you sure you want to delete?')">Delete</a>

						 	</td> </tr>   <?php 
$cnt=$cnt+1;
}?>
</tbody> 
</table>
<?php } ?> 
					
       
        </body>