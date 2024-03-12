<?php
$nama_gambar = $_FILES['gambar']['name'];
$lokasi_gambar = $_FILES['gambar']['tmp_name'];
$tipe_gambar = $_FILES['gambar']['type'];
if ($lokasi_gambar == "") {
    mysqli_query($koneksi, "UPDATE galeri SET Nama_gambar = '$_POST[Nama_gambar]' WHERE id_galeri='$_POST[id]'") or die(mysqli_error());
} else {
    $data = mysqli_fetch_array(mysqli_query($koneksi, "select * from galeri where id_galeri='$_POST[id]'"));
    if ($data['gambar'] != "")
        unlink("../gambar/$data[gambar]");
    move_uploaded_file($lokasi_gambar, "../gambar/$nama_gambar");
    mysqli_query($koneksi, "UPDATE galeri SET Nama_gambar = '$_POST[Nama_gambar]', gambar='$nama_gambar' WHERE id_galeri='$_POST[id]'") or die(mysqli_error());
}
echo "Data telah diedit";
echo "<meta http-equiv='refresh' content='1; url=?page=galeri'>";
?>