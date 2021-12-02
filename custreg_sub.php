<?php
include("admin/connection.php");
if (isset($_POST['submit'])) {
    $cn = $_POST['cname'];
    $cem = $_POST['cemail'];
    $cp = $_POST['cpass'];
    $cm = $_POST['cmob'];
    $ca = $_POST['cadd'];

    $sql = "insert into customer values ('','$cn','$cem','$cp','$cm','$ca')";
    $res = mysqli_query($db_conn, $sql);
    if (mysqli_affected_rows($db_conn)) {
        header('Location:login.php');
    }
}
