<?php

// Action form
$tanggal    = $_POST['tanggal'];
    $duration   = $_POST['durasi'];
    $siklushaid = $_POST['siklus'];
    $short      = $_POST['pendek'];
    $long       = $_POST['panjang'];
if ((isset($_POST['submit'])) && ($tanggal!=NULL) && ($duration!=NULL) && ($siklushaid!=NULL) && ($short!=NULL)
    && ($long!=NULL)) {
    // Input form
    
    

    /* Rumus Menghitung Siklus Haid Berikutnya  :
    
    nextperiod = awal tanggal haid + lama siklus haid

    awal masa subur = siklus terpendek-18
    akhir masa subur = siklus terpanjang-18
    
    */

    $awalmasasubur = (intval($short)-1)-18;
    $akhirmasasubur = (intval($long)-1)-11;
    

    //$converttime = strtotime($tanggal);

    function addDayswithdate($date,$days){

        $date = strtotime("+".$days." days", strtotime($date));
        return  date("d-m-Y", $date);
    
    }
    function decDayswithdate($dates,$dayss){

        $dates = strtotime("-".$dayss." days", strtotime($dates));
        return  date("d-m-Y", $dates);
    
    }

    $hasilawalmasasubur = addDayswithdate($tanggal,intval($awalmasasubur));
    $hasilakhirmasasubur = addDayswithdate($tanggal,intval($akhirmasasubur));
    $puncakmasasubur = decDayswithdate($hasilakhirmasasubur,2);
    $total = addDayswithdate($tanggal,intval($siklushaid));

}
else{
        
    echo "
    <script>
    alert('Data Masih Ada Data');
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
  <?php 
  require_once("../../../../header/menu_navbar.php")
  ?>
    <!-- Header part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Hasil Perhitungan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4 h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Data Input</h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Tanggal Hari Pertama Haid : <?php echo"$tanggal";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Lama Haid : <?php echo"$duration";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Data Input Masa Ovulasi</h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Durasi Siklus Terpendek Selama 6 Bulan (Hari) : <?php echo"$short";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Durasi Siklus Terpendek Selama 6 Bulan (Hari) : <?php echo"$long";?></p>
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
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Tanggal Haid Berikutnya</h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Tanggal : <?php echo"$total";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Hasil Masa Ovulasi</h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Tanggal Awal Masa Ovulasi : <?php echo"$hasilawalmasasubur";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Puncak Masa Subur : <?php echo"$puncakmasasubur";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Tanggal Akhir Masa Ovulasi : <?php echo"$hasilakhirmasasubur";?></p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->
    
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