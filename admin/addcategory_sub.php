<?php
include('isvalid.php');
include('connection.php');
if (isset($_POST['submit'])) {
    $cn = $_POST['cname'];

    $sql = "insert into category (catname) values ('$cn')";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn)) {
        header('Location:viewcategory.php');
    }
}
