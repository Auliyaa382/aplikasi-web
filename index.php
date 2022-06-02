<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Login</title>
</head>
<body>
    <main>
    <div class="card">
        <h3>Silahkan Masukkan Username dan Password</h3>
    <form action="userRole.php?op=in" method="POST">
        Username <input type="text" name="username1"><br>
        Password <input type="password" name="password"><br>
        <button type="submit" name="submit" value="LOGIN">Login</button>
    </form>
    </div>
</main>
</body>
</html>