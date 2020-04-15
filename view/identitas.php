<?php
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_survey";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <link rel="stylesheet" href="../assets/styleidentitas.css">
</head>
<body>
    <form method="post" action="../data/simpan-identitas.php" class="box">
        <h1>Masukan Data Diri</h1>
            <input type="text" name="nama" placeholder="Masukan Nama" autocomplete="off">
            <input type="text" name="usia" placeholder="Masukan Usia" autocomplete="off">
        
            <input type="submit" value="Masuk">
    </form>
</body>
</html>