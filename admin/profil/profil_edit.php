<?php
if (!defined("INDEX"))
    die("---");

$sql = mysqli_query($koneksi, "SELECT * FROM profil WHERE id_profil='$_GET[id]'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);
?>
<h2 class="sub-header">Edit Profil</h2>

<form name="edit" method="post" action="?page=profil_editproses" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['id_profil']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Nama</label>
<div class="col-md-4"> <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>" size="50"></div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Foto</label>
<div class="col-md-4"><img src="../gambar/<?php echo $data['gambar'];
?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Tentang</label>
<div class="col-md-8"><textarea name="tentang" cols="80" rows="15" class="form-control"><?php echo $data['tentang']; ?></textarea></div>
</div>


<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
</div>

</form>

 