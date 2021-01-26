<?php

// Action form
    $tanggal    = $_POST['tanggal'];
    $status     = $_POST['status'];
    $waktu      = $_POST['waktu'];

if ((isset($_POST['submit'])) && ($tanggal!=NULL) && ($status!=NULL) && ($waktu!=NULL)) {
    // Input form
    
    
    /* Rumus Menghitung Hari Perkiraan Kelahiran :
    
    Contoh cara menghitung HPL jika HPHT Anda adalah 11 April 2019 dan ditambahkan 7 hari ke depan, berarti 18 April 2019. 
    18 April 2019 adalah minggu pertama kehamilan Anda.
    Setelahnya kurangi 3 bulan dari bulan haid terakhir tersebut, yaitu 18 Januari (April bulan ke-4 dikurang 3). 
    Terakhir tambahkan satu tahun dari 2019. Maka dari cara menghitung ini Anda akan mendapatkan HPL 18 Januari 2020.

    //tidak teratur
    Rumus parikh: HPTP + 9 bulan+ (lama siklus menstruasi – 21 hari)
    
    */

    //$converttime = strtotime($tanggal);

    function addDayswithdate($date,$days){

        $date = strtotime("+".$days." days", strtotime($date));
        return  date("d-m-Y", $date);
    
    }
    function decMonthswithdate($dates,$month){

        $dates = strtotime("-".$month." months", strtotime($dates));
        return  date("d-m-Y", $dates);
    
    }
    function addMonthswithdate($dates,$month){

        $dates = strtotime("+".$month." months", strtotime($dates));
        return  date("d-m-Y", $dates);
    
    }
    function addYearwithdate($datess,$year){

        $dates = strtotime("+".$year." year", strtotime($datess));
        return  date("d-m-Y", $datess);
    
    }
    
    if($status=="Normal"){

        $keterangan = "Teratur";

        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );

        

        $hasila = addDayswithdate($tanggal,280);
        $hasilb = date('D', strtotime($hasila));
        $hasil = "$dayList[$hasilb], $hasila";

    }
    else if($status=="Lainnya"){

        $keterangan = "Tidak Teratur";

        $dayList = array(
            'Sun' => 'Minggu',
            'Mon' => 'Senin',
            'Tue' => 'Selasa',
            'Wed' => 'Rabu',
            'Thu' => 'Kamis',
            'Fri' => 'Jumat',
            'Sat' => 'Sabtu'
        );

        //Rumus parikh: HPTP + 9 bulan+ (lama siklus menstruasi – 21 hari)


        $minggupertamakehamilan = $waktu-21;
        echo"$minggupertamakehamilan";
        $pengurangan = addMonthswithdate($tanggal,9);
        echo"$pengurangan";
        
        //$hasila   = addYearwithdate($pengurangan,1);
        $hasila     = addDayswithdate($pengurangan,$minggupertamakehamilan);
        //$hasil    = addYearwithdate(strtotime($pengurangan),1);
        $hasilb     = date('D', strtotime($hasila));
        //$hasil    = "$hasilb $hasila";
        $hasil      = "$dayList[$hasilb], $hasila";
        
    }

}
else{
        
    echo "
    <script>
    alert('Data Masih Ada Yang Kosong');
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
    <link rel="icon" href="../../../assets/img/favicons.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../../../assets/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="....//assets/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../../../assets/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../../../assets/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="../../../assets/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="../../../assets/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../../../assets/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../../../assets/css/style.css">
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
                        <h2>Hasil Perhitungan</h2>
                        <h2>Perkiraan Hari Kelahiran</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4 h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Data Input</h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hari Pertama Haid Terakhir : <?php echo"$tanggal";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Kategori : <?php echo"$keterangan";?></p>
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
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Perkiraan Kelahiran</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Hari, Tanggal :</p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$hasil";?></p>
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
                                <h3>Info Cara Perhitungan Perkiraan Hari Lahir</h3>
                                <br></br>
                                <h4>HPL Siklus Haid Teratur ( 28 - 30 Hari ) : </h4>
                                <h4>HPHT + 280 Hari </h4>
                                <br></br>
                                <h4>HPL Siklus Haid Tidak Teratur ( Menggunakan Rumus Parikh ) : </h4>
                                <h4>( HPHT + 9 bulan) + (lama siklus menstruasi – 21 hari)</h4>
                                <br></br>
                                <h3>Notes : </h3>
                                <br></br>
                                <h4>HPHT ( Hari Pertama Haid Terakhir )</h4>
                                <h4>HPL ( Hari Perkiraan Lahir )</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->
    
    <!-- jquery plugins here-->
<?php require_once("../../../../../footer/menu_footer.php") ?>
</body>

</html>