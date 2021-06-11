<?php
	if(isset($_POST['tambah'])){
		include_once 'koneksi.php';
		$judul	= $_POST['judul'];
		$harga	= $_POST['harga'];
		$tahun	= $_POST['tahun'];
		
		$input	= mysqli_query($koneksi, "insert into album values
		('$judul', '$harga', '$tahun')");
		
		if($input)
		{
			echo "<h3>Data berhasil ditambahkan</h3>";
			echo "<script>window.location='index.php'</script>";
		}
		else
		{
			echo "gagal menambahkan data";
			echo "<a href = 'tambah.php'>kembali</a>";
		}
	}
	else
	{
	echo "<script>window.history.back()</script>";
	}
	
?>