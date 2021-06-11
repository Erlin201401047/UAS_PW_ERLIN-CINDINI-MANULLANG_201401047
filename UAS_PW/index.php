<?php
	session_start();
	include "koneksi.php";
	if(!isset($_SESSION['username'])){
		header ("location:login.php");
	}
	
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
?>

<!DOCTYPE html>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#location">location</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lainnya
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="kuis1.php">kuis</a>
          <a class="dropdown-item" href="contact.php">contact</a>
        </div>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="aksi_logout.php">logout</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="bg1.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Hai</h5>
        <p>Welcome to EXO-L Page.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg3.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Members of EXO</h5>
        <p>Minus Suho in this photo.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="bg2.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>EXO Logo</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<div class="card-deck mt-5 mb-5">
  <div class="card">
    <img src="bg1.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">WE ARE ONE</h5>
      </div>
  </div>
  <div class="card">
    <img src="bg2.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">EXO's Logo</h5>
    </div>
  </div>
  <div class="card">
    <img src="bg3.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Members of EXO</h5>
      <p class="card-text">Terdiri dari 9 member.Di foto ini kurang 1 member yaitu SUHO</p>
    </div>
  </div>
</div>
</div>
<div class="jumbotron" id="list">
<div class="container">
<div class="col-lg-12 text-center mt-5 mb-5">
<h3 class="display-4">List Album EXO</h3>
<a href="tambah.php"><h4>Tambah Album</h4></a>

	<div class="container">
	<table class="table table-striped table-light">
		<thead>
			<tr>
				<th> No </th>
				<th> Judul Album </th>
				<th> Harga </th>
				<th> Tahun </th>
				<th> Opsi </th>
			</tr>
		</thead>
		
<!--		Menampilkan data album -->

		<?php
			include_once 'koneksi.php';
			$no=1;
			$data=mysqli_query($koneksi, "select * from album");
			while($d=mysqli_fetch_array($data)) {
		?>	
			
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['tahun']; ?></td>
				<td>
					<a href="edit.php ?tahun=<?php echo $d['tahun'];?>">edit</a>
					<a href="hapus.php ?tahun=<?php echo $d['tahun'];?>">hapus</a>
				</td>
			</tr>
			
		
		<?php
			}
		?>
<!--		Menampilkan data album -->		
		
	</table>
	</div>
	
	<div class="container">
	<div id="location"></div>
	<div class="embed-responsive embed-responsive-16by9">
	<iframe class="embed-responsive-item" src="https://youtu.be/KSH-FVVtTf0" allowfullscreen></iframe>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d202407.59916271767!2d126.83399981382276!3d37.564045505069835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca2012d5c39cf%3A0x7e11eca1405bf29b!2sSeoul%2C%20Korea%20Selatan!5e0!3m2!1sid!2sid!4v1619873457725!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>




	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

<footer class="text-center mt-3 mb-3">
<p> by Erlin Cindini Manullang,NIM 201401047 </p>
<p>
<a href="index.php"> click here to back home </a>
</p>
</footer>

</html>