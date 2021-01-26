<?php

  require_once('../../../koneksi.php');
  //require_once("../../../header/menu_navbar.php");
  
  //require_once("../../../header/menu_header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #808080;
  color: white;
}
</style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>HiTKHealth</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/tooplate-chilling-cafe.css" rel="stylesheet" />

  </head>
  <body>
  <div class="topnav">
  <a class="active" href="/HIHEALTH/index.php">Home</a>
  <a href="/HIHEALTH/menu/artikel/">Artikel</a>
  <a href="/HIHEALTH/menu/referensi/">Referensi</a>
  <a href="/HIHEALTH/menu/kalkulator/">Kalkulator Kesehatan</a>
  <a href="/HIHEALTH/menu/konsultasi/">Konsultasi</a>
  <a href="/HIHEALTH/user/login/">SIGN IN</a>
</div>
  

    <div class="tm-container">
      <div class="tm-main-content">
      </div>
  </div>
    <div class="tm-container">
      <div class="tm-text-white tm-page-header-container">
        <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
        <h1 class="tm-page-header">Daftar Kalori Setiap Kegiatan</h1>
        <p>Pada Tabel Ini Dilakukan Pembulatan. Untuk Mengetahui Nilai Sebenarnya, Silahkan Download File Yang Sudah Disediakan Pada Tabel</p>
      </div>
      <div class="tm-main-content"> 
        <div id="tm-intro-img"></div>

        <!-- Food Menu -->
        
          <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS OLAHRAGA</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "sport"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS DI RUMAH</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "home"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">INACTIVITY</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "inactive"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BERKEBUN</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "berkebun"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS MENARI</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "menari"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BERKENDARA</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "berkendara"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS VOLUNTEER</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "volunteer"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS KEAGAMAAN</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "agama"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BERJALAN</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "berjalan"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BERLARI</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "berlari"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BERMUSIK</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "music"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BEKERJA</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "bekerja"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS SELF CARE</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "self"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">WATER ACTIVITIES</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "water"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">WINTER ACTIVITIES</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "winter"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS BERSEPEDA</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "sepeda"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">CONDITIONING EXERCISE</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "latihan"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS MEMANCING DAN BERBURU</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "fishhunt"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <h2 class="tm-section-header">AKTIVITAS LAINNYA</h2>
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA KEGIATAN </th>
                <th> MET </th>
              </tr>
              <?php
                
                $no=1;
		            $data = mysqli_query($koneksi, "select * from activity");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['keterangan'] == "lainnya"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				        <td><?php echo $d['met']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <section class="tm-section">
            <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th colspan="6">Download File Lengkapnya Disini : <a href="DAFTAR REFERENSI KALORI SETIAP KEGIATAN WEBSITE HiTKHealth.pdf">Here</a></th>
              </tr>
            </table>
          </div>
        </section>

        <hr />
      </div>

    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script>
      $(function() {
        // Adjust intro image height based on width.
        $(window).resize(function() {
          var img = $("#tm-intro-img");
          var imgWidth = img.width();

          // 640x425 ratio
          var imgHeight = (imgWidth * 425) / 640;

          if (imgHeight < 300) {
            imgHeight = 300;
          }

          img.css("min-height", imgHeight + "px");
        });
      });
    </script>
  </body>
</html>