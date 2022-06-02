<?php
include ('koneksi.php');

$id = $_GET['id'];
$kode = $_GET['kode'];

$delete = mysqli_query($koneksi,"DELETE FROM tbmapel WHERE kode_pelajaran ='$kode' && nip = '".$nip."'");
// var_dump($deletepesanan)
if ($delete)
	echo "<script type='text/javascript'> alert('Berhasil dihapus'); window.location='viewMapel.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Gagal dihapus'); window.location='viewMapel.php'; </script>";
?>