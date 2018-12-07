<?php
// mengecek apakah tombol edit telah diklik
if (isset($_POST['edit'])) {
  // buat koneksi dengan database
  include("koneksi.php");

  // membuat variabel untuk menampung data dari form edit
	$nip = $_POST['nip'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jabatan = $_POST['jabatan'];
  $notelp = $_POST['notelp'];
   $email = $_POST['email'];

  //buat dan jalankan query UPDATE
  $query  = "UPDATE login SET ";
  $query .= "nip = '$nip', nama = '$nama', ";
  $query .= "alamat='$alamat', ";
  $query .= "jabatan = '$jabatan', notelp=$notelp ";
  $query .= "email='$email', ";
  $query .= "WHERE id = '$id'";

  $result = mysqli_query($link, $query);

  //periksa hasil query apakah ada error
  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

//lakukan redirect ke halaman index.php
header("location:karyawan.php");

?>