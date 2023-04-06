<?php
require "koneksi.php";

$id_komik = $_GET["id_komik"];
$sql = "SELECT * FROM tb_komik WHERE id_komik ='$id_komik'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit data Buku </h2>
    <form action="edit_buku.php" method="post">
        <input type="hidden" name="id_komik" value="<?=$row['id_komik']?>" /><br>
<label for="judul_komik">judul_komik</label>
<input type="text" id="judul_komik" name="judul_komik" value="<?=$row['judul_komik']?>" /><br>
<label for="penulis">penulis</label>   
<input type="text" id="penulis" name="penulis" value="<?=$row['penulis']?>" /><br>
<label for="penerbit">penerbit</label>
<input type="text" id="penerbit" name="penerbit" value="<?=$row['penerbit']?>" /><br>
<label for="tahun_terbit">tahun_terbit</label>
<input type="date" id="tahun_terbit" name="tahun_terbit" value="<?=$row['tahun_terbit']?>" /><br>
<label for="harga">harga</label>
<input type="text" id="harga" name="harga" value="<?=$row['harga']?>" /><br>
<input type="submit" value="ubah"/>
</form>
<?php endwhile ?>
</body>
</html>

