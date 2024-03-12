<?php
session_start();
include("../koneksi.php");
$username = $_POST['username'];
$password = SHA1($_POST['password']);

$cek = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$data = mysqli_fetch_array($cek);
$jumlah = mysqli_num_rows($cek);

if ($jumlah > 0) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    echo "Login berhasil!";
    echo "<meta http-equiv='refresh' content='1; url=admin.php'>";
} else {
    echo "<center>Gagal, username atau password salah! <br><b><a href='index.php'>ULANGI</a></b></center>";
}
?>
