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
<!-- edit data album -->

	<?php
		include('koneksi.php');
		$tahun=$_GET['tahun'];
		$show=mysqli_query($koneksi, "select *from album where tahun = '$tahun'");
		if (mysqli_num_rows($show)==0) {
			echo '<script> window.history.back()</script>';
		}
		else{
			$d= mysqli_fetch_assoc($show);

		}
	?>

<!-- edit data album -->

<form action="edit_proses.php"method="post">
	<input type="hidden" name="tahun" value="<?php echo $tahun; ?>">
	<table>
		<tr>
			<td> Judul Album </td>
			<td>:</td>
			<td>
				<input type="text" name="judul" size="33" value="<?php echo $d['judul']; ?>" required>
			</td>
		</tr> 
		<tr>
			<td> Harga </td>
			<td>:</td>
			<td>
				<input type="text" name="harga" size="9" value="<?php echo $d['harga']; ?>" required>
			</td>
		</tr> 	
		
		<tr>
			<td>&nbsp;</td>
			<td></td>
			<td><input type="submit" name="simpan" value="simpan"></td>
		</tr>
	</table>
</form>
</body> 