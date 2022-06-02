<?php
     include "koneksi.php";
     if(isset($_POST['submit'])){
     $nip = $_POST['nip'];
     $nama = $_POST['nama'];
     $jk = $_POST['jk'];
     $alamat = $_POST['alamat'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $hakakses = $_POST['hakakses'];

    //  $cek= mysqli_query($koneksi,"SELECT * FROM tbuser where hakakses='GURU'");
    //  while ($data  = mysqli_fetch_array($cek)){
    //     $user = $data['username'];
    //     if($username == $user){
    //         echo "<script type='text/javascript'> alert('Input Data Gagal'); window.location='addDataGuru.php';</script>";
    //     }
    //     exit();
    //     }
        $insertdata="INSERT INTO tbguru(nip, nama_guru, jenis_kelamin, alamat, username) VALUES ($nip,'$nama','$jk','$alamat', '$username')";
            $sql=mysqli_query($koneksi,$insertdata); 
                if ($sql){
                    echo "<script type='text/javascript'> alert('Input Data Berhasil'); window.location='viewDataGuru.php';</script>";
                } else {
                    echo "<script type='text/javascript'> alert('Input Data Gagal'); window.location='addDataGuru.php';</script>";
                }	
            $insertdata1="INSERT INTO tbuser(username, password, hakakses) VALUES ('$username','$password','$hakakses')";
            $sql1=mysqli_query($koneksi,$insertdata1); 
    }

?>