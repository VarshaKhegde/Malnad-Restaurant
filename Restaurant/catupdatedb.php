<?php 
$id=$_GET['id'];
$cat=$_POST['cat'];
include 'dbconfig.php';
$sql="UPDATE `category` SET `id`='$id',`name`='$cat' WHERE `id`='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">alert(\"Successfully Updated\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;category\">";
}
 else {
    echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;category\">";
}



?>