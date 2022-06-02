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

     //cek username
    $cek= mysqli_query($koneksi,"SELECT username FROM tbuser where username='$username'");
    $datauser  = mysqli_num_rows($cek);
    echo $datauser;

    if($datauser >0){
        echo "<script type='text/javascript'> alert('Input Data Gagal, Silahkan uabh username-nya karena username sudah ada.'); window.location='addDataGuru.php';</script>";
    }else{
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
         
    }

?>