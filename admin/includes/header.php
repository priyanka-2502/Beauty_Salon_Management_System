<?php
include('includes/dbconnection.php');
//include('partials/login-check.php')


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
</head>
<body>
    <!-- The sidebar -->
<div class="sidebar">
    <div class="logo">
        <h1>BEAUTY SALON</h1>
        </div>
  <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Home</a>
  
  <a href="view_clients.php"><i class="fa fa-fw fa-user"></i>View Clients</a>
  
  
  
  
  
  
  <div class="sidenav">
    
    <button class="dropdown-btn"><i class="fa fa-fw fa-wrench"></i>SERVICES
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
      <a href="manage_services.php">MANAGE SERVICE</a>
      <a href="add_service.php">ADD SERVICE</a>
    </div>

    <button class="dropdown-btn"><i class="fa fa-fw fa-envelope"></i>APPOINTMENTS
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container" style="color:black;">
      <a href="all_appointments.php">ALL APPOINTMENTS</a>
      <a href="new_appointment.php">NEW APPOINTMENTS</a>
      
    </div>

    <a href="invoices.php"><i class="fa fa-fw fa-envelope"></i> INVOICES</a>

    <a href="logout.php"><i class="fa fa-fw fa-log-out"></i> LOG OUT</a>

  </div>
</div>
<script>
    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;
    
    for (i = 0; i < dropdown.length; i++) {
      dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
        } else {
          dropdownContent.style.display = "block";
        }
      });
    }
    </script>
</body>
</html>