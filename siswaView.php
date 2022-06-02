<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman SISWA</title>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>SISWA VIEW</h1>
            <p>Tampilan dari halaman siswa</p>
        </div>
    </header>
    <nav>
        <li><a href="index.php">Keluar</a></li>
    </nav>
    <main>
        <div class="card">
            <h3>Selamat Datang Di halaman SISWA</h3>
            <?php
        include "koneksi.php";
        // print '<pre>';
        // var_dump( $_GET );
        // print '</pre>';
        $username = $_GET['id_'];
        // echo $username;
        $user = preg_replace("/[^a-zA-Z0-9]/", "", $username); //untuk menghapus tanda petik ""
        // echo $user;
        $query = mysqli_query($koneksi, 'SELECT * FROM tbsiswa where username= "'.$user.'"');
        while ($data  = mysqli_fetch_array($query)){
            $nis = $data['nis'];
            $nama = $data['nama_siswa'];
            $kelas = $data['kelas'];
        ?>
            <p>Nama Siswa : <?php echo $nama ?></p>
            <p>Kelas : <?php echo $kelas?></p>
            <p>Nilai :</p>
            <?php
        $query1 = mysqli_query($koneksi, 'SELECT * FROM tbnilai INNER JOIN tbmata_pelajaran ON tbnilai.kode_pelajaran = tbmata_pelajaran.kode_pelajaran WHERE nis = "'.$nis.'"');
        $cek = mysqli_num_rows($query1);
        if($cek==0){
            echo "<p>Maaf, nilai anda belum diinputkan oleh guru</p>";
        }else{

        while ($data1  = mysqli_fetch_array($query1)){
            $idnilai = $data1['id_nilai'];
            $mapel = $data1['nama_pelajaran'];
            $nilai = $data1['nilai'];
        ?>
            <p>Mata Pelajaran <?php echo $mapel ?> : <?php echo $nilai ?> </p>
            <?php
        }
    }
        
    }?>
        </div>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>