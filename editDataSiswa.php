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
            <li><a href="index.php">Keluar</a></li>
        </ul>
    </nav>
    <main>
        <?php
            include "koneksi.php";
            $nis = $_GET['id'];
            $query = mysqli_query($koneksi, 'SELECT * FROM tbsiswa INNER JOIN tbuser ON tbsiswa.username = tbuser.username where nis ="'.$nis.'"');
            while ($data  = mysqli_fetch_array($query)){
                $nis = $data['nis'];
                $nama = $data['nama_siswa'];
                $jk = $data['jenis_kelamin'];
                $alamat = $data['alamat'];
                $kelas = $data['kelas'];
                $username = $data['username'];
                $password = $data['password'];
                $hakakses = $data['hakakses'];
            ?>
        <form action="updateDataSiswa.php" method="POST">
            <p>NIS</p>
            <input type="text" name="nis" value="<?php echo $nis ?>" readonly>
            <p>Nama</p>
            <input type="text" name="nama" value="<?php echo $nama ?>">
            <p>Jenis Kelamin</p>
            <select name="jk">
                <option value="<?php echo $jk?>"><?php echo $jk?></option>
                <option value="<?php if($jk == "Laki-laki"){
                                                echo "Perempuan";}
                                                else{
                                                echo "Laki-laki"; 
                                                }?>"><?php if($jk == "Perempuan"){
                                                    echo "Laki-laki";}
                                                    else{
                                                    echo "Perempuan"; 
                                                    }?></option>
            </select>
            <br>
            <p>Alamat</p>
            <textarea name="alamat" value="<?php echo $alamat ?>"><?php echo $alamat ?></textarea>
            <p>Username</p>
            <input type="text" name="username" value="<?php echo $username ?>" readonly>
            <p>Password</p>
            <input type="text" name="password" value="<?php echo $password ?>">
            <p>Hak Akses</p>
            <input type="text" name="hakakses" value="SISWA" readonly>
            <input type="submit" name="submit" value="UPDATE">
            <?php } ?>
        </form>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>