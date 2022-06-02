<?php
include ('koneksi.php');

$nis = $_GET['id'];
$user = $_GET['user'];

$delete = mysqli_query($koneksi,"DELETE FROM tbsiswa WHERE nis ='$nis'");
$delete1 = mysqli_query($koneksi,"DELETE FROM tbuser WHERE username ='$user'");
$delete2 = mysqli_query($koneksi,"DELETE FROM tbnilai WHERE nis ='$nis'");
// var_dump($deletepesanan)

if ($delete)
	echo "<script type='text/javascript'> alert('Berhasil dihapus'); window.location='viewDataGuru.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Gagal dihapus'); window.location='viewDataGuru.php'; </script>";
?>