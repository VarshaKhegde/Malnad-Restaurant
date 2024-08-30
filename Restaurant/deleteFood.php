<?php
$id=$_GET['id4'];
include 'dbconfig.php';
$sql="DELETE FROM `food` WHERE `id`='$id'";
if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">alert(\"Successfully deleted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"4;food\">";
}
 else {
    echo "<script type=\"text/javascript\">alert(\"Error\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"4;food\">";
}

?>