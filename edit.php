<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
	<h3><a href="karyawan.php">Lihat Semua Data</a></h3>
    <div class="container">
        <fieldset>
        <legend>Input Data Karyawan</legend>
          <p>
	<br/>
	<h3>Edit data baru</h3>	
		<table>
<body>
	
	<br/>
	
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysqli = mysqli_query($host,"SELECT * FROM karyawan WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
		?>
		<form action="proses_edit.php" method="post">		
			<table>
				<tr>
					<td>NIP</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
						<input type="text" name="nama" value="<?php echo $data['nip'] ?>">
					</td>					
				</tr>	
				<tr>
					<td>Nama</td>
					<td><input type="text" name="umur" value="<?php echo $data['nama'] ?>"></td>					
				</tr>	
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
				</tr>
				<tr>
					<td>Jabatan</td>
					<td><input type="text" name="diagnosa" value="<?php echo $data['jabatan'] ?>"></td>					
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="alamat" value="<?php echo $data['notelp'] ?>"></td>					
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="diagnosa" value="<?php echo $data['email'] ?>"></td>					
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>					
				</tr>				
			</table>
		</form>
		<?php } ?>
	</body>
	</html>