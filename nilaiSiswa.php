<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Guru</title>
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
            <li><a href="guruView.php">Data Siswa</a></li>
            <li><a href="nilaiSiswa.php">Nilai Siswa</a></li>
            <li><a href="index.php">Keluar</a></li>
        </ul>
    </nav>
    <main>
        <h3>Data Siswa</h3>
        <table>
            <tr>
                <td>No.</td>
                <td>Id Nilai</td>
                <td>NIS</td>
                <td>Nama Siswa</td>
                <td>Kelas</td>
                <td>Mata Pelajaran</td>
                <td>Nilai</td>
                <td>Aksi</td>
            </tr>
            <?php
        include "koneksi.php";
        $n=1;
        $query = mysqli_query($koneksi, 'SELECT * FROM tbnilai JOIN tbsiswa ON tbnilai.nis = tbsiswa.nis JOIN tbmata_pelajaran on tbnilai.kode_pelajaran = tbmata_pelajaran.kode_pelajaran');
            while ($data  = mysqli_fetch_array($query)){
                $id = $data['id_nilai'];
                $nis = $data['nis'];
                $nama = $data['nama_siswa'];
                $kelas = $data['kelas'];
                $mapel = $data['nama_pelajaran'];
                $nilai = $data['nilai'];

        ?>
            <tr>
            <td><?php echo $n++ ?></td>
            <td><?php echo $id ?></td>
            <td><?php echo $nis ?></td>
            <td><?php echo $nama ?></td>
            <td><?php echo $kelas ?></td>
            <td><?php echo $mapel ?></td>
            <td><?php echo $nilai ?></td>
            <td>
                <a href="editNilai.php?id=<?php echo $id ?>">Edit</a> ||
                <a href="deleteNilai.php?id=<?php echo $id ?>">Hapus</a>
            </td>
            </tr>
            <?php } ?>
        </table>
    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>