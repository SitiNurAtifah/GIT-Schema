<h2 class="sub-header">Data Profil</h2>

<a href="?page=profil_tambah" class="btn btn-primary">Tambah Profil</a><br><br>

<div class="table-responsive">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Nama</th>
<th>Tentang</th>
<th>Gambar</th>
<th>Action</th>
</tr>

<?php
$no = 1;
$sql = mysqli_query($koneksi, "SELECT * FROM profil") or die(mysqli_error());
while ($data = mysqli_fetch_array($sql)) {

    ?>

    <tr>
    <td> <?php echo $no; ?> </td>
    <td> <?php echo $data['nama']; ?> </td>
    <td style="word-wrap: break-word;max-width: 200px;"><?php echo $data['tentang']; ?> </td>
    <td> <img src="../gambar/<?php echo $data['gambar']; ?>" width="100" class="thumbnail"> </td>

    <td>
    <a href="?page=profil_edit&id=<?php echo $data['id_profil']; ?>" class="btn btn-primary btn-sm"> Edit </a>
    <a href="?page=profil_hapus&id=<?php echo $data['id_profil']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
    </td>
    </tr>

    <?php
    $no++;
}
?>

</table>
