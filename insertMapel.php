<?php
     include "koneksi.php";
     if(isset($_POST['submit'])){
     $kode = $_POST['kode'];
     $nama = $_POST['namamapel'];
     $nip = $_POST['nip'];

     //cek username
    $cek= mysqli_query($koneksi,"SELECT kode_pelajaran,nip FROM tbmata_pelajaran where kode_pelajaran='$kode' && nip = '".$nip."'");
    $datauser  = mysqli_num_rows($cek);
    echo $datauser;

    if($datauser >0){
        echo "<script type='text/javascript'> alert('Input Data Gagal, Data telah ada.'); window.location='addMapel.php';</script>";
    }else{
        $insertdata="INSERT INTO tbmapel(kode_pelajaran, nama_pelajaran, nip) VALUES ('$kode','$nama',$nip)";
            $sql=mysqli_query($koneksi,$insertdata); 
                if ($sql){
                    echo "<script type='text/javascript'> alert('Input Data Berhasil'); window.location='viewMapel.php';</script>";
                } else {
                    echo "<script type='text/javascript'> alert('Input Data Gagal'); window.location='addMapel.php';</script>";
                }	
    }
         
    }

?>