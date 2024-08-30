<?php 
if (isset($_POST['submit']))
{
    $name1=$_POST['qt'];
    include 'dbconfig.php';
    $sql="INSERT INTO `quantity`(`id`, `name`) VALUES ('','$name1')";
    if (mysqli_query($conn, $sql))
    {
        echo "<script type=\"text/javascript\">alert(\"Successfully Added\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;quantity\">";
    }
 else {
        echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;quantity\">";
    }
}
 else {
    echo "<META http-equiv=\"refresh\" content=\"0;quantity\">";
}

?>