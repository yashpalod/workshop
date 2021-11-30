<?php
include('isvalid.php');
include('connection.php');

if (isset($_POST['submit'])) {
    $pn = $_POST['pname'];
    $cid = $_POST['pcname'];
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
    }
}
