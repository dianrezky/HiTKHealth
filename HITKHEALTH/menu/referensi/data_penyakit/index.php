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
      <h1 class="tm-page-header">Daftar Penyakit </h1>
    </div>
    <div class="tm-main-content">
      <div id="tm-intro-img"></div>

      <!-- Food Menu -->


      <section class="tm-section">
        <div class="tm-responsive-table">
          <table border="1">
            <tr class="tm-tr-header">
              <th> NO </th>
              <th> NAMA PENYAKIT </th>
              <th> DESKRIPSI </th>
              <th> PENCEGAHAN </th>
              <th> GEJALA </th>
              <th> PENYEBAB </th>
              <th> DIAGNOSIS </th>
              <th> PENANGANAN </th>
            </tr>
            <?php
            include '../../../koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from penyakit");
            while ($d = mysqli_fetch_array($data)) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['deskripsi']; ?></td>
                <td><?php echo $d['pencegahan']; ?></td>
                <td><?php echo $d['gejala']; ?></td>
                <td><?php echo $d['sebab']; ?></td>
                <td><?php echo $d['diagnosis']; ?></td>
                <td><?php echo $d['penanganan']; ?></td>
              </tr>
            <?php
            } ?>
          </table>
          <table border="1">
            <tr class="tm-tr-header">
              <th colspan="6">Download File Lengkapnya Disini : <a href="DAFTAR REFERENSI PENYAKIT WEBSITE HiTKHealth.pdf">Here</a></th>
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