<?php
    // mengaktifkan session php
    session_start();
    
    // menangkap data yang dikirim dari form
    $nama = $_POST['nama'];

    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi,"select * from tb_pengguna where nama='$nama'");
    
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
    
    if($cek == $id){
        $_SESSION['nama'] = $nama;
        header("location: ../view/survey.php");
    }else{
        header("location: ../view/identitas.php");
    }
?>