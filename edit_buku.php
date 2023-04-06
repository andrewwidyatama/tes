<?php
require "koneksi.php";

$id_komik = $_POST['id_komik'];
$judul_komik = $_POST['judul_komik'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga = $_POST['harga'];

$sql = "UPDATE tb_komik SET judul_komik ='$judul_komik', penulis ='$penulis', penerbit ='$penerbit', tahun_terbit ='$tahun_terbit', harga ='$harga' WHERE id_komik ='$id_komik'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "<script>
            alert('Edit berhasil');
            location.href = 'data_buku.php';
    </script>";
} else {
    echo "<script>
            alert('Edit gagal');
            location.href = 'data_buku.php';
    </script>";
}
?>