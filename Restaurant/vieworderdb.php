<?php 
if (isset($_POST['submit6']))
{
    session_start();
    $fid=$_GET['id5'];
   $table=$_SESSION['table'];
$ename=$_SESSION['name'];
$quant=$_POST['qt'];
$price=$_POST['price'];
$date= date("d/m/y" );
    
//echo "$fid $table $ename $quant $date $price";

   include 'dbconfig.php';
    $sql1="INSERT INTO `orderdetails1`(`fid`, `tablename`, `empid`, `quantity`, `price`, `date`, `status`) VALUES ('$fid','$table','$ename','$quant','$price','$date','A')";
   // echo "INSERT INTO `orderdetails1`(`id`, `fid`, `tablename`, `empid`, `quantity`, `price`, `date`, `status`) VALUES ('','$fid','$table','$ename','$quant','$price',$date','A')";
    if (mysqli_query($conn, $sql1))
    {
        echo "<script type=\"text/javascript\">alert(\"Successfully Added\");</script>";
           echo "<META http-equiv=\"refresh\" content=\"0;selectFood\">";
    }
 else {
        echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;order\">";
    }

}
?>