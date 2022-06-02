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
            <li><a href="viewMapel.php">Mata Pelajaran</a></li>
            <li><a href="addMapel.php">Tambah Mata Pelajaran</a></li>
            <li><a href="index.php">Keluar</a></li>

        </ul>
    </nav>
    <main>
        <table>
            <tr>
                <td>No.</td>
                <td>Kode Mata Pelajaran</td>
                <td>Nama Mata Pelajaran</td>
                <td>NIP</td>
                <td>Nama Guru</td>
                <td>AKSI</td>

            </tr>
            <?php
            $n =1;
            include "koneksi.php";
            $query = mysqli_query($koneksi, 'SELECT * FROM tbmata_pelajaran INNER JOIN tbguru ON tbmata_pelajaran.nip = tbguru.nip');
            while ($data  = mysqli_fetch_array($query)){
                $nip = $data['nip'];
                $namamapel = $data['nama_pelajaran'];
                $kodemapel = $data['kode_pelajaran'];
                $nama = $data['nama_guru'];
                
            ?>
            <tr>
                <td><?php echo $n++ ?></td>
                <td><?php echo $kodemapel ?></td>
                <td><?php echo $namamapel ?></td>
                <td><?php echo $nip ?></td>
                <td><?php echo $nama ?></td>
                <td>
                    <a href="editMapel.php?id=<?php echo $nip ?>&kode=<?php echo $kodemapel ?>&nama=<?php echo $namamapel ?>">Edit</a>||
                    <a href="deleteMapel.php?id=<?php echo $nip ?> &kode=<?php echo $kodemapel ?>">Hapus</a>
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