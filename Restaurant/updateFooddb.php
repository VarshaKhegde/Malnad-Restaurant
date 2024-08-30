<?php
$id=$_GET['id'];
$fname=$_POST['fname'];
        //$img=$_POST['img'];
        $descripton=$_POST['description'];
        //$category=$_POST['category'];
        $price=$_POST['price'];

include 'dbconfig.php';
$sql="UPDATE `food` SET `id`='$id',`name`='$fname', `description`='$descripton', `price`='$price' WHERE `id`='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">alert(\"Successfully Updated\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;food\">";
}
 else {
    echo "<script type=\"text/javascript\">alert(\"Successfully Updated\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;food\">";
}
?>

