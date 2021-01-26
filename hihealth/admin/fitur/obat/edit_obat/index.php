<?php
//Pesan Notifikasi
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
		echo "<script>alert(Masih ada data yang kosong atau kategori yang anda masukkan tidak sesuai”')</script>";
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
                    <h2 class="title">Edit Data Obat</h2>
                    <?php
                        include '../../../../koneksi.php';
	                    $id = $_GET['id'];
	                    $data = mysqli_query($koneksi, "select * from obat where id='$id'");
	                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <form method="POST" action="update_aksi.php">
                        <div class="input-group">
                        <input class="input--style-3" type="hidden" value="<?php echo $d['id']; ?>" name="id">
                            <input class="input--style-3" type="text" value="<?php echo $d['nama']; ?>" name="nama">
                        </div>
                        <div class="input-group"> 
                            <input class="input--style-3" type="text" value="<?php echo $d['golongan']; ?>" name="golongan">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $d['konsumsi']; ?>" name="konsumsi">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $d['bentuk']; ?>" name="bentuk">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $d['manfaat']; ?>" name="manfaat">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" value="<?php echo $d['kategori']; ?>" name="kategori">
                        </div>
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit" value="SIMPAN">SIMPAN</button>
                        </div>
                        <?php
                    }?>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->