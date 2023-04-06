<?php
require 'koneksi.php';

$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan FROM pelanggan");
$result_tb_komik = mysqli_query($conn, "SELECT id_komik, judul_komik, harga FROM tb_komik");

$options_pelanggan = mysqli_fetch_all($result_pelanggan, MYSQLI_ASSOC);
$options_tb_komik = mysqli_fetch_all($result_tb_komik, MYSQLI_ASSOC);

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    
</head>
<body>
<form action="tambah_transaksi.php" method="post">
    <label for="nama_pelanggan">Nama Pelanggan</label><br>
    <select name="id_pelanggan" id="nama_pelanggan">
        <option disabled selected>Pilih Nama Pelanggan..</option>
        <?php foreach ($options_pelanggan as $option) { ?>
        <option value="<?=$option['id_pelanggan']?>"><?=$option['nama_pelanggan']?></option>
        <?php } ?>
     </select><br>
    <label for="judul_komik">Nama buku</label><br>
    <select name="id_komik" id="judul_komik">
        <option disabled selected>Pilih Nama Buku..</option>
        <?php foreach ($options_tb_komik as $option) { ?>
        <option value="<?=$option['id_komik']?>"><?=$option['judul_komik'] . ' ' . "-Rp " . $option['harga']?></option>
        <?php } ?>
     </select><br>
     <label for="kuantitas">Kuantitas</label><br>
     <input type="number" name="kuantitas" id="kuantitas"/><br>
     <input type="submit" value="Simpan" class="button4">
</form>      
</body>
</html>