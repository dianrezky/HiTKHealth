<?php
$pathInPieces = $_SERVER['DOCUMENT_ROOT'] . "/";
require_once($pathInPieces . "/koneksi.php");
function generate_nav()
{
	if (isset($_SESSION['status'])) {
		echo "<li class='nav-item'><a href='/user/logout.php' class='nav-link'>SIGN OUT</a></li>";
	} else {
		echo "<li class='nav-item'><a href='/user/login/' class='nav-link'>SIGN IN</a></li>";
	}
}

?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container" style="margin-right:0em">
		<a class="navbar-brand" href="/index.php"><span>HiTKHealth</span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-2">
				<li class="nav-item"><a href="/index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="/menu/covid/" class="nav-link">Update Covid</a></li>
				<li class="nav-item"><a href="/menu/referensi/" class="nav-link">Referensi</a></li>
				<li class="nav-item"><a href="/menu/artikel/" class="nav-link">Artikel</a></li>
				<li class="nav-item"><a href="/menu/kalkulator/" class="nav-link">Kalkulator Kesehatan</a></li>
				<li class="nav-item"><a href="/menu/konsultasi/" class="nav-link">Konsultasi</a></li>
				<li class="nav-item"><a href="/USER GUIDE WEBSITE HITKHEALTH.pdf" class="nav-link">User Guide</a></li>
				<?php generate_nav() ?>
			</ul>
		</div>
	</div>
</nav>