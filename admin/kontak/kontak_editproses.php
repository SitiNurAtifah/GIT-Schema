<?php

mysqli_query($koneksi, "UPDATE kontak SET
Wa = '$_POST[Wa]',
email = '$_POST[email]', 
maps = '$_POST[maps]'
WHERE id_kontak='$_POST[id]'") or die(mysqli_error());

echo "Data telah diedit";
echo "<meta http-equiv='refresh' content='1; url=?page=kontak'>";
?>