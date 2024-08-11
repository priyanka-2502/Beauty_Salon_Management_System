
<?php
//include('../config/constants.php');


?>



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online beauty</title>
    <link rel="stylesheet" type="text/css"  href="CSS/home.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
</head>
<style type="text/css">
nav{
    margin :0px 0px 0px 0px ;
}

footer
{
    height: 200px;
    width: 101%;
    background-color: black;  
}


.fa
{
    margin: 0px 5px;
    padding: 5px;
    font-size:20px;
    width:20px;
    height:20px;
    text-align:center;
    text-decoration:none;
    border-radius:50%;
}

.fa:hover
{
    opacity:.7;
}

.fa-facebook
{
    background:#3B5998;
    color:white;
}

.fa-twitter
{
    background:#55ACEE;
    color:white;
}

.fa-google
{
    background:#dd4b39;
    color:white;
}

.fa-instagram
{
    background:#125688;
    color:white;
}

.fa-yahoo
{
    background:#400297;
    color:white;
}


</style>
<body>
<div class="wrapper">
    <header style="width:113%;">
        <div class="logo">
            <h1>BEAUTY SALON</h1>
        </div>
    <nav>
        <ul>
            <li><a href="user_home.php">HOME</a></li>
            <li><a href="user/login.php">USER-LOGIN</a></li>
            <li><a href="admin/login.php">ADMIN-LOGIN</a></li>
            <li><a href="about.php">ABOUT-US</a></li>
            
            
            
        </ul>
    </nav>



    </header>
    <!----body------>



<section>

<div class="main_img">
<br>
<div class="box">
    <h1 style="text-align:center ; font-size: 35px;"><b>WELCOME TO OUR SALON</b></h1><br><br>
    <h1 style="text-align:center ;font-size: 25px;">Open from 9:00am to 10:00pm</h1><br>
    <marquee> <h1 style="text-align:center ;font-size: 25px; color:red;background-color:white;width:150%;"><b><i>Note:-Do Not Book the Appoinntment at Closing Hours</b></i></h1></marquee>

</div>
</div>
</section>
<?php
include('user/includes/footer.php');


?>
</body>
</html>
