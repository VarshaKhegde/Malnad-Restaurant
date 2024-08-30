<?php include 'empheader.php'; ?>
<?php
if (isset($_POST['submit2']))
{
    $id=$_POST['table'];
    $cat=$_POST['category'];
}
?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Select Food</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="" method="POST">
                                
                                    <div class="col-md-6">
                                        <div class="form-floating" >
                                            <select class="form-control" name="table" id="table" required="" >
                                                
 <?php 

include 'dbconfig.php';
$sql="SELECT * FROM `table` where `id`='$id'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['id'];
        $name=$row['name'];
        $status=$row['status'];
        
        echo "<option value='$id'>$name</option>";

    }
}
?>
                                              
                                            </select>
                                              <br>
                                              </div>
                                          </div>
                                              
                                              <div class="col-md-6">
                                        <div class="form-floating" >
                                            <select class="form-control" name="category" id="category" required="" >
                                                
 <?php
include 'dbconfig.php';
$sql="SELECT * FROM `category`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
     while ($row=$result->fetch_assoc())
    {
         $id1=$row['id'];
        $name=$row['name'];
        
        echo "<option value='$id1'>$name</option>";
    }
}
?>
        
                                            </select>
                                              <br>
                                        </div>
                                          </div>
                                 
                                        
                                    <div class="col-md-6">
                                        <button class="btn btn-primary w-100 py-3" name="submit2" type="submit">NEXT</button>
                                    </div>
                                        
                                
                            </form>
                        </div>
                       
                    </div>
                </div>
            </div>
    <br>
    <table id="customers" border="1" style="margin-left: auto;margin-right: auto; ">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
         <th>Description</th>
          
           <th>Price</th>
</tr>
<?php
include 'dbconfig.php';
$sql="SELECT * FROM `food` WHERE `category`='$cat'";
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
        echo "<tr><td>$id4</td><td><img src='$img' width='150px'></td><td>$Name</td><td>$descripton</td><td>$price Rs</td></tr>";      
    }
}
?>  
</table>
    
        </div>



<?php include 'footer.php'; ?>