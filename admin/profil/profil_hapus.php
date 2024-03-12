<?php
$data = mysqli_fetch_array(mysqli_query($koneksi, "select * from profil where
id_profil='$_GET[id]'"));
if ($data['gambar'] != "")
    unlink("../gambar/$data[gambar]");
mysqli_query($koneksi, "delete from profil where id_profil='$_GET[id]'") or
    die(mysqli_error());
echo "Data telah hapus";
echo "<meta http-equiv='refresh' content='1; url=?page=profil'>";
?>