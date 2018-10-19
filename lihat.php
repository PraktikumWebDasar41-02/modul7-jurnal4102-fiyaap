<!DOCTYPE html>
<html>
<head>
	<title>
		Jurnal 7 Brew!!!
	</title>
</head>
<body>
	<center>
		<h1>DATA MAHASISWA</h1>

		<form>
			<table>
				<tr>
					<td>Nama</td>
					<td>NIM</td>
					<td>Program Studi</td>
					<td>Aksi</td>
				</td>

				<?php
					include("db.php");
						@$search = $_POST['search'];
						$query   = "SELECT nama, nim FROM data WHERE nim LIKE %search%";
						$result	 = mysqli_query($conn, $query);

						if (mysqli_num_rows($result)>0) {
							while($row = mysqli_fetch_assoc($result)){
								?>

								<tr>
									<td>
										<?php
											echo $row['nama'];
										?>
									</td>
									<td>
										<?php
											echo $row['nim'];
										?>
									</td>
									<td>
										<a href="hapus.php?nama=<?php echo $row['nama']; ?>">Hapus</a> | <a href="detail.php?nama=<?php echo $row['nama'] ?>">Detail<a/>
									</td>
								</tr>

								<?php
							}

						}else{
							echo "0 Result";
						}
								?>
							}
						}
					?>
			</table>
			<br><br>
		</form>

		<form action="lihat.php" method="POST">
			<table>
				<tr>
					<td>Cari NIM</td>
					<td>:</td>
					<td><input type="text" name="search"></td>
					<td><input type="submit" name="submit" value="cari"></td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>