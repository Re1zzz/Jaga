<?php 
include 'koneksi.php';
if (isset($_GET['user_id'])) {
	$user_id = $_GET['user_id'];
	$query = mysqli_query($connect, "DELETE FROM user WHERE user_id = $user_id");
	if ($query) {
		header("Location: view.php?message=delete");
	}
}
 ?>