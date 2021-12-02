<?php
include('cisvalid.php');
include('admin/connection.php');
if (isset($_GET['id'])) {
    $prid = $_GET['id'];
    $pcid = $_SESSION['CUID'];
    $dt = date('Y-m-d');

    $sql = "insert into cart values('','$pcid','$prid','Cart','$dt')";
    $res = mysqli_query($db_conn, $sql);

    if (mysqli_affected_rows($db_conn)) {
        echo "Cart Inserted";
    }
}
