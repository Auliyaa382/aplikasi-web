<?php
//koneksi database
include ('koneksi.php');
if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hakakses = $_POST['hakakses'];

//update data
$update=mysqli_query($koneksi,"UPDATE tbguru SET nip='$nip', nama_guru='$nama', jenis_kelamin='$jk', alamat = '$alamat', username ='$username' WHERE nip='$nip'");
$update1 = mysqli_query($koneksi,"UPDATE tbuser SET username='$username', password='$password' WHERE username = '$username'");
if ($update)
echo "<script type='text/javascript'> alert('Data telah diubah'); window.location='viewDataGuru.php';</script>";
 else
 echo "<script type='text/javascript'> alert('Data gagal diubah'); window.location='viewDataGuru.php';</script>";
}
?>