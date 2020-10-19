<html>
<head>
	<title>CRUD MySQLi</title>
</head>
<body>

	<h2><center>JADWAL MATA KULIAH</h2>
	<br/>
	<br/>
	<center><table border="1">
		<tr>
			<th>NO</th>
			<th>HARI</th>
			<th>MATA KULIAH</th>
			<th>JAM</th>
			<th>RUANGAN</th>
		</tr>
	</center>
	<?php
	include 'koneksi.php';
	$no = 1;
	$jadwal = mysqli_query($koneksi,"select * from jadwal");
	while ($j = mysqli_fetch_array($jadwal)) {
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $j['hari']; ?></td>
				<td><?php echo $j['matakuliah']; ?></td>
				<td><?php echo $j['jam']; ?></td>
				<td><?php echo $j['ruangan']; ?></td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>