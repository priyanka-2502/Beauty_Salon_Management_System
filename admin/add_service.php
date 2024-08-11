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
   $image=$_POST['image'];
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
     
    $query=mysqli_query($con, "insert into  tblservices(ServiceName,ServiceDescription,Cost,Image) value('$sername','$serdesc','$cost','$newimage')");
    if ($query) {
    	echo "<script>alert('Service has been added.');</script>"; 
    		echo "<script>window.location.href = 'add_service.php'</script>";   
    
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  
}
}
  ?>
<?php
include('includes/header.php');
?>
<body style="background-color:plum;">
<section>
    <div class="service">
        <div class="box1">
        <h1 style="text-align: center;font-size: 25px;">ADD SERVICE</h1><br>

       
                    <form method="post" enctype="multipart/form-data">
					<p style="font-size:16px; color:red" align="center"><?php if($msg){
    echo $msg;
  }  ?> </p>

    
<div class="form-group" style="margin-left:40px;"> <label for="exampleInputEmail1">SERVICE NAME:-</label><br><br> 
<input type="text" style="width:80%;" class="form-control" id="sername" name="sername" placeholder="Service Name" value="" required="true"> </div><br>
<div class="form-group" style="margin-left:40px;"> <label for="exampleInputEmail1">SERVICE DESCRIPTION:-</label><br><br>
 <textarea type="text" style="width:80%;" class="form-control" id="sername" name="serdesc" placeholder="Service Name" value="" required="true"></textarea> </div><br>
<div class="form-group" style="margin-left:40px;"> <label for="exampleInputPassword1">COST:-</label> <br><br>
<input type="text" style="width:80%;margin-left:10px;" id="cost" name="cost" class="form-control" placeholder="Cost" value="" required="true"> </div><br>
<div class="form-group" style="margin-left:40px;"> <label for="exampleInputEmail1">ADD IMAGE:-</label> <br><br>
<input type="file" style="width:80%;" class="form-control" id="image" name="image" value="" required="true"> </div><br>
<button type="submit" style="margin-left:300px;background-color:lightgreen;color:black;" name="submit" class="btn btn-default">Add</button> </form> 
						
						


        </div>
    </div>
<?php } ?>
<section>
</body>