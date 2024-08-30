<?php 
$id=$_GET['id'];
include 'dbconfig.php';
$sql="DELETE FROM `table` WHERE `id`='$id'";
if (mysqli_query($conn, $sql))
{
     echo "<script type=\"text/javascript\">alert(\"Successfully deleted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;table\">";
}
 else {
     echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;table\">";
}

?>