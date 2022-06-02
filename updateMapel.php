<?php
//koneksi database
include ('koneksi.php');
if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $kode = $_POST['kode'];
     $nama = $_POST['namamapel'];
     $nip = $_POST['nip'];


//update data
$update=mysqli_query($koneksi,"UPDATE tbmata_pelajaran SET kode_pelajaran='$kode', nama_pelajaran='$nama', nip= $nip WHERE kode_pelajaran='$kode'");
if ($update)
echo "<script type='text/javascript'> alert('Data telah diubah'); window.location='viewMapel.php';</script>";
 else
 echo "<script type='text/javascript'> alert('Data gagal diubah'); window.location='viewMapel.php';</script>";
}
?>