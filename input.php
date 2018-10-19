<!DOCTYPE html>
<html>
<head>
	<title>
		Jurnal 7 Brew!!!
	</title>
</head>
<body>
	<center>
		<h1>INPUT DATA MAHASISWA</h1>

		<form action="proses.php" method="POST">
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>

				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim"></td>
				</tr>

				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" name="tgl"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<select name="jk">
							<option value="L">Laki-laki</option>
							<option value="P">Perempuan</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>
						<select name="prodi">
							<option value="D3MI">D3 MANAJEMEN INFORMATIKA</option>
							<option value="D3MP">D3 MANAJEMEN PEMASARAN</option>
							<option value="D3IF">D3 TEKNIK INFORMATIKA</option>
							<option value="D3TT">D3 TEKNIK TELEKOMUNIKASI</option>
							<option value="D3PH">D3 PERHOTELAN</option>
							<option value="D4SM">D4 SISTEM MULTIMEDIA</option>
							<option value="S1MBTI">S1 MBTI</option>
							<option value="S1IKOM">S1 ILMU KOMUNIKASI</option>
							<option value="S1ADBIS">S1 ADMINISTRASI</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td>
						<input type="radio" name="fak" value="FIT">FIT
                    	<input type="radio" name="fak" value="FIK">FIK
                    	<input type="radio" name="fak" value="FEB">FEB
                    	<input type="radio" name="fak" value="FKB">FKB
                    	<input type="radio" name="fak" value="FRI">FRI
                    	<input type="radio" name="fak" value="FTE">FTE
					</td>
				</tr>

				<tr>
					<td>Asal</td>
					<td>:</td>
					<td><input type="text" name="asl"></td>
				</tr>

				<tr>
					<td>Motto Hidup</td>
					<td>:</td>
					<td><textarea name="motto"></textarea></td>
				</tr>

				<tr>
					<td align="center" colspan="3">
						<input type="submit" name="submit" name="submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>