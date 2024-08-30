<?php
$id=$_GET['id'];

$name=$_POST['ename'];
$email=$_POST['email'];
$Phone=$_POST['phno'];
$adhar=$_POST['adhar'];
$DOB=$_POST['dob'];
$address=$_POST['address'];
include 'dbconfig.php';
$sql="UPDATE `employee` SET `Name`='$name', `email`='$email',`phone`='$Phone',`adhar`='$adhar',`dob`='$DOB',`address`='$address' WHERE `phone`='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">alert(\"Successfully Updated\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
}
 else {
    echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
}
?>

