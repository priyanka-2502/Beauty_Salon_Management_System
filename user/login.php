<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['login']))
  {
    $emailcon=$_POST['emailcont'];
    $password=($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  (Email='$emailcon' || MobileNumber='$emailcon') && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['bpmsuid']=$ret['ID'];
     header('location:user_home.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";
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
<body style=" background-image: url(../images/1.jpg);background-repeat: no-repeat;background-size:cover;height:100px" >
  


<section>
<div class="wrapper">
    <header style="width:113%;">
        <div class="logo">
            <h1>BEAUTY SALON</h1>
        </div>
    <nav>
        <ul>
            <li><a href="../index.php">HOME</a></li>
           
            
            
            
        </ul>
    </nav>



    </header>
<div class="log_img">
    <br><br><br>
<div class="box1" style="height:500px;">
<h1 style="text-align: center;font-size: 35px;font-family: 'Great Vibes', cursive;">
Beauty Salon Management</h1><br>



<h1 style="text-align: center;font-size: 25px;">USER-LOGIN FORM</h1><br>





<form method="post">
    <div class="login" style="margin-left: 20%;">
   <br><br>EMAIL-ID:<br><br><input class="form-control" type="text" name="emailcont" required="true"
    placeholder="Registered Email or Contact Number" required="true"
    style="width: 60%;height: 40%; "><br>
   <br> PASSWORD:<br><br><input class="form-control" type="password" name="password" placeholder="Password" required="true"
   style="width: 60%;height: 40%; "><br><br>

    <input class="btn btn-secondary" type="submit" name="login" value="login" style="color: white;width: 90px; height: 40px;
    margin-left: 20%;background-color: #16136a;">
</form>
</div>
<p style="color: white;padding-left: 15px;">
    <br><br>
    
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp New To This Website? &nbsp&nbsp<a style="color: white;" href="sign-up.php">Sign Up</a>
</p>

</div>
</div>
        

    </section>
</body>

    















