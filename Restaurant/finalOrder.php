<?php include 'empheader.php'; ?>


<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">FinalOrder Details</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>

<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4">
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="######" method="POST">
                                <div class="row g-3">
                                </div>
                                <div class="col-12">
                                        <!--<div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>-->
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>

<?php 
/*
///$id9=$_GET['id5'];
include 'dbconfig.php';
$sql="SELECT * FROM `food` WHERE `id`='$id5'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
       
         $id9=$row['id'];
         //$img=$row['img']; 
        
         echo " $id9";
    }
}*/

?>
<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        <th>FoodID</th>
        <th>TableID</th>
        <th>EmpId</th>
        <th>Quantity</th>
    </tr>

<?php

include 'dbconfig.php';
$sql3="SELECT * FROM `food` WHERE `id`='$fid'";
$result3=$conn->query($sql3);
if ($result3->num_rows>0)
{
    while ($row3=$result3->fetch_assoc()) 
    {
    $fid=$row3['id'];
    echo "$fid";
    }
}
$tid=$_POST['table'];
$empid=$_POST['empid'];
$quant=$_POST['qt1'];

echo " <tr><td></td><td>$tid</td> <td>$empid</td><td> $quant</td></tr>";
?>
</table>
<form action="vieworderdb" method="POST">
    


<?php 
/*
include 'dbconfig.php';
$sql="SELECT * FROM `orderdetails`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
    $fid=$row['fid'];
    $tid=$row['tablename'];
    $empid=$row['empid'];
    $quant=$row['quantity'];
        //$status=$row['status'];
        
        echo "<tr><td>$fid></td><td>$tid</td><td>$empid </td><td>$quant</td><td><a href='###?id4=$id4'>ADD</a></td></tr>";

    }
}*/
?>

<?php include 'footer.php'; ?>