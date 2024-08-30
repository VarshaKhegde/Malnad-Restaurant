

<?php include 'adminheader.php';?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Employee Details</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
               <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>-->
                <div class="row g-4">
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="empdb" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="ename" id="ename" placeholder="Emp Name">
                                            <label for="name">Emp Name</label>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name="photo1" id="photo1" placeholder="Image">
                                            <label for="photo1">Image</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="phno" id="phno" placeholder="Phone Number">
                                            <label for="phno">PhoneNumber</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="adhar" id="adhar" placeholder="Adhar">
                                            <label for="adhar">Adhar Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" name="dob" id="dob" placeholder="Date_birth">
                                            <label for="dob">DOB</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Address" name="address" id="address" style="height: 50px"></textarea>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                                            <label for="pass">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="password" class="form-control" name="cpass" id="cpass" placeholder="ConfirmPassword">
                                            <label for="cpass">Confirm Password</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        
        <th>Name</th>
        <th>Img</th>
        <th>email</th>
        <th>PhoneNo</th>
        <th>Adhar</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Password</th>
    </tr>
<?php
include 'dbconfig.php';
$sql="SELECT * FROM `employee`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         //$slno=$row['slno'];
        $ename=$row['Name'];
        $img=$row['img'];
       // <td><img src='$img' width='150px'></td>
        $email=$row['email'];
        $Phone=$row['phone'];
        $adhar=$row['adhar'];
        $DOB=$row['dob'];
        $address=$row['address'];
        $pass=$row['pass'];
        
        echo "<tr><td>$ename</td><td><img src='$img' width='150px'></td><td>$email </td><td>$Phone </td><td>$adhar </td><td>$DOB</td><td>$address</td><td>$pass</td><td><a href='empdelete?id0=$Phone'>DELETE</a></td><td><a href='empupdate?id=$Phone'>UPDATE</a></td></tr>";
    }
}
?>

</table>
<?php include 'footer.php';?>