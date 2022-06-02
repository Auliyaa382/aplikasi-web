<?php
include ('koneksi.php');

$nip = $_GET['id'];
$user = $_GET['user'];

$delete = mysqli_query($koneksi,"DELETE FROM tbguru WHERE nip ='$nip'");
$delete1 = mysqli_query($koneksi,"DELETE FROM tbuser WHERE username ='$user'");
// var_dump($deletepesanan)

if ($delete)
	echo "<script type='text/javascript'> alert('Berhasil dihapus'); window.location='viewDataGuru.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Gagal dihapus'); window.location='viewDataGuru.php'; </script>";
?>