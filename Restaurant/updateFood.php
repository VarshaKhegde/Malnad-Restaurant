<?php include 'adminheader.php'; ?>

<?php
$id2=$_GET['id5'];
include 'dbconfig.php';
$sql="SELECT * FROM `food` where `id`='$id2'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         //echo "SELECT * FROM `food` where `id`='$id2'";
         //$slno=$row['slno'];
        $fname=$row['name'];
        //$img=$row['img'];
        $descripton=$row['description'];
        //$category=$row['category'];
        $price=$row['price'];
    }
}
 
?>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="updateFooddb?id=<?php echo $id2; ?>" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="<?php echo $fname; ?>" name="fname" id="fname" placeholder="FoodName" required="">
                                            <label for="fname">Food</label>
                                        </div>
                                        <!--<br>
                                        <div class="form-floating">
                                            <input type="file" class="form-control" value=">" name="photo" id="photo" placeholder="Image" required="">
                                            <label for="photo">Image</label>
                                        </div>-->
                                        <br>
                                       
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Description"  name="description" id="description" style="height: 150px" required=""><?php echo $descripton; ?></textarea>
                                            <label for="description">Description</label>
                                        </div>
                                    
                                        <br>
                                       
                                      <div class="form-floating">
                                          <input type="number" class="form-control" value="<?php echo $price; ?>" name="price" id="price" placeholder="Price" required="">
                                            <label for="price">Price</label>
                                        </div>
                                        <br>
                                    <div class="col-md-6">
                                        <button class="btn btn-primary w-100 py-3" name="submit3" type="submit">UPDATE</button>
                                    </div>
                                          </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
<?php include 'footer.php'; ?>