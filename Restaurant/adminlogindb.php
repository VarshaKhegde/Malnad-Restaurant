<?php 
if (isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    include 'dbconfig.php';
    $sql="SELECT * FROM `admin` WHERE `username`='$name' AND `password`='$pass'";
    $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while ($row=$result->fetch_assoc())
                {
                    session_start();
                    $_SESSION['name']=$name;
                    $_SESSION['pass']=$pass;
                     echo "<script type=\"text/javascript\">alert(\"Successfully Login\");</script>";
                    echo "<META http-equiv=\"refresh\" content=\"0;table\">";
                }
            }
            else 

            {
                echo "<script type=\"text/javascript\">alert(\"Password&Username dosen't match\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;adminLogin\">";

            }
    }
 else
 {
     echo "<META http-equiv=\"refresh\" content=\"0;afterlogin\">";
 }


?>