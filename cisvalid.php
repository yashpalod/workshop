<?php
session_start();
$cname = $_SESSION['CUNM'];

if (!isset($cname)) {
    header("Location:product.php");
    exit;
}
