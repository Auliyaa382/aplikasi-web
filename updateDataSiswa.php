<?php
//koneksi database
include ('koneksi.php');
if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hakakses = $_POST['hakakses'];

//update data
$update=mysqli_query($koneksi,"UPDATE tbsiswa SET nis='$nis', nama_siswa='$nama', jenis_kelamin='$jk', alamat = '$alamat', username ='$username' WHERE nis='$nis'");
$update1 = mysqli_query($koneksi,"UPDATE tbuser SET username='$username', password='$password' WHERE username = '$username'");
if ($update)
echo "<script type='text/javascript'> alert('Data telah diubah'); window.location='viewDataSiswa.php';</script>";
 else
 echo "<script type='text/javascript'> alert('Data gagal diubah'); window.location='viewDataSiswa.php';</script>";
}
?>