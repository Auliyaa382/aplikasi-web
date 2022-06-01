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
            <li><a href="addDataGuru.php">Tambah Data Guru</a></li>
        </ul>
    </nav>
    <main>
        <table>
            <tr>
                <td>No.</td>
                <td>NIP</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Alamat</td>
                <td>Username</td>
                <td>Password</td>
                <td>Hak Akses</td>
            </tr>
            <?php
            $n =1;
            include "koneksi.php";

            $query = mysqli_query($koneksi, 'SELECT * FROM tbguru INNER JOIN tbuser ON tbguru.username = tbuser.username where hakakses ="GURU"');
            while ($data  = mysqli_fetch_array($query)){
                $nip = $data['nip'];
                $nama = $data['nama_guru'];
                $jk = $data['jenis_kelamin'];
                $alamat = $data['alamat'];
                $username = $data['username'];
                $password = $data['password'];
                $hakakses = $data['hakakses'];
            
            ?>
            <tr>
                <td><?php echo $n++ ?></td>
                <td><?php echo $nip ?></td>
                <td><?php echo $nama ?></td>
                <td><?php echo $jk ?></td>
                <td><?php echo $alamat ?></td>
                <td><?php echo $username ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $hakakses ?></td>
        <?php } ?>
        </tr>
        </table>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>