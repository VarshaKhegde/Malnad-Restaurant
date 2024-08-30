<?php
$Phone=$_GET['id0'];
include 'dbconfig.php';
$sql="DELETE FROM `employee` WHERE `phone`='$Phone'";
if (mysqli_query($conn, $sql))
{
    echo "<script type=\"text/javascript\">alert(\"Successfully deleted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
}
 else {
    echo "<script type=\"text/javascript\">alert(\"Error\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
}

?>