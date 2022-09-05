<?php 
include 'koneksi.php'; 
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
        <br>
        <br>
        <br>
 	<p align="center"><a href="endata.php">[+]Tambah Data</a></p>
 	<table border="1" align="center">
		<tr font-weight="bold">
			<th>NIK</th>
			<th>Nama</th>
			<th>Tgl Diagnosa</th>
			<th>Keterangan</th>
            <th>Aksi</th>
			
		</tr>
		<tr>
			<?php

			$query = mysqli_query($connect, "SELECT * FROM data_masuk");
				while ($data = mysqli_fetch_array($query)) {
				
			?>
				<tr>
					
					<td><?php echo $data['nik']; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['tgl_diagnosa']; ?></td>
					<td><?php echo $data['keterangan']; ?></td>
					<td><a href='editcov.php?nik="<?= $data['nik'] ?>"'>Edit</a> | <a href='deletecov.php?nik="<?= $data['nik'] ?>"'>Hapus</a></td>
				</tr>
			<?php
			}
			?>
		</tr>
	</table>
 </body>
 </html>