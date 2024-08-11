<?php
include('includes/header.php');
?>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
  ?>

<html>
    <head>
        <title>categories</title>
        

</head>
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
<body style="background-color:#f7e6df;">
<section>
    <!--------------------search bar---->
    <div class="search">
                <form action="service-search.php" class="navbar-form" method="POST" name="form1">
                    
                        <input class="form-control" type="text" name="search" placeholder="search...">
                        <button style="background-color:lightblue; width:50px; height:25px;" type="submit" name="submit" class="btn ntn-default">
                      <span class="glyphicon glyphicon-search"></span>
                        </button>
                </form>
            </div>

            <?php
                

$ret=mysqli_query($con,"select * from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

                    <div class="col-3" style="background-color: #da96e3;">
                     <div class="card" style="background-color: white;" >
                        
        
        <img src="../admin/images/<?php echo $row['Image']?>" alt="product" height="200" width="400" class="img-responsive about-me">
        <h1 style="color: white; background-color:black;"><b><?php  echo $row['ServiceName'];?></b></h1>
                        <p class="para "><?php  echo $row['ServiceDescription'];?> </p>
                        <p class="para " style="color: hotpink; background-color:black;"> <b>COST OF SERVICE: Rs.<?php  echo $row['Cost'];?></b> </p>
                   
            </div>
            </div>
            <?php 
$cnt=$cnt+1;
}?>


            



            

       


            <!-----------main body------------------>
</section>
</body>
</html>