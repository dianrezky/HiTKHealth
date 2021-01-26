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
    <a class="active" href="/index.php">Home</a>
    <a href="/menu/artikel/">Artikel</a>
    <a href="/menu/referensi/">Referensi</a>
    <a href="/menu/kalkulator/">Kalkulator Kesehatan</a>
    <a href="/menu/konsultasi/">Konsultasi</a>
    <a href="/user/login/">SIGN IN</a>
  </div>

  <div class="tm-container">
    <div class="tm-main-content">
    </div>
  </div>
  <div class="tm-container">
    <div class="tm-text-white tm-page-header-container">
      <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
      <h1 class="tm-page-header">Daftar Rumus Perhitungan </h1>
    </div>
    <div class="tm-main-content">
      <div id="tm-intro-img"></div>

      <!-- Food Menu -->

      <section class="tm-section">
        <h2 class="tm-section-header" style="font-size:100px">Body Mass Index (BMI)</h2>
        <div class="tm-responsive-table">
          <table border="1">
            <tr class="tm-tr-header">
              <th colspan="3"><img src="img/rumusbmi.png" alt="Image" height="300" width="700"></th>
            </tr>
          </table>
          <br></br>
          <table border="1">
            <tr class="tm-tr-header">
              <th style="font-size:30px"> NO </th>
              <th style="font-size:30px"> RUMUS </th>
              <th style="font-size:30px"> KATEGORI </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 1 </th>
              <th><img src="img/bbideallk.png"></th>
              <th style="font-size:30px"> Laki - Laki </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 2 </th>
              <th><img src="img/bbidealpr.png" alt="Image"></th>
              <th style="font-size:30px"> Perempuan </th>
            </tr>
          </table>
          <table border="1"></table>
          <h2 class="tm-section-header" style="font-size:50px">Kategori BMI</h2>
          <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th style="font-size:30px"> NO </th>
                <th style="font-size:30px"> INDEKS </th>
                <th style="font-size:30px"> KATEGORI </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 1 </th>
                <th style="font-size:30px"> &lt; 16 </th>
                <th style="font-size:30px"> Sangat Kurus </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 2 </th>
                <th style="font-size:30px"> 16 - 16.99 </th>
                <th style="font-size:30px"> Kurus </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 3 </th>
                <th style="font-size:30px"> 17 - 18.49 </th>
                <th style="font-size:30px"> Sedikit Kurus </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 4 </th>
                <th style="font-size:30px"> 18.50 - 24.99 </th>
                <th style="font-size:30px"> Normal </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 5 </th>
                <th style="font-size:30px"> 25 - 29.99 </th>
                <th style="font-size:30px"> Kelebihan Berat Badan </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 6 </th>
                <th style="font-size:30px"> 30 - 34.99 </th>
                <th style="font-size:30px"> Obesitas Kelas 1 </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 7 </th>
                <th style="font-size:30px"> 35 - 39.99 </th>
                <th style="font-size:30px"> Obesitas Kelas 2 </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 8 </th>
                <th style="font-size:30px"> &gt; 40 </th>
                <th style="font-size:30px"> Obesitas Kelas 3 </th>
              </tr>
            </table>
          </div>
      </section>

      <section class="tm-section">
        <h2 class="tm-section-header" style="font-size:100px">Basal Metabolic Rate (BMR) </h2>
        <div class="tm-responsive-table">
          <table border="1">
            <tr class="tm-tr-header">
              <th style="font-size:30px"> NO </th>
              <th style="font-size:30px"> RUMUS </th>
              <th style="font-size:30px"> KATEGORI </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 1 </th>
              <th><img src="img/bmrpria.png"></th>
              <th style="font-size:30px"> Laki - Laki </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 2 </th>
              <th><img src="img/bmrwanita.png" alt="Image"></th>
              <th style="font-size:30px"> Perempuan </th>
            </tr>
          </table>
          <br></br>
          <table border="1"></table>
          <h2 class="tm-section-header" style="font-size:50px">Rumus Menghitung Kebutuhan Energi (TEE)</h2>
          <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th style="font-size:30px"> NO </th>
                <th style="font-size:30px"> RUMUS </th>
                <th style="font-size:30px"> KATEGORI </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 1 </th>
                <th><img src="img/tidakaktif.png"></th>
                <th style="font-size:30px"> Tidak Aktif </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 2 </th>
                <th><img src="img/cukupaktif.png" alt="Image"></th>
                <th style="font-size:30px"> Cukup Aktif </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 3 </th>
                <th><img src="img/aktif.png" alt="Image"></th>
                <th style="font-size:30px"> Aktif </th>
              </tr>
              <tr class="tm-tr-header">
                <th style="font-size:30px"> 4 </th>
                <th><img src="img/sangataktif.png" alt="Image"></th>
                <th style="font-size:30px"> Sangat Aktif </th>
              </tr>
            </table>
          </div>
      </section>

      <section class="tm-section">
        <h2 class="tm-section-header" style="font-size:100px"> Detak Jantung </h2>
        <div class="tm-responsive-table">
          <table border="1">
            <tr class="tm-tr-header">
              <th style="font-size:30px"> NO </th>
              <th style="font-size:30px"> Detak Jantung Per Menit (BPM) </th>
              <th style="font-size:30px"> KATEGORI </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 1 </th>
              <th style="font-size:30px"> 80 - 130 BPM </th>
              <th style="font-size:30px"> Anak Berusia 1 - 2 Tahun </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 2 </th>
              <th style="font-size:30px"> 80 - 120 BPM </th>
              <th style="font-size:30px"> Anak Berusia 3 - 4 Tahun </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 3 </th>
              <th style="font-size:30px"> 75 - 115 BPM </th>
              <th style="font-size:30px"> Anak Berusia 5 - 6 Tahun </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 4 </th>
              <th style="font-size:30px"> 70 - 110 BPM </th>
              <th style="font-size:30px"> Anak Berusia 7 - 9 Tahun </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 5 </th>
              <th style="font-size:30px"> 60 - 100 BPM </th>
              <th style="font-size:30px"> &ge; 10 Tahun </th>
            </tr>
            <tr class="tm-tr-header">
              <th style="font-size:30px"> 6 </th>
              <th style="font-size:30px"> 40 - 60 BPM </th>
              <th style="font-size:30px"> Atlet Pro Terlatih </th>
            </tr>
          </table>
          <br></br>
          <table border="1"></table>
          <h2 class="tm-section-header" style="font-size:50px">Rumus Menghitung Detak Jantung Maksimal </h2>
          <div class="tm-responsive-table">
            <table border="1">
              <tr class="tm-tr-header">
                <th colspan="3"><img src="img/detak_max.png" alt="Image" height="300" width="700"></th>
              </tr>
            </table>
            <br></br>
            <table border="1"></table>
            <h2 class="tm-section-header" style="font-size:50px"> Menghitung Detak Jantung Saat Beraktivitas </h2>
            <div class="tm-responsive-table">
              <table border="1">
                <tr class="tm-tr-header">
                  <th> NO </th>
                  <th> RUMUS BPM BAWAH </th>
                  <th> RUMUS BPM ATAS </th>
                  <th> DETAK JANTUNG PER MENIT (BPM) </th>
                  <th> KATEGORI </th>
                </tr>
                <tr class="tm-tr-header">
                  <th> 1 </th>
                  <th>HRR 1 = ((BPM Maksimal - BPM Bawah)×50%) + BPM Normal Bawah</th>
                  <th>HRR 2 = (BPM Maksimal - BPM Bawah)×69%) + BPM Normal Bawah</th>
                  <th> HRR 1 sampai HRR 2 </th>
                  <th> Aktivitas Fisik Sedang </th>
                </tr>
                <tr class="tm-tr-header">
                  <th> 2 </th>
                  <th>HRR 1 = ((BPM Maksimal - BPM Atas)×50%) + BPM Normal Atas</th>
                  <th>HRR 2 = (BPM Maksimal - BPM Atas)×69%) + BPM Normal Atas</th>
                  <th> HRR 1 sampai HRR 2 </th>
                  <th> Aktivitas Fisik Sedang </th>
                </tr>
                <tr class="tm-tr-header">
                  <th> 3 </th>
                  <th>HRR 1 = ((BPM Maksimal - BPM Bawah)×70%) + BPM Normal Bawah</th>
                  <th>HRR 2 = (BPM Maksimal - BPM Bawah)×85%) + BPM Normal Bawah</th>
                  <th> HRR 1 sampai HRR 2 </th>
                  <th> Aktivitas Fisik Berat </th>
                </tr>
                <tr class="tm-tr-header">
                  <th> 4 </th>
                  <th>HRR 1 = ((BPM Maksimal - BPM Atas)×70%) + BPM Normal Atas</th>
                  <th>HRR 2 = (BPM Maksimal - BPM Atas)×85%) + BPM Normal Atas</th>
                  <th> HRR 1 sampai HRR 2 </th>
                  <th> Aktivitas Fisik Berat </th>
                </tr>
              </table>
            </div>
      </section>

      <section class="tm-section">
        <h2 class="tm-section-header" style="font-size:50px"> Rumus Menghitung Kalori Suatu Kegiatan </h2>
        <div class="tm-responsive-table">
          <br></br>
          <table border="1">
            <tr class="tm-tr-header">
              <th style="font-size:30px"> EC = {[MET x 7.7 x BB(pound)] / 200} x waktu berolah raga </th>
            </tr>
          </table>
          <table border="1">
            <tr class="tm-tr-header">
              <th style="font-size:30px"> Untuk Melihat Daftar MET Bisa Dilihat Pada Laman Ini : <a href="../daftar_kegiatan/">Here</a></th>
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