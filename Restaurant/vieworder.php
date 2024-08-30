        <?php include 'empheader.php'; ?>



<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Order Details</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>

<?php 
$id8=$_GET['id5'];
include 'dbconfig.php';
$sql="SELECT * FROM `food` WHERE `id`='$id8'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
       
         $img=$row['img']; 
         $fname=$row['name'];
         $id8=$row['id'];
         $price=$row['price'];
         //echo " $id8 $price";
    }
}

?>

 <div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4">
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="vieworderdb?id5=<?php echo $id8;?>" method="POST">
                                <div class="row g-3">
                                    
                                    <div style="margin-right: 50%;" >
                                        <?php
                                      echo" <img src='$img' width='150px'>";
                                               ?>
                                         
                                    </div>
                                    <br>
                                    
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="<?php echo "$fname";?>" name="fid" id="fid" placeholder="FoodId">
                                            <label for="fid">Food Name</label>
                                        </div>
                                         
                                    </div>
                                    
                                    <br>
                                    
<!--                                        <div class="col-12">
                                        <div class="form-floating" >
                                            <label for="qt" style="margin-top: -10px;">Quantity</label>
                                            <select class="form-control" name="qt" id="qt" required="" >
                                              
                                                <option value="">Select Quantity</option>
 <?php 
//
//include 'dbconfig.php';
//$sql="SELECT * FROM `quantity`";
//$result=$conn->query($sql);
//if ($result->num_rows>0)
//{
//    while ($row=$result->fetch_assoc()) 
//    {
//        $id=$row['id'];
//        $name=$row['name'];
//        //$status=$row['status'];
//        
//        echo "<option value='$id'>$name</option>";
//
//    }
//}
?>        
                                            </select>                                         
                                              <br>
                                        </div>
                                          </div>-->
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="<?php echo "$price";?>" name="price" id="price" placeholder="Price">
                                            <label for="price">Price</label>
                                        </div>
                                         
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="qt" id="qt" placeholder="Quantity">
                                            <label for="Quantity" style="margin-top: -5px;">Quantity</label>
                                        </div>
                                         
                                    </div>
                                
                                    <br>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="submit6" type="submit">Add Order</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php include 'footer.php'; ?>