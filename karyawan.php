<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">DATA KARYAWAN</h1>
		<h3 class="deskripsi">SISTEM INFORMASI HUMAN RESOURCES DEPARTEMENT</h3>
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
	</div>  <body>

    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
	<a href="input.php"> +Tambah Data Baru</a>
	<h3>Data Karyawan</h3>
	<table border="1" class="	table">
    <br/>
    <table border="1">
      <tr>
		<th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jabatan</th>
        <th>No Telpon</th>
        <th>Email</th>
		<th>Pilihan</th>
      </tr>
	<?php 
		include "koneksi.php";
		$query_mysqli = mysqli_query($host,"SELECT * FROM karyawan")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysqli)){
			?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $data['nip']; ?></td>
				<td><?php echo $data['nama']; ?></td>	
				<td><?php echo $data['alamat']; ?></td>
				<td><?php echo $data['jabatan']; ?></td>
				<td><?php echo $data['notelp']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="proses_hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>