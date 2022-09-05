<?php 
include 'koneksi.php';
if (isset($_GET['nik'])) {
	$nik = $_GET['nik'];
	$query = mysqli_query($connect, "DELETE FROM data_masuk WHERE nik = $nik");
	if ($query) {
		header("Location: viewes.php?message=delete");
	}
}
 ?>