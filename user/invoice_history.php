<?php 
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['bpmsuid']==0)) {
  header('location:logout.php');
  } else{



  ?>
<?php
include('includes/header.php');
?>

<section>
    <div class="invoice_history">
    <div>
        <h1 style="text-align:center;font-weight:bold;font-size:40px;padding:10px;">Invoice History</h1>
    </div>

    <table class="table table-bordered table-hover">
                            <thead >
                            <tr style="background-color:lightblue;"> 
                                <th>#</th> 
                                <th>Invoice Id</th> 
                                <th>Customer Name</th>
                                <th>Customer Mobile Number</th>
                                <th>Invoice Date</th> 
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               
                                <tr>

                                <?php
                                   $userid= $_SESSION['bpmsuid'];
 $query=mysqli_query($con,"select distinct tbluser.ID as uid, tbluser.FirstName,tbluser.LastName,tbluser.Email,tbluser.MobileNumber,tblinvoice.BillingId,date(tblinvoice.PostingDate) as PostingDate  from  tbluser   
    join tblinvoice on tbluser.ID=tblinvoice.Userid where tbluser.ID='$userid'order by tblinvoice.ID desc");
$cnt=1;
              while($row=mysqli_fetch_array($query))
              { ?>
               <tr> 
                            <th scope="row"><?php echo $cnt;?></th> 
                            <td><?php  echo $row['BillingId'];?></td>
                            <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                            <td><?php  echo $row['MobileNumber'];?></td>
                            <td><?php  echo $row['PostingDate'];?></td> 
                                <td><a href="view_invoice.php?invoiceid=<?php  echo $row['BillingId'];?>" class="btn btn-info">View</a></td> 

                          </tr><?php $cnt=$cnt+1; } ?>
                             
                            </tbody>
                        </table>
                        <?php } ?>
                        </div>
</section>