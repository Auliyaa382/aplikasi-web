<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Admin</title>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>GURU VIEW</h1>
            <p>Tampilan dari halaman guru</p>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="guruView.php">Data Nilai</a></li>
            <li><a href="index.php">Keluar</a></li>
        </ul>
    </nav>
    <main> 
        <?php
        include "koneksi.php";
        $iddetail=$_GET['id'];
        $query = mysqli_query($koneksi, 'SELECT * FROM tbnilai JOIN tbsiswa ON tbnilai.nis = tbsiswa.nis JOIN tbmata_pelajaran on tbnilai.kode_pelajaran = tbmata_pelajaran.kode_pelajaran where id_nilai = "'.$iddetail.'"');
        while ($data  = mysqli_fetch_array($query)){
            $id = $data['id_nilai'];
            $nis = $data['nis'];
            $nama = $data['nama_siswa'];
            $kelas = $data['kelas'];
            $mapel = $data['nama_pelajaran'];
            $nilai = $data['nilai'];
        ?>
            <form action="updateNilai.php" method="POST">
            <p>Id Nilai</p>
            <input type="text" name="id" value="<?php echo $id?>" readonly>
            <p>NIS</p>
            <input type="text" name="nis" value="<?php echo $nis?>" readonly>
            <p>Nama</p>
            <input type="text" name="nama" value="<?php echo $nama?>" readonly>
            <p>Kelas</p>
            <input type="text" name="kelas" value="<?php echo $kelas?>" readonly><br>
            <p>Mata Pelajaran</p>
            <input type="text" name="mapel" value="<?php echo $mapel?>" readonly>
            <p>Nilai</p>
            <input type="number" name="nilai" min="0" max="100" value="<?php echo $nilai?>"><br>
            <input type="submit" name="submit" value="SUBMIT">
            </form>
        <?php } ?>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>