<html>
<head>
	<title>CRUD MySQLi</title>
</head>
<body>

	<h2><center>CRUD DATA MAHASISWA</h2>
	<br/>
<center>
	<a href="tambah.php"> Tambah Data</a>
</center>
	<br/>
	<center><table border="1">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>NIM</th>
			<th>JURUSAN</th>
			<th>ALAMAT</th>
			<th>OPSI</th>
		</tr>
	</center>
	<?php
	include 'koneksi.php';
	$id = 1;
	$data = mysqli_query($koneksi,"select * from mahasiswa");
	while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>
				<td><?php echo $id++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>