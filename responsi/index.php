<html>
	<head>
		<title> Responsi PWEB - Kasir Toko Bangunan </title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"  charset="UTF-8" name="viewport" >
	</head>

	<body>
		<!--mengatur tampilan dgn CSS-->
		<style type="text/css" src="styleResp.css">
			*{
				margin: 0;
				padding: 0;
			}
			body{
				font-family: sans-serif;
				background: url(assets/bg2.jpg);
				background-size: cover;
				background-repeat: no-repeat;
			}
			
			.listMaterial{
				width: 50%;
				margin: 50px auto;
				justify-content: center;
			}
			/* Pengaturan border-collapse jenis,ukuran serta warna huruf secara keseluruhan tabel */
			table{
				border-collapse:collapse;
				font-family: sans-serif;
				color:#333333;
			}
			/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
			table th {
				background:#00BFFF;
				color:white;
				font-weight:bold;
				font-size:15px;
			}
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

			.inputMaterial{
				margin: 50px auto;
				width: 50%;
				justify-content: center;
			}

			.input{
				width: 100%;
				padding: 3px;
				font-size: sans-serif;
			}

			.button{
				padding: 8px;
				margin: 0 5px;
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
				cursor: pointer;
			}

			.outputMaterial{
				margin: 50px auto;
				width: 50%;
				justify-content: center;
			}
		</style>


	<div class="container-utama">
		<center><h1>TOKO BANGUNAN PASTI PAS</h1></center>
		<div class="listMaterial"><!--list material-->
		<div align="center"><strong><font size="6" face="sans-serif">DAFTAR MATERIAL </font></strong></div>
			<table width="100%" id="myTable" border="1" cellspacing="0" cellpadding="10">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Harga / Satuan(Rp)</th>
						<th>Satuan</th>
						<th>Keterangan</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>SEMEN</td>
						<td>51000</td>
						<td>per sak</td>
						<td>Merk: Holcim, Tiga Roda, Semen Padang</td>
					</tr>

					<tr>
						<td>PASIR</td>
						<td>250000</td>
						<td>per mobil/truk</td>
						<td>Jenis: Pasir Beton, Pasir Sungai, Pasir Jebrod</td>
					</tr>

					<tr>
						<td>BAJA</td>
						<td>100000</td>
						<td>per batang</td>
						<td>Jenis: Baja Ringan Taso, Baja HSS, Baja Paduan</td>
					</tr>

					<tr>
						<td>KERAMIK</td>
						<td>65000</td>
						<td>per dus </td>
						<td>Jenis: Keramik Marmer, Keramik Teraso, Keramik Granit Alam </td>
					</tr>
					
					<tr>
						<td>BATAKO</td>
						<td>4000</td>
						<td>per pcs</td>
						<td>Jenis: Batako Trass, Batako Semen, Batako Beton</td>
					</tr>
				</tbody>
			</table>

		</div>

		<!--input data beli material-->
		<div class="inputMaterial">
		<div align="center"><strong><font size="6" face="sans-serif">BELI MATERIAL </font></strong></div>
			<form name="form1" method="post" action="prosesResp.php">
				<table width="100%" border="0" align="center">
					<thead>
						<tr>
							<th colspan="2">Pesan Bahan Material</th>
						</tr>
					</thead>
					<tr>
						<td>Nama Material </td>
						<td>
						<select class="input" name="nama" id="nama">
							<option value="Semen"> Semen </option>
							<option value="Pasir"> Pasir </option>
							<option value="Baja"> Baja </option>
							<option value="Baja"> Keramik </option>
							<option value="Baja"> Batako </option>
						</select>
						</td>
					</tr>

					<tr>
						<td>Harga Per Satuan </td>
						<td>
						<select class="input" name="harga" id="harga">
							<option value="Rp51.000"> Rp51.000 </option>
							<option value="Rp250.000"> Rp250.000 </option>
							<option value="Rp100.000"> Rp100.000 </option>
							<option value="Rp65.000"> Rp65.000 </option>
							<option value="Rp4.000"> Rp4.000 </option>
						</select>
						</td>
					</tr>

					<tr>
						<td>Jumlah </td>
						<td><input name="jumlah" type="text" class="input" id="jumlah"></td> </tr>
					</tr>

					<tr>
						<td>Keterangan </td>
						<td><textarea name="ket" id="ket" class="input"></textarea></td> 
					</tr>

					<tr>
						<td colspan="2"><input type="submit" class="button" name="submit" id="submit" value="Kirim" onclick="myFunction()">
						<input type="reset" class="button" name="Submit2" value="Reset">
						<a href="lihatResp.php" class="button"> Lihat Daftar Pembelian </a>
					</td>
					</tr>
				</table>
			</form>
		</div>



		<!--tabel untuk output dari hasil inputan user dari belanja material-->
		<div class="outputMaterial">
			<table cellpadding="10" cellspacing="0" border="2" align="center">
			<tr style='background: #00BFFF;'>
				<td> Nama </td>
				<td> Harga / Satuan </td>
				<td> Jumlah </td>
				<td> Keterangan  </td>
			</tr>

			<tr>
				<td id="tabelNama"></td>
				<td id="tabelHarga"></td>
				<td id="tabelJumlah"></td>
				<td id="tabelKet"></td>
			</tr>

			</table>
		</div>
		

		<script>
		 	function myFunction(){
				var nama = document.getElementById("nama").value;
				var harga = document.getElementById("harga").value;
				var jumlah = document.getElementById("jumlah").value;
				var ket = document.getElementById("ket").value;
				var inputanUser = nama + harga + jumlah + ket;
	
	
				if(inputanUser== "" || !inputanUser){
					document.write("Lengkapi semua dulu");
				}
				else{
				document.getElementById("tabelNama").innerHTML = nama;
				document.getElementById("tabelHarga").innerHTML = harga;
				document.getElementById("tabelJumlah").innerHTML = jumlah;
				document.getElementById("tabelKet").innerHTML = ket;
	}
	
}

		</script>

</div>

		
	</body>
</html>