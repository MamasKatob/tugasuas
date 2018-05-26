<?php

include_once("koneksi.php");
 
if(isset($_POST['update']))
{	
	$nim = $_POST['nim'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
		
	$result = mysqli_query($mysqli, "UPDATE users SET nim='$nim',nama='$nama',jurusan='$jurusan' WHERE nim=$nim");
	
	header("Location: index.php");
}
?>
<?php
$nim = $_GET['nim'];
 
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE nim=$nim");
 
while($user_data = mysqli_fetch_array($result))
{
	$nim = $user_data['nim'];
	$nama = $user_data['nama'];
	$jurusan = $user_data['jurusan'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>
 
<body>
	<h3>From Ubah Data</h3><hr>
	<br/><br/>
	
	<form name="update_user" method="post" action="form-edit.php">
		<table border="0">
			<tr> 
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $nim;?>"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
			</tr>
			<tr> 
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" value="<?php echo $jurusan;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="nim" value=<?php echo $_GET['nim'];?>></td>
				<td><input type="submit" name="update" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>