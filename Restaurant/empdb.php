<?php
if(isset($_POST['submit']))
{
     $time=time();
        $pic = $_FILES['photo1']['name'];
	$pic_loc = $_FILES['photo1']['tmp_name'];
	$info = pathinfo($_FILES['photo1']['name']);
	$ext = $info['extension'];
	$newname = "emp$time.$ext";
	$folder="img/food/";
	$target=$folder.$newname;
	if(move_uploaded_file($pic_loc,$target))
	{
            $name=$_POST['ename'];
$email=$_POST['email'];
$Phone=$_POST['phno'];
$adhar=$_POST['adhar'];
$DOB=$_POST['dob'];
$address1=$_POST['address'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
if($pass==$cpass)
{
    include 'dbconfig.php';
    $sql="INSERT INTO `employee`(`Name`, `img`, `email`, `phone`, `adhar`, `dob`, `address`, `pass`) VALUES ('$name','$target','$email','$Phone','$adhar','$DOB','$address1','$pass')";
    if(mysqli_query($conn, $sql))
    {
         echo "<script type=\"text/javascript\">alert(\"Successfully Inserted\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
        
    }
 else 
     {
      echo "<script type=\"text/javascript\">alert(\"ERROR\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
    
     }
}

else 
    {

       echo "<script type=\"text/javascript\">alert(\"Enter Correct password\");</script>";
       echo "<META http-equiv=\"refresh\" content=\"0;emp\">";    
     }
        }
        }
else
    {
    echo "<META http-equiv=\"refresh\" content=\"0;emp\">";
}
?>
