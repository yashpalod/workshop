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

    <title>Hello, world!</title>
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
                    <form action="addcategory_sub.php" method="POST" class="row-g-3">
                        <h4>Add Category</h4>
                        <div class="col-12">
                            <label>CategoryName</label>
                            <input type="text" name="cname" class="form-control" placeholder="Username">
                        </div>
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