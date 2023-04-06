<?php

$servername = "localhost";
$username = "root";
$passsword = "";
$dbname = "db_perpustakaan";

$conn = mysqLi_connect($servername, $username, $passsword, $dbname);

// if (!$conn) {die("koneksi error:". mysqli_connect_error());
// }else { echo "koneksi Berhasil";}

?>