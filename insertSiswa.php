<?php
     include "koneksi.php";
     if(isset($_POST['submit'])){
     $nis = $_POST['nis'];
     $nama = $_POST['nama'];
     $jk = $_POST['jk'];
     $alamat = $_POST['alamat'];
     $kelas = $_POST['kelas'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $hakakses = $_POST['hakakses'];
    
    
    $insertdata="INSERT INTO tbsiswa (nis, nama_siswa, jenis_kelamin, alamat, kelas, username) VALUES ($nis,'$nama','$jk','$alamat','$kelas','$username')";
    $sql=mysqli_query($koneksi,$insertdata); 
        if ($sql){
            echo "<script type='text/javascript'> alert('Input Data Berhasil'); window.location='viewDataSiswa.php';</script>";
        } else {
            echo "<script type='text/javascript'> alert('Input Data Gagal'); window.location='addDataSiswa.php';</script>";
        }	
    $insertdata1="INSERT INTO tbuser(username, password, hakakses) VALUES ('$username','$password','$hakakses')";
    $sql1=mysqli_query($koneksi,$insertdata1); 
    }

?>