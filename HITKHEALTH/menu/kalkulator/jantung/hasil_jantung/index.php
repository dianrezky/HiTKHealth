<?php

// Action form
    $kelamin   = $_POST['kelamin'];
    $usia      = $_POST['usia'];
    $atlet     = $_POST['atlet'];
    $kategori  = $_POST['kategori'];

if ((isset($_POST['submit'])) && ($kelamin!=NULL) && ($usia!=NULL) && ($atlet!=NULL) && ($kategori!=NULL)) {
    // Input form
    
    

    /* Catatan Detak Jantung
        
        DAFTAR

        Anak berusia 1 hingga 2 tahun, berkisar 80-130 detak per menit. // satu
        Anak berusia 3 hingga 4 tahun, berkisar 80-120 detak per menit // dua
        Anak berusia 5 hingga 6 tahun, berkisar 75-115 detak per menit. // tiga
        Anak berusia 7 hingga 9 tahun, berkisar 70-110 detak per menit. // empat
        Anak-anak 10 tahun, dewasa dan manula: 60-100 denyut per menit (BPM) // lima
        Atlet pro terlatih adalah 40-60 denyut per menit (BPM)

        CARA HITUNG

        detak jantung maksimal = 220 - usia

        --detak jantung baik dipertahankan saat olahraga

        Denyut jantung selama kegiatan fisik yang sedang adalah sekitar 50-69% dari denyut nadi maksimum, 
        sedangkan denyut nadi selama aktivitas fisik berat dapat meningkatkan hingga 70-85% dari denyut nadi maksimal.

        Hitung angka cadangan detak jantung (heart rate reserve)

        *AKTIVITAS FISIK SEDANG

        Heart rate reserve (HRR) 1 = (detak jantung maksimal - detak jantung normal) x 50%
        kemudian HRR + detak jantung normal

        Heart rate reserve (HRR) 2 = (detak jantung maksimal - detak jantung normal) x 69%
        kemudian HRR + detak jantung normal

        Detak jantung normal saat olahraga = HRR 1 - HRR 2

        *AKTIVITAS FISIK BERAT

        Heart rate reserve (HRR) 1 = (detak jantung maksimal - detak jantung normal) x 70%
        kemudian HRR + detak jantung normal

        Heart rate reserve (HRR) 2 = (detak jantung maksimal - detak jantung normal) x 85%
        kemudian HRR + detak jantung normal

        Detak jantung normal saat olahraga = HRR 1 - HRR 2

    */
    if($atlet=="ya"){

        if($kategori="satu"){
            $hasilkategori = "1 - 2 Tahun";
        }
        else if($kategori="dua"){
            $hasilkategori = "3 - 4 Tahun";
        }
        else if($kategori="tiga"){
            $hasilkategori = "5 - 6 Tahun";
        }
        else if($kategori="empat"){
            $hasilkategori = "7 - 9 Tahun";
        }
        if($kategori="lima"){
            $hasilkategori = "10 Tahun Keatas";
        }

        $detaknormalbawah = "40";
        $detaknormalatas = "60";

        $detakmax = 220 - $usia;

        //fisik sedang bawah

        $hrrsbawah1 = ($detakmax - $detaknormalbawah)*0.50;
        $hasilhrrsbawah1 = $hrrsbawah1 + $detaknormalbawah;

        $hrrsbawah2 = ($detakmax - $detaknormalbawah)*0.69;
        $hasilhrrsbawah2 = $hrrsbawah2 + $detaknormalbawah;

        //fisik sedang atas

        $hrrsatas1 = ($detakmax - $detaknormalatas)*0.50;
        $hasilhrrsatas1 = $hrrsatas1 + $detaknormalatas;

        $hrrsatas2 = ($detakmax - $detaknormalatas)*0.69;
        $hasilhrrsatas2 = $hrrsatas2 + $detaknormalatas;


       //fisik berat bawah

        $hrrbbawah1 = ($detakmax - $detaknormalbawah)*0.70;
        $hasilhrrbbawah1 = $hrrbbawah1 + $detaknormalbawah;

        $hrrbbawah2 = ($detakmax - $detaknormalbawah)*0.85;
        $hasilhrrbbawah2 = $hrrbbawah2 + $detaknormalbawah;

        //fisik berat atas

        $hrrbatas1 = ($detakmax - $detaknormalatas)*0.70;
        $hasilhrrbatas1 = $hrrbatas1 + $detaknormalatas;

        $hrrbatas2 = ($detakmax - $detaknormalatas)*0.85;
        $hasilhrrbatas2 = $hrrbatas2 + $detaknormalatas;

    }
    else if($kategori=="satu"){

        $hasilkategori = "1 - 2 Tahun";

        $detaknormalbawah = "80";
        $detaknormalatas = "130";

        $detakmax = 220 - $usia;

        //fisik sedang bawah

        $hrrsbawah1 = ($detakmax - $detaknormalbawah)*0.50;
        $hasilhrrsbawah1 = $hrrsbawah1 + $detaknormalbawah;

        $hrrsbawah2 = ($detakmax - $detaknormalbawah)*0.69;
        $hasilhrrsbawah2 = $hrrsbawah2 + $detaknormalbawah;

        //fisik sedang atas

        $hrrsatas1 = ($detakmax - $detaknormalatas)*0.50;
        $hasilhrrsatas1 = $hrrsatas1 + $detaknormalatas;

        $hrrsatas2 = ($detakmax - $detaknormalatas)*0.69;
        $hasilhrrsatas2 = $hrrsatas2 + $detaknormalatas;

       //fisik berat bawah

        $hrrbbawah1 = ($detakmax - $detaknormalbawah)*0.70;
        $hasilhrrbbawah1 = $hrrbbawah1 + $detaknormalbawah;

        $hrrbbawah2 = ($detakmax - $detaknormalbawah)*0.85;
        $hasilhrrbbawah2 = $hrrbbawah2 + $detaknormalbawah;

        //fisik berat atas

        $hrrbatas1 = ($detakmax - $detaknormalatas)*0.70;
        $hasilhrrbatas1 = $hrrbatas1 + $detaknormalatas;

        $hrrbatas2 = ($detakmax - $detaknormalatas)*0.85;
        $hasilhrrbatas2 = $hrrbatas2 + $detaknormalatas;

    }
    else if($kategori=="dua"){

        $hasilkategori =  "3 - 4 Tahun";

        $detaknormalbawah = "80";
        $detaknormalatas = "120";

        $detakmax = 220 - $usia;

        //fisik sedang bawah

        $hrrsbawah1 = ($detakmax - $detaknormalbawah)*0.50;
        $hasilhrrsbawah1 = $hrrsbawah1 + $detaknormalbawah;

        $hrrsbawah2 = ($detakmax - $detaknormalbawah)*0.69;
        $hasilhrrsbawah2 = $hrrsbawah2 + $detaknormalbawah;

      //fisik sedang atas

        $hrrsatas1 = ($detakmax - $detaknormalatas)*0.50;
        $hasilhrrsatas1 = $hrrsatas1 + $detaknormalatas;

        $hrrsatas2 = ($detakmax - $detaknormalatas)*0.69;
        $hasilhrrsatas2 = $hrrsatas2 + $detaknormalatas;

        //fisik berat bawah

        $hrrbbawah1 = ($detakmax - $detaknormalbawah)*0.70;
        $hasilhrrbbawah1 = $hrrbbawah1 + $detaknormalbawah;

        $hrrbbawah2 = ($detakmax - $detaknormalbawah)*0.85;
        $hasilhrrbbawah2 = $hrrbbawah2 + $detaknormalbawah;

        //fisik berat atas

        $hrrbatas1 = ($detakmax - $detaknormalatas)*0.70;
        $hasilhrrbatas1 = $hrrbatas1 + $detaknormalatas;

        $hrrbatas2 = ($detakmax - $detaknormalatas)*0.85;
        $hasilhrrbatas2 = $hrrbatas2 + $detaknormalatas;

    }
    else if($kategori=="tiga"){

        $hasilkategori = "5 - 6 Tahun";

        $detaknormalbawah = "75";
        $detaknormalatas = "115";

        $detakmax = 220 - $usia;

        //fisik sedang bawah

        $hrrsbawah1 = ($detakmax - $detaknormalbawah)*0.50;
        $hasilhrrsbawah1 = $hrrsbawah1 + $detaknormalbawah;

        $hrrsbawah2 = ($detakmax - $detaknormalbawah)*0.69;
        $hasilhrrsbawah2 = $hrrsbawah2 + $detaknormalbawah;

        //fisik sedang atas

        $hrrsatas1 = ($detakmax - $detaknormalatas)*0.50;
        $hasilhrrsatas1 = $hrrsatas1 + $detaknormalatas;

        $hrrsatas2 = ($detakmax - $detaknormalatas)*0.69;
        $hasilhrrsatas2 = $hrrsatas2 + $detaknormalatas;

        //fisik berat bawah

        $hrrbbawah1 = ($detakmax - $detaknormalbawah)*0.70;
        $hasilhrrbbawah1 = $hrrbbawah1 + $detaknormalbawah;

        $hrrbbawah2 = ($detakmax - $detaknormalbawah)*0.85;
        $hasilhrrbbawah2 = $hrrbbawah2 + $detaknormalbawah;

        //fisik berat atas

        $hrrbatas1 = ($detakmax - $detaknormalatas)*0.70;
        $hasilhrrbatas1 = $hrrbatas1 + $detaknormalatas;

        $hrrbatas2 = ($detakmax - $detaknormalatas)*0.85;
        $hasilhrrbatas2 = $hrrbatas2 + $detaknormalatas;

    }
    else if($kategori=="empat"){

        $hasilkategori = "7 - 9 Tahun";

        $detaknormalbawah = "70";
        $detaknormalatas = "110";

        $detakmax = 220 - $usia;

        //fisik sedang bawah

        $hrrsbawah1 = ($detakmax - $detaknormalbawah)*0.50;
        $hasilhrrsbawah1 = $hrrsbawah1 + $detaknormalbawah;

        $hrrsbawah2 = ($detakmax - $detaknormalbawah)*0.69;
        $hasilhrrsbawah2 = $hrrsbawah2 + $detaknormalbawah;

        //fisik sedang atas

        $hrrsatas1 = ($detakmax - $detaknormalatas)*0.50;
        $hasilhrrsatas1 = $hrrsatas1 + $detaknormalatas;

        $hrrsatas2 = ($detakmax - $detaknormalatas)*0.69;
        $hasilhrrsatas2 = $hrrsatas2 + $detaknormalatas;

       //fisik berat bawah

        $hrrbbawah1 = ($detakmax - $detaknormalbawah)*0.70;
        $hasilhrrbbawah1 = $hrrbbawah1 + $detaknormalbawah;

        $hrrbbawah2 = ($detakmax - $detaknormalbawah)*0.85;
        $hasilhrrbbawah2 = $hrrbbawah2 + $detaknormalbawah;

        //fisik berat atas

        $hrrbatas1 = ($detakmax - $detaknormalatas)*0.70;
        $hasilhrrbatas1 = $hrrbatas1 + $detaknormalatas;

        $hrrbatas2 = ($detakmax - $detaknormalatas)*0.85;
        $hasilhrrbatas2 = $hrrbatas2 + $detaknormalatas;

    }
    else if($kategori=="lima"){

        $hasilkategori = "10 Tahun Keatas";

        $detaknormalbawah = "60";
        $detaknormalatas = "100";

        $detakmax = 220 - $usia;

        //fisik sedang bawah

        $hrrsbawah1 = ($detakmax - $detaknormalbawah)*0.50;
        $hasilhrrsbawah1 = $hrrsbawah1 + $detaknormalbawah;

        $hrrsbawah2 = ($detakmax - $detaknormalbawah)*0.69;
        $hasilhrrsbawah2 = $hrrsbawah2 + $detaknormalbawah;

        //fisik sedang atas

        $hrrsatas1 = ($detakmax - $detaknormalatas)*0.50;
        $hasilhrrsatas1 = $hrrsatas1 + $detaknormalatas;

        $hrrsatas2 = ($detakmax - $detaknormalatas)*0.69;
        $hasilhrrsatas2 = $hrrsatas2 + $detaknormalatas;

        //fisik berat bawah

        $hrrbbawah1 = ($detakmax - $detaknormalbawah)*0.70;
        $hasilhrrbbawah1 = $hrrbbawah1 + $detaknormalbawah;

        $hrrbbawah2 = ($detakmax - $detaknormalbawah)*0.85;
        $hasilhrrbbawah2 = $hrrbbawah2 + $detaknormalbawah;

        //fisik berat atas

        $hrrbatas1 = ($detakmax - $detaknormalatas)*0.70;
        $hasilhrrbatas1 = $hrrbatas1 + $detaknormalatas;

        $hrrbatas2 = ($detakmax - $detaknormalatas)*0.85;
        $hasilhrrbatas2 = $hrrbatas2 + $detaknormalatas;

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
                        <h2>Hasil Perhitungan Detak Jantung Mu</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Data Input</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Jenis Kelamin : <?php echo"$kelamin";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Umur  : <?php echo"$usia tahun";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Kategori   : <?php echo"$hasilkategori";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Apakah Atlet Pro  : <?php echo"$atlet";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4>Detak Jantung Normal Mu</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$detaknormalbawah - $detaknormalatas ";?>BPM</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4>Detak Jantung Maksimal Mu</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$detakmax BPM";?></p>
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
                            <h4>Detak Jantung Ketika Aktivitas Fisik Sedang</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Kondisi Menggunakan Detak Normal Bawah</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$hasilhrrsbawah1 - $hasilhrrsbawah2 BPM";?></p>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Kondisi Menggunakan Detak Normal Atas</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$hasilhrrsatas1 - $hasilhrrsatas2 BPM";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4>Detak Jantung Ketika Aktivitas Fisik Berat</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Kondisi Menggunakan Detak Normal Bawah</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$hasilhrrbbawah1 - $hasilhrrbbawah2 BPM";?></p>
                            <br></br>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">Kondisi Menggunakan Detak Normal Atas</p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$hasilhrrbatas1 - $hasilhrrbatas2 BPM";?></p>
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