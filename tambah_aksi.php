<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "insert into mahasiswa values('$id','$nama', '$nim','$jurusan','$alamat')");
header("location:index.php");
?>