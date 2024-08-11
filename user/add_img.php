<?php

include('includes/header.php')

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
<body>
<section>
    <!--------------------search bar---->
    <div class="search">
                <form action="" class="navbar-form" method="POST" name="form1">
                    
                        <input class="form-control" type="text" name="search" placeholder="search...">
                        <button style="background-color:lightblue; width:50px; height:25px;" type="submit" name="submit" class="btn ntn-default">
                      <span class="glyphicon glyphicon-search"></span>
                        </button>
                </form>
            </div>

            <?php
            //create sql query to display categories from db
            $sql = "SELECT * FROM tblservices ";

            //execute the query
            $res = mysqli_query($con, $sql);

              //count rows to check whether the category is available or not
            $count = mysqli_num_rows($res);

            if($count>0)
            {
                //category available
                while($row=mysqli_fetch_assoc($res))
                {
                    //get values like id,title,etc
                    $sername = $row['ServiceName'];
                    $serdesc = $row['ServiceDescription'];
                    $cost = $row['Cost'];
                    $newimage= $row['Image'];
                    ?>
                    <div class="col-3">
                     <div class="card">
                        <?php
                        //check whether img is available or not
                        if($newimage=="")
                        {
                            //display msg
                            echo "img not available";
                        }
                        else
                        {
                            //img available
                        ?>
        <img src="../admin/images/<?php echo $newimage; ?>" alt="Denim Jeans" style="width:100%">
                            <?php
                        }

                        ?>
                        <h1><?php echo $serdesc; ?></h1>
              
                   <h1><?php echo $sername; ?></h1>
                    <p><button><a href ="<?php echo SITEURL;?>user_side/category-services.php?category_id=<?php echo $id;?>">Add to Cart</a></button></p>
            </div>
            </div>

                    <?php
                }
            }
            else
            {
                //category not available
                echo "category not added";
            }

            ?>

            



            

       


            <!-----------main body------------------>
</section>
</body>
</html>