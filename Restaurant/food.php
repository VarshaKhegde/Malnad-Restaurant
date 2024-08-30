    <?php include 'adminheader.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Add Food</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="fooddb" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="FoodName" required="">
                                            <label for="fname">Food</label>
                                        </div>
                                    </div>
                                        
                                        <div class="col-12">
                                        <div class="form-floating">
                                            <input type="file" class="form-control" name="photo" id="photo" placeholder="Image" required="">
                                            <label for="photo">Image</label>
                                        </div>
                                        </div>
                                        <br>
                                        <div class="col-12">
                                       
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Description" name="description" id="description" style="height: 150px" required=""></textarea>
                                            <label for="description">Description</label>
                                        </div>
                                        </div>
                                    
                                        <br>
                                        <div class="form-floating" >
                                            <label for="category" style="margin-top: -10px;">Category</label>
                                            <select class="form-control" name="category" id="category" required="" >  
                                                <option value="">Select Category</option>
                                                
 <?php 

include 'dbconfig.php';
$sql="SELECT * FROM `category`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['id'];
        $Name=$row['name'];
       echo "<option value='$id'>$Name</option>";

    }
}
?>  
                                            </select>
                                        </div>
                                        <br>
                                      <div class="form-floating">
                                          <input type="number" class="form-control" name="price" id="price" placeholder="Price" required="">
                                            <label for="price">Price</label>
                                        </div>
                                        <br>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name="submit3" type="submit">Add</button>
                                    </div>
                                          </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
<table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
         <th>Description</th>
          <th>Category</th>
           <th>Price</th>
    </tr>
<?php
include 'dbconfig.php';
$sql="SELECT * FROM `food`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         $id4=$row['id'];
         $Name=$row['name']; 
         $img=$row['img'];             
        $descripton=$row['description'];
        $category=$row['category'];
        $price=$row['price']; 
        //echo "<tr><td>$id4</td><td><img src='$img' width='150px'></td><td>$Name</td><td>$descripton</td><td>$category</td><td>$price Rs</td><td><a href='deleteFood?id4=$id'>DELETE</a></td><td><a href='##?id5=$id'>UPDATE</a></td></tr>";
  //Store data to id      
$sql1="SELECT * FROM `category` WHERE `id`='$category' ";
$result1=$conn->query($sql1);
if ($result1->num_rows>0)
{
     while ($row1=$result1->fetch_assoc())
    {
         $catname=$row1['name'];
          echo "<tr><td>$id4</td><td>$Name</td><td><img src='$img' width='150px'></td><td>$descripton</td><td>$catname</td><td>$price Rs</td><td><a href='deleteFood?id4=$id4'>DELETE</a></td><td><a href='updateFood?id5=$id4'>UPDATE</a></td></tr>";
     }
     }        
    }
}
?>  
</table>


<?php include 'footer.php'; ?>