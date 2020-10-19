<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"update mahasiswa set nama='$nama', nim='$nim', jurusan='$jurusan', alamat='$alamat' where id='$id'");
header("location:index.php");
?>