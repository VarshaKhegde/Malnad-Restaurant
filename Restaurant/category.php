<?php include 'adminheader.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Add Category</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="categorydb" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="cat" id="cat" placeholder="Category">
                                            <label for="cat">Category</label>
                                        </div>
                                        <br>
                                    
                                   
                                          </div>
                                </div>
                                 <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <button class="btn btn-primary w-100 py-3" name="submit2" type="submit">Add</button>
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
        
    </tr>

<?php 

include 'dbconfig.php';
$sql="SELECT * FROM `category`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['id'];
        $name=$row['name'];
       
        
        echo "<tr><td>$id </td><td>$name</td><td><a href='deletecat?id1=$id'>DELETE</a></td><td><a href='catupdate?id2=$id'>UPDATE</a></td></tr>";

    }
}
?>
</table>


<?php include 'footer.php'; ?>