<html>
  <head>
    <title>Profil</title>
    <link rel="stylesheet" href="./style/style.css" />
  </head>

  <body>
  <div id="site-container">
      <div id="header">
        <h1><a href="”index.html”"> STMIK WICIDA</a></h1>
        <p>Website</p>
      </div>
      <div id="menu-content">
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
        $sql = mysqli_query($koneksi, "SELECT * FROM profil") or die(mysqli_error());
        while ($data = mysqli_fetch_array($sql)) {
          ?>
      <div style="overflow:hidden;">
      <h1 class="judul_2"><?php echo $data['nama']; ?></h1>
        <img src="gambar/<?php echo $data['gambar']; ?>" class="img"/>
        <p><?php echo $data['tentang']; ?></p>
      </div>
<?php } ?>
        </div>
        <br class="floating" />
      </div>
      <div id="footer">
        <p>Copy Left&copy;2022.</p>
      </div>
    </div>
  </body>
</html>
