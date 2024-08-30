<?php 
$id1=$_GET['id1'];
include 'dbconfig.php';
$sql="DELETE FROM `category` WHERE `id`='$id1'";
if(mysqli_query($conn, $sql))
{
     echo "<script type=\"text/javascript\">alert(\"Successfully deleted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;category\">";
}
 else {
    echo "<script type=\"text/javascript\">alert(\"Error\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;category\">";
}

?>