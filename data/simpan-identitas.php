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
            $id   = $_POST['id'];
            $nama = $_POST['nama'];
            $usia = $_POST['usia'];

            // query SQL untuk insert data
            $query="INSERT INTO tb_pengguna SET id='$id', nama='$nama', usia='$usia' ";
            mysqli_query($koneksi, $query);
            // mengalihkan ke halaman survey.php
            header("location: session.php");
           
?>