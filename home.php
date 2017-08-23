<?php
include "controller/kelas.php";
$T = new controller;
$nama = $_POST['nama'];
//$angka = $_POST['angka'];
//$T->insert('user','username,password',"'wildhan','asdaasdasdssu'");
//$T->hapus('user',"username = 'wildhan'");
//$T->update('user',"username = 'asdfasgsa'","username = 'wildhan'");
$a = $T->select('data_siswa',"qr = '$nama'");
?><?php if ($a != null) { ?>
<p><?php echo $a['nama_depan']; ?></p>
<p><img src="<?php echo $a['gambar'];?>"></p>
<?php } ?>
<?php
//echo $a['username'];
//echo $m;
//$T->hapus('user',"username = 'asdfasgsa'");
//$T->insert('data_siswa','nama_depan,nama_belakang,kelas,alamat',"'$nama','abadi','3','asdagasd'");
?>
<?php //foreach($a as $dis) : ?>
<?php //echo $dis['username']; ?>
<?php //endforeach ?>