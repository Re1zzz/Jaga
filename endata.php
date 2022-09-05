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
button{
			position: absolute;
			left: 47%;
			margin-top: 20px;
			border-radius: 5px;
		}
.test{
	margin-top: -50px;
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
 	<h1 class="exe">Form Input Data</h1>
 	
	 <table border="2" width="100%" class="eve">
		<tr>
			<td>
				&nbsp;
			</td>
		</tr>
		<tr>
			<td height="200px">
				<form method="post" action="inshere.php">
					<table border="1" class="test">
						<tr>
							<td>NIK</td>
							<td>:</td>
							<td><input type="text" name="nik" placeholder="NIK Sesuai KTP"></td>
						</tr>
						<tr>
							<td>NAMA</td>
							<td>:</td>
							<td><input type="text" name="nama"  placeholder="Nama Lengkap"></td>
						</tr>
						<tr>
							<td>TGL_DIAGNOSA</td>
							<td>:</td>
							<td><input type="date" name="tgl_diagnosa"></td>
						</tr>
						<tr>
							<td>KETERANGAN</td>
							<td>:</td>
							<td><input type="text" name="keterangan"  placeholder="Keterangan"></td>
						</tr>
						
					</table>
					<button type="submit" name="submit">DAFTAR</button>
				</form>
			</td>
		</tr>
	</table>
 	
 </body>
 </html>