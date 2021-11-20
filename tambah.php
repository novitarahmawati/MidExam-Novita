<!DOCTYPE html>
<html>
<head>
	<title>data Mahasiswa</title>
	<link rel="stylesheet"href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="simple-line-icons/css/simple-line-icons.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-primary bg-primary">
		<div class="collapse navbar-collapse container" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php" style="color: red; font-size: 30px;">Home</a>
				</li>
				<li>
					<a class="nav-link" href="tambah.php" style="color: red; font-size: 30px">Daftar</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0"type="submit">Search</button>
			</form>	
		</div>
	</nav>
	<div class="text-center">
		<h1>Campus</h1>
		<p>knowledge | Diploma | Creatifity </p>
		<br><button class="btn btn-dark"><a href="index.php" style="color: white;">Data Mahasiswa</a></button>	
	</div>
	<br><br>
	<form method="post" action="proses.php">
		<table align="center" cellpadding="5" width="60%">
			<tr>			
				<td>NIM</td>
				<td><input type="number" name="nim" class="form-control"></td>
			</tr>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama" class="form-control"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin </td>
				<td><input type="text" name="kelamin" class="form-control"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" class="form-control"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	<br><br>
	<footer class="bg-primary">
		<br>
		<div>
		</h3>
	</div>
	<div class="container" style="color: black;">
		<div class="row">
			<div class="col-md-4">
				<h5 align="center">Social Media</h5>
				<ul>
					<li><i class="icon-social-instagram"> : @novita.abs </i></li>
					<li><i class="icon-social-facebook"> : novita.rahmawati </i></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h5 align="center">Contact</h5>
				<ul>
					<li><i class="icon icon-phone"> : 089605750164 </i></li>
					<li><i class="icon icon-envelope-open"> : novitaaabs@gmail.com </i></li>
				</ul>
			</div>
			<div class="col-md-4">
				<h5 align="center">Addres</h5>
				<ul>
					<li><i class="icon icon-map"> : Jalan pemogan, gg.layon, pemogan </i></li>
				</ul>
			</div>
		</div>
	</div>
	<br>
</footer>
</body>
</html>