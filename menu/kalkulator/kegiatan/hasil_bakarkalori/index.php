<?php

// Action form
$category       = $_POST['category'];
$bb             = $_POST['bb'];
$durasi         = $_POST['tb'];

if ((isset($_POST['submit'])) && ($category!=NULL) && ($bb!=NULL) && ($durasi!=NULL)) {
    // Input form

    /* Rumus Menghitung Kalori Kegiatan :
    
    EC = {[MET x 7.7 x BB(pound)] / 200} x waktu berolah raga
    
    */
    
    $convertbb = $durasi/60;
    

    if($category=="olahraga"){

        $ket = "Olahraga";

        $EC1    = 4.69*$convertbb*$bb;
        $EC2    = 5.5*$convertbb*$bb;
        $EC3    = 6.5*$convertbb*$bb;
        $EC4    = 2.5*$convertbb*$bb;
        $EC5    = 3.74*$convertbb*$bb;
        $EC6    = 7.8*$convertbb*$bb;
        $EC7    = 4.0*$convertbb*$bb;
        $EC8    = 6.0*$convertbb*$bb;
        $EC9    = 8.0*$convertbb*$bb;
        $EC10   = 2.5*$convertbb*$bb;
        $EC11   = 4.8*$convertbb*$bb;
        $EC12   = 3.8*$convertbb*$bb;
        $EC13   = 5.8*$convertbb*$bb;
        $EC14   = 3.8*$convertbb*$bb;
        $EC15   = 6.28*$convertbb*$bb;
        $EC16   = 9.97*$convertbb*$bb;
        $EC17   = 11.14*$convertbb*$bb;
        $EC18   = 10.0*$convertbb*$bb;
        $EC19   = 4.0*$convertbb*$bb;
        $EC20   = 7.3*$convertbb*$bb;
        $EC21   = 4.0*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
        $EC11a   = number_format($EC11,2);
        $EC12a   = number_format($EC12,2);
        $EC13a   = number_format($EC13,2);
        $EC14a   = number_format($EC14,2);
        $EC15a   = number_format($EC15,2);
        $EC16a   = number_format($EC16,2);
        $EC17a   = number_format($EC17,2);
        $EC18a   = number_format($EC18,2);
        $EC19a   = number_format($EC19,2);
        $EC20a   = number_format($EC20,2);
        $EC21a   = number_format($EC21,2);

         //PENAMPILAN
        $hasil1     = "Panahan           = $EC1a";
        $hasil2     = "Badminton         = $EC2a";
        $hasil3     = "Basket            = $EC3a";
        $hasil4     = "Billiard          = $EC4a";
        $hasil5     = "Bowling           = $EC5a";
        $hasil6     = "Boxing            = $EC6a";
        $hasil7     = "Coaching          = $EC7a";
        $hasil8     = "Chearleading      = $EC8a";
        $hasil9     = "Futsal            = $EC9a";
        $hasil10    = "Baseball          = $EC10a";
        $hasil11    = "Golf              = $EC11a";
        $hasil12    = "Gymnastic         = $EC12a";
        $hasil13    = "Berkuda(Berlari)  = $EC13a";
        $hasil14    = "Berkuda(Berjalan) = $EC14a";
        $hasil15    = "Karate            = $EC15a";
        $hasil16    = "Taekwondo         = $EC16a";
        $hasil17    = "Judo              = $EC17a";
        $hasil18    = "Sepak Bola        = $EC18a";
        $hasil19    = "Pingpong          = $EC19a";
        $hasil20    = "Tennis            = $EC20a";
        $hasil21    = "Volli             = $EC21a";
    }
    else  if($category=="home"){

        $ket = "Aktivitas di Rumah";

                
        $EC1    = 3.3*$convertbb*$bb;
        $EC2    = 3.5*$convertbb*$bb;
        $EC3    = 3.5*$convertbb*$bb;
        $EC4    = 2.3*$convertbb*$bb;
        $EC5    = 3.4*$convertbb*$bb;
        $EC6    = 3.4*$convertbb*$bb;
        $EC7    = 3.3*$convertbb*$bb;
        $EC8    = 1.8*$convertbb*$bb;
        $EC9    = 2.8*$convertbb*$bb;
        $EC10   = 2.2*$convertbb*$bb;
        $EC11   = 2.64*$convertbb*$bb;
        $EC12   = 4.62*$convertbb*$bb;
        $EC13   = 2.3*$convertbb*$bb;
        $EC14   = 2.1*$convertbb*$bb;
        $EC15   = 5*$convertbb*$bb;
        $EC16   = 4.8*$convertbb*$bb;
        $EC17   = 3.52*$convertbb*$bb;
        $EC18   = 6.5*$convertbb*$bb;
        $EC19   = 2.5*$convertbb*$bb;
        $EC20   = 2.2*$convertbb*$bb;
        $EC21   = 2.8*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
        $EC11a   = number_format($EC11,2);
        $EC12a   = number_format($EC12,2);
        $EC13a   = number_format($EC13,2);
        $EC14a   = number_format($EC14,2);
        $EC15a   = number_format($EC15,2);
        $EC16a   = number_format($EC16,2);
        $EC17a   = number_format($EC17,2);
        $EC18a   = number_format($EC18,2);
        $EC19a   = number_format($EC19,2);
        $EC20a   = number_format($EC20,2);
        $EC21a   = number_format($EC21,2);

         //PENAMPILAN
        $hasil1     = "Menyapu Lantai       = $EC1a";
        $hasil2     = "Mencuci Mobil        = $EC2a";
        $hasil3     = "Mengepel Lantai      = $EC3a";
        $hasil4     = "Membersihkan Debu    = $EC4a";
        $hasil5     = "Memasak              = $EC5a";
        $hasil6     = "Mencuci Piring       = $EC6a";
        $hasil7     = "Belanja Pangan       = $EC7a";
        $hasil8     = "Menggosok            = $EC8a";
        $hasil9     = "Menjahit Baju        = $EC9a";
        $hasil10    = "Mencuci Baju (Mesin) = $EC10a";
        $hasil11    = "Mencuci Baju (Tangan)= $EC11a";
        $hasil12    = "Menjemur Baju        = $EC12a";
        $hasil13    = "Mengangkat Pakaian   = $EC13a";
        $hasil14    = "Merapihkan Tempat Tidur = $EC14a";
        $hasil15    = "Memindahkan Furniture= $EC15a";
        $hasil16    = "Merapihkan Ruangan   = $EC16a";
        $hasil17    = "Menyikat Lantai      = $EC17a";
        $hasil18    = "Menyapu Halaman      = $EC18a";
        $hasil19    = "Menyiram Tanaman     = $EC19a";
        $hasil20    = "Bermain Dengan Anak (Duduk) = $EC20a";
        $hasil21    = "Bermain Dengan Anak (Berdiri) = $EC21a";
    }

    else  if($category=="inactive"){

        $ket = "Tidak Aktif";
        
        $EC1    = 1*$convertbb*$bb;
        $EC2    = 1.3*$convertbb*$bb;
        $EC3    = 1.5*$convertbb*$bb;
        $EC4    = 0.95*$convertbb*$bb;
        $EC5    = 1.3*$convertbb*$bb;
        $EC6    = 1.3*$convertbb*$bb;
        $EC7    = 1*$convertbb*$bb;
        $EC8    = 1.3*$convertbb*$bb;
        $EC9    = 1.3*$convertbb*$bb;
        $EC10   = 1.3*$convertbb*$bb;
        $EC11   = 1.5*$convertbb*$bb;
        $EC12   = 1.01*$convertbb*$bb;
        $EC13   = 1.8*$convertbb*$bb;
        $EC14   = 1.3*$convertbb*$bb;
        $EC15   = 1.3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
        $EC11a   = number_format($EC11,2);
        $EC12a   = number_format($EC12,2);
        $EC13a   = number_format($EC13,2);
        $EC14a   = number_format($EC14,2);
        $EC15a   = number_format($EC15,2);

         //PENAMPILAN
        $hasil1     = "Berbaring Sambil Menonton TV         = $EC1a";
        $hasil2     = "Duduk Tanpa Aktivitas Lain           = $EC2a";
        $hasil3     = "Duduk Sambil Menonton Film di Bioskop= $EC3a";
        $hasil4     = "Tidur    = $EC4a";
        $hasil5     = "Berdiri Tanpa Aktivitas Lain = $EC5a";
        $hasil6     = "Menulis       = $EC6a";
        $hasil7     = "Bermeditasi       = $EC7a";
        $hasil8     = "Berbicara          = $EC8a";
        $hasil9     = "Duduk Sambil Merokok        = $EC9a";
        $hasil10    = "Duduk Sambil Menonton TV = $EC10a";
        $hasil11    = "Duduk Sambil Mendengarkan Musik/Radio = $EC11a";
        $hasil12    = "Berbaring Sambil Mendengarkan Musik = $EC12a";
        $hasil13    = "Duduk Dengan Kaki Gelisah = $EC13a";
        $hasil14    = "Membaca = $EC14a";
        $hasil15    = "Berbaring Tanpa Aktivitas= $EC15a";
    }

    else  if($category=="berkebun"){

        $ket = "Berkebun";
        
        $EC1    = 4.6*$convertbb*$bb;
        $EC2    = 5.5*$convertbb*$bb;
        $EC3    = 3.6*$convertbb*$bb;
        $EC4    = 3.53*$convertbb*$bb;
        $EC5    = 4.28*$convertbb*$bb;
        $EC6    = 2.8*$convertbb*$bb;
        $EC7    = 4.3*$convertbb*$bb;
        $EC8    = 4.5*$convertbb*$bb;
        $EC9    = 3.8*$convertbb*$bb;
        $EC10   = 1.5*$convertbb*$bb;
        $EC11   = 3.8*$convertbb*$bb;
        $EC12   = 3.5*$convertbb*$bb;
        $EC13   = 4*$convertbb*$bb;
        $EC14   = 5*$convertbb*$bb;
        $EC15   = 8.3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
        $EC11a   = number_format($EC11,2);
        $EC12a   = number_format($EC12,2);
        $EC13a   = number_format($EC13,2);
        $EC14a   = number_format($EC14,2);
        $EC15a   = number_format($EC15,2);

         //PENAMPILAN
        $hasil1     = "Memotong Kayu Bakar = $EC1a";
        $hasil2     = "Membawa Kayu = $EC2a";
        $hasil3     = "Menggali = $EC3a";
        $hasil4     = "Menggali Untuk Irigasi = $EC4a";
        $hasil5     = "Menggali Tanah Untuk Tanaman = $EC5a";
        $hasil6     = "Mengendarai Tractor = $EC6a";
        $hasil7     = "Menanam Tumbuhan = $EC7a";
        $hasil8     = "Menanam Pohon = $EC8a";
        $hasil9     = "Menyapu Daun = $EC9a";
        $hasil10    = "Menyiram Taman = $EC10a";
        $hasil11    = "Berkebun = $EC11a";
        $hasil12    = "Panen Buah = $EC12a";
        $hasil13    = "Memangkas Semak = $EC13a";
        $hasil14    = "Memotong Rumput = $EC14a";
        $hasil15    = "Menebang Pohon Besar = $EC15a";
    }

    else  if($category=="menari"){

        $ket = "Menari";
        
        $EC1    = 5*$convertbb*$bb;
        $EC2    = 6.8*$convertbb*$bb;
        $EC3    = 7.3*$convertbb*$bb;
        $EC4    = 5.5*$convertbb*$bb;
        $EC5    = 6.3*$convertbb*$bb;
        $EC6    = 5*$convertbb*$bb;
        $EC7    = 4.5*$convertbb*$bb;
        $EC8    = 9.6*$convertbb*$bb;
        $EC9    = 4.5*$convertbb*$bb;
        $EC10   = 5*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Ballet (Rehearsel atau Kelas) = $EC1a";
        $hasil2     = "Ballet (Perfomace) = $EC2a";
        $hasil3     = "Aerobic = $EC3a";
        $hasil4     = "Berdansa = $EC4a";
        $hasil5     = "Modern Dance Class (Cowo) = $EC5a";
        $hasil6     = "Aerobic Dance = $EC6a";
        $hasil7     = "Menari (Waltz) = $EC7a";
        $hasil8     = "Tarian Rakyat = $EC8a";
        $hasil9     = "Tarian Budaya = $EC9a";
        $hasil10    = "Modern Dance Class (Women) = $EC10a";
    }

    else  if($category=="berkendara"){

        $ket = "Berkendara";
        
        $EC1    = 2.62*$convertbb*$bb;
        $EC2    = 1.3*$convertbb*$bb;
        $EC3    = 1.3*$convertbb*$bb;
        $EC4    = 2.05*$convertbb*$bb;
        $EC5    = 1.44*$convertbb*$bb;
        $EC6    = 3.19*$convertbb*$bb;
        $EC7    = 6.3*$convertbb*$bb;
        $EC8    = 2.03*$convertbb*$bb;
        $EC9    = 2.87*$convertbb*$bb;
        $EC10   = 6*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
         //PENAMPILAN
        $hasil1     = "Mengendarai Mobil = $EC1a";
        $hasil2     = "Mengendarai BUS = $EC2a";
        $hasil3     = "Mengendarai Kereta = $EC3a";
        $hasil4     = "Menerbangkan Pesawat = $EC4a";
        $hasil5     = "Menerbangkan Helicopter = $EC5a";
        $hasil6     = "Mengendarai Motor = $EC6a";
        $hasil7     = "Mengendarai Becak = $EC7a";
        $hasil8     = "Mengendarai Tank = $EC8a";
        $hasil9     = "Mengendarai Truck Tentara = $EC9a";
        $hasil10    = "Mendorong Pesawat Masuk dan Keluar Hangar = $EC10a";
    }

    else  if($category=="volunteer"){

        $ket = "Volunteer";
        
        $EC1    = 1.5*$convertbb*$bb;
        $EC2    = 3.5*$convertbb*$bb;
        $EC3    = 1.3*$convertbb*$bb;
        $EC4    = 2*$convertbb*$bb;
        $EC5    = 3*$convertbb*$bb;
        $EC6    = 3*$convertbb*$bb;
        $EC7    = 3*$convertbb*$bb;
        $EC8    = 1.5*$convertbb*$bb;
        $EC9    = 4.5*$convertbb*$bb;
        $EC10   = 3*$convertbb*$bb;
        
        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Meeting/Terlibat Pembicaraan = $EC1a";
        $hasil2     = "Bermain Dengan Anak = $EC2a";
        $hasil3     = "Mengetik (Manual/Komputer) = $EC3a";
        $hasil4     = "Duduk Sambil Mengurus Anak = $EC4a";
        $hasil5     = "Mengepack Box = $EC5a";
        $hasil6     = "Menata Kursi = $EC6a";
        $hasil7     = "Berjalan/Berdiri Untuk Tujuan Sukarela  = $EC7a";
        $hasil8     = "Duduk, Pekerjaan Kantor Ringan = $EC8a";
        $hasil9     = "Melakukan Pekerjaan Berat = $EC9a";
        $hasil10    = "Membenarkan Barang Rusak = $EC10a";
    }

    else  if($category=="agama"){

        $ket = "Agama";
        
        $EC1    = 1.3*$convertbb*$bb;
        $EC2    = 1.3*$convertbb*$bb;
        $EC3    = 1.3*$convertbb*$bb;
        $EC4    = 2*$convertbb*$bb;
        $EC5    = 3.3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);

         //PENAMPILAN
        $hasil1     = "Duduk Mengikuti Acara Keagamaan = $EC1a";
        $hasil2     = "Duduk Sambil Membaca kitab = $EC2a";
        $hasil3     = "Sholat = $EC3a";
        $hasil4     = "Menyanyi di Gereja (Berdiri) = $EC4a";
        $hasil5     = "Membersihkan Rumah Ibadah = $EC5a";
    }

    else  if($category=="berjalan"){

        $ket = "Berjalan";
        
        $EC1    = 7*$convertbb*$bb;
        $EC2    = 7.8*$convertbb*$bb;
        $EC3    = 4*$convertbb*$bb;
        $EC4    = 6.5*$convertbb*$bb;
        $EC5    = 3*$convertbb*$bb;
        $EC6    = 2.5*$convertbb*$bb;
        $EC7    = 5*$convertbb*$bb;
        $EC8    = 8.3*$convertbb*$bb;
        $EC9    = 2.38*$convertbb*$bb;
        $EC10   = 8*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Backpacking = $EC1a";
        $hasil2     = "Mendaki Gunung Dengan Membawa Tas = $EC2a";
        $hasil3     = "Mendorong Stroller Anak = $EC3a";
        $hasil4     = "Gerak Jalan = $EC4a";
        $hasil5     = "Berjalan Membawa Peliharaan = $EC5a";
        $hasil6     = "Menonton Pertunjukan Burung Sambil Berjalan = $EC6a";
        $hasil7     = "Membawa Barang (7kg) Ke Lantai Bawah  = $EC7a";
        $hasil8     = "Membawa Barang Ke Lantai Atas = $EC8a";
        $hasil9     = "Berjalan Sambil Menggendong Anak(4kg) = $EC9a";
        $hasil10    = "Baris Berbaris Dalam Militer (Tanpa Kelompok) = $EC10a";
    }

    else  if($category=="berlari"){

        $ket = "Berlari";
        
        $EC1    = 7*$convertbb*$bb;
        $EC2    = 6*$convertbb*$bb;
        $EC3    = 8.3*$convertbb*$bb;
        $EC4    = 9.8*$convertbb*$bb;
        $EC5    = 11*$convertbb*$bb;
        $EC6    = 11.8*$convertbb*$bb;
        $EC7    = 12.8*$convertbb*$bb;
        $EC8    = 14.5*$convertbb*$bb;
        $EC9    = 16*$convertbb*$bb;
        $EC10   = 19*$convertbb*$bb;
        $EC11   = 19.8*$convertbb*$bb;
        $EC12   = 23*$convertbb*$bb;
        $EC13   = 15*$convertbb*$bb;
        $EC14   = 13.3*$convertbb*$bb;
        $EC15   = 10*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
        $EC11a   = number_format($EC11,2);
        $EC12a   = number_format($EC12,2);
        $EC13a   = number_format($EC13,2);
        $EC14a   = number_format($EC14,2);
        $EC15a   = number_format($EC15,2);

         //PENAMPILAN
        $hasil1     = "Jogging = $EC1a";
        $hasil2     = "Berlari 4mph (13 min/mile) = $EC2a";
        $hasil3     = "Berlari 5mph (12 min/mile) = $EC3a";
        $hasil4     = "Berlari 6mph (10 min/mile) = $EC4a";
        $hasil5     = "Berlari 7mph (8.5 min/mile) = $EC5a";
        $hasil6     = "Berlari 8mph (7.5 min/mile) = $EC6a";
        $hasil7     = "Berlari 9mph (6.5 min/mile)  = $EC7a";
        $hasil8     = "Berlari 10mph (6 min/mile) = $EC8a";
        $hasil9     = "Berlari 11mph (5.5 min/mile) = $EC9a";
        $hasil10    = "Berlari 12mph (5 min/mile) = $EC10a";
        $hasil11    = "Berlari 13mph (4.6 min/mile) = $EC11a";
        $hasil12    = "Berlari 14mph (4.3 min/mile) = $EC12a";
        $hasil13    = "Berlari Menaiki Tangga = $EC13a";
        $hasil14    = "Marathon = $EC14a";
        $hasil15    = "Berlari Pada Track = $EC15a";
    }

    else  if($category=="music"){

        $ket = "Bermain Alat Musik";
        
        $EC1    = 2.3*$convertbb*$bb;
        $EC2    = 3.8*$convertbb*$bb;
        $EC3    = 2.3*$convertbb*$bb;
        $EC4    = 2*$convertbb*$bb;
        $EC5    = 2.5*$convertbb*$bb;
        $EC6    = 1.8*$convertbb*$bb;
        $EC7    = 2*$convertbb*$bb;
        $EC8    = 5.5*$convertbb*$bb;
        $EC9    = 2*$convertbb*$bb;
        $EC10   = 3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Melakukan Orchestra (Berdiri) = $EC1a";
        $hasil2     = "Bermain Drum = $EC2a";
        $hasil3     = "Bermain Piano (Duduk) = $EC3a";
        $hasil4     = "Bermain Organ (Duduk) = $EC4a";
        $hasil5     = "Bermain Violin (Duduk) = $EC5a";
        $hasil6     = "Bermain Trompet (Duduk) = $EC6a";
        $hasil7     = "Bermain Flute (Duduk)  = $EC7a";
        $hasil8     = "Marching Band = $EC8a";
        $hasil9     = "Bermain Gitar (Duduk) = $EC9a";
        $hasil10    = "Bermain Gitar (Berdiri) = $EC10a";
    }

    else  if($category=="bekerja"){

        $ket = "Bekerja";
        
        $EC1    = 3*$convertbb*$bb;
        $EC2    = 5*$convertbb*$bb;
        $EC3    = 4*$convertbb*$bb;
        $EC4    = 4.3*$convertbb*$bb;
        $EC5    = 4*$convertbb*$bb;
        $EC6    = 2.5*$convertbb*$bb;
        $EC7    = 7.8*$convertbb*$bb;
        $EC8    = 1.8*$convertbb*$bb;
        $EC9    = 8*$convertbb*$bb;
        $EC10   = 1.8*$convertbb*$bb;
        $EC11   = 2.2*$convertbb*$bb;
        $EC12   = 1.03*$convertbb*$bb;
        $EC13   = 3.61*$convertbb*$bb;
        $EC14   = 2.2*$convertbb*$bb;
        $EC15   = 3.3*$convertbb*$bb;
        $EC16   = 2.5*$convertbb*$bb;
        $EC17   = 4*$convertbb*$bb;
        $EC18   = 4*$convertbb*$bb;
        $EC19   = 2.11*$convertbb*$bb;
        $EC20   = 1.38*$convertbb*$bb;
        $EC21   = 2.3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);
        $EC11a   = number_format($EC11,2);
        $EC12a   = number_format($EC12,2);
        $EC13a   = number_format($EC13,2);
        $EC14a   = number_format($EC14,2);
        $EC15a   = number_format($EC15,2);
        $EC16a   = number_format($EC16,2);
        $EC17a   = number_format($EC17,2);
        $EC18a   = number_format($EC18,2);
        $EC19a   = number_format($EC19,2);
        $EC20a   = number_format($EC20,2);
        $EC21a   = number_format($EC21,2);
         //PENAMPILAN
        $hasil1     = "Pramugari Maskapai Penerbangan = $EC1a";
        $hasil2     = "Polisi (Mengatur Lalu Lintas) = $EC2a";
        $hasil3     = "Membuat Roti = $EC3a";
        $hasil4     = "Tukang Kayu = $EC4a";
        $hasil5     = "Petugas Pembersih Kamar Hotel = $EC5a";
        $hasil6     = "Chef = $EC6a";
        $hasil7     = "Petani = $EC7a";
        $hasil8     = "Engineer = $EC8a";
        $hasil9     = "Pemadam Kebakaran = $EC9a";
        $hasil10    = "Hairstylist = $EC10a";
        $hasil11    = "Sekretaris = $EC11a";
        $hasil12    = "Bekerja Didepan Komputer = $EC12a";
        $hasil13    = "Pelukis = $EC13a";
        $hasil14    = "Petugas Perpustakaan = $EC14a";
        $hasil15    = "Petugas Laundry = $EC15a";
        $hasil16    = "Penjahit = $EC16a";
        $hasil17    = "Tukang Pijat = $EC17a";
        $hasil18    = "Tukang Sampah = $EC18a";
        $hasil19    = "Petugas LAB (Men) = $EC19a";
        $hasil20    = "Petugas LAB (Women) = $EC20a";
        $hasil21    = "Petugas POS = $EC21a";
    }

    else  if($category=="self"){

        $ket = "Self Care";
        
        $EC1    = 1.5*$convertbb*$bb;
        $EC2    = 2.5*$convertbb*$bb;
        $EC3    = 1.5*$convertbb*$bb;
        $EC4    = 2*$convertbb*$bb;
        $EC5    = 2.5*$convertbb*$bb;
        $EC6    = 1.5*$convertbb*$bb;
        $EC7    = 2*$convertbb*$bb;
        $EC8    = 2*$convertbb*$bb;
        $EC9    = 2*$convertbb*$bb;
        $EC10   = 3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Mandi = $EC1a";
        $hasil2     = "Memakai Baju = $EC2a";
        $hasil3     = "Makan (Duduk) = $EC3a";
        $hasil4     = "Menyikat Gigi = $EC4a";
        $hasil5     = "Menata Rambut (Berdiri) = $EC5a";
        $hasil6     = "Minum Obat = $EC6a";
        $hasil7     = "Makan Sambil Berbicara = $EC7a";
        $hasil8     = "Memakai Make Up = $EC8a";
        $hasil9     = "Bercukur = $EC9a";
        $hasil10    = "Bersiap Untuk Tidur = $EC10a";
    }

    else  if($category=="water"){

        $ket = "di Air";
        
        $EC1    = 3*$convertbb*$bb;
        $EC2    = 4.5*$convertbb*$bb;
        $EC3    = 5*$convertbb*$bb;
        $EC4    = 5*$convertbb*$bb;
        $EC5    = 7.15*$convertbb*$bb;
        $EC6    = 7.8*$convertbb*$bb;
        $EC7    = 3*$convertbb*$bb;
        $EC8    = 7*$convertbb*$bb;
        $EC9    = 4*$convertbb*$bb;
        $EC10   = 11.53*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Diving = $EC1a";
        $hasil2     = "Perlombaan Berlayar = $EC2a";
        $hasil3     = "Surfing = $EC3a";
        $hasil4     = "Snorkeling = $EC4a";
        $hasil5     = "Berenang Gaya Punggung = $EC5a";
        $hasil6     = "Berenang Gaya Bebas = $EC6a";
        $hasil7     = "Bermain Bola Volly di Air = $EC7a";
        $hasil8     = "Jet Skiing Driving = $EC8a";
        $hasil9     = "Mendayung Perahu = $EC9a";
        $hasil10    = "Menyelam = $EC10a";
    }

    else  if($category=="winter"){

        $ket = "Winter Activity";
        
        $EC1    = 7*$convertbb*$bb;
        $EC2    = 4.5*$convertbb*$bb;
        $EC3    = 5*$convertbb*$bb;
        $EC4    = 5*$convertbb*$bb;
        $EC5    = 7.15*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        
         //PENAMPILAN
        $hasil1     = "Skatting = $EC1a";
        $hasil2     = "Skiing = $EC2a";
        $hasil3     = "Bermain Kereta Luncur = $EC3a";
        $hasil4     = "Memindahkan Rumah Es = $EC4a";
        $hasil5     = "Memancing Ikan di Es = $EC5a";
    }

    else  if($category=="sepeda"){

        $ket = "Bicycling";
        
        $EC1    = 14*$convertbb*$bb;
        $EC2    = 16*$convertbb*$bb;
        $EC3    = 6.8*$convertbb*$bb;
        $EC4    = 7.5*$convertbb*$bb;
        $EC5    = 8.5*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);

         //PENAMPILAN
        $hasil1     = "Bersepeda di Gunung = $EC1a";
        $hasil2     = "Balapan Sepeda di Gunung = $EC2a";
        $hasil3     = "Bersepeda dari/ke Kantor = $EC3a";
        $hasil4     = "Bersepeda = $EC4a";
        $hasil5     = "Bersepeda, BMX = $EC5a";
    }

    else  if($category=="latihan"){

        $ket = "Conditioning Exercise";
        
        $EC1    = 2.1*$convertbb*$bb;
        $EC2    = 7*$convertbb*$bb;
        $EC3    = 3.8*$convertbb*$bb;
        $EC4    = 8*$convertbb*$bb;
        $EC5    = 9*$convertbb*$bb;
        $EC6    = 111*$convertbb*$bb;
        $EC7    = 8*$convertbb*$bb;
        $EC8    = 7.2*$convertbb*$bb;
        $EC9    = 3.4*$convertbb*$bb;
        $EC10   = 7.3*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Yoga = $EC1a";
        $hasil2     = "Bersepeda Menggunakan Spinning Bike = $EC2a";
        $hasil3     = "Push Up = $EC3a";
        $hasil4     = "Pull Up = $EC4a";
        $hasil5     = "Stair Treadmill = $EC5a";
        $hasil6     = "Lompat Tali = $EC6a";
        $hasil7     = "Sit Up = $EC7a";
        $hasil8     = "Bermain Dace Revolution (Arcade Games) = $EC8a";
        $hasil9     = "Aerobic = $EC9a";
        $hasil10    = "Mendayung = $EC10a";
    }

    else  if($category=="fishhunt"){

        $ket = "Memancing dan Berburu";
        
        $EC1    = 3.5*$convertbb*$bb;
        $EC2    = 4*$convertbb*$bb;
        $EC3    = 2*$convertbb*$bb;
        $EC4    = 5*$convertbb*$bb;
        $EC5    = 6*$convertbb*$bb;
        $EC6    = 3.3*$convertbb*$bb;
        $EC7    = 2.5*$convertbb*$bb;
        $EC8    = 5*$convertbb*$bb;
        $EC9    = 4.3*$convertbb*$bb;
        $EC10   = 4*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Memancing = $EC1a";
        $hasil2     = "Menangkap Ikan Dengan Tangan = $EC2a";
        $hasil3     = "Menangkap Ikan Dari Kapal (Duduk) = $EC3a";
        $hasil4     = "Berburu = $EC4a";
        $hasil5     = "Beburu Rusa = $EC5a";
        $hasil6     = "Berburu Burung = $EC6a";
        $hasil7     = "Menembak = $EC7a";
        $hasil8     = "Berburu Kelinci = $EC8a";
        $hasil9     = "Mencari Cacing = $EC9a";
        $hasil10    = "Berburu Hewan Laut Berukuran Besar = $EC10a";
    }

    else  if($category=="lainnya"){

        $ket = "Kegiatan Lainnya";
        
        $EC1    = 1.5*$convertbb*$bb;
        $EC2    = 1.5*$convertbb*$bb;
        $EC3    = 1.8*$convertbb*$bb;
        $EC4    = 1.3*$convertbb*$bb;
        $EC5    = 1.5*$convertbb*$bb;
        $EC6    = 1*$convertbb*$bb;
        $EC7    = 1.8*$convertbb*$bb;
        $EC8    = 1.54*$convertbb*$bb;
        $EC9    = 1.8*$convertbb*$bb;
        $EC10   = 1.5*$convertbb*$bb;

        $EC1a    = number_format($EC1,2);
        $EC2a    = number_format($EC2,2);
        $EC3a    = number_format($EC3,2);
        $EC4a    = number_format($EC4,2);
        $EC5a    = number_format($EC5,2);
        $EC6a    = number_format($EC6,2);
        $EC7a    = number_format($EC7,2);
        $EC8a    = number_format($EC8,2);
        $EC9a    = number_format($EC9,2);
        $EC10a   = number_format($EC10,2);

         //PENAMPILAN
        $hasil1     = "Bermain Kartu (Duduk) = $EC1a";
        $hasil2     = "Bermain Catur (Duduk) = $EC2a";
        $hasil3     = "Menggambar (Duduk) = $EC3a";
        $hasil4     = "Membaca Buku/Koran (Duduk) = $EC4a";
        $hasil5     = "Mengcopy Dokumen (Berdiri) = $EC5a";
        $hasil6     = "Bermain Komputer = $EC6a";
        $hasil7     = "Duduk Didalam Kelas Sambil Mencatat = $EC7a";
        $hasil8     = "Menjahit Baju = $EC8a";
        $hasil9     = "Membaca (Berdiri) = $EC9a";
        $hasil10    = "Berbicara Di Telepone (Duduk) = $EC10a";
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
                        <h2>Hasil Perhitungan Kalori Kegiatan <?php echo"$ket";?></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_1.svg" alt=""></span>
                            <h4 style="font-size: 30px; font-family:Noto Sans; font-style=normal; font-weight=bold">Data Input</h4>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Berat Badan     : <?php echo"$bb kg";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Durasi Kegiatan : <?php echo"$durasi menit";?></p>
                            <p style="font-size: 22px; font-family:Noto Sans; font-style=normal; font-weight=bold">Jenis Kegiatan  : <?php echo"$category";?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 30px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hasil (Kcal)</h4>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php echo"$hasil1";?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="inactive"||$category=="berkebun"||$category=="berlari"||$category=="agama"||$category=="winter"||$category=="sepeda"||$category=="water"){
                                echo"$hasil2";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="inactive"||$category=="berkebun"||$category=="berlari"||$category=="water"){
                                echo"$hasil3";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="inactive"||$category=="berkebun"||$category=="berlari"||$category=="water"){
                                echo"$hasil4";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil5";
                            }?></p>
                        </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 30px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hasil (Kcal)</h4>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="agama"||$category=="winter"||$category=="sepeda"){
                                echo"$hasil3";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="inactive"||$category=="berkebun"||$category=="berlari"||$category=="water"){
                                echo"$hasil5";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil6";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil7";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil8";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil9";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil10";
                            }?></p>
                        </div>
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
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 30px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hasil (Kcal)</h4>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="agama"||$category=="winter"||$category=="sepeda"){
                                echo"$hasil4";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="inactive"||$category=="berkebun"||$category=="berlari"||$category=="water"){
                                echo"$hasil6";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="water"){
                                echo"$hasil7";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="water"){
                                echo"$hasil8";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil11";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil12";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"||$category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil13";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil14";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil15";
                            }?></p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="../../assets/img/icon/feature_2.svg" alt=""></span>
                            <h4 style="font-size: 30px; font-family:Noto Sans; font-style=normal; font-weight=bold">Hasil (Kcal)</h4>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="agama"||$category=="winter"||$category=="sepeda"){
                                echo"$hasil5";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="water"){
                                echo"$hasil9";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="menari"||$category=="berkendara"||$category=="volunteer"||$category=="berjalan"||$category=="music"||
                                $category=="self"||$category=="latihan"||$category=="fishhunt"||$category=="lainnya"||$category=="water"){
                                echo"$hasil10";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil14";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="inactive"||$category=="berkebun"||$category=="berlari"){
                                echo"$hasil15";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil16";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil17";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil18";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil19";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil20";
                            }?></p>
                            <p style="font-size: 25px; font-family:Noto Sans; font-style=normal; font-weight=bold"><?php if($category=="olahraga"||$category=="home"||$category=="bekerja"){
                                echo"$hasil21";
                            }?></p>
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