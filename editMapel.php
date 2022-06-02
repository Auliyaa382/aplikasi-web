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
            <h1>ADMIN VIEW</h1>
            <p>Tampilan dari halaman admin</p>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="viewDataGuru.php">Data Guru</a></li>
            <li><a href="viewDataSiswa.php">Data Siswa</a></li>
            <li><a href="viewMapel.php">Data Mata Pelajaran</a></li>
            <li><a href="index.php">Keluar</a></li>
        </ul>
    </nav>
    <main>
    <?php
        include "koneksi.php";
        $nip=$_GET['id'];
        $mapel = $_GET['kode'];
        $nama = $_GET['nama'];
        ?>
            <form action="updateMapel.php" method="POST">
            <p>Kode Mata Pelajaran</p>
            <input type="text" name="kode" value="<?php echo $mapel?>" readonly>
            <p>Nama Mata Pelajaran</p>
            <input type="text" name="namamapel" value="<?php echo $nama?>" readonly>
            <p>NIP</p>
            <input type="text" name="nip" value="<?php echo $nip?>">
            <input type="submit" name="submit" value="SUBMIT">
            </form>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>