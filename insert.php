<?php
include "controller/kelas.php";
$T = new controller;
$kelas = $T->selectbanyak('kelas',"");
$jurusan = $T->selectbanyak('jurusan',"");
?>
<form enctype="multipart/form-data" action="insert-proses.php" method="POST">
username<input type="text" name="username"><br>
password<input type="text" name="password"><br>
nis<input type="text" name="nis"><br>
nama depan<input type="text" name="nama_depan"><br>
nama belakang<input type="text" name="nama_belakang"><br>
kelas<select name="kelas">
<?php foreach($kelas as $b) :?>
<option value="<?php echo $b['id'];?>"><?php echo $b['kelas'];?></option>
<?php endforeach ?>
</select><br>
jurusan<select name="jurusan">
<?php foreach($jurusan as $c) :?>
<option value="<?php echo $c['id'];?>"><?php echo $c['jurusan'];?></option>
<?php endforeach ?>
</select><br>
tanggal lahir<input type="date" name="tanggal_lahir"><br>
alamat<input type="text" name="alamat"><br>
gambar<input type="file" name="gambar"><br>
<input type="submit">
</form>