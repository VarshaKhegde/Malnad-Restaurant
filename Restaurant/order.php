<?php include 'empheader.php';?>

<?php $_SESSION['table']=null;
//$_SESSION['empid']=null;?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Book Tables</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                                       
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="tableSession" method="POST">
                                
                                    <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <div class="form-floating" >
                                            <select class="form-control" name="table" id="table" required="" >
                                                <option value="">Select Table</option>
 <?php 

include 'dbconfig.php';
$sql="SELECT * FROM `table`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['id'];
        $name=$row['name'];
        //$status=$row['status'];
        
        echo "<option value='$id'>$name</option>";

    }
}
?>         
                                            </select>                                         
                                              <br>
                                        </div>
                                          </div>
                                
                                
                                    <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <button class="btn btn-primary w-100 py-3" name="submit1" type="submit">NEXT</button>
                                    </div>
                                        
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>

<?php include 'footer.php'; ?>