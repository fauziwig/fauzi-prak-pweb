<?php

echo "<center>"; 

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

.container-setelahproses{
    margin: 250px auto;
    padding: 20px;
    border-radius: 5px;
    justify-content: center;
    width: 40%;
    background-color: white;
    display: block;    
}

p{
    font-family: sans-serif;
    font-weight: bold;
    font-size : 24px;
}
.button{
    padding: 10px;
    margin: 0 10px;
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
";
echo "</style>";

echo "<div class='container-setelahproses'>";
echo "<p>TERIMA KASIH ATAS PEMBELIAN ANDA </p><br>";
echo "<a href='tampilanResp.php' class='button'> Beli Material </a>";
echo "<a href='lihatResp.php' class='button'> Lihat Daftar Belanja </a><br>";

echo "</div>";
echo "</center>";
?>