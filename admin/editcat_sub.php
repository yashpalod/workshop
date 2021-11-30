<?php
include('isvalid.php');
include('connection.php');

if (isset($_POST['cid'])) {
    $cd = $_POST['cid'];
    $cn = $_POST['cname'];

    $sql = "update category set catname='$cn' where catid='$cd'";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn) == 1) {
        header("Location:viewcategory.php");
    }
}
