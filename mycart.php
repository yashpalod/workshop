<?php
include('cisvalid.php');
include('admin/connection.php');
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

    <title>My Cart</title>
</head>

<body>
    <?php

    include('header.php');

    ?>

    <div class="container">
        <table class="table table-info table-hover">
            <thead>
                <tr>
                    <th>Sr No.</th>
                    <th>Product Name</th>
                    <th>Prod cat</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Net Price</th>
                    <th>Description</th>
                    <th>Purchase Date</th>
                    <th>Image</th>
                    <th>Order</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cid = $_SESSION['CUID'];
                $sql1 = "select * from cart where custid='$cid'";
                $res1 = mysqli_query($db_conn, $sql1);
                $i = 1;
                while ($row1 = mysqli_fetch_assoc($res1)) {


                    $sql = "select * from product where proid=" . $row1['proid'];
                    $res = mysqli_query($db_conn, $sql);
                    $row = mysqli_fetch_assoc($res);
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . $row['proname'] . "</td>";
                    echo "<td>" . $row['catid'] . "</td>";
                    echo "<td>" . $row['proprice'] . "</td>";
                    echo "<td>" . $row['prodis'] . "</td>";
                    echo "<td>" . $row['pronetp'] . "</td>";
                    echo "<td>" . $row['prodes'] . "</td>";
                    echo "<td>" . $row1['dop'] . "</td>";
                    echo "<td><img src ='admin/" . $row['proimg'] . "'height=50px>  </td>";
                    echo "<td><a href='order.php?pid=" . $row1['cartid'] . "' >  Order</a></td>";
                    echo "<td><a href='deletecart.php?pid=" . $row1['cartid'] . "' >  Delete</a></td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>