<html>
<head>
<title>Galeri</title>
<link rel="stylesheet" type="text/css" href="style/style.css"/>
</head>
<body>
<div id="site-container">
<div id="header">
<h1><a href="index.html"> STMIK WICIDA</a></h1>
<p> Website </p>
</div>
<div id="menu-content">
<br class="floating" />
</div>
<div id="menu">
<div id="menu">
<h3 class ="judul_1">Main Menu</h3>
<ul>
<li><a href="index.php">Profil</a></li>
<li><a href="galeri.php">Galeri</a></li>
<li><a href="kontak.php">Kontak</a></li>
</ul>
</div>
</div>
<div id="content">
<?php
include 'koneksi.php';
$sql = mysqli_query($koneksi, "SELECT * FROM galeri") or die(mysqli_error());
while ($data = mysqli_fetch_array($sql)) {
    ?>
    <img src="gambar/<?php echo $data['gambar']; ?>" class="img"/>
<?php } ?>
</div>
</div>
<div id="footer">
<p>Copy Left&copy;2022.</p>
</div>
<!-- End Footer -->
</div>
</body>
</html>