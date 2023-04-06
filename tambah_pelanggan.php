<?php

require "koneksi.php";
$id_pelanggan = $_POST["id_pelanggan"];
$nama_pelanggan = $_POST["nama_pelanggan"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];
$no_hp = $_POST["no_hp"];

$sql = "INSERT INTO pelanggan VALUES ('', '$nama_pelanggan', '$alamat', '$email', '$no_hp')";
// var_dump($sql);
mysqli_query($conn, $sql);
header  ("location: datapelanggan.php");

?>