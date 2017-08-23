<?php
include "phpqrcode/qrlib.php";
include "controller/kelas.php";
$T = new controller;
$username = $_POST['username'];
$password = $_POST['password'];
$nis = $_POST['nis'];
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$attachment = $_FILES['gambar']['name'];
$attach_tmp = $_FILES['gambar']['tmp_name'];
$T->insert('user','username,password',"'$username','$password'");
$user = $T->selectorderby('user',"id DESC LIMIT 1");
$user2 = $user['id'];
$qr = $T->generateRandomString(10);
QRcode::png("$qr","$qr.png",QR_ECLEVEL_L,4);
$T->insert('data_siswa','nis,nama_depan,nama_belakang,kelas,jurusan,tanggal_lahir,alamat,gambar,qr_gambar,qr,user',"'$nis','$nama_depan','$nama_belakang','$kelas','$jurusan','$tanggal_lahir','$alamat','$attachment','$qr.png','$qr','$user2'");
move_uploaded_file($attach_tmp, "".$attachment);
?>
<img src="<?php echo $qr;?>.png">