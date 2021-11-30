<?php
include('isvalid.php');
include('connection.php');

if (isset($_GET['cid'])) {
    $cd = $_GET['cid'];
    $sql = "delete from category where catid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:viewcategory.php");
    }
}
