<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['bpmsaid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel ="stylesheet" href="../CSS/admin.css">
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
<style type="text/css">


</style>
<body>
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

</head>



<div class="log_img">
    <br><br><br>
<div class="box3">
<h1 style="text-align: center;font-size: 35px;font-family: 'Great Vibes', cursive;">
Beauty Salon Management</h1><br>



<h1 style="text-align: center;font-size: 25px;">admin login form</h1><br>



<form name="login" action="" method="POST">
    <div class="login" style="margin-left: 20%;">
   <br><br>USERNAME:<br><br><input class="form-control" type="text" name="username" placeholder="Username" required="true"
    style="width: 60%;height: 40%; "><br>
   <br> PASSWORD:<br><br><input class="form-control" type="password" name="password" placeholder="enter password" required="true"
   style="width: 60%;height: 40%; "><br><br>
    <input class="btn btn-secondary" type="submit" name="login" value="login" style="color: white;width: 90px; height: 40px;
    margin-left: 20%;background-color: #16136a;">
    
</form>



</div>
    </div>
</div>
        

    

   











