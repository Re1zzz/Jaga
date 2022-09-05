<?php
include 'koneksi.php';
session_start();
if (isset($_GET['stats'])) {
	echo "<script>alert('Username atau Password Anda salah!')</script>";
}
if (!empty($_SESSION['id'])) {
	header('location:index.php');
}
?>
<html>
<head>
<title>LOGIN</title>
</head>
<style>
    body {
        background-image: url('bgg.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

	.exe {
		color: yellow;
		font-weight: bold;
	}
	img {
        width:120px;
        height:120px;
    }
	</style>

<body>
<table border="0" align="center" cellspacing="12">
            <tr>
                <td>
                <img src="gambar1.png">
                
                </td>
            </tr>
        </table>
	
<h1 class="exe" align="center">LOGIN</h1>

<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>

<form name="login" action="otentikasi.php" method="post">
<table border="0" cellpadding="5" cellspacing="0" class="exe" align="center">
	<tr>
    	<td>Username</td>
    	<td>:</td>
    	<td><input type="text" name="username" required /></td>
    </tr>
	<tr>
    	<td>Password</td>
    	<td>:</td>
    	<td><input type="password" name="password" required /></td>
    </tr>
	<tr align="right">
    	<td colspan="3"><input type="submit" name="login" value="Login" /></td>
    </tr>
</table>
</form>
</body>
</html>