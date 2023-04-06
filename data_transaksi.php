<?php
require "koneksi.php";
$sql= "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, pelanggan.nama_pelanggan, tb_komik.id_komik, tb_komik.judul_komik FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN tb_komik on tb_komik.id_komik = transaksi.id_komik ORDER by id_transaksi";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
</head>
    <body>
        <h2>Data Transaksi Toko ABCDE </h2>
        <a href="tambahform_transaksi.php?" class="button">Tambah Data Transaksi</a>
        <table border=2px solid black>
            <tr>
                <th>Id Transaksi</th>
                <th>Nama pelanggan</th>
                <th>judul komik</th>
                <th>kuantitas</th>
                <th>Harga</th>
                <th>Total pembayaran</th>
                <th>Aksi</th>

</tr>
<?php while ($row = mysqli_fetch_array($result)): $total_pembayaran = $row['kuantitas']*$row['harga']?>
<tr>
        <td class="center-align"><?=$row['id_transaksi']?></td>
        <td><?=$row['nama_pelanggan']?></td>
        <td><?=$row['judul_komik']?></td>
        <td><?=$row['kuantitas']?></td>
        <td><?=$row['harga']?></td>
        <td><?=$total_pembayaran ?></td>
        
        <td class="center-align">
            <a href="editform_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" class="button1">edit</a>
            <a href="delete_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>" class="button2">hapus</a>
            </td>
            </tr>
            <?php endwhile; ?>
     </table>
    </div>
            </body>
            <html>


            