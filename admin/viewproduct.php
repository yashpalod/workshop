<?php
include('isvalid.php');
include('connection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>View Product</title>
</head>

<body>
    <?php
    include('menu.php');
    include('header.php');

    ?>
    <div class="container">
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Product Name</th>
                    <th>Pro cat</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Net Price</th>
                    <th>Quantity</th>
                    <th>Description</th>
                    <th>Vendor</th>
                    <th>Purchase Date</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from product";
                $res = mysqli_query($db_conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . $row['proname'] . "</td>";
                    echo "<td>" . $row['catid'] . "</td>";
                    echo "<td>" . $row['proprice'] . "</td>";
                    echo "<td>" . $row['prodis'] . "</td>";
                    echo "<td>" . $row['pronetp'] . "</td>";
                    echo "<td>" . $row['proqty'] . "</td>";
                    echo "<td>" . $row['prodes'] . "</td>";
                    echo "<td>" . $row['vename'] . "</td>";
                    echo "<td>" . $row['dop'] . "</td>";
                    echo "<td><img src ='" . $row['proimg'] . "'height=50px>  </td>";
                    echo "<td><a href='editproduct.php?pid=" . $row['proid'] . "' >  Edit</a></td>";
                    echo "<td><a href='deleteproduct.php?pid=" . $row['proid'] . "' >  Delete</a></td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>