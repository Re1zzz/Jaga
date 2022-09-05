<?php 
include 'koneksi.php';
if (isset($_POST['simpan'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$agama = $_POST['agama'];
	$no_hp = $_POST['no_hp'];

	$query = mysqli_query($connect, "INSERT INTO user (username, password, fullname, email, agama, no_hp) VALUES ('$username', '$password', '$fullname', '$email', '$agama', '$no_hp')");
	if ($query) {
		header("Location: view.php");
	}
}
 ?>