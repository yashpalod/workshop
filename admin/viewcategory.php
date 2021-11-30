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

    <title>view category</title>
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
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from category";
                $res = mysqli_query($db_conn, $sql);
                $i = 1;
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>" . $row['catname'] . "</td>";
                    echo "<td><a href='editcat.php?cid='" . $row['catid'] . "' >  Edit</a></td>";
                    echo "<td>Delete</td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>