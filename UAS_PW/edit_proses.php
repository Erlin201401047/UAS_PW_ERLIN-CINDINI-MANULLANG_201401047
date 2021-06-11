<?php

if(isset($_POST['simpan']))
{
	include('koneksi.php');
	$judul = $_POST['judul'];
	$harga = $_POST['harga'];
	$tahun = $_POST['tahun'];
	$update= mysqli_query($koneksi, "update album set
	judul = '$judul',
	harga = '$harga'
	where tahun = '$tahun'")
	
	or die(mysqli_error());
	
	if($update)
	{
		echo "<h2>data berhasil diupdate</h2>";
		echo "<script>window.location = 'index.php'</script>";
	}
	else
	{
		echo "<h2>gagal menyimpan data</h2>";
		echo "<a href = 'edit.php?tahun = ".$tahun."'>kembali</a>";
	}
}
else
{
	echo "<script>window.history.back()</script>";
}
	

?>