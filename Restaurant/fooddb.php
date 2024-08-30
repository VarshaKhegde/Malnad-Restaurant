<?php
if(isset($_POST['submit3']))
{
    $time=time();
        $pic = $_FILES['photo']['name'];
	$pic_loc = $_FILES['photo']['tmp_name'];
	$info = pathinfo($_FILES['photo']['name']);
	$ext = $info['extension'];
	$newname = "food$time.$ext";
	$folder="img/food/";
	$target=$folder.$newname;
	if(move_uploaded_file($pic_loc,$target))
	{
            $Fname=$_POST['fname'];   
            $msg=$_POST['description'];
            $cat=$_POST['category'];
            $price=$_POST['price'];
            include 'dbconfig.php';
            $sql="INSERT INTO `food`( `name`, `img`, `description`, `category`, `price`) VALUES ('$Fname','$target','$msg','$cat','$price')";
            if (mysqli_query($conn, $sql))
{
     echo "<script type=\"text/javascript\">alert(\"Successfully Added\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;food\">";
}
 else {
     echo "<script type=\"text/javascript\">alert(\"Error\");</script>";
            echo "<META http-equiv=\"refresh\" content=\"0;food\">";
}
        }
}
 else {
    echo "<META http-equiv=\"refresh\" content=\"0;food\">";
}



?>