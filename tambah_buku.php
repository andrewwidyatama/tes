<?php

require "koneksi.php";
$id_komik = $_POST["id_komik"];
$judul_komik = $_POST["judul_komik"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$tahun_terbit = $_POST["tahun_terbit"];
$harga = $_POST["harga"];

$sql = "INSERT INTO tb_komik VALUES ('', '$judul_komik', '$penulis', '$penerbit', '$tahun_terbit', '$harga')";
mysqli_query($conn, $sql);
header  ("location: data_buku.php");

?>