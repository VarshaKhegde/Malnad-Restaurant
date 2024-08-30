 <?php include 'empheader.php'; ?>
<?php
//session_start();
$table = $_SESSION['table'];
$ename = $_SESSION['name'];
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Order History</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
<?php 
//echo "$ename";
?>
<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        
        <th>Slno</th>
        <th>Table</th>
        <th>Food Name</th>
      
        <th>Quantity</th> 
        
        <th>Price</th>
        <th>Total</th>
        <th>Date</th>
        <th>Status</th>
        
    </tr>
<?php
//$ename=$_GET['name'];
include 'dbconfig.php';
$total=0;
$tot=0;
$slno=0;
$sql="SELECT * FROM `orderdetails1` WHERE `empid`='$ename'";
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
    
      
        echo "<tr><td>$slno</td><td>$table</td><td>$fname</td><td>$quat</td><td>$price RS</td><td>$total Rs</td><td>$date</td><td>$status</td></tr>";      
      }
  }
    }
}
?>
</table>
<?php include 'footer.php';?>