<?php 

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$ket = $_POST['ket'];

echo "<head><title> Daftar Pesanan Material </title></head>";
$buka = fopen("material.txt", "a+");
fputs($buka, "$nama | $harga | $jumlah | $ket \n");
fclose($buka);

header("Location: setelahprosesResp.php")


?>



