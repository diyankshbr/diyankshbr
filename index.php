<!DOCTYPE html>
<html>
<head>
	<title>Curiculum Vitae</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
	<header>
		<h1 class="judul">Curiculum Vitae</h1>
	</header>

<div class="menu">
	<ul>
		<li><a href="index.php?page=home">Home</a></li>
		<li><a href="index.php?page=datadiri">Data Diri</a></li>
		<li><a href="index.php?page=pendidikan">Riwayat Pendidikan</a></li>
	</ul>
</div>

<div class="tengah">

	<?php
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page){
			case 'home':
				include "./halaman/home.php";
				break;
			case 'datadiri':
				include "./halaman/datadiri.php";
				break;
			case 'pendidikan':
				include "./halaman/pendidikan.php";
				break;
			default:
				echo "<center><h2>Maaf.. Halaman tidak ditemukan!</h2></center>";
				break;
		}
	} else{
		include "halaman/home.php";
	}

	?>
</div>
</div>
</body>
</html>