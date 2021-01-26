<?php

// Action form

if (isset($_POST['submit'])) {
    // Input form
    
    $demam      = $_POST['demam'];
    $nt         = $_POST['nt'];
    $bk         = $_POST['bk'];
    $hpp        = $_POST['hpp'];
    $sn         = $_POST['sn'];
    $ruam       = $_POST['ruam'];
    $tnn        = $_POST['tnn'];
    $ttm        = $_POST['ttm'];
    $nyar       = $_POST['nyar'];
    $pkgb       = $_POST['pkgb'];
    $sk         = $_POST['sk'];
    $hm         = $_POST['hm'];
    $batuk      = $_POST['batuk'];
    $no         = $_POST['no'];
    $mm         = $_POST['mm'];
    $foto       = $_POST['foto'];
    $ns         = $_POST['ns'];
    $kk         = $_POST['kk'];
    $bbm        = $_POST['bbm'];
    $tm         = $_POST['tm'];
    $nmb        = $_POST['nmb'];
    $nkm        = $_POST['nkm'];
    $bppatdr    = $_POST['bppatdr'];
    $muntah      = $_POST['muntah'];
    $diare      = $_POST['diare'];
    $rewel      = $_POST['rewel'];
    $kejang     = $_POST['kejang'];

    /*GUIDE BOOK

    kejang otot (kejang)
    Demam : dy dan dt
    Nyeri Tenggorokan : nt --> nty dan ntt
    Batuk Kering (bk) : bky bkt
    Hilang Indera Pernapasn (hpp)
    Sesak Napas (sn)
    Ruam Pada kulit (ruam)
    rasa tidak nayaman dan nyeri (tnn)
    nyeridada (nyar)
    tenggorokan tampak merah (ttm)
    pembengkakan kelenjar (pkgb)
    sakit kepala (sk)
    hidung meler (hm)
    batuk (batuk)
    nyeri otot (no)
    mata merah (mm)
    fotofobia (foto)
    nyeri sendi (ns)
    kulit kemerahan (kk)
    bintik bintik merah (bbm)
    tubuh menggigil (tm)
    nafsu makan berkurang (nmb)
    nyeri ketika mengunyak (nkm)
    bengkak pada posisi antar telinga (bppatdr)
    muntah (muntah)
    diare (diare)
    rewel (rewel)
    
    GEJALA

    Rule 1 : Campak
    Demam, Nyeri Tenggorokan, Hidung Meler, Batuk, Nyeri Otot, Mata Merah, Fotofobia

    Rule 2 : Campak Jerman
    Demam, Tenggorokan Tampak Merah, Pembengkakan kelenjar getah bening, Nyeri Sendi, Kemerahan kulit

    Rule 3 : CacarAir
    Demam, Sakit Kepala, Muncul bintik-bintik merah, Tubuh Mengggigil

    Rule 4 : Gondongan
    Demam, Nafsu Makan Berkurang, Nyeri Ketika Mengunyah, Bengkak Pada Posisi Antara Telinga Dan Rahang

    Rule 5 : Polio.
    Demam, Muntah, Diare, Rewel atau tidak dapat mengendalikan emosi, Kejang otot, terutama otot betis, leher atau punggung

    Rule 6 : COVID
    Gejala yang paling umum: demam, batuk kering, kelelahan
    Gejala yang sedikit tidak umum: rasa tidak nyaman dan nyeri, nyeri tenggorokan, diare, konjungtivitis (mata merah), 
    sakit kepala, hilangnya indera perasa atau penciuman, ruam pada kulit, atau perubahan warna pada jari tangan atau jari kaki
    Gejala serius: kesulitan bernapas atau sesak napas, nyeri dada atau rasa tertekan pada dada, hilangnya kemampuan berbicara atau bergerak
    */

    if( $demam == "dy" && $nt== "nty" && $hm == "hmy" && $batuk == "by" && $no == "noy" && $mm == "mmy" && $foto == "fotoy" ){

        
        $hasilanalisa = "Anda Mungkin Terkena Penyakit Campak";
        $hasil = "Campak";
        
        $pengobatan1 = "1. Minum banyak air untuk mencegah dehidrasi";
        $pengobatan2 = "2. Banyak istirahat dan hindari sinar matahari selama mata masih sensitif terhadap cahaya";
        $pengobatan3 = "3. Minum obat penurun demam dan obat pereda sakit serta nyeri";

    }
    else if ( $demam == "dy" && $ttm== "ttmy" && $pkgb == "pkgby" && $ns == "nsy" && $kk == "kky"){
        
        $hasilanalisa = "Anda Mungkin Terkena Penyakit Campak Jerman";
        $hasil = "Campak Jerman";
        
        $pengobatan1 = "1. Minum banyak air untuk mencegah dehidrasi";
        $pengobatan2 = "2. Banyak istirahat Untuk mengurangi nyeri dan demam";
        $pengobatan3 = "3. Minum air hangat bercampur madu dan lemon untuk meredakan sakit tenggorokan dan pilek.";

    }
    else if ( $demam == "dy" && $bk == "bky" && $tnn == "tnny" && $nt == "nty" && $sk == "sky" && $hpp == "hppy" 
        && $sn == "sny" && $diare == "diarey" ){

        $hasilanalisa = "Anda Mungkin Terkena COVID (Corona)";
        $hasil = "COVID (Corona)";
        
        $pengobatan1 = "1. Beristirahat, minum banyak air, dan makan makanan bergizi.";
        $pengobatan2 = "2. Gunakan ruangan yang terpisah dari anggota keluarga Anda, dan jika memungkinkan gunakan kamar mandi khusus. Bersihkan dan lakukan disinfeksi pada permukaan benda yang sering disentuh.";
        $pengobatan3 = "3. Segera pergi ke rumah sakit untuk mendapatkan pengobatan";

    }

    else if ( $demam == "dy" && $muntah == "muntahy" && $diare == "diarey" && $rewel == "rewely" && $kejang == "kejangy" ){

        $hasilanalisa = "Anda Mungkin Terkena Penyakit Polio";
        $hasil = "Polio";
        
        $pengobatan1 = "1. Minum obat pereda nyeri untuk meredakan nyeri, sakit kepala, dan demam. Contoh obat ini adalah ibuprofen.";
        $pengobatan2 = "2. Minum obat antibiotik untuk mengobati infeksi bakteri yang bisa menyertai polio, misalnya infeksi saluran kemih. Contoh antibiotik yang bisa diberikan adalah ceftriaxone.";
        $pengobatan3 = "3. Minum obat pelemas otot (antispasmodik) untuk meredakan ketegangan pada otot. Contoh obat ini adalah tolterodine dan scopolamine. Selain pemberian obat, kompres hangat juga dapat digunakan untuk meredakan ketegangan otot.";

    }
    else if ( $demam == "dy" && $nmb == "nmby" && $nkm == "nkmy" && $bppatdr == "bppatdry" ){

        $hasilanalisa = "Anda Mungkin Terkena Penyakit Gondongan";
        $hasil = "Gondongan";
        
        $pengobatan1 = "1. Memperbanyak istirahat dan mencukupkan tidur";
        $pengobatan2 = "2. Mengompres area yang bengkak dengan air hangat atau air dingin untuk meredakan rasa sakit.";
        $pengobatan3 = "3. Memperbanyak minum air putih dan mengonsumsi makanan lunak agar tidak perlu mengunyah terlalu banyak.";

    }
    else if ( $demam == "dy" && $sk== "sky" && $bbm == "bbmy" && $tm == "tmy" ){

        $hasilanalisa = "Anda Mungkin Terkena Penyakit Cacar Air";
        $hasil = "Cacar Air";
        
        $pengobatan1 = "1. Banyak minum dan dan mengonsumsi makanan yang lembut dan tidak asin atau asam, terutama jika ruam cacar tedapat pada mulut.";
        $pengobatan2 = "2. Beristirahat cukup dan hindari kontak dengan orang lain untuk mencegah penyebaran cacar air.";
        $pengobatan3 = "3. Mandi dengan air hangat, 3-4 kali sehari, selama beberapa hari setelah timbulnya ruam. Setelah itu, keringkan dengan cara tepuk-tepuk dengan handuk hingga kering.";

    }
    else{
        $hasilanalisa = "Mohon Maaf Kami Belum Bisa Menganalisa Penyakit Yang Anda Rasakan";
        $hasil = "";
        $pengobatan1 = "1. Jika anda ingin mengetahui penyakit yang anda rasakan, anda bisa konsultasikan dengan dokter secara langsung di WEB ini";
        $pengobatan2 = "2. Lakukan SIGN IN terlebih dahulu jika ingin melakukan konsultasi";
        $pengobatan3 = "3. Atau anda bisa langsung pergi ke rumah sakit untuk mengetahui penyakit yang anda rasakan";
    }

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
  <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="../../../../index.php"> <img src="img/logoo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="../../../menu_artikel/">Artikel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../menu_referensi/">Referensi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../menu_kalkulator/">Kalkulator Kesehatan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../../../menu_konsultasi/">Konsultasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">User Guide</a>
                                </li>
                            </ul>
                        </div>
                        <a class="btn_2 d-none d-lg-block" href="../../../../user/login/">SIGN IN</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Hasil Analisa Gejala Penyakit</h2>
                        <h2>Yang Anda Rasakan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_1.svg" alt=""></span>
                            <h4 h4 style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold">Kesimpulan</h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasilanalisa";?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold">Pengobatan <?php echo"$hasil"?></h4>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$pengobatan1";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$pengobatan2";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$pengobatan3";?></p>
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