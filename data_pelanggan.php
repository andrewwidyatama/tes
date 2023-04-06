<?php
require "koneksi.php";
$sql = "SELECT * FROM pelanggan";
$result = mysqli_query($conn, $sql);
?>

<!Doctype html>
<head>
</head>
<body>
    <a href="form_pelanggan.html">Tambah</a>
    <table border=3px solid black>
        <tr>
            <th>ID pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>No Hp</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)):?>
    <tr>
        <td><?= $row['id_pelanggan'] ?></td>
        <td><?= $row['nama_pelanggan'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['no_hp'] ?></td>
        <td>
            <a href="editform_pelanggan.php?id_pelanggan=<?=$row['id_pelanggan']?>">Edit</a>
            <a href="delete_pelanggan.php?id_pelanggan=<?=$row['id_pelanggan']?>">Hapus</a>
        </td>
    </tr>
<?php endwhile ?>
    </table>
</body>
</html>