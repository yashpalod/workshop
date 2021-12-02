<?php
include('isvalid.php');
include('connection.php');

if (isset($_POST['submit'])) {
    $pid = $_POST['ppid'];
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

    if ($pin == "") {
        $sql = "update product set proname='$pn',catid='$pcn',proprice='$ppn',prodis='$pdn',pronetp='$pnp',proqty='$pq',prodes='$pde',vename='$vn',dop='$pda' where proid='$pid'";
        $res = mysqli_query($db_conn, $sql);
        if (mysqli_affected_rows($db_conn)) {
            header('Location:viewproduct.php');
        }
    } else {

        if (move_uploaded_file($pintmp, $dest1)) {

            $sql = "update product set proname='$pn',catid='$pcn',proprice='$ppn',prodis='$pdn',pronetp='$pnp',proqty='$pq',prodes='$pde',vename='$vn',dop='$pda',proimg='$dest1' where proid='$pid'";
            $res = mysqli_query($db_conn, $sql);
            if (mysqli_affected_rows($db_conn)) {
                header('Location:viewproduct.php');
            }
        }
    }
}
