<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Tugas Erlin </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"

</head>
<body>
	<h3>
		<a href="index.php">kembali</a><br>
		<p>Tambah data album</p>
	</h3>
	<form action="tambah_proses.php" method="post">
		<table>
			<tr>
				<td>Judul</td>
				<td>:</td>
				<td><input type="text" name="judul" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="number" name="harga" required></td>
			</tr>
			<tr>
				<td>Tahun</td>
				<td>:</td>
				<td><input type="number" name="tahun" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="tambah"</td>
			</tr>
		</table>
	</form>			
</body>
</html>