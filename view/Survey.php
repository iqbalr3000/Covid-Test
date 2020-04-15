<?php
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_Survey";
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
  <title>Survey App</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
      </br>
      </br>

      <h3 align='center'> Covid Test </h3>

      <?php
                $hasil=mysqli_query($koneksi, "select * from tbl_soal WHERE aktif='Y' ORDER BY RAND ()");
                $jumlah=mysqli_num_rows($hasil);
                $urut=0;
                while($row =mysqli_fetch_array($hasil))
                {
                    $id=$row["id_soal"];
                    $pertanyaan=$row["soal"];
                    $pilihan_a=$row["a"];
                    $pilihan_b=$row["b"];
                    
      ?>
              <div>
                  <table width="50%" border="0" align="center">';
                        <form name="form1" method="post" action="hasil.php">
                              <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                              <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                              <tr>
                                    <td width="17"><font color="#000000"><?php echo $urut=$urut+1; ?></font></td>
                                    <td width="430"><font color="#000000"><?php echo "$pertanyaan"; ?></font></td>
                              </tr>
                              <tr>
                                    <td height="21"><font color="#000000">&nbsp;</font></td>
                                  <td><font color="#000000">
                                  A.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                                  <?php echo "$pilihan_a";?></font> </td>
                              </tr>
                              <tr>
                                    <td><font color="#000000">&nbsp;</font></td>
                                  <td><font color="#000000">
                                  B. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B"> 
                                  <?php echo "$pilihan_b";?></font> </td>
                              </tr>
                                        
                              <?php
                                }
                              ?>
                              <tr>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="submit" class="btn btn-md btn-primary" value="hasil" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')"></td>
                              </tr>
                        </form>
                  </table>
        </div>
</body>
</html>