<?php include 'adminheader.php'; ?>

<?php
$phone=$_GET['id'];
include 'dbconfig.php';
$sql="SELECT * FROM `employee` WHERE `phone`='$phone'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         //echo "SELECT * FROM `employee` WHERE `phone`='$phone'";
         
        $name=$row['Name'];
        $email=$row['email'];
        $phone1=$row['phone'];
        $adhar=$row['adhar'];
        $DOB=$row['dob'];
        $address=$row['address'];
    }
}
 
?>

 <div class="container-xxl py-5">
            <div class="container">
               <!-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>-->
                <div class="row g-4">
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="empupdatedb?id=<?php echo $phone; ?>" method="POST" >
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="<?php echo $name; ?>" name="ename" id="ename" placeholder="Emp Name">
                                            <label for="name">Emp Name</label>
                                        </div>
                                        
                                    </div>
                                   <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" value="<?php echo $email; ?>" name="email" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" value="<?php echo $phone1; ?>" name="phno" id="phno" placeholder="Phone Number">
                                            <label for="phno">PhoneNumber</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" value="<?php echo $adhar; ?>" name="adhar" id="adhar" placeholder="Adhar">
                                            <label for="adhar">Adhar Number</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" value="<?php echo $DOB; ?>" name="dob" id="dob" placeholder="Date_birth">
                                            <label for="dob">DOB</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Address"  name="address" id="address" style="height: 50px"><?php echo $address; ?></textarea>
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="submit" type="submit">UPDATE</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>









<?php include 'footer.php'; ?>