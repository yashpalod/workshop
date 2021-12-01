<?php
include('isvalid.php');
include('connection.php');

if (isset($_POST['submit'])) {
    $pn = $_POST['pname'];
    $pcn = $_POST['pcname'];
    $ppn = $_POST['ppname'];
    $pdn = $_POST['pdname'];
    $pnp = $_POST['pnpname'];
    $pq = $_POST['pqname'];
    $pde = $_POST['pdesname'];
    $vn = $_POST['vname'];
    $pda = $_POST['pdate'];
    $pin = $_FILES['pimage']['name'];
    $pintmp = $_FILES['pimage']['tmp_name'];
    $dest = "image/";
    $dest1 = $dest . $pin;

    if (move_uploaded_file($pintmp, $dest1)) {
        echo "Image Uploaded Successfully";

        $sql = "insert into product values('','$pn','$pcn','$ppn','$pdn','$pnp','$pq','$pde','$vn','$pda','$dest1')";
        $res = mysqli_query($db_conn, $sql);
        if (mysqli_affected_rows($db_conn)) {
            echo "Insert Success";
        }
    }
}
