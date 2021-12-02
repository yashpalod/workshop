<?php
include('isvalid.php');
include('connection.php');

if (isset($_GET['pid'])) {
    $cd = $_GET['pid'];
    $sql = "delete from product where proid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:viewproduct.php");
    }
}
