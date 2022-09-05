<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$tgl_diagnosa = $_POST['tgl_diagnosa'];
	$keterangan = $_POST['keterangan'];

	$query = mysqli_query($connect, "INSERT INTO data_masuk (nik, nama, tgl_diagnosa, keterangan) VALUES ('$nik', '$nama', '$tgl_diagnosa','$keterangan')");
	if ($query) {
		header("Location: viewes.php");
	}
}
 ?>