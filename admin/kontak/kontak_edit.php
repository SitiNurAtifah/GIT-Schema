<?php
if (!defined("INDEX"))
    die("---");

$sql = mysqli_query($koneksi, "SELECT * FROM kontak WHERE id_kontak='$_GET[id]'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);
?>
<h2 class="sub-header">Edit Kontak</h2>

<form name="edit" method="post" action="?page=kontak_editproses" enctype="multipart/form- data" class="form-horizontal">
<input type="hidden" name="id" value="<?php echo $data['Id_kontak']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Wa</label>
<div class="col-md-4"> <input type="text" class="form-control" name="Wa" value="<?php echo $data['Wa']; ?>" size="50"></div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Email</label>
<div class="col-md-4"> <input type="text" class="form-control" name="email" value="<?php echo $data['email']; ?>" size="50"></div>
</div>


<div class="form-group">
<label class="label-control col-md-2">Maps</label>
<div class="col-md-4"> <input type="text" class="form-control" name="maps" value="<?php echo $data['maps']; ?>" size="50"></div>
</div>

 

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
</div>

</form>

 