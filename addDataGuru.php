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
            <form action="insertGuru.php" method="POST">
            <p>NIP</p>
            <input type="text" name="nip">
            <p>Nama</p>
            <input type="text" name="nama">
            <p>Jenis Kelamin</p>
            <select name="jk">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select><br>
            <p>Alamat</p>
            <textarea name="alamat"></textarea>
            <p>Username</p>
            <input type="text" name="username">
            <p>Password</p>
            <input type="text" name="password">
            <p>Hak Akses</p>
            <input type="text" name="hakakses" value="GURU" readonly>
            <input type="submit" name="submit" value="SUBMIT">
            </form>

    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>