<?php
$db_conn = mysqli_connect('localhost', 'root', '', 'workshop');
if (!$db_conn) {
    echo "Connection Failed";
}
