<?php

// Action form
    $kelamin   = $_POST['kelamin'];
    $tb        = $_POST['tb'];
    $bb        = $_POST['bb'];
if ((isset($_POST['submit'])) && ($kelamin!=NULL) && ($tb!=NULL) && ($tb>=110) && ($bb!=NULL) && ($bb>=12)) {
    // Input form

        /* Rumus BMI adalah:
        BMI = BERAT BADAN / KUADRAT TINGGI BADAN m
        */
        $tb = $tb/100;
        $tbcm = $tb*100;
        // Hitung BMI

        $bmia        = $bb / ($tb * $tb);
        $bmi         = number_format($bmia,2);
        
        /*Hitung BB ideal sesuai jenis kelamin dengan rumus broca
        
        notes : tinggi badan dalam cm
        wanita = (tinggi badan - 100 )-(15%*(tinggi badan-100))
        pria = (tinggi badan - 100 )-(10%*(tinggi badan-100))
        */

        if($kelamin=="Perempuan"){
            $bbideal = ($tbcm-100 )-(0.15*($tbcm-100)); 
        }
        else if($kelamin=="Laki-laki"){
            $bbideal = ($tbcm-100 )-(0.1*($tbcm-100));
        }

        if( $bmi < 16) {
            $hasil= "Berat Banda Anda Masuk Kategori Sangat Kurus";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }elseif ( $bmi >= 16.00 && $bmi <= 16.99 ) {
            $hasil= "Berat Badan Anda Masuk Kategori Kurus";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }elseif ( $bmi >= 17.00 && $bmi <= 18.49 ) {
            $hasil= "Berat Badan Anda Masuk Kategori Sedikit Kurus";
            $hasil2="Berat Badan Sebesar $bb";
        }elseif ( $bmi >= 18.50 && $bmi <= 24.99 ) {
            $hasil= "Berat Badan Anda Masuk Kategori Normal";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }elseif ( $bmi >= 25 && $bmi <= 29.99 ) {
            $hasil= "Berat Badan Anda Masuk Kategori Kelebihan Berat Badan";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }elseif ( $bmi >= 30 && $bmi <= 34.99 ) {
            $hasil= "Berat Badan Anda Masuk Kategori Obesitas Kelas 1";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }elseif ( $bmi >= 35 && $bmi <= 39.99 ) {
            $hasil= "Berat Badan Anda Masuk Kategori Obesitas Kelas 2";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }else {
            $hasil= "Berat Badan Anda Masuk Kategori Obesitas Kelas 3";
            $hasil2="Berat Badan Anda Seharusnya $bbideal";
        }
    }
    else{
        
        echo "
        <script>
        alert('Data Masih Ada Yang Kosong atau Berat Badan Harus Lebih Dari 12kg dan Tinggi Badan Harus Lebih Dari 100cm');
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
    <link rel="icon" href="../../assets/../../assets/img/favicons.png">
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
                        <h2>Hasil Perhitungan BMI Mu</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Data Input</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Kelamin : <?php echo"$kelamin";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Tinggi Badan  : <?php echo"$tb meter atau $tbcm cm";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Berat Badan   : <?php echo"$bb kg";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4>BMI Mu Adalah</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$bmi";?></p>
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
                            <h4>Kesimpulan</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasil";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasil2 kg";?></p>
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
                                <h2>Info Kategori Hasil BMI</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 16</h4>
                                            <p>Masuk Kategori Sangat Kurus</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>16 <= BMI <= 16.99</h4>
                                            <p>Masuk Kategori Kurus</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>17 <= BMI <= 18.49</h4>
                                            <p>Masuk Kategori Sedikit Kurus</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>18.50 <= BMI <= 24.99</h4>
                                            <p>Masuk Kategori Normal</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>25 <= BMI <= 29.99</h4>
                                            <p>Masuk Kategori Kelebihan Berat Badan</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>30 <= BMI <= 34.9</h4>
                                            <p>Masuk Kategori Obesitas Kelas 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>35 <= BMI <= 39.9</h4>
                                            <p>Masuk Kategori Obesitas Kelas 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI >= 40</h4>
                                            <p>Masuk Kategori Obesitas Kelas 3</p>
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