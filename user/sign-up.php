<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $contno=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=($_POST['password']);

    $ret=mysqli_query($con, "select Email from tbluser where Email='$email' || MobileNumber='$contno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){

echo "<script>alert('This email or Contact Number already associated with another account!.');</script>";
    }
    else{
    $query=mysqli_query($con, "insert into tbluser(FirstName, LastName, MobileNumber, Email, Password) value('$fname', '$lname','$contno', '$email', '$password' )");
    if ($query) {
        ?>
    
    <script type="text/javascript">
    alert("Registered successfully")
            window.location="login.php"
          </script>
    <?php
   
  }
  else
    {
    
      echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online beauty</title>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css"  href="../CSS/home.css">

</head>
<body style="background-image: url(../images/reg_bg.jpg);background-repeat: no-repeat;background-size:cover;" >
<div class="wrapper">
    <header style="width:113%;">
        <div class="logo">
            <h1>BEAUTY SALON</h1>
        </div>
    <nav>
        <ul>
            <li><a href="login.php">HOME</a></li>
           
            
            
            
        </ul>
    </nav>



    </header>
<section>
<div class="reg_img">
    <br><br><br>
<div class="box2" style="margin-top:0px;height:700px;">
<h1 style="text-align: center;font-size: 35px;font-family: 'Great Vibes', cursive;">
Beauty Salon Management</h1><br>



<h1 style="text-align: center;font-size: 25px;"> SIGN-UP FORM</h1><br>



<form method="post" name="signup">

    <div class="login" style="margin-left: 15%;"><br>

    FIRST NAME :&nbsp <br><input class="" type="text" name="firstname" id="firstname" placeholder="enter full name" required=""
    style="width: 60%;height: 40%;color:black;"><br>

   <br>LAST NAME:&nbsp <input class="form-control" type="text" name="lastname" id="lastname" placeholder="enter username" required=""
    style="width: 60%;height: 40%; "><br><br>

    MOBILE NUMBER : &nbsp &nbsp <input class="form-control" type="text" name="mobilenumber" pattern="[0-9]+" maxlength="10" placeholder="enter address" required=""
    style="width: 60%;height: 40%;"><br><br>

    EMAIL ADDRESS: &nbsp &nbsp &nbsp &nbsp &nbsp  <input class="form-control" type="email" name="email" placeholder="enter email" required=""
    style="width: 60%;height: 40%;"><br><br>

    PASSWORD:&nbsp &nbsp <input class="form-control" type="password" name="password" placeholder="enter mobile no." required="true"
    style="width: 60%;height: 40%;"><br><br>

    REPEAT PASSWORD :&nbsp &nbsp &nbsp &nbsp  <input class="form-control" type="password" name="repeatpassword" placeholder="repeat password" required="true"
    style="width: 60%;height: 40%;"><br><br>


    
    <input class="btn btn-primary" type="submit" name="submit" value="SIGN UP" style="color: white;width: 90px; height: 40px;
    margin-left: 30%;background-color: #16136a;">

</form>
</div>


</div>
</div>
        

    </section>



    <?php
//process value from form & save in db
//check whether the btn is clicked or not
if(isset($_POST['submit']))
{
    //btn clicked
   // echo "clicked";

   //get data form
$full_name = $_POST['full_name'];
$username = $_POST['username'];
$address = $_POST['address'];
$email = $_POST['email'];
$m_no = $_POST['m_no'];
$gender = $_POST['gender'];
$password = $_POST['password']; //md5 is used to encrypt the password

//sql query to save data into db
$sql = "INSERT INTO tbl_register SET
   full_name ='$full_name',
   username ='$username',
   address = '$address',
   email = '$email',
   m_no = $m_no,
   gender = '$gender',
   password ='$password'
   ";
   //3.execute query and save data in db

   $res = mysqli_query($conn, $sql) or die(mysqli_error());

//4.check whether the data is inserted or not and display msg
if($res==TRUE)
   {
    //create a session variable to display message
    $_SESSION['add'] = "admin added successfully";
    //redirect page to manage admin
   // header("location:".SITEURL.'admin/manage_admin.php');
    ?>

<script type="text/javascript">
    alert("Registered successfully")
            window.location="user_login.php"
          </script>
    <?php
    
   }
   else
   ?>

   <script type="text/javascript">
              alert("Failed to Register.");
            </script>
            
            <?php
   {
//failed to insert
//create a session variable to display message
$_SESSION['add'] = "failed to add admin";
//redirect page to manage admin
header("location:".SITEURL.'register.php');


   }
}

?>
   
          

</body>
</html>













