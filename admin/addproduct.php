<?php
include('isvalid.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function calcprice() {
            var pp = document.getElementById('ppname').value;
            var dis = document.getElementById('pdname').value;

            var np = pp - (pp * dis / 100);
            document.getElementById('pnpname').value = np;
        }
    </script>

    <title>Add Product</title>
</head>

<body>

    <?php
    include('menu.php');
    include('header.php');
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-p-4">
                    <form action="addproduct_sub.php" method="POST" class="row-g-3" enctype="multipart/form-data">
                        <h4>Add Category</h4>
                        <div class="col-12">
                            <label>Product Name</label>
                            <input type="text" name="pname" class="form-control" placeholder="Product Name">
                        </div><br>
                        <div class="col-12">
                            <label>Product Category</label>
                            <select name="pcname" id="pcname" class="form-control" placeholder="Product Category">
                                <?php
                                include('connection.php');
                                $sql = "select * from category";
                                $res = mysqli_query($db_conn, $sql);
                                while ($row = mysqli_fetch_assoc($res)) {
                                    echo "<option value=" . $row['catid'] . ">" . $row['catname'] . "</option>";
                                }
                                ?>
                            </select>
                        </div><br>
                        <div class="col-12">
                            <label>Product Price</label>
                            <input type="text" name="ppname" id="ppname" class="form-control" placeholder="Product Price" onchange="calcprice()">
                        </div><br>
                        <div class="col-12">
                            <label>Product Discount</label>
                            <input type="text" name="pdname" id="pdname" class="form-control" placeholder="Product Discount" onchange="calcprice()">
                        </div><br>
                        <div class="col-12">
                            <label>Product Net Price</label>
                            <input type="text" name="pnpname" id="pnpname" class="form-control" placeholder="Product Net Price" readonly>
                        </div><br>
                        <div class="col-12">
                            <label>Product Quantity</label>
                            <input type="text" name="pqname" class="form-control" placeholder="Product Quantity">
                        </div><br>
                        <div class="col-12">
                            <label>Product Description</label>
                            <input type="text" name="pdesname" class="form-control" placeholder="Product Description">
                        </div><br>
                        <div class="col-12">
                            <label>Vendor Name</label>
                            <input type="text" name="vname" class="form-control" placeholder="Vendor Name">
                        </div><br>
                        <div class="col-12">
                            <label>Purchase Date</label>
                            <input type="date" name="pdate" class="form-control" placeholder="Date">
                        </div><br>
                        <div class="col-12">
                            <label>Product Image</label>
                            <input type="file" name="pimage" class="form-control" placeholder="Image">
                        </div><br>

                        <div class="col-12">
                            <input type="submit" class="btn btn-primary mx-auto w-100" name="submit" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>