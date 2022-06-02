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
            <li><a href="addDataSiswa.php">Tambah Data Siswa</a></li>
            <li><a href="index.php">Keluar</a></li>

        </ul>
    </nav>
    <main>
        <table>
            <tr>
                <td>No.</td>
                <td>NIS</td>
                <td>Nama Siswa</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>Kelas</td>
                <td>Username</td>
                <td>Password</td>
                <td>Hak Akses</td>
                <td>AKSI</td>

            </tr>
            <?php
            $n =1;
            include "koneksi.php";
            $query = mysqli_query($koneksi, 'SELECT * FROM tbsiswa INNER JOIN tbuser ON tbsiswa.username = tbuser.username');
            while ($data  = mysqli_fetch_array($query)){
                $nis = $data['nis'];
                $nama = $data['nama_siswa'];
                $jk = $data['jenis_kelamin'];
                $alamat = $data['alamat'];
                $kelas = $data['kelas'];
                $username = $data['username'];
                $password = $data['password'];
                $hakakses = $data['hakakses'];
                // $password = $data['password'];
            ?>
            <tr>
                <td><?php echo $n++ ?></td>
                <td><?php echo $nis ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $jk ?></td>
                <td><?php echo $alamat ?></td>
                <td><?php echo $kelas ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $hakakses ?></td>
                <td>
                    <a href="editDataSiswa.php?id=<?php echo $nis ?>">Edit</a>||
                    <a href="deleteDataSiswa.php?id=<?php echo $nis ?> &user=<?php echo $username ?>">Hapus</a>
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