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
            <p>Tampilan dari halaman admin</p>
        </div>
    </header>
    <nav>
        <ul>
            <li><a href="nilaiSiswa.php">Nilai Siswa</a></li>
            <li><a href="index.php">Keluar</a></li>
        </ul>
    </nav>
    <main>
        <h3>Selamat Datang Di halaman GURU</h3>
        <!-- <?php
        // include "koneksi.php";
        // print '<pre>';
        // var_dump( $_GET );
        // print '</pre>';
        // $username = $_GET['id'];
        // echo $username;
        // $user = preg_replace("/[^a-zA-Z0-9]/", "", $username);
        ?> -->
        <table>
            <tr>
                <td>No.</td>
                <td>NIS</td>
                <td>Nama Siswa</td>
                <td>Jenis Kelamin</td>
                <td>Kelas</td>
                <td>AKSI
                </td>
            </tr>
            <?php
        include "koneksi.php";
        $n =1;
        $query = mysqli_query($koneksi, 'SELECT * FROM tbsiswa');
            while ($data  = mysqli_fetch_array($query)){
                $nis = $data['nis'];
                $nama = $data['nama_siswa'];
                $jk = $data['jenis_kelamin'];
                $kelas = $data['kelas'];
        ?>
            <tr>

                <td><?php echo $n++ ?></td>
                <td><?php echo $nis ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $jk ?></td>
                <td><?php echo $kelas ?></td>
                <td>
                    <a href="addNilaiSiswa.php?id=<?php echo $nis ?>">Tambah</a>
                </td>
                <?php }?>
            </tr>
        </table>
    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>