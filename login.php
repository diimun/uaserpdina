<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:index.php'); }
   require_once("koneksi.php");
?>

<title>Form Login</title>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen"/>
<div align='center'>
  <form action="proseslogin.php" method="post">
  <h1>Masuk</h1>
  <table>
			<tr id="header">
				<td colspan="2"><h2>Login Account</h2></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" id="password" placeholder="password"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="Login" value="Login">
					<input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
 
  </form>
</div>