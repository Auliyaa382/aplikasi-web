<?php
session_start();
include "koneksi.php";
$username = $_POST['username1'];
$password = $_POST['password'];

    $sql = mysqli_query($koneksi,'SELECT * FROM tbuser WHERE username="'.$username.'" AND password="'.$password.'"');
    if(mysqli_num_rows($sql)==1){   //jika berhasil akan bernilai 1
        $qry = mysqli_fetch_array($sql);
        $_SESSION['username'] = $qry['username'];
        $_SESSION['hakakses'] = $qry['hakakses'];
        if($qry['hakakses']=="ADMIN"){
            header("location:/aplikasi-web/viewDataGuru.php");
        }
        else if($qry['hakakses']=="GURU"){
            header("location:/aplikasi-web/guruView.php");
        }
        else if($qry['hakakses']=="SISWA"){
            header('location:/aplikasi-web/siswaView.php?id ="'.$username.'"');
        }
    }else{
        ?>
        <script language="JavaScript">
            alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
            document.location='index.php';
        </script>
        <?php
    }
?>