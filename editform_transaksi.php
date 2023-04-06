<?php
require "koneksi.php";
$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan FROM pelanggan");
$result_tb_komik = mysqli_query($conn, "SELECT id_komik, judul_komik, harga FROM tb_komik");

$options_pelanggan = mysqli_fetch_all($result_pelanggan, MYSQLI_ASSOC);
$options_tb_komik = mysqli_fetch_all($result_tb_komik, MYSQLI_ASSOC);

$id_transaksi = $_GET['id_transaksi'];
$sql ="SELECT transaksi.id_transaksi, pelanggan.id_pelanggan, tb_komik.id_komik, pelanggan.nama_pelanggan, tb_komik.judul_komik, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran FROM pelanggan INNER JOIN transaksi ON pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN tb_komik ON tb_komik.id_komik = transaksi.id_komik WHERE transaksi.id_transaksi = '$id_transaksi'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)):
?>
<!DOCTYPE html>
<head>
</head>
<body>
    <form action ="edit_transaksi.php" method="post">
        <input type="hidden" name="id_transaksi" value="<?=$row['id_transaksi']?>" />

       <label for="nama_pelanggan">Nama Pelanggan</label>
       <select name="id_pelanggan" id="nama_pelanggan"><?=$row['nama_pelanggan']?>
       <?php foreach ($options_pelanggan as $option) {
         $selected = $option['id_pelanggan']==$row['id_pelanggan'] ? 'selected' : '';
         ?>
         <option value="<?=$option['id_pelanggan']?>" <?=$selected ?>><?=$option['nama_pelanggan']?></option>
       <?php } ?>
       </select><br>

       <label for="judul_komik">Nama Buku</label>
    <select name="id_komik" id="judul_komik"><?=$row['judul_komik']?>
     <?php foreach ($options_tb_komik as $option) {
        $selected = $option['id_komik']==$row['id_komik'] ? 'selected' : '';
     ?>
        <option value="<?=$option['id_komik']?>"
          <?= $selected?>><?=$option['judul_komik'] . '-Rp' . $option['harga']?>
     </option>
     <?php } ?>
     </select><br>

    <label for="kuantitas">Qty</label>
    <input type="text" name="kuantitas" id="kuantitas" value="<?=$row['kuantitas']?>"></input><br>
    <input type="submit" value="ubah">
    <?php endwhile; ?>

</form>
</body>
</html>
