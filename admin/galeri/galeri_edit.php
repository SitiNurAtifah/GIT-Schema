<?php
if (!defined("INDEX"))
    die("---");

$sql = mysqli_query($koneksi, "SELECT * FROM galeri WHERE id_galeri='$_GET[id]'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);
?>
<h2 class="sub-header">Edit Galeri</h2>

<form name="edit" method="post" action="?page=galeri_editproses" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['id_galeri']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Nama Gambar</label>
<div class="col-md-4"> <input type="text" class="form-control" name="Nama_gambar" value="<?php echo $data['Nama_gambar']; ?>" size="50"></div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Foto</label>
<div class="col-md-4"><img src="../gambar/<?php echo $data['gambar'];
?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div>
</div>

 

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
</div>

</form>

 