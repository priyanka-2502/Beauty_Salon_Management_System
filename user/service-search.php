<?php
include('includes/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../CSS/home.css">

    <style type="text/css">
    .search
{
    padding-left:1000px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}



.col-3{
    width: 20%;
    background-color: white;
    margin: 1%;
    padding: 2%;
    float: left;
}
</style>
</head>
<body>
<header>


</header>

<body style="background-color:#f7e6df;">
<section>

<!-----service search section----->
<div class = "service-search text-center">
  <div class="container">
    <?php

   //get the search keyword
$search = $_POST['search'];

    ?>
<h2>SERVICE ON YOUR SEARCH <a href="#" class="text-white">"<?php echo $search; ?>"</a></h2>
  </div>
</div>
<!----service search section ends here---->

<h2 class="text-center">service list</h2>



<?php
                

$ret=mysqli_query($con,"select * from  tblservices WHERE ServiceName LIKE '%$search%' OR ServiceDescription LIKE '%$search%'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

                    <div class="col-3" style="background-color: #da96e3;">
                     <div class="card" style="background-color: white;" >
                        
        
        <img src="../admin/images/<?php echo $row['Image']?>" alt="product"  style="height:300px; width:300px;" class="img-responsive about-me">
        <h1 style="color: white; background-color:black;"><b><?php  echo $row['ServiceName'];?></b></h1>
                        <p class="para "><?php  echo $row['ServiceDescription'];?> </p>
                        <p class="para " style="color: hotpink;background-color:black;"><b> Cost of Service: Rs.<?php  echo $row['Cost'];?></b> </p>
                   
            </div>
            </div>
            <?php 
$cnt=$cnt+1;
}
  

?>







    

       

    


</section>
</body>
</html>