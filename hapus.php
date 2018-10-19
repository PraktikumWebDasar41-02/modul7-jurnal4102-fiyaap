<?php
	include("db.php");

	$nim = $_GET['nim'];
	$delete = "DELETE FROM data WHERE nim=$nim";

	if (mysqli_querry($conn,$delete)) {
		echo
		"<script>
			alert('Data Berhasil Dihapus!!!');
			location='lihat.php';
		</script>";
	}else{
		echo "Error".$delete."<br>".mysqli_error($conn);
	}
	mysqli_close($conn);
?>