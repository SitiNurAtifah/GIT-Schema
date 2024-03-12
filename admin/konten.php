<?php
if (!defined("INDEX"))
    die("---");
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = "beranda";
if ($page == "beranda")
    include("beranda.php");
elseif ($page == "keluar")
    include("keluar.php");
elseif ($page == "galeri")
    include("galeri/galeri.php");
elseif ($page == "galeri_tambah")
    include("galeri/galeri_tambah.php");
elseif ($page == "galeri_tambahproses")
    include("galeri/galeri_tambahproses.php");
elseif ($page == "galeri_edit")
    include("galeri/galeri_edit.php");
elseif ($page == "galeri_editproses")
    include("galeri/galeri_editproses.php");
elseif ($page == "galeri_hapus")
    include("galeri/galeri_hapus.php");
elseif ($page == "kontak")
    include("kontak/kontak.php");
elseif ($page == "kontak_tambah")
    include("kontak/kontak_tambah.php");
elseif ($page == "kontak_tambahproses")
    include("kontak/kontak_tambahproses.php");
elseif ($page == "kontak_edit")
    include("kontak/kontak_edit.php");
elseif ($page == "kontak_editproses")
    include("kontak/kontak_editproses.php");
elseif ($page == "kontak_hapus")
    include("kontak/kontak_hapus.php");
elseif ($page == "profil")
    include("profil/profil.php");
elseif ($page == "profil_tambah")
    include("profil/profil_tambah.php");
elseif ($page == "profil_tambahproses")
    include("profil/profil_tambahproses.php");
elseif ($page == "profil_edit")
    include("profil/profil_edit.php");
elseif ($page == "profil_editproses")
    include("profil/profil_editproses.php");
elseif ($page == "profil_hapus")
    include("profil/profil_hapus.php");
else
    echo "Konten tidak ada";

?>