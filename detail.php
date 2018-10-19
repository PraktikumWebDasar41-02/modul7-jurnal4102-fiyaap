<?php
	include("db.php");
	$nim = $_GET['nim'];
	$sql = mysqli_query($conn, "SELECT * FROM data WHERE nim='$nim'");
	$row = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Jurnal 7 Brew!!!
	</title>
</head>
<body>
	<center>
		<h1>UPDATE DATA MAHASISWA</h1>

		<form>
			<table>
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $row['nama']; ?>"></td>
				</tr>

				<tr>
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" value="<?php echo $row['nim']; ?>" read only disabled></td>
				</tr>

				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="text" name="tgl" value="<?php echo $row['tgl']; ?>"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
						<select name="jk">
							<option <?php if($row['jk'] == "L") { ?> checked <?php } ?> value="L">Laki-laki></option>
							<option <?php if($row['jk'] == "P") { ?> checked <?php } ?> value="P">Perempuan></option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Program Studi</td>
					<td>:</td>
					<td>
						<select name="prodi">
							<option <?php if($row['prodi'] == "D3MI") { ?> checked <?php } ?> value="D3MI">D3 MANAJEMEN INFORMATIKA</option>
							<option <?php if($row['prodi'] == "D3MP") { ?> checked <?php } ?> value="D3MP">D3 MANAJEMEN PEMASARAN</option>
							<option <?php if($row['prodi'] == "D3IF") { ?> checked <?php } ?> value="D3IF">D3 TEKNIK INFORMATIKA</option>
							<option <?php if($row['prodi'] == "D3TT") { ?> checked <?php } ?> value="D3TT">D3 TEKNIK TELEKOMUNIKASI</option>
							<option <?php if($row['prodi'] == "D3PH") { ?> checked <?php } ?> value="D3MIPH">D3 PERHOTELAN</option>
							<option <?php if($row['prodi'] == "S1MBTI") { ?> checked <?php } ?> value="S1MBTI">S1 MBTI</option>
							<option <?php if($row['prodi'] == "S1IKOM") { ?> checked <?php } ?> value="S1IKOM">S1 IKOM</option>
							<option <?php if($row['prodi'] == "S1ADBIS") { ?> checked <?php } ?> value="S1ADBIS">S1 ADBIS</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Fakultas</td>
					<td>:</td>
					<td>
						<input type="radio" name="fak" <?php if($row['fak'] == "FIT") { ?> checked <?php } ?> value="FIT">FIT
						<input type="radio" name="fak" <?php if($row['fak'] == "FEB") { ?> checked <?php } ?> value="FEB">FEB
						<input type="radio" name="fak" <?php if($row['fak'] == "FKB") { ?> checked <?php } ?> value="FKB">FKB
						<input type="radio" name="fak" <?php if($row['fak'] == "FRI") { ?> checked <?php } ?> value="FRI">FRI
						<input type="radio" name="fak" <?php if($row['fak'] == "FTE") { ?> checked <?php } ?> value="FTE">FTE
					</td>
				</tr>

				<tr>
					<td>Asal</td>
					<td>:</td>
					<td><input type="text" name="asl" value="<?php echo $row['asl'];?>"></td>
				</tr>

				<tr>
					<td>Motto Hidup</td>
					<td>:</td>
					<td><textarea name="motto" rows="10" cols="20"><?php echo $row['motto']; ?></textarea></td>
				</tr>
				
				<tr>
					<td align="center" colspan="3">
						<input type="submit" name="submit" name="Update">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$nama 		= $_POST['nama'];
		$nim		= $_POST['nim'];
		$tgl		= $_POST['tgl'];
		$jk			= $_POST['jk'];
		$prodi 		= $_POST['prodi'];
		$fak		= $_POST['fak'];
		$asal		= $_POST['asl'];
		$motto		= $_POST['motto'];

		$sql = "UPDATE data SET nama='$nama', nim='$nim', tgl='$tgl', jk='$jk', prodi='$prodi', fak='$fak', asal='asl', motto='$motto' WHERE nim='$nim'";

		if (mysqli_query($conn,$sql)) {
			?>
			<script>
				alert("Data Berhasil Diubah");
				location="lihat.php";
			</script>
			<?php
		}
	}
?>