<?php
require 'koneksi.php';
$id_komik = $_POST['id_komik'];
$id_pelanggan = $_POST['id_pelanggan'];
$kuantitas = $_POST['kuantitas'];

$query = mysqli_query($conn, "SELECT harga FROM tb_komik WHERE id_komik = '$id_komik'");
while ($row = mysqli_fetch_array($query)):
    $harga = $row['harga'];
    $total_harga = $_POST['kuantitas']*$row['harga'];

    $sql = "INSERT INTO transaksi VALUES (null, '$id_pelanggan', '$id_komik', '$kuantitas', '$harga', '$total_harga')";
    mysqli_query($conn, $sql);

endwhile;

header("location:data_transaksi.php");

?>