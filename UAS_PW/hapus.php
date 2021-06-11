<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title> Tugas Erlin </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css"

	
	
</head>

<?php
	if(isset($_GET['tahun'])){
		include('koneksi.php');
		$tahun	= $_GET['tahun'];
		$cek	= mysqli_query($koneksi, "select tahun from album
		where tahun = '$tahun'") or die(mysqli_error());
		
		if(mysqli_num_rows($cek)==0){
			echo "<script>window.history.back()</script>";
		}
		else{
			$del = mysqli_query($koneksi, "delete from album where tahun = '$tahun'");
			if($del){
			echo "<h3>Data album berhasil dihapus</h3>";
			echo "<script>window.location = 'index.php';</script>";
			}
			else{
				echo "<h2>gagal menghapus data</h2>";
				echo "<a href = 'index.php'>Kembali</a>";
			}
		}
	}
	else{
		echo "<script>window.history.back()</script>";
	}

?>
<body>

</body>

</html>