<?php 
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];


mysqli_query($host,"INSERT INTO `karyawan`(`nip`, `nama`, `alamat`,`jabatan`, `notelp`, `email`) VALUES ('$nip','$nama','$alamat','$jabatan','$notelp','$email')");
header("location:karyawan.php");
?>