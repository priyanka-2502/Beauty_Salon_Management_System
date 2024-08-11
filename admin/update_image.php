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
    $image=$_FILES["image"]["name"];
// get the image extension
$extension = substr($image,strlen($image)-4,strlen($image));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$newimage=($image).time().$extension;
// Code for move image into directory
move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$newimage);
   
 $eid=$_GET['lid'];
     
    $query=mysqli_query($con, "update  tblservices set Image='$newimage' where ID='$eid' ");
    if ($query) {
  
    echo "<script>alert('Service Image has been Updated.');</script>";
    header('location:update_services.php');
  }
  else
    {
      
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }

  
}
}
  ?>
  <section>
  <h3 class="title1">Update Services</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Parlour Services:</h4>
						</div>
						<div class="form-body">
							<form method="post" enctype="multipart/form-data">
								
  <?php
 $cid=$_GET['lid'];
$ret=mysqli_query($con,"select * from  tblservices where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 

  
							<br> <div class="form-group"> <label for="exampleInputEmail1">Service Name</label> <input type="text" class="form-control" id="sername" name="sername" placeholder="Service Name" value="<?php  echo $row['ServiceName'];?>" readonly="true"> </div>
							 
							 <br><div class="form-group"> <label for="exampleInputPassword1">Old Image</label>  <img src="images/<?php echo $row['Image']?>" width="120">
               </div>
               <br><div class="form-group"> <label for="exampleInputEmail1">New Images</label> <input type="file" class="form-control" id="image" name="image" value="" required="true"> </div>
							 <?php } ?>
							<br>  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
                        <?php } ?>	
  </section>