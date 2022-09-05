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
        background-color: yellow;
    }

	.exe {
		font-size: 20px;
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
 	<h1 class="exe" align="center"><b>Data User</b></h1>
 	<p  align="center"><a href="form-input.php">+Tambah Data</a> | <a href="view.php">Lihat Data Masuk</a> | <a href="logout.php">Log Out</a><p>
 	<table border="1" align="center">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Fullname</th>
			<th>Agama</th>
			<th>No. HP</th>
			<th>Aksi</th>
		</tr>
		<tr>
			<?php
			$no = 0;
			$query = mysqli_query($connect, "SELECT * FROM user");
				while ($data = mysqli_fetch_array($query)) {
				$no++;
			?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['username']; ?></td>
					<td><?php echo $data['password']; ?></td>
					<td><?php echo $data['email']; ?></td>
					<td><?php echo $data['fullname']; ?></td>
					<td><?php echo $data['agama']; ?></td>
					<td><?php echo $data['no_hp']; ?></td>
					<td><a href='form-edit.php?user_id="<?= $data['user_id'] ?>"'>Edit</a> || <a href='delete.php?user_id="<?= $data['user_id'] ?>"'>Hapus</a></td>
				</tr>
			<?php
			}
			?>
		</tr>
	</table>
 </body>
 </html>