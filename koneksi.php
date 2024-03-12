<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_cv";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (mysqli_connect_errno()) {
    echo "koneksi gagal" . mysqli_connect_errno();
}

?>
    