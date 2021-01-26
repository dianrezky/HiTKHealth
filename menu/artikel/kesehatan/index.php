<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>HiTKHealth</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
	<div>
			<?php require_once("header.php")?>
		</div>
	</div>
	<div id="body">
		<div class="header">
			<div>
				<img src="images/biking.jpg" alt="">
				<ul>
					<li>
						<a href="../../covid/">COVID-19</a>
					</li>
					<li>
						<a href="psikologi.php">Psikologi</a>
					</li>
					<li>
						<a href="nutrisigizi.php">Nutrisi dan Gizi</a>
					</li>
					<li>
						<a href="penyakit.php">Penyakit</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="body">
			<div class="section">
				<div class="article">
					<h2>Welcome to HiTKHealth</h2>
					<img src="images/heart.jpg" alt="">
					<p>
						Website Ini Menawarkan Sejumlah Fitur Untuk Kesehatan Mu. Yuk Cek Kesehatan Mu dan Dapatkan Berita Terbaru Mengenai Kesehatan dan Juga COVID-19
					</p>
				</div>
				<div class="aside">

					<div id="kopi-covid"></div>
      				<script>
        			var f = document.createElement("iframe");
        			f.src = "https://kopi.dev/widget-covid-19/";
        			f.width = "100%";
        			f.height = 380;
        			f.scrolling = "no";
        			f.frameBorder = 0;
        			var rootEl = document.getElementById("kopi-covid");
        			console.log(rootEl);
        			rootEl.appendChild(f);
      				</script>

					
				</div>
			</div>
		</div>
		<div class="footer">
			<div>
				<a href="../../../index.php"><img src="images/what-can-we-do.jpg" alt=""></a>
				<h3>what we can do for you</h3>
				<p>
					Website Ini Menyediakan Fitur Seperti Berita Kesehatan, Referensi Kesehatan, Kalkulator Kesehatan, Konsultasi, dll. Yuk Cari Tahu Ada Apa Saja Di Website HiTKHealth
				</p>
			</div>
			<div>
				<a href="#"><img src="images/doctors.jpg" alt=""></a>
				<h3>About Us</h3>
				<p>
					Website Ini Dibuat Oleh Kami Dalam Rangka Pembuatan PKM-KC
				</p>
			</div>
			<div>
				<a href="/HIHEALTH/USER GUIDE WEBSITE HITKHEALTH.pdf"><img src="images/where-you-can-find.jpg" alt=""></a>
				<h3>User Guide</h3>
				<p>
					Kami Akan Membantumu Dalam Menggunakan Fitur Yang Disediakan Oleh Website Ini. Yuk Download User Guide Nya Disini Dengan Mengklik Gambar Diatas.
				</p>
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="../../../index.php">HiTKHealth</a>
			</p>
			<ul>
				<li>
					<a href="../../../index.php">home</a>
				</li>
				<li>
					<a href="../index.php">artikel</a>
				</li>
				<li>
					<a href="../../menu_referensi/">Referensi</a>
				</li>
				<li>
					<a href="../../menu_kalkulator/">Kalkulator kesehatan</a>
				</li>
				<li>
					<a href="../../menu_konsultasi/">Konsultasi</a>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>