<?php
//Pesan Notifikasi
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
		echo "<script>alert('Masih ada data yang kosong atau jenis/unit yang anda masukkan tidak sesuai')</script>";
    }
    if ($_GET['pesan'] == "gagal2") {
		echo "<script>alert('Salah Memasukkan Jenis')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>HiTKHealth</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-body">
                    <h2 class="title">Tambah Data Makanan atau Minuman</h2>
                    <form method="POST" action="tambah_food_aksi.php">
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Nama Makanan atau Minuman" name="nama">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Berat" name="berat">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Kalori" name="kalori">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Unit (gram/ml/sdm)" name="unit">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Jenis (makanan/minuman)" name="jenis">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" value="SIMPAN">SIMPAN</button>
                        </div>
                    </form>
                    <form method="post" action="../index.php">
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">KEMBALI</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->