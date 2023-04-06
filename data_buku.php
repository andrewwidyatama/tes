<?php
require 'koneksi.php';
$sql = "SELECT * FROM tb_komik";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
    <body>


    
<table border=3px solid black>
    <tr>
        <th>Id komik</th>
        <th>Judul komik</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)):?>
    <tr>
        <td><?= $row['id_komik'] ?></td>
        <td><?= $row['judul_komik'] ?></td>
        <td><?= $row['penulis'] ?></td>
        <td><?= $row['penerbit'] ?></td>
        <td><?= $row['tahun_terbit'] ?></td>
        <td><?= $row['harga'] ?></td>
        <td>
            <a href="editform_buku.php?id_komik=<?= $row ['id_komik']?>">Edit</a>
           <a href="delete_buku.php?id_komik=<?= $row ['id_komik']?>" ?>hapus</a>
</td>
</tr>
    <?php endwhile ?>
    </table>
</body>
</html>
