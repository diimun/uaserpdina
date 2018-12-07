<!DOCTYPE html>
<html>
  <head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  <body>
    <h1>Input Data</h1>
    <div class="container">
      <form id="form_mahasiswa" action="proses_input.php" method="post">
        <fieldset>
        <legend>Input Data Karyawan</legend>
          <p>
<body> 

	<br/>
	<h3>Input data baru</h3>
	<form action="proses_input.php" method="post">		
		<table>
						<tr>
				<td>NIP</td>
				<td><input type="text" name="nip"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>
			<tr>
				<td>Jabatan</td>
				<td><input type="text" name="jabatan"></td>					
			</tr>
							<td>No Telepon</td>
				<td><input type="text" name="notelp"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>					
			</tr>
			
			<tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>
