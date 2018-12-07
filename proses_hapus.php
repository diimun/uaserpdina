<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($host,"DELETE FROM karyawan WHERE id='$id'")or die(mysqli_error());
header("location:karyawan.php");
?>