<h2 class="sub-header">Data Galeri</h2>

<a href="?page=galeri_tambah" class="btn btn-primary">Tambah Galeri</a><br><br>

<div class="table-responsive">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Nama Gambar</th>
<th>Gambar</th>
</tr>

<?php
$no = 1;
$sql = mysqli_query($koneksi, "SELECT * FROM galeri") or die(mysqli_error());
while ($data = mysqli_fetch_array($sql)) {

    ?>

                <tr>
                <td> <?php echo $no; ?> </td>
                <td> <?php echo $data['Nama_gambar']; ?> </td>
                <td> <img src="../gambar/<?php echo $data['gambar']; ?>" width="100" class="thumbnail"> </td>
                <td>
                <a href="?page=galeri_edit&id=<?php echo $data['id_galeri']; ?>" class="btn btn-primary btn-sm"> Edit </a>
                <a href="?page=galeri_hapus&id=<?php echo $data['id_galeri']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
                </td>
                </tr>

                <?php
                $no++;
}
?>

</table>
