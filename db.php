<?php
	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "mhs";

	$conn	= mysqli_connect($server,$user,$pass,$db);

	if (!$conn) {
		echo "Gagal Terhubung!!!";
	}else{
		
	}
?>