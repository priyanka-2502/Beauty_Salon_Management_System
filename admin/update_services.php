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

if(isset($_POST['submit']))
  {
    $sername=$_POST['sername'];
    $serdesc=$_POST['serdesc'];
    $cost=$_POST['cost'];
   
 $eid=$_GET['editid'];
     
    $query=mysqli_query($con, "update  tblservices set ServiceName='$sername',ServiceDescription='$serdesc',Cost='$cost' where ID='$eid' ");
    if ($query) {
  
    echo "<script>alert('Service has been Updated.');</script>";
    header('location:manage_services.php');
  }
  else
    {
      
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }

  
}
  ?>
  <body style="background-color:plum;">
  <section>
  <div class="service">
        <div class="box1" style="padding-left:0px;">
  <h3 class="title1" style="text-align:center;">UPDATE SERVICE</h3><br><br>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						
						<div class="form-body">
							<form method="post">
								
  <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblservices where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							 <div class="form-group" > <label for="exampleInputEmail1">SERVICE NAME</label> 
               <input type="text" style="width:80%;" class="form-control" id="sername" name="sername" placeholder="Service Name" value="<?php  echo $row['ServiceName'];?>" required="true"> </div>
							
               <br> <div class="form-group"> <label for="exampleInputEmail1">SERVICE DESCRIPTION</label> 
              <textarea type="text" style="width:80%; height:50%;" class="form-control" id="sername" name="serdesc" placeholder="Service Name" value="" required="true"><?php  echo $row['ServiceDescription'];?></textarea> </div>

							 <br><div class="form-group"> <label for="exampleInputPassword1">COST</label> 
               <input type="text" style="width:50%;" id="cost" name="cost" class="form-control" placeholder="Cost" value="<?php  echo $row['Cost'];?>" required="true"> </div>
							
               <br><div class="form-group"> <label for="exampleInputPassword1">IMAGES</label> 
                <img src="images/<?php echo $row['Image']?>" width="120">

               <a href="update_image.php?lid=<?php echo $row['ID'];?>">UPDATE IMAGE</a> </div>

							 <?php } ?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
                        <?php } ?>	
</div>
</div>
  </section>
</body>