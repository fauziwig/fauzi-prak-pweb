<!--Daftar belanja yang bisa dilihat di halaman khusus dalam browser-->
<?php 

echo "<head><title>Daftar Pembelian </title></head>";
$buka = fopen("material.txt", "a+");

echo "<style>";
echo "*{
    margin: 0;
    padding: 0;
}
body{
    font-family: sans-serif;
    background: url(assets/bg2.jpg);
    background-size: cover;
}

table{
    border-collapse:collapse;
    font:normal normal 12px sans-serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */

/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:middle;
    padding:7px 15px;
    border:1px solid #696969;
}
/* Mengatur warna baris */
table tr {
    background:#F5FFFA;
    font-size: 14px;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#F0F8FF;
}

.button{
    padding: 10px;
    width: 20%;
    background-color: #3333cc;
    border-radius: 5px;
    border: none;
    font-weight: bold;
    color: white;
    text-decoration: none;
}

.button:hover{
    background-color: #7070db;
}

.daftarBelanja{
    margin: 50px auto;
	width: 50%;
	justify-content: center;

}
";


echo "</style>";
echo "<center>";
echo "<div class='daftarBelanja'>";
echo "<h1> <strong><font size='6' face='sans-serif'> DAFTAR PEMBELIAN </font></strong></h1>";
echo "<table cellpadding=10 cellspacing=0 border='2'>";

echo "<tr style='background: #00BFFF;'>
<td> Nama </td>
<td> Harga Per Satuan </td>
<td> Jumlah </td>
<td> Keterangan  </td>
</tr>";

while ($isi = fgets($buka,1000)) {
    $pisah = explode(' | ', $isi);
    echo "<tr>
    <td>$pisah[0]</td>
    <td>$pisah[1]</td>
    <td>$pisah[2]</td>
    <td>$pisah[3]</td>
    </tr>";
}

echo "</table>";

echo "<br><br><strong><a href='tampilanResp.php' class='button'> Beli Material </a></strong>";
echo "</div>";
echo "</center>";

?>