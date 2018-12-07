<!DOCTYPE html>
<html>
<head>
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">PT DIIMUN</h1>
		<h3 class="deskripsi">SISTEM INFORMASI HUMAN RESOURCE DEPARTEMENT</h3>
	</header>

<body>
	<div class="menu">
		<ul>
			<li><a href="home.php?page=home">HOME</a></li>
			<li><a href="tentang.php?page=tentang">TENTANG</a></li>
			<li><a href="karyawan.php?page=tutorial">KARYAWAN</a></li>
			<li><a href="absensi.php?page=tutorial">ABSENSI</a></li>
			<li><a href="strog.php?page=tutorial">STRUKTUR ORGANISASI</a></li>
			<li><a href="gaji.php?page=tutorial">GAJI</a></li>
			<li><a href="logout.php?page=tutorial">LOGOUT</a></li>
		</ul>
	</div>
</html>