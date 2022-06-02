<?php
     include "koneksi.php";
     if(isset($_POST['submit'])){
     $nis = $_POST['nis'];
     $nama = $_POST['nama'];
     $jk = $_POST['jk'];
     $kelas = $_POST['kelas'];
     $mapel = $_POST['mapel'];
     $nilai = $_POST['nilai'];
    
    $query = mysqli_query($koneksi, "SELECT max(id_nilai) as idnilai FROM tbnilai");
    $data = mysqli_fetch_array($query);
    $idnilai = $data['idnilai'];
    $urutan = (int) substr($idnilai, 3, 3);
    $urutan++;
    $huruf = "NIL";
    $idnilai = $huruf . sprintf("%03s", $urutan);

    $cek= mysqli_query($koneksi,"SELECT nis, kode_pelajaran FROM tbnilai where nis='$nis' && kode_pelajaran ='$mapel'");
    $datauser  = mysqli_num_rows($cek);
    echo $datauser;

    if($datauser >0){
        echo "<script type='text/javascript'> alert('Input Data Gagal, Mata pelajaran tersebut sudah ditambahkan silahkan cek kembali.'); window.location='nilaiSiswa.php';</script>";
    }else{
    $insertdata="INSERT INTO tbnilai (id_nilai, nis, kode_pelajaran, nilai) VALUES ('$idnilai','$nis','$mapel','$nilai')";
    $sql=mysqli_query($koneksi,$insertdata); 
        if ($sql){
            echo "<script type='text/javascript'> alert('Input Data Berhasil'); window.location='guruView.php';</script>";
        } else {
            echo "<script type='text/javascript'> alert('Input Data Gagal');window.location='guruView.php' ;</script>";
        }	
    }
    }

?>