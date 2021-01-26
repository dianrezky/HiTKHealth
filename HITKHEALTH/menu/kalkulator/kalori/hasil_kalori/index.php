<?php

// Action Form
    $bb       = $_POST['bb'];
    $tb       = $_POST['tb'];
    $kelamin  = $_POST['kelamin'];
    $umur     = $_POST['umur'];
    $kegiatan = $_POST['kegiatan'];
    $pemakan  = $_POST['pemakan'];

if ((isset($_POST['hitung'])) && ($kelamin!=NULL) && ($tb!=NULL) && ($tb>=110) && ($bb!=NULL) && ($bb>=12) && ($umur!=NULL)
    && ($kegiatan!=NULL) && ($pemakan!=NULL)) {

    //Input Form

    

    /* RUMUS BMR ROZA DAN SHIZGAL

    BMR Pria = 88.362 + (13.397 x berat badan [kg]) + (4.799 x tinggi badan [cm]) – (5.677 x umur)
    BMR Wanita = 447.593 + (9.247 x berat badan [kg]) + (3.098 x tinggi badan [cm]) – (4.33 x umur)
    
    Level Aktivitas Fisik
    
    Tidak aktif: TEE = BMR x 1.2
    Cukup aktif, berolahraga 1-3 kali/minggu: TEE = BMR x 1.375
    Aktif, berolahraga 3-5 kali/minggu: TEE = BMR x 1.55
    Sangat aktif, berolahraga 6-7 kali/minggu: TEE = BMR x 1.725

    */

    if ($kelamin == "Perempuan") {

        $BMR = 447.593 + (9.247 * $bb) + (3.098 * $tb) - (4.33 * $umur);
        if ($kegiatan == "TidakAktif") {
            $TEE = $BMR * 1.2;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "CukupAktif") {
            $TEE = $BMR * 1.375;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "Aktif") {
            $TEE = $BMR * 1.55;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "SangatAktif") {
            $TEE = $BMR * 1.725;
            $TEEc = $TEE * 1000;
        }

        if ($pemakan == "NonVegetarian") {
            if ($TEE >= 0 && $TEE < 1800) {
                $hasil = include 'nonvegetarian_p1600.php';
            }
            if ($TEE >= 1800 && $TEE < 2000) {
                $hasil = include 'nonvegetarian_p1800.php';
            }
            if ($TEE >= 2000 && $TEE < 2200) {
                $hasil = include 'nonvegetarian_p2000.php';
            }
            if ($TEE >= 2200 && $TEE < 2600) {
                $hasil = include 'nonvegetarian_p2200.php';
            }
            if ($TEE >= 2600 && $TEE <= 3000) {
                $hasil = include 'nonvegetarian_p2600.php';
            }
        }
        if ($pemakan == "OvoVegetarian") {
            if ($TEE >= 0 && $TEE < 1600) {
                $hasil = include 'ovovegetarian_p1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'ovovegetarian_p1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'ovovegetarian_p1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'ovovegetarian_p2200.php';
            }
            if ($TEE >= 2700 && $TEE <= 3000) {
                $hasil = include 'ovovegetarian_p2700.php';
            }
        }
        if ($pemakan == "LactoVegetarian") {
            if ($TEE >= 0 && $TEE < 1600) {
                $hasil = include 'lactoovo_p1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'lactoovo_p1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'lactoovo_p1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'lactoovo_p2200.php';
            }
            if ($TEE >= 2700 && $TEE < 3000) {
                $hasil = include 'lactoovo_p2700.php';
            }
        }
    } else if ($kelamin == "Laki-laki") {
        $BMR = 88.362 + (13.397 * $bb) + (4.799 * $tb) - (5.677 * $umur);

        if ($kegiatan == "TidakAktif") {
            $TEE = $BMR * 1.2;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "CukupAktif") {
            $TEE = $BMR * 1.375;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "Aktif") {
            $TEE = $BMR * 1.55;
            $TEEc = $TEE * 1000;
        }
        if ($kegiatan == "SangatAktif") {
            $TEE = $BMR * 1.725;
            $TEEc = $TEE * 1000;
        }

        if ($pemakan == "NonVegetarian") {
            if ($TEE >= 1600 && $TEE < 1800) {
                $hasil = include 'nonvegetarian_l1600.php';
            }
            if ($TEE >= 1800 && $TEE < 2000) {
                $hasil = include 'nonvegetarian_l1800.php';
            }
            if ($TEE >= 2000 && $TEE < 2200) {
                $hasil = include 'nonvegetarian_l2000.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'nonvegetarian_l2400.php';
            }
            if ($TEE >= 2700 && $TEE <= 3100) {
                $hasil = include 'nonvegetarian_l2700.php';
            }
        }
        if ($pemakan == "OvoVegetarian") {
            if ($TEE >= 1300 && $TEE < 1600) {
                $hasil = include 'ovovegetarian_l1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'ovovegetarian_l1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'ovovegetarian_l1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'ovovegetarian_l2200.php';
            }
            if ($TEE >= 2700 && $TEE <= 3000) {
                $hasil = include 'ovovegetarian_l2700.php';
            }
        }
        if ($pemakan == "LactoVegetarian") {
            if ($TEE >= 1300 && $TEE < 1600) {
                $hasil = include 'lactoovo_l1300.php';
            }
            if ($TEE >= 1600 && $TEE < 1900) {
                $hasil = include 'lactoovo_l1600.php';
            }
            if ($TEE >= 1900 && $TEE < 2200) {
                $hasil = include 'lactoovo_l1900.php';
            }
            if ($TEE >= 2200 && $TEE < 2700) {
                $hasil = include 'lactoovo_l2200.php';
            }
            if ($TEE >= 2700 && $TEE < 3000) {
                $hasil = include 'lactoovo_l2700.php';
            }
        }
    }
}
else{
        
    echo "
    <script>
    alert('Data Masih Ada Data Yang Kosong atau Berat Badan Harus Lebih Dari 12kg dan Tinggi Badan Harus Lebih Dari 100cm');
    document.location.href='../index.php';
    </script>
"; 

}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HiTKHealth</title>
    <link rel="icon" href="../../assets/img/favicons.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../../assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../../assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="../../assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="../../assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../../assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
  <!--::header part start::-->
  <?php require_once("../../../../header/menu_navbar.php")?>
    <!-- Header part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Hasil Perhitungan Kalori Mu</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h3>Data Input</h3>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Kelamin : <?php echo "$kelamin"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Tinggi Badan : <?php echo "$tb cm"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Berat Badan : <?php echo "$bb kg"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Umur : <?php echo "$umur tahun"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Kegiatan : <?php echo "$kegiatan"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Makanan : <?php echo "$pemakan"; ?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h3>Jumlah Kalori Minimal Setiap Hari</h3>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">supaya tubuh organ tubuh Anda bisa berfungsi</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold;"><?php echo "" . number_format($BMR); echo" kkal";?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_img">
                        <img src="../../assets/img/service.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h3>Kesimpulan</h3>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Jumlah kalori TOTAL yang Anda butuhkan untuk menjalani aktivitas sehari-hari</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo "" . number_format($TEE);echo " kkal"; ?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo "Atau " . number_format($TEEc); echo " kal"; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->


    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Makanan Yang Disarankan</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Makan Pagi</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight:bold"><?php pilih("pagi");?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Makan Siang</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php pilih("siang");?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Makan Malam</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php pilih("malam");?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl carousel js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>