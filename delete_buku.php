 <?php
 require "koneksi.php";

 $id_komik =  $_GET["id_komik"];
 $sql = "DELETE FROM tb_komik WHERE id_komik='$id_komik'";
 $result = mysqli_query($conn, $sql);

 if(!$result) {
    echo "<script>
    alert('gagal hapus');
    location.href = 'data_buku.php';
    </script>";
 } else {
    echo "<script>
    alert('berhasil hapus');
    location.href = 'data_buku.php';
    </script>";
 }
 ?>