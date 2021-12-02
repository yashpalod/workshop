<?php
include("admin/connection.php");
if (isset($_POST['submit'])) {
    $un = $_POST['username'];
    $up = $_POST['password'];

    $sql = "select * from customer where custemail='$un' and custpass='$up'";
    $res = mysqli_query($db_conn, $sql);

    if (mysqli_num_rows($res) == 1) {
        $row = mysqli_fetch_assoc($res);
        session_start();
        $_SESSION['CUNM'] = $row['custname'];
        $_SESSION['CUID'] = $row['custid'];
        header("Location:cproduct.php");
    } else {
        header("Location:login.php");
    }
}
