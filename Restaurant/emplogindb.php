<?php 

if(isset($_POST['submit']))
{
    $username=$_POST['name'];
    $password=$_POST['pass'];
    include 'dbconfig.php';
    //$sql="SELECT * FROM `emplogin` WHERE `name`='$username' AND `password`='$password'";
    $sql="SELECT * FROM `employee` WHERE `email`='$username' AND `pass`='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while ($row=$result->fetch_assoc())
        {
            session_start();
            $_SESSION['name']=$username;
            $_SESSION['pass']=$password;
            //echo "<script type=\"text/javascript\">alert(\"Successfully Login\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;order\">";
        }    
    }
    else {
     //echo "<script type=\"text/javascript\">alert(\"Password & Username Doesn't match\");</script>";
     echo "<META http-equiv=\"refresh\" content=\"0;empLogin\">";
 }
}
 else {
    echo "<META http-equiv=\"refresh\" content=\"0;empLogin\">";
}






?>