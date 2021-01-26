<?php

// Action form
$tb        = $_POST['tb'];
$bb        = $_POST['bb'];
$ukh       = $_POST['uh'];

if ((isset($_POST['submit'])&& ($ukh!=NULL) && ($tb!=NULL) && ($tb>=110) && ($bb!=NULL) && ($bb>=12))) {
    // Input form
    
    

    /* Rumus BMI adalah:
    BMI = BERAT BADAN / KUADRAT TINGGI BADAN
    */
    $tb = $tb/100;
    $tbcm = $tb*100;
    // Hitung BMI

    $bmia   = $bb / ($tb * $tb);
    $bmi    = number_format($bmia,2);
    
    
    /*Hitung BB ideal sesuai jenis kelamin dengan rumus broca
    
    notes : tinggi badan dalam cm
    wanita = (tinggi badan - 100 )-(15%*(tinggi badan-100))
    pria = (tinggi badan - 100 )-(10%*(tinggi badan-100))
    */

    

    if($tbcm>=160){
        $bbideal = $tbcm - 110;
        $bbih   = $bbideal + ($ukh*0.35);
        $hasilbbih = number_format($bbih,2);

        $persenlebih = 0.1*$bbideal; 


        $beratlebih = $bbideal + $persenlebih ;
        $convertberatlebih = round($beratlebih);

        $beratkurang = $bbideal - $persenlebih;
        $convertberatkurang = round($beratkurang);

        if($a = $bbideal){
            $selisihberat = $bbih - $bb;
        }
        if($convertberatkurang==$bb){
            $selisihberat = $bbih - $convertberatkurang;
        }
    }

    if($tbcm<160){
        $bbideal = $tbcm - 105;
        $bbih   = $bbideal + ($ukh*0.35);
        $hasilbbih = number_format($bbih,2);
        $selisihberat = $bbih - $bb;
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
    <link rel="icon" href="img/favicons.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!--::header part start::-->
   <?php require_once("../../../../../header/menu_navbar.php")?>
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
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Data Input</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Tinggi Badan  : <?php echo"$tb meter atau $tbcm cm";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Berat Badan   : <?php echo"$bb kg";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Usia Kehamilan (Minggu) : <?php echo"$ukh";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4>BMI Mu Adalah</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$bmi";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasil";?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="../../../assets/img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Berat Badan Ideal Mu</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Sebelum Hamil : <?php echo"$bbideal";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hamil : <?php echo"$hasilbbih";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Anda Harus Menambah / Mengurangi Berat Badan Sebesar <?php echo"$selisihberat kg dari $bb kg";?></p>
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
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>BMI < 16</h4>
                                            <p>Masuk Kategori Sangat Kurus</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>16 <= BMI <= 16.99</h4>
                                            <p>Masuk Kategori Kurus</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>17 <= BMI <= 18.49</h4>
                                            <p>Masuk Kategori Sedikit Kurus</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>18.50 <= BMI <= 24.99</h4>
                                            <p>Masuk Kategori Normal</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>25 <= BMI <= 29.99</h4>
                                            <p>Masuk Kategori Kelebihan Berat Badan</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>30 <= BMI <= 34.9</h4>
                                            <p>Masuk Kategori Obesitas Kelas 1</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
                                                    alt=""></span>
                                            <h4>35 <= BMI <= 39.9</h4>
                                            <p>Masuk Kategori Obesitas Kelas 2</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg"
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
    <?php require_once("../../../../../footer/menu_footer.php") ?>
</body>

</html>