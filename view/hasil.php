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

       if(isset($_POST['submit'])){
            // $pilihan = $_POST["pilihan"];
            $id_soal = $_POST["id"];
            $jumlah = $_POST['jumlah'];
            
            $score = 0;
            $benar = 0;
            $salah = 0;
            $kosong = 0;
            
            for ($i=0; $i < $jumlah; $i++){
                //id nomor soal
                $nomor = $id_soal[$i];
                
                //jika user tidak memilih jawaban
                if (empty( $pilihan[$nomor] )){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban = $pilihan[$nomor];
                    
                    //cocokan jawaban user dengan jawaban di database
                    $query = mysqli_query($koneksi, "select * from tbl_soal where id_soal='$nomor' and knc_jawaban='$jawaban'");
                    
                    $cek = mysqli_num_rows($query);
                    
                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }
                    
                } 

            }
        }

        /*LOGICAL
            jika ya <= 7 maka risiko rendah, jika ya <= 14 maka risiko sedang, jika ya >14 maka risiko tinggi 
        */
        
        if( $benar <= 7 ){
            $status = ' Risiko Rendah';
        }elseif ( $benar <= 14 ){
            $status = ' Risiko Sedang';
        }else {
            $status = ' Risiko Tinggi';
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="../assets/styleidentitas.css">
</head>
<body align='center'>
    <div class="box">
                <div class="title m-b-md">
                    Hasil:
                </div>
                    <?php
                        echo $status
                    ?>
                </br>
                </br>
                </br>

                <div class="links">
                    <a href="identitas.php">Kembali</a>
                    <a href="https://github.com/iqbalr3000">GitHub</a>
                    <a href="https://www.instagram.com/iqbalr.id/">Instagram</a>
                </div>
            </div>
    </form>
</body>
</html>