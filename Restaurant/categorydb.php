<?php 

if(isset($_POST['submit2']))
{
    $name=$_POST['cat'];
    include 'dbconfig.php';
    $sql="INSERT INTO `category`( `name`) VALUES ('$name')";
    if(mysqli_query($conn, $sql))
    {
        echo "<script type=\"text/javascript\">alert(\"Successfully Added\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;category\">";
    }
 else {
        echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;category\">";
    }
}
 else {
     echo "<META http-equiv=\"refresh\" content=\"0;category\">";
}





?>