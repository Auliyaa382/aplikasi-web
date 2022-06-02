<?php
include ('koneksi.php');

$id = $_GET['id'];

$delete = mysqli_query($koneksi,"DELETE FROM tbnilai WHERE id_nilai ='$id'");

if ($delete)
	echo "<script type='text/javascript'> alert('Berhasil dihapus'); window.location='nilaiSiswa.php'; </script>";
	 else
		 echo "<script type='text/javascript'> alert('Gagal dihapus'); window.location='nilaiSiswa.php'; </script>";
?>