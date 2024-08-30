<?php
session_start();
include 'dbconfig.php';

if(isset($_POST['submit'])) {
    $table = $_SESSION['table'];
    $sql_update = "UPDATE `orderdetails1` SET `status` = 'D' WHERE `tablename`='$table' AND `status`='A'";
    if ($conn->query($sql_update) === TRUE) {
       // echo "Status updated successfully";
        echo "<script type=\"text/javascript\">alert(\"Bill paid successfully\");</script>";
        echo "<META http-equiv=\"refresh\" content=\"0;order\">";
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

$ename = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
        .main {
            width: 50%;
            background-color: palegoldenrod;
            margin-left: auto;
            margin-right: auto;
            padding: 20px;
        }

        td,
        th {
            padding-left: 10px;
            text-align: center;
        }

        h3 {
            float: right;
        }
    </style>
</head>
<body>
    <form action="Bill" method="POST">
        <div class="main">
            <center>
                <h1>Malnad Restaurant</h1>

                <table>
                    <tr>
                        <th>Slno</th>
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>

                    <?php
                    $table = $_SESSION['table'];
                    $total = 0;
                    $tot = 0;
                    $slno = 0;
                    $sql = "SELECT * FROM `orderdetails1` WHERE `tablename`='$table' AND `status`='A'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $slno++;
                            $id4 = $row['id'];
                            $fid = $row['fid'];
                            $table = $row['tablename'];
                            $quat = $row['quantity'];
                            $price = $row['price'];
                            $total = $quat * $price;
                            $date = $row['date'];
                            $status = $row['status'];
                            $tot = $tot + $total;

                            $sql1 = "SELECT * FROM `food` WHERE `id`='$fid'";
                            $result1 = $conn->query($sql1);

                            if ($result1->num_rows > 0) {
                                while ($row1 = $result1->fetch_assoc()) {
                                    $fname = $row1['name'];
                                    echo "<tr><td>$slno</td><td>$fname</td><td>$quat</td><td>$price</td></tr>";
                                }
                            }
                        }
                    }
                    ?>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><h5>Total=<?php echo $tot; ?></h5></td>
                    </tr>          
                </table>
                <h3 style="margin-left:20%; margin-right: 40%;">THANK YOU</h3>
                <h5 style="margin-left:20%; margin-right: 20%;">Visit Again!!</h5>

            </center>
            <br><br>
            <div class="col-md-6" style="margin-left:45%; margin-right: 100%">
                <button class="btn btn-primary w-100 py-3" name="submit" type="submit">Print</button>
            </div>


        </div>
    </form>
<center></center>
</body>
</html>
