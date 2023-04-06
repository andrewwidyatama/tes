<?php 
require "koneksi.php";
$id_transaksi = $_POST['id_transaksi'];
// var_dump($id_transaksi); die;
$id_pelanggan = $_POST['id_pelanggan'];
$id_komik = $_POST['id_komik'];
$kuantitas = $_POST['kuantitas'];

$sql = "SELECT harga FROM tb_komik WHERE id_komik = '$id_komik'";
$result = mysqli_query($conn, $sql);  

while ($row = mysqli_fetch_array($result)): 
    $harga = $row['harga'];
    $total_harga =  $_POST['kuantitas']*$row['harga'];
endwhile;

$query = "UPDATE transaksi SET id_pelanggan = '$id_pelanggan', id_komik = '$id_komik', kuantitas = '$kuantitas', harga = '$harga', total_pembayaran = '$total_harga' WHERE id_transaksi = '$id_transaksi'";
$hasil = mysqli_query($conn, $query);
if($hasil){
    header ("location:data_transaksi.php");
}
?>