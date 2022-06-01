<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman SISWA</title>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>SISWA VIEW</h1>
            <p>Tampilan dari halaman siswa</p>
        </div>
    </header>
    <nav>
        <li><a href="index.php">Keluar</a></li>
    </nav>
    <main>
        <h3>Selamat Datang Di halaman SISWA</h3>
        <?php
        include "koneksi.php";
        // print '<pre>';
        // var_dump( $_GET );
        // print '</pre>';
        $username = $_GET['id_'];
        // echo $username;
        $user = preg_replace("/[^a-zA-Z0-9]/", "", $username); //untuk menghapus tanda petik ""
        echo $user;
        $query = mysqli_query($koneksi, 'SELECT * FROM tbsiswa where username= "'.$user.'"');
        while ($data  = mysqli_fetch_array($query)){
            $nis = $data['nis'];
            $nama = $data['nama_siswa'];
        ?>
        <p><?php echo $nama ?></p>
        <?php } ?>
        <p>Haloo</p>
    </main>
    <footer>
        <p>Copyright &#169; 2022</p>
    </footer>
</body>

</html>