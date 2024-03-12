<?php
$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES['gambar']['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];

if ($lokasi_gambar == "") {
    mysqli_query($koneksi, "INSERT INTO galeri set
Nama_gambar = '$_POST[Nama_gambar]'") or die(mysqli_error());
} else {
    move_uploaded_file($lokasi_gambar, "../gambar/$nama_gambar");
    mysqli_query($koneksi, "INSERT INTO galeri set
Nama_gambar = '$_POST[Nama_gambar]',
gambar = '$nama_gambar'") or die(mysqli_error());
}
echo "Data telah tersimpan";
echo "<meta http-equiv='refresh' content='1; url=?page=galeri'>";
?>