<?php
//koneksi database
include ('koneksi.php');
if(isset($_POST['submit']))
{
//mengambil data yang dikirim dari form
    $id = $_POST['id'];
    $nilai = $_POST['nilai'];

//update data
$update=mysqli_query($koneksi,"UPDATE tbnilai SET nilai='$nilai' WHERE id_nilai='$id'");
if ($update)
echo "<script type='text/javascript'> alert('Data telah diubah'); window.location='nilaiSiswa.php';</script>";
 else
 echo "<script type='text/javascript'> alert('Data gagal diubah'); window.location='nilaiSiswa.php';</script>";
}
?>