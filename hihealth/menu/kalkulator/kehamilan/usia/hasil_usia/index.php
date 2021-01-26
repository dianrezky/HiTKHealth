<?php

// Action form
    $tanggal    = $_POST['tanggal'];
    $status   = $_POST['status'];
    $waktu      = $_POST['waktu'];

if ((isset($_POST['submit'])  && ($tanggal!=NULL) && ($status!=NULL) && ($waktu!=NULL))) {
    // Input form
    
    


    /*Hitung Usia Kandungan
    
    1. Pembagian trimester berdasarkan pra konsepsi
    
    Saat ini, dalam bidang kesehatan trimester ditentukan sesuai dengan sebuah pedoman umum ini. 
    Rata-rata kehamilan akan berlangsung selama 40 minggu atau sekitar 280 hari. 
    Hitungan ini dimulai dari hari pertama menstruasi terakhir. 
    Melalui metode tersebut, trimester ditentukan dengan 40 minggu dibagi tiga.
    
    Jadi secara teknis:
    a. Trimester pertama adalah 1-13 minggu. 
    b. Trimester kedua dimulai pada minggu ke-14 dan berakhir di usia kandungan 27 minggu. 
    c. Trimester ketiga dimulai pada 28 minggu sampai kehamilan minggu ke-41 atau waktu melahirkan.

    */

    $converttime = date("d-m-Y", strtotime($tanggal));

    function addDayswithdate($date,$days){

        $date = strtotime("+".$days." days", strtotime($date));
        return  date("d-m-Y", $date);
    
    }
    function decDayswithdate($date,$days){

        $date = strtotime("-".$days." days", strtotime($date));
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

    $datenows = date("d-m-Y");
    $datenow = date("d-m-Y", strtotime($datenows));
    
    
    if($status=="Normal"){
        include 'teratur.php';

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
        //Menghitung usia

        //untuk trimester 1 

        $tambahtrimester1 = addDayswithdate($tanggal,21);
        $hphtsesuai = decDayswithdate($tambahtrimester1,14);

        $trimester1awal = date('d M Y', strtotime($tanggal));
        $trimester1akhir = addDayswithdate($tanggal,90);

        $minggu1_t1awal   = addDayswithdate($trimester1awal,0);
        $minggu2_t1awala  = addDayswithdate($minggu1_t1awal,7);
        $minggu3_t1awala  = addDayswithdate($minggu2_t1awala,7);
        $minggu4_t1awala  = addDayswithdate($minggu3_t1awala,7);
        $minggu5_t1awala  = addDayswithdate($minggu4_t1awala,7);
        $minggu6_t1awala  = addDayswithdate($minggu5_t1awala,7);
        $minggu7_t1awala  = addDayswithdate($minggu6_t1awala,7);        
        $minggu8_t1awala  = addDayswithdate($minggu7_t1awala,7);
        $minggu9_t1awala  = addDayswithdate($minggu8_t1awala,7);
        $minggu10_t1awala = addDayswithdate($minggu9_t1awala,7);
        $minggu11_t1awala = addDayswithdate($minggu10_t1awala,7);
        $minggu12_t1awala = addDayswithdate($minggu11_t1awala,7);
        $minggu13_t1awala = addDayswithdate($minggu12_t1awala,7);

        $minggu2_t1awal  = date("d-m-Y", strtotime($minggu2_t1awala));
        $minggu3_t1awal  = date("d-m-Y", strtotime($minggu3_t1awala));
        $minggu4_t1awal  = date("d-m-Y", strtotime($minggu4_t1awala));
        $minggu5_t1awal  = date("d-m-Y", strtotime($minggu5_t1awala));
        $minggu6_t1awal  = date("d-m-Y", strtotime($minggu6_t1awala));
        $minggu7_t1awal  = date("d-m-Y", strtotime($minggu7_t1awala));        
        $minggu8_t1awal  = date("d-m-Y", strtotime($minggu8_t1awala));
        $minggu9_t1awal  = date("d-m-Y", strtotime($minggu9_t1awala));
        $minggu10_t1awal = date("d-m-Y", strtotime($minggu10_t1awala));
        $minggu11_t1awal = date("d-m-Y", strtotime($minggu11_t1awala));
        $minggu12_t1awal = date("d-m-Y", strtotime($minggu12_t1awala));
        $minggu13_t1awal = date("d-m-Y", strtotime($minggu13_t1awala));


        //untuk trimester 2
                
        $trimester2awal = addDayswithdate($trimester1akhir,1);
        $trimester2akhir = addDayswithdate($tanggal,188);

        $minggu14_t2awal = addDayswithdate($trimester2awal,0);
        $minggu15_t2awal = addDayswithdate($minggu14_t2awal,7);
        $minggu16_t2awal = addDayswithdate($minggu15_t2awal,7);
        $minggu17_t2awal = addDayswithdate($minggu16_t2awal,7);
        $minggu18_t2awal = addDayswithdate($minggu17_t2awal,7);
        $minggu19_t2awal = addDayswithdate($minggu18_t2awal,7);
        $minggu20_t2awal = addDayswithdate($minggu19_t2awal,7);
        $minggu21_t2awal = addDayswithdate($minggu20_t2awal,7);
        $minggu22_t2awal = addDayswithdate($minggu21_t2awal,7);
        $minggu23_t2awal = addDayswithdate($minggu22_t2awal,7);
        $minggu24_t2awal = addDayswithdate($minggu23_t2awal,7);
        $minggu25_t2awal = addDayswithdate($minggu24_t2awal,7);
        $minggu26_t2awal = addDayswithdate($minggu25_t2awal,7);
        $minggu27_t2awal = addDayswithdate($minggu26_t2awal,7);
        
        //untuk trimester 3

        $trimester3awal = addDayswithdate($trimester2akhir,1);
        $trimester3akhir = addDayswithdate($tanggal,280);

        $minggu28_t3awal = addDayswithdate($trimester3awal,0);
        $minggu29_t3awal = addDayswithdate($minggu28_t3awal,7);
        $minggu30_t3awal = addDayswithdate($minggu29_t3awal,7);
        $minggu31_t3awal = addDayswithdate($minggu30_t3awal,7);
        $minggu32_t3awal = addDayswithdate($minggu31_t3awal,7);
        $minggu33_t3awal = addDayswithdate($minggu32_t3awal,7);
        $minggu34_t3awal = addDayswithdate($minggu33_t3awal,7);
        $minggu35_t3awal = addDayswithdate($minggu34_t3awal,7);
        $minggu36_t3awal = addDayswithdate($minggu35_t3awal,7);
        $minggu37_t3awal = addDayswithdate($minggu36_t3awal,7);
        $minggu38_t3awal = addDayswithdate($minggu37_t3awal,7);
        $minggu39_t3awal = addDayswithdate($minggu38_t3awal,7);
        $minggu40_t3awal = addDayswithdate($minggu39_t3awal,7);
        $minggu41_t3awal = addDayswithdate($minggu40_t3awal,7);


        //penampilan hasil

        $hasilt1awal = date('D', strtotime($trimester1awal));
        $hasilt1akhir = date('D', strtotime($trimester1akhir));
        $hasilt2awal = date('D', strtotime($trimester2awal));
        $hasilt2akhir = date('D', strtotime($trimester2akhir));
        $hasilt3awal = date('D', strtotime($trimester3awal));
        $hasilt3akhir = date('D', strtotime($trimester3akhir));
        $datenowa = date('D', strtotime($datenow));

        $hasilakhirt1awal = "$dayList[$hasilt1awal], $trimester1awal";
        $hasilakhirt1akhir = "$dayList[$hasilt1akhir], $trimester1akhir";
        $hasilakhirt2awal = "$dayList[$hasilt2awal], $trimester2awal";
        $hasilakhirt2akhir = "$dayList[$hasilt2akhir], $trimester2akhir";
        $hasilakhirt3awal = "$dayList[$hasilt3awal], $trimester3awal";
        $hasilakhirt3akhir = "$dayList[$hasilt3akhir], $trimester3akhir";
        $hasildate = "$dayList[$datenowa], $datenows";


        //Menghitung HPL 

        //Rumus parikh: HPTP + 9 bulan+ (lama siklus menstruasi – 21 hari)


        $minggupertamakehamilan = $waktu-21;
        $pengurangan = addMonthswithdate($tanggal,9);

        //$hasila   = addYearwithdate($pengurangan,1);
        $hasila     = addDayswithdate($pengurangan,$minggupertamakehamilan);
        //$hasil    = addYearwithdate(strtotime($pengurangan),1);
        $hasilb     = date('D', strtotime($hasila));
        //$hasil    = "$hasilb $hasila";
        $hasil      = "$dayList[$hasilb], $hasila";

        if( date('Y-m-d', strtotime($datenow)) < date('Y-m-d', strtotime($trimester2awal))  ){
            
            $kondisi = "Anda Berada di Trimester Pertama";
            
            if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu2_t1awal))) ){
            
                $statushari = "Minggu Ke - 1";
                
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu3_t1awal))) ){
            
                $statushari = "Minggu Ke - 2";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu4_t1awal))) ){
            
                $statushari = "Minggu Ke - 3";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu5_t1awal))) ){
            
                $statushari = "Minggu Ke - 4";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu6_t1awal))) ){
            
                $statushari = "Minggu Ke - 5";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu7_t1awal))) ){
            
                $statushari = "Minggu Ke - 6";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu8_t1awal))) ){
            
                $statushari = "Minggu Ke - 7";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu9_t1awal))) ){
            
                $statushari = "Minggu Ke - 8";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu10_t1awal))) ){
            
                $statushari = "Minggu Ke - 9";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu11_t1awal))) ){
            
                $statushari = "Minggu Ke - 10";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu12_t1awal))) ){
            
                
                $statushari = "Minggu Ke - 11";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu13_t1awal))) ){
            
                $statushari = "Minggu Ke - 12";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu14_t2awal))) ){
            
                $statushari = "Minggu Ke - 13";
            
            }
            
        }

        else if( date('Y-m-d', strtotime($datenow)) < date('Y-m-d', strtotime($trimester3awal)) ){
            
            $kondisi = "Anda Berada di Trimester Kedua";

            if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu15_t2awal))) ){
            
                $statushari = "Minggu Ke - 14";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu16_t2awal))) ){
            
                $statushari = "Minggu Ke - 15";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu17_t2awal))) ){
            
                $statushari = "Minggu Ke - 16";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu18_t2awal))) ){
            
                $statushari = "Minggu Ke - 17";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu19_t2awal))) ){
            
                $statushari = "Minggu Ke - 18";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu20_t2awal))) ){
            
                $statushari = "Minggu Ke - 19";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu21_t2awal))) ){
            
                $statushari = "Minggu Ke - 20";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu22_t2awal))) ){
            
                $statushari = "Minggu Ke - 21";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu23_t2awal))) ){
            
                $statushari = "Minggu Ke - 22";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu24_t2awal))) ){
            
                $statushari = "Minggu Ke - 23";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu25_t2awal))) ){
            
                $statushari = "Minggu Ke - 24";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu26_t2awal))) ){
            
                $statushari = "Minggu Ke - 25";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu27_t2awal))) ){
            
                $statushari = "Minggu Ke - 26";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu28_t3awal))) ){
            
                $statushari = "Minggu Ke - 27";
            
            }

        }

        else if (date('Y-m-d', strtotime($datenow)) <= date('Y-m-d', strtotime($trimester3akhir))){
        
            $kondisi = "Anda Berada di Trimester Ketiga";

            if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu29_t3awal))) ){
    
                $statushari = "Minggu Ke - 28";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu30_t3awal))) ){
        
                $statushari = "Minggu Ke - 29";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu31_t3awal))) ){
        
                $statushari = "Minggu Ke - 30";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu32_t3awal))) ){
        
                $statushari = "Minggu Ke - 31";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu33_t3awal))) ){
        
                $statushari = "Minggu Ke - 32";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu34_t3awal))) ){
        
                $statushari = "Minggu Ke - 33";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu35_t3awal))) ){
    
                $statushari = "Minggu Ke - 34";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu36_t3awal))) ){
        
                $statushari = "Minggu Ke - 35";
            
            }
            else if(date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu37_t3awal))) ){
        
                $statushari = "Minggu Ke - 36";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu38_t3awal))) ){
        
                $statushari = "Minggu Ke - 37";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu39_t3awal))) ){
        
                $statushari = "Minggu Ke - 38";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu40_t3awal))) ){
        
                $statushari = "Minggu Ke - 39";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu41_t3awal))) ){
    
                $statushari = "Minggu Ke - 40";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) <= (date('Y-m-d', strtotime($minggu41_t3awal))) ){
        
                $statushari = "Minggu Ke - 41";
            
            }
        }
        else{
            $kondisi = "Selamat Bayi Anda Sudah Lahir Pada";
            $statushari = "$hasil";
        }

    }

    else if($status=="Lainnya"){

        
        include 'tidakteratur.php';

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

        //Menghitung Usia

        $tambahtrimester1 = addDayswithdate($tanggal,21);
        $hphtsesuai = decDayswithdate($tambahtrimester1,14);

        $trimester1awal = date('d M Y', strtotime($tanggal));
        $trimester1akhir = addDayswithdate($tanggal,90);

        $minggu1_t1awal   = addDayswithdate($trimester1awal,0);
        $minggu2_t1awala  = addDayswithdate($minggu1_t1awal,7);
        $minggu3_t1awala  = addDayswithdate($minggu2_t1awala,7);
        $minggu4_t1awala  = addDayswithdate($minggu3_t1awala,7);
        $minggu5_t1awala  = addDayswithdate($minggu4_t1awala,7);
        $minggu6_t1awala  = addDayswithdate($minggu5_t1awala,7);
        $minggu7_t1awala  = addDayswithdate($minggu6_t1awala,7);        
        $minggu8_t1awala  = addDayswithdate($minggu7_t1awala,7);
        $minggu9_t1awala  = addDayswithdate($minggu8_t1awala,7);
        $minggu10_t1awala = addDayswithdate($minggu9_t1awala,7);
        $minggu11_t1awala = addDayswithdate($minggu10_t1awala,7);
        $minggu12_t1awala = addDayswithdate($minggu11_t1awala,7);
        $minggu13_t1awala = addDayswithdate($minggu12_t1awala,7);

        $minggu2_t1awal  = date("d-m-Y", strtotime($minggu2_t1awala));
        $minggu3_t1awal  = date("d-m-Y", strtotime($minggu3_t1awala));
        $minggu4_t1awal  = date("d-m-Y", strtotime($minggu4_t1awala));
        $minggu5_t1awal  = date("d-m-Y", strtotime($minggu5_t1awala));
        $minggu6_t1awal  = date("d-m-Y", strtotime($minggu6_t1awala));
        $minggu7_t1awal  = date("d-m-Y", strtotime($minggu7_t1awala));        
        $minggu8_t1awal  = date("d-m-Y", strtotime($minggu8_t1awala));
        $minggu9_t1awal  = date("d-m-Y", strtotime($minggu9_t1awala));
        $minggu10_t1awal = date("d-m-Y", strtotime($minggu10_t1awala));
        $minggu11_t1awal = date("d-m-Y", strtotime($minggu11_t1awala));
        $minggu12_t1awal = date("d-m-Y", strtotime($minggu12_t1awala));
        $minggu13_t1awal = date("d-m-Y", strtotime($minggu13_t1awala));


        //untuk trimester 2
                
        $trimester2awal = addDayswithdate($trimester1akhir,1);
        $trimester2akhir = addDayswithdate($tanggal,188);

        $minggu14_t2awal = addDayswithdate($trimester2awal,0);
        $minggu15_t2awal = addDayswithdate($minggu14_t2awal,7);
        $minggu16_t2awal = addDayswithdate($minggu15_t2awal,7);
        $minggu17_t2awal = addDayswithdate($minggu16_t2awal,7);
        $minggu18_t2awal = addDayswithdate($minggu17_t2awal,7);
        $minggu19_t2awal = addDayswithdate($minggu18_t2awal,7);
        $minggu20_t2awal = addDayswithdate($minggu19_t2awal,7);
        $minggu21_t2awal = addDayswithdate($minggu20_t2awal,7);
        $minggu22_t2awal = addDayswithdate($minggu21_t2awal,7);
        $minggu23_t2awal = addDayswithdate($minggu22_t2awal,7);
        $minggu24_t2awal = addDayswithdate($minggu23_t2awal,7);
        $minggu25_t2awal = addDayswithdate($minggu24_t2awal,7);
        $minggu26_t2awal = addDayswithdate($minggu25_t2awal,7);
        $minggu27_t2awal = addDayswithdate($minggu26_t2awal,7);
        
        //untuk trimester 3

        $trimester3awal = addDayswithdate($trimester2akhir,1);
        $trimester3akhir = addDayswithdate($tanggal,287);

        $minggu28_t3awal = addDayswithdate($trimester3awal,0);
        $minggu29_t3awal = addDayswithdate($minggu28_t3awal,7);
        $minggu30_t3awal = addDayswithdate($minggu29_t3awal,7);
        $minggu31_t3awal = addDayswithdate($minggu30_t3awal,7);
        $minggu32_t3awal = addDayswithdate($minggu31_t3awal,7);
        $minggu33_t3awal = addDayswithdate($minggu32_t3awal,7);
        $minggu34_t3awal = addDayswithdate($minggu33_t3awal,7);
        $minggu35_t3awal = addDayswithdate($minggu34_t3awal,7);
        $minggu36_t3awal = addDayswithdate($minggu35_t3awal,7);
        $minggu37_t3awal = addDayswithdate($minggu36_t3awal,7);
        $minggu38_t3awal = addDayswithdate($minggu37_t3awal,7);
        $minggu39_t3awal = addDayswithdate($minggu38_t3awal,7);
        $minggu40_t3awal = addDayswithdate($minggu39_t3awal,7);
        $minggu41_t3awal = addDayswithdate($minggu40_t3awal,7);


        //penampilan hasil

        $hasilt1awal = date('D', strtotime($trimester1awal));
        $hasilt1akhir = date('D', strtotime($trimester1akhir));
        $hasilt2awal = date('D', strtotime($trimester2awal));
        $hasilt2akhir = date('D', strtotime($trimester2akhir));
        $hasilt3awal = date('D', strtotime($trimester3awal));
        $hasilt3akhir = date('D', strtotime($trimester3akhir));
        $datenowa = date('D', strtotime($datenow));

        $hasilakhirt1awal = "$dayList[$hasilt1awal], $trimester1awal";
        $hasilakhirt1akhir = "$dayList[$hasilt1akhir], $trimester1akhir";
        $hasilakhirt2awal = "$dayList[$hasilt2awal], $trimester2awal";
        $hasilakhirt2akhir = "$dayList[$hasilt2akhir], $trimester2akhir";
        $hasilakhirt3awal = "$dayList[$hasilt3awal], $trimester3awal";
        $hasilakhirt3akhir = "$dayList[$hasilt3akhir], $trimester3akhir";
        $hasildate = "$dayList[$datenowa], $datenows";

         //Menghitung HPL

       //Rumus parikh: HPTP + 9 bulan+ (lama siklus menstruasi – 21 hari)
        $minggupertamakehamilan = $waktu-21;
        $pengurangan = addMonthswithdate($tanggal,9);
        //$hasila   = addYearwithdate($pengurangan,1);
        $hasila     = addDayswithdate($pengurangan,$minggupertamakehamilan);
        //$hasil    = addYearwithdate(strtotime($pengurangan),1);
        $hasilb     = date('D', strtotime($hasila));
        //$hasil    = "$hasilb $hasila";
        $hasil      = "$dayList[$hasilb], $hasila";

        if( date('Y-m-d', strtotime($datenow)) < date('Y-m-d', strtotime($trimester2awal))  ){
            
            $kondisi = "Anda Berada di Trimester Pertama";
            
            if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu2_t1awal))) ){
            
                $statushari = "Minggu Ke - 1";
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu3_t1awal))) ){
            
                $statushari = "Minggu Ke - 2";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu4_t1awal))) ){
            
                $statushari = "Minggu Ke - 3";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu5_t1awal))) ){
            
                $statushari = "Minggu Ke - 4";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu6_t1awal))) ){
            
                $statushari = "Minggu Ke - 5";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu7_t1awal))) ){
            
                $statushari = "Minggu Ke - 6";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu8_t1awal))) ){
            
                $statushari = "Minggu Ke - 7";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu9_t1awal))) ){
            
                $statushari = "Minggu Ke - 8";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu10_t1awal))) ){
            
                $statushari = "Minggu Ke - 9";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu11_t1awal))) ){
            
                $statushari = "Minggu Ke - 10";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu12_t1awal))) ){
            
                
                $statushari = "Minggu Ke - 11";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu13_t1awal))) ){
            
                $statushari = "Minggu Ke - 12";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu14_t2awal))) ){
            
                $statushari = "Minggu Ke - 13";
            
            }
            
        }

        else if( date('Y-m-d', strtotime($datenow)) < date('Y-m-d', strtotime($trimester3awal)) ){
            
            $kondisi = "Anda Berada di Trimester Kedua";

            if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu15_t2awal))) ){
            
                $statushari = "Minggu Ke - 14";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu16_t2awal))) ){
            
                $statushari = "Minggu Ke - 15";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu17_t2awal))) ){
            
                $statushari = "Minggu Ke - 16";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu18_t2awal))) ){
            
                $statushari = "Minggu Ke - 17";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu19_t2awal))) ){
            
                $statushari = "Minggu Ke - 18";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu20_t2awal))) ){
            
                $statushari = "Minggu Ke - 19";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu21_t2awal))) ){
            
                $statushari = "Minggu Ke - 20";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu22_t2awal))) ){
            
                $statushari = "Minggu Ke - 21";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu23_t2awal))) ){
            
                $statushari = "Minggu Ke - 22";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu24_t2awal))) ){
            
                $statushari = "Minggu Ke - 23";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu25_t2awal))) ){
            
                $statushari = "Minggu Ke - 24";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu26_t2awal))) ){
            
                $statushari = "Minggu Ke - 25";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu27_t2awal))) ){
            
                $statushari = "Minggu Ke - 26";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu28_t3awal))) ){
            
                $statushari = "Minggu Ke - 27";
            
            }

        }

        else if (date('Y-m-d', strtotime($datenow)) <= date('Y-m-d', strtotime($trimester3akhir))){
        
            $kondisi = "Anda Berada di Trimester Ketiga";

            if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu29_t3awal))) ){
    
                $statushari = "Minggu Ke - 28";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu30_t3awal))) ){
        
                $statushari = "Minggu Ke - 29";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu31_t3awal))) ){
        
                $statushari = "Minggu Ke - 30";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu32_t3awal))) ){
        
                $statushari = "Minggu Ke - 31";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu33_t3awal))) ){
        
                $statushari = "Minggu Ke - 32";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu34_t3awal))) ){
        
                $statushari = "Minggu Ke - 33";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu35_t3awal))) ){
    
                $statushari = "Minggu Ke - 34";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu36_t3awal))) ){
        
                $statushari = "Minggu Ke - 35";
            
            }
            else if(date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu37_t3awal))) ){
        
                $statushari = "Minggu Ke - 36";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu38_t3awal))) ){
        
                $statushari = "Minggu Ke - 37";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu39_t3awal))) ){
        
                $statushari = "Minggu Ke - 38";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu40_t3awal))) ){
        
                $statushari = "Minggu Ke - 39";
            
            }
            else if( date('Y-m-d', strtotime($datenow)) < (date('Y-m-d', strtotime($minggu41_t3awal))) ){
    
                $statushari = "Minggu Ke - 40";
        
            }
            else if( date('Y-m-d', strtotime($datenow)) <= (date('Y-m-d', strtotime($minggu41_t3awal))) ){
        
                $statushari = "Minggu Ke - 41";
            
            }
            
    }
    else{

        $kondisi = "Selamat Bayi Anda Sudah Lahir Pada";
        $statushari = "$hasil";
    }

        
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
    <link rel="stylesheet" href="../../../assets/css/owl.carousel.min.css">
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
  <?php  require_once("../../../../../header/menu_navbar.php")?>
    <!-- Header part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Hasil Perhitungan</h2>
                        <h2>Usia Kehamilan Anda</h2>
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
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hari Pertama Haid Terakhir : <?php echo"$converttime";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Kategori : <?php echo"$keterangan";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold;">Lama Siklus : <?php echo"$waktu";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Perkiraan Kelahiran</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold">Hari, Tanggal :</p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style:normal; font-weight:bold"><?php echo"$hasil";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Hasil</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hari Ini : <?php echo"$hasildate";?></p>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$kondisi $statushari";?></p>
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
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Trimester 1</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Awal : <?php echo"$hasilakhirt1awal";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Akhir : <?php echo"$hasilakhirt1akhir";?></p>                            
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Trimester 2</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Awal : <?php echo"$hasilakhirt2awal";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Akhir : <?php echo"$hasilakhirt2akhir";?></p>                            
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4 style="font-size: 25px; font-family:Noto Sans; font-style:normal; font-weight:bold">Trimester 3</h4>
                            <br></br>
                            <br></br>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Awal : <?php echo"$hasilakhirt3awal";?></p>
                            <p style="font-size: 20px; font-family:Noto Sans; font-style=normal; font-weight=bold">Akhir : <?php echo"$hasilakhirt3akhir";?></p>                            
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
                                <h2>Tanggal Awal Dan Akhir Trimester</h2>
                                <h2>Per Minggu</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Trimester 1</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
                                                <?php 
                                                    if($status="Normal"){
                                                        pilih("satu");
                                                    }
                                                    else if($status = "Lainnya"){
                                                        pilih("satu");
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Trimester 2</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
                                                <?php 
                                                    if($status="Normal"){
                                                        pilih("dua");
                                                    }
                                                    else if($status = "Lainnya"){
                                                        pilih("dua");
                                                    }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="../../../assets/img/icon/feature_2.svg" alt=""></span>
                                            <h4>Trimester 3</h4>
                                            <p style="font-size: 22px; font-family:Noto Sans; font-style:normal; font-weight:bold">
                                                <?php 
                                                    if($status="Normal"){
                                                        pilih("tiga");
                                                    }
                                                    else if($status = "Lainnya"){
                                                        pilih("tiga");
                                                    }
                                                ?>
                                            </p>
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