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
    <title>HiHealth</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/tooplate-chilling-cafe.css" rel="stylesheet" />
<!--
Tooplate 2118 Chilling Cafe
https://www.tooplate.com/view/2118-chilling-cafe
-->
  </head>
  <body>
  <div class="topnav">
  <a class="active" href="../index.php">Home</a>
  <a href="../../perhitungan_bmi/menu_perhitungan.php">Perhitungan BMI</a>
  <a href="../../perhitungan_kalori/menu_perhitungank.php">Perhitungan Kalori</a>
  <a href="index.php">Daftar Kalori Makanan</a>
  <a href="../edit_profile.php">Edit Profile</a>
  <a href="../../dashboard/logout.php">Logout</a>
</div>

    <div class="tm-container">
      <div class="tm-main-content">
       
      </div>
  </div>
    <div class="tm-container">
      <div class="tm-text-white tm-page-header-container">
        <i class="fas fa-mug-hot fa-2x tm-page-icon"></i>
        <h1 class="tm-page-header">Daftar Kalori Setiap Makanan dan Minuman </h1>
      </div>
      <div class="tm-main-content"> 
        <div id="tm-intro-img"></div>

        <!-- Food Menu -->

        
          <section class="tm-section">
            <h2 class="tm-section-header">Makanan</h2>
            <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th> NO </th>
			          <th> NAMA MAKANAN </th>
                <th> BERAT </th>
                <th> KALORI </>
                <th> UNIT </th>
              </tr>
              <?php
                include '../../koneksi.php';
                $no=1;
		            $data = mysqli_query($koneksi, "select * from makanan");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['jenis'] == "makanan"){
		          ?>
              <tr>
                <td><?php echo $no++; ?></>
                <td><?php echo $d['food']; ?></td>
				        <td><?php echo $d['berat']; ?></td>
				        <td><?php echo $d['kalori']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
              </tr>
              <?php
            }}?>
            </table>
          </div>
        </section>

        <!-- Drink Menu -->
        <section class="tm-section">
          <h2 class="tm-section-header">Minuman</h2>
          <div class="tm-responsive-table">
            <table>
              <tr class="tm-tr-header">
                <th> NO </th>
                <th> NAMA MAKANAN </th>
                <th> BERAT </th>
                <th> KALORI </>
                <th> UNIT </th>
              </tr>
              <?php
                include '../../koneksi.php';
                $num=1;
		            $data = mysqli_query($koneksi, "select * from makanan");
		            while ($d = mysqli_fetch_array($data)) {
                  if($d['jenis'] == "minuman"){
		          ?>
              <tr>
                <td><?php echo $num++; ?></>
                <td><?php echo $d['food']; ?></td>
				        <td><?php echo $d['berat']; ?></td>
				        <td><?php echo $d['kalori']; ?></td>
                <td><?php echo $d['satuan']; ?></td>
              </tr>
              <?php
            }}?>
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