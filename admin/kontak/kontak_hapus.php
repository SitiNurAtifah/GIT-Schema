<?php
mysqli_query($koneksi, "delete from kontak where id_kontak='$_GET[id]'") or
    die(mysqli_error());

echo "Data telah hapus";
echo "<meta http-equiv='refresh' content='1; url=?page=kontak'>";
?>