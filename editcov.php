<?php
include 'koneksi.php'; 

if ($_GET['nik']) {
    $nik =$_GET['nik'];
    $query = "SELECT * FROM data_masuk WHERE nik=$nik";
    $sql = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($sql); 
    if (mysqli_num_rows($sql) < 1) {
      echo "<script>alert('Data tidak ditemukan')</script>";
    }
if (isset($_POST['simpan'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $tgl_diagnosa = $_POST['tgl_diagnosa'];
  $keterangan = $_POST['keterangan'];

  $query = mysqli_query($connect, "UPDATE data_masuk SET nik='$nik', nama='$nama', tgl_diagnosa='$tgl_diagnosa', keterangan='$keterangan' WHERE nik=$nik");

  if ($query)  {
    header('Location: viewes.php');
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
img {
        width:120px;
        height:120px;
}
.exe {
        color: yellow;
        text-align: center;
        font-weight: bold;
    }
.eve {
    color : yellow;
    align : center;
}
.ere {
    align: center;
}
table	{
			border-color: white;
			color: yellow;
			margin-right: auto;
			margin-left: auto;
}
.test{
	margin-top: 10px;
	margin-bottom: 10px;
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
 
		<h1 class="exe">Edit Data</h1>
		<table border="2" width="100%" class="eve">
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td height="110px">
				<form method="post" action="">
					<table border="1" class="test">
			 
 			<tr>
 		    	<td>NIK</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="nik" value="<?php echo $data['nik']; ?>" required /></td>
 		    </tr>
 			<tr>
 		    	<td>Nama</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="nama" value="<?php echo $data['nama']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Tanggal Diagnosa</td>
 		    	<td>:</td>
 		    	<td><input type="date" name="tgl_diagnosa" value="<?php echo $data['tgl_diagnosa']; ?>" required /></td>
 		    </tr>
 		    <tr>
 		    	<td>Keterangan</td>
 		    	<td>:</td>
 		    	<td><input type="text" name="keterangan" value="<?php echo $data['keterangan']; ?>" required /></td>
 		    </tr>
 			
 		</table>
		
		
		<tr>
		 <td height="60px" align="center"><input type="submit" name="simpan" value="Simpan" /></td>
</tr>
 	</form>
</table>

 </body>
 </html>