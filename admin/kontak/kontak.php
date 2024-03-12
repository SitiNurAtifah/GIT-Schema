<h2 class="sub-header">Data Kontak</h2>

<a href="?page=kontak_tambah" class="btn btn-primary">Tambah Kontak</a><br><br>

<div class="table-responsive">
<table class="table table-striped">
<tr>
<th>No</th>
<th>Wa</th>
<th>Email</th>
<th>Maps</th>
<th>Action</th>
</tr>

<?php
$no = 1;
$sql = mysqli_query($koneksi, "SELECT * FROM kontak") or die(mysqli_error());
while ($data = mysqli_fetch_array($sql)) {

    ?>

                        <tr>
                        <td> <?php echo $no; ?> </td>
                        <td> <?php echo $data['Wa']; ?> </td>
                        <td> <?php echo $data['email']; ?> </td>
                        <td style="word-wrap: break-word;max-width: 200px;"><?php echo $data['maps']; ?> </td>
 

                        <td>
                        <a href="?page=kontak_edit&id=<?php echo $data['Id_kontak']; ?>" class="btn btn-primary btn-sm"> Edit </a>
                        <a href="?page=kontak_hapus&id=<?php echo $data['Id_kontak']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
                        </td>
                        </tr>

                        <?php
                        $no++;
}
?>

</table>
