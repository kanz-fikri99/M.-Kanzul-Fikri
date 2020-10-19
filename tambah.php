<!DOCTYPE html>
<html>
<head>
	<title>CRUD MySQLi</title>
</head>
<body>
	<h2>DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
        	<tr>			
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>			
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			</tr>
			<tr>
				<td>JURUSAN</td>
				<td><input type="text" name="jurusan"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="varchar" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>