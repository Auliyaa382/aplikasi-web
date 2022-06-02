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
        $nis=$_GET['id'];
        $query = mysqli_query($koneksi, 'SELECT * FROM tbsiswa where nis = "'.$nis.'"');
            while ($data  = mysqli_fetch_array($query)){
                $nis = $data['nis'];
                $nama = $data['nama_siswa'];
                $jk = $data['jenis_kelamin'];
                $kelas = $data['kelas'];
        ?>
            <form action="insertNilai.php" method="POST">
            <p>NIS</p>
            <input type="text" name="nis" value="<?php echo $nis?>">
            <p>Nama Siswa</p>
            <input type="text" name="nama" value="<?php echo $nama?>">
            <p>Jenis Kelamin</p>
            <input type="text" name="jk" value="<?php echo $jk?>"><br>
            <p>Kelas</p>
            <input type="text" name="kelas" value="<?php echo $kelas?>"><br>
            <p>Mata Pelajaran</p>
            <select name="mapel">
                <option value="MP01">Biologi</option>
                <option value = "MP02">Bahasa Inggris</option>
                <option value = "MP03">Fisika</option>
            </select><br>
            <p>Nilai</p>
            <input type="number" name="nilai" min="0" max="100"><br>
            <input type="submit" name="submit" value="SUBMIT">
            </form>
        <?php } ?>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>