<?php include 'adminheader.php'; ?>

<?php 

$id=$_GET['id2'];
include 'dbconfig.php';
$sql="SELECT * FROM `category` WHERE `id`='$id'";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
        //echo "SELECT * FROM `category` WHERE `id`='$id'";
        $cat=$row['name'];
    }
}

?>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="catupdatedb?id=<?php echo $id; ?>" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" value="<?php echo $cat; ?>" name="cat" id="cat" placeholder="Category">
                                            <label for="cat">Category</label>
                                        </div>
                                        <br>
                                    
                                    <div class="col-md-6">
                                        <button class="btn btn-primary w-100 py-3" name="submit2" type="submit">UPDATE</button>
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