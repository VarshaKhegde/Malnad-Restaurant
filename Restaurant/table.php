<?php include 'adminheader.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Add Tables</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="tabledb" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="tname" id="tname" placeholder="TableName">
                                            <label for="tname">TableName</label>
                                        </div>
                                        <br>
                                    
                                    
                                          </div>
                                </div>
                                <div class="col-md-6" style="margin-left: auto;margin-right: auto;">
                                        <button class="btn btn-primary w-100 py-3" name="submit1" type="submit">Add</button>
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
        <th>Status</th>
    </tr>

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
        $status=$row['status'];
        
        echo "<tr><td>$id </td><td>$name</td><td>$status</td><td><a href='deleteTable?id=$id'>DELETE</a></td></tr>";

    }
}
?>
</table>


<?php include 'footer.php'; ?>