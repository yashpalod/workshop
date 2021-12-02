<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Hello, world!</title>
</head>

<body>
    <?php
    include('admin/connection.php');
    include('menu.php');
    include('header.php');


    $sql = "select * from product";
    $res = mysqli_query($db_conn, $sql);
    $i = 0;

    ?>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <?php
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<div class='col-sm-3' style='background-color:light;padding-top:30px;'>";
                    echo "<img src='admin/" . $row['proimg'] . "' height=100px class='responsive'>";
                    echo "<h4>" . $row['proname'] . "</h4>";
                    echo "<h4>Price:" . $row['proprice'] . "</h4>";
                    echo "<h4>Discount:" . $row['prodis'] . "</h4>";
                    echo "<h4>Net Price:" . $row['pronetp'] . "</h4>";
                    echo "<h4>Description:" . $row['prodes'] . "</h4>";
                    echo "<button type='button' class='btn btn-primary'><a href='cart.php?id=" . $row['proid'] . "'><font color='#FFFFFF'>Add to Cart</font></a></button>";
                    echo "</div>";
                    // if ($i >= 3) {
                    //     $i = 0;
                    //     echo "</div>";
                    //     echo "<div class='row'>";
                    // }
                    // $i++;
                }
                ?>
            </div>
        </div>
    </div>


</body>

</html>