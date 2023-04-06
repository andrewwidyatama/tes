<?php
require "koneksi.php";

$id_customer = $_GET["id_pelanggan"];
$sql = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)):
?>

<!DOCTYPE html>
<head></head>
<body>
    <h2> Edit Data Customer </h2>
    <form action="edit_pelanggan.php" method="post">
        <input type="hidden" name="id_pelanggan" value="<?=$row['id_pelanggan']?>" /><br>
        <label for="nama_pelanggan">Nama</label>
        <input type="text" name="nama_pelanggan" value="<?=$row['nama_pelanggan']?>" /><br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" value="<?=$row['alamat']?>" /><br>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?=$row['email']?>" /><br>
        <label for="no_hp">No-Hp</label>
        <input type="number" name="no_hp" value="<?=$row['no_hp']?>" /><br>
        <input type="submit" value="Ubah"/>
</form>
<?php endwhile ?>
</body>
</html>