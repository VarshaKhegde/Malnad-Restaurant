<?php include 'adminheader.php'; ?>

<?php 
$table=$_POST['table'];
?>
<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Details</h1>
                    <nav aria-label="breadcrumb">    
                    </nav>
                </div>
            </div>
  
                                 
                                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="POST">
                                <div class="row g-3">
                                    
                                    <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        
                                        <div class="form-floating" >
                                            <select class="form-control" name="table" id="table" required="" >
                                                
                                                <option value="">Select Table: <?php
                                                echo "$table";
                                                ?>
                                                </option>
                                                
<?php 

include 'dbconfig.php';
$sql="SELECT * FROM `table`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['id'];
        $name=$row['name'];
        //$status=$row['status'];
         echo "<option value='$id'>$name</option>";

    }
}
?>    
                                            </select>
                                        </div>
                                        <br>
                                    </div>
                                    <br>
                               
                            
                                             </div>
                                <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Refresh</button>
                                    </div>
                                </form>
                                        </div>
                                    </div>
                              
                             
                        <?php
                        if(isset($_POST['submit']))
                        {
                        $table=$_POST['table'];
                       //$ename=$_POST['email'];
                        ?>                  

<br>
<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        
        <th>Slno</th>
        <th>EmpId</th>
        <th>Food Name</th>
        <th>Image</th>
        
        <th>Quantity</th> 
        
        <th>Price</th>
        <th>Total</th>
        <th>Status</th>
        
    </tr>
    
<?php
include 'dbconfig.php';
$total=0;
$tot=0;
$slno=0;      

$sql="SELECT * FROM `orderdetails1` WHERE `tablename`='$table' AND `status`='D'";
//echo "SELECT * FROM `orderdetails1` WHERE `empid`='$ename' AND `tablename`='$table' AND `status`='A'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
     $slno++;   
         $id4=$row['id'];
         $ename=$row['empid'];
         $fid=$row['fid'];
        
         $table=$row['tablename'];             
        //$empid=$row['empid'];
        $quat=$row['quantity'];
        $price=$row['price'];
        $total=$quat*$price;
        $date=$row['date'];
        $status=$row['status'];
        $tot=$tot+$total;
  $sql1="SELECT * FROM `food` WHERE `id`='$fid'";
 // echo "SELECT * FROM `food` WHERE `id`=`$fid`";
  $result1=$conn->query($sql1);
  if ($result1->num_rows>0)
  {
       while ($row1=$result1->fetch_assoc())
    {
           $fname=$row1['name'];
           $img=$row1['img'];
    
      
        echo "<tr><td>$slno</td><td>$ename</td><td>$fname</td><td><img src='$img' width='150px'></td><td>$quat</td><td>$price RS</td><td>$total Rs</td><td>$status</td></tr>";      
      }
  }
    }
}
                  
?>

                        </table>
                            
                            <?php } ?>


<?php include 'footer.php'; ?>
