<?php

mysqli_query($koneksi, "INSERT INTO kontak set
Wa = '$_POST[Wa]',
email = '$_POST[email]', maps = '$_POST[maps]'") or die(mysqli_error());

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh' content='1; url=?page=kontak'>";
?>