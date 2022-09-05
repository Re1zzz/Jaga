<?php
include 'koneksi.php'; 
session_start();
if (!isset($_SESSION['username'])||empty($_SESSION['username'])) {
	header("Location: index.php");
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
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
                <img src="gambar3.png">
                <img src="gambar4.png">
                </td>
            </tr>
        </table>
 	<h1 class="exe" align="center"><b>Form Input Data</b></h1>
 	<p class="exe" align="center">Selamat Datang <b><?php echo $_SESSION['username']; ?></b></p>
 	<form method="post" action="insert.php">
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
 		    <tr>
 		    	<td>Fullname</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="fullname" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Email</td>
 		    	<td>:</td>
 		    	<td><input type="email" name="email" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Agama</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="agama" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Nomor HP</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="no_hp" required /></td>
 		    </tr>
 			<tr align="right">
 		    	<td colspan="3"><input type="submit" name="simpan" value="Simpan" /></td>
 		    </tr>
 		</table>
 	</form>
 	<p class="exe" align="center"><a href="view.php">Lihat Data</a>||<a href="logout.php">Logout</a></p>
 </body>
 </html>