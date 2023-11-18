<?php
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "tugas_besar";
// create connection
$apaya = mysqli_connect($servername, $username, $password, $db);

// check connection
if (!$apaya) {
die("Gagal Melakukan Proses Koneksi: " . mysqli_connect_error());
}
// echo "Terhubung";
// echo "</br>";

?>
