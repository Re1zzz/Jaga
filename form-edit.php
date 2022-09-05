<?php
include 'koneksi.php'; 
session_start();
if (!isset($_SESSION['username'])||empty($_SESSION['username'])) {
	header("Location: index.php");
}
if ($_GET['user_id']) {
    $user_id =$_GET['user_id'];
    $query = "SELECT * FROM user WHERE user_id=$user_id";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($sql); 
    if (mysqli_num_rows($sql) < 1) {
      echo "<script>alert('Data tidak ditemukan')</script>";
    }
if (isset($_POST['simpan'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $agama = $_POST['agama'];
  $no_hp = $_POST['no_hp'];

  $query = mysqli_query($connect, "UPDATE user SET username='$username', password='$password', fullname='$fullname', email='$email', agama='$agama', no_hp='$no_hp' WHERE user_id=$user_id");

  if ($query)  {
    header('Location: view.php');
  } else {
    echo "<script>alert('Data gagal diedit')</script>";
  }
}
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
 	<h1 class="exe" align="center">Form Edit Data</h1>
 	<form method="post" action="">
 		<table border="0" cellpadding="5" cellspacing="0" class="exe" align="center">
 			<tr>
 		    	<td>Username</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="username" value="<?php echo $data['username']; ?>" required /></td>
 		    </tr>
 			<tr>
 		    	<td>Password</td>
 		    	<td>:</td>
 		    	<td><input type="password" name="password" value="<?php echo $data['password']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Fullname</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="fullname" value="<?php echo $data['fullname']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Email</td>
 		    	<td>:</td>
 		    	<td><input type="email" name="email" value="<?php echo $data['email']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Agama</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="agama" value="<?php echo $data['agama']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Nomor HP</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>" required /></td>
 		    </tr>
 			<tr align="right">
 		    	<td colspan="3"><input type="submit" name="simpan" value="SIMPAN" /></td>
 		    </tr>
 		</table>
 	</form>
 	<p align="center"><a href="view.php">Lihat Data</a></p>
 </body>
 </html>