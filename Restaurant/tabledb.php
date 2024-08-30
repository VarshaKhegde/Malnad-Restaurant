<?php 
if (isset($_POST['submit1']))
{
    $name1=$_POST['tname'];
    include 'dbconfig.php';
    $sql="INSERT INTO `table`(`name`, `status`) VALUES ('$name1','A')";
    if (mysqli_query($conn, $sql))
    {
        echo "<script type=\"text/javascript\">alert(\"Successfully Added\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;table\">";
    }
 else {
        echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;table\">";
    }
}
 else {
    echo "<META http-equiv=\"refresh\" content=\"0;table\">";
}

?>