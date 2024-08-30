<?php include 'adminheader.php'; ?>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Add Food Quantity</h1>
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>


<div class="container-xxl py-5">
            <div class="container">
                
                <div class="row g-4" >
                    
                    
                    <div class="col-md-6" style="margin-left: auto;margin-right: auto; ">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="quantitydb" method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="qt" id="qt" placeholder="Quantity">
                                            <label for="qt">Quantity</label>
                                        </div>
                                        <br>
                                    
                                    <div class="col-md-6">
                                        <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Add</button>
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
        <th>Quantity</th>
        
    </tr>

<?php 

include 'dbconfig.php';
$sql="SELECT * FROM `quantity`";
$result=$conn->query($sql);
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc()) 
    {
        $id=$row['id'];
        $Quantity=$row['name'];
        //$status=$row['status'];
        
        echo "<tr><td>$id </td><td>$Quantity</td></tr>";

    }
}
?>
</table>


<?php include 'footer.php'; ?>