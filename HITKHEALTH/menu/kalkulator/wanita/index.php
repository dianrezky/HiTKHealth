<?php
require_once("../../../header/menu_header.php")
?>

<div class="hero-wrap js-fullheight" style="background-image: url(../../../assets/img/menu/bg.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate">
        <h2 class="subheading">Ketahui Masa Ovulasi dan Haid Berikut Mu</h2>
        <h1 class="mb-4">Ayo Hitung !</h1>
        <p>Lama Siklus Haid (Hari Terakhir Haid - (Hari Pertama Haid Berikutnya-1))</p>
        <p>Lama Siklus Haid Normal Biasanya 21 - 35 Hari </p>
        <p>Durasi Siklus Terpanjang dan Terpendek Selama 6 Bulan Dalam Bentuk Hari</p>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-lg-4">
        <form method="POST" action="hasil_wanita/" class="appointment-form">
          <h3 class="mb-3">Kalkulator Wanita</h3>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="ion-md-calendar"></span></div>
                  <input type="text" class="form-control appointment_date-check-in" name="tanggal" placeholder="Hari Pertama Haid Terakhir">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" name="durasi" placeholder="Lama Haid">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" name="siklus" placeholder="Lama Siklus Haid">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" name="pendek" placeholder="Durasi Siklus Terpendek Selama 6 Bulan (Hari)">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" name="panjang" placeholder="Durasi Siklus Terpanjang Selama 6 Bulan (Hari)">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="submit" name="submit" value="Hitung Siklus dan Masa Subur" class="btn btn-primary py-3 px-4">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-services">
  <div class="row">
    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
      <div class="d-block services-wrap text-center">
        <div class="img" style="background-image: url(../../../assets/img/menu/artikel.png);"></div>
        <div class="media-body py-4 px-3">
          <h3 class="heading">Artikel</h3>
          <p>Yuk ketahui Berita, Forum dan Podcast Kesehatan Terbaru Disini !</p>
          <p><a href="../../menu_artikel/index.php" class="btn btn-primary">FIND ME</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
      <div class="d-block services-wrap text-center">
        <div class="img" style="background-image: url(../../../assets/img/menu/referensi.jpg);"></div>
        <div class="media-body py-4 px-3">
          <h3 class="heading">Referensi</h3>
          <p>Yuk Ketahui Beberapa Referensi Obat, Rumah Sakit, dll Mengenai Kesehatan Disini !</p>
          <p><a href="../../menu_referensi/index.php" class="btn btn-primary">FIND ME</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
      <div class="d-block services-wrap text-center">
        <div class="img" style="background-image: url(../../../assets/img/menu/kalkulator.png);"></div>
        <div class="media-body py-4 px-3">
          <h3 class="heading">Kalkulator Kesehatan</h3>
          <p>Yuk ketahui Beberapa Fitur Kalkulator Mengenai Kesehatan Disini !</p>
          <p><a href="../../menu_kalkulator/index.php" class="btn btn-primary">FIND ME</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
      <div class="d-block services-wrap text-center">
        <div class="img" style="background-image: url(../../../assets/img/menu/doctors.jpg);"></div>
        <div class="media-body py-4 px-3">
          <h3 class="heading">Konsultasi</h3>
          <p>Yuk Analisa Gejala Penyakit Mu dan Konsultasikan Dengan Dokter Disini !</p>
          <p><a href="../../../user/login/" class="btn btn-primary">FIND ME</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
      <div class="d-block services-wrap text-center">
        <div class="img" style="background-image: url(../../../assets/img/menu/login.png);"></div>
        <div class="media-body py-4 px-3">
          <h3 class="heading">SIGN IN</h3>
          <p>Yuk Lakukan LOGIN Terlebih Dahulu Untuk Mengakses Fitur Konsultasi dan Forum !</p>
          <p><a href="../../../user/login/" class="btn btn-primary">FIND ME</a></p>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex services align-self-stretch px-4 ftco-animate">
      <div class="d-block services-wrap text-center">
        <div class="img" style="background-image: url(../../../assets/img/menu/userguide.jpg);"></div>
        <div class="media-body py-4 px-3">
          <h3 class="heading">User Guide</h3>
          <p>Yuk Lihat Panduan Untuk Menggunakan Website Ini Dengan Mendownload User Guide Ini</p>
          <p><a href="/USER GUIDE WEBSITE HITKHEALTH.pdf" class="btn btn-primary">FIND ME</a></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>What People Say About Health</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(../../../assets/img/menu/person_1s.png)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>Untuk menikmati cahaya kesehatan yang baik, Anda harus berolahraga.</p>
                <p class="name">Gene Tunney</p>
                <span class="position">Irish American professional boxer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(../../../assets/img/menu/person_2s.png)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>Kesehatan yang baik bukanlah sesuatu yang dapat kita beli. Namun, sesuatu yang dapat menjadi tabungan yang sangat berharga.</p>
                <p class="name">Anne Wilson Schaef</p>
                <span class="position">internationally known author, speaker, consultant, and seminar leader</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(../../../assets/img/menu/ss.png)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>Kesehatan dan keceriaan secara alami melahirkan satu sama lain.</p>
                <p class="name">Joseph Addison</p>
                <span class="position">English essayist, poet, playwright and politician</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(../../../assets/img/menu/person_4s.png)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>Jika engkau mencintai dirimu, engkau tak akan merusak kesehatan jiwa dan ragamu dengan kebiasaan buruk</p>
                <p class="name">Mario Teguh</p>
                <span class="position">Motivator in Indonesia</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap d-flex">
              <div class="user-img" style="background-image: url(../../../assets/img/menu/person_5s.png)">
              </div>
              <div class="text pl-4">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="fa fa-quote-left"></i>
                </span>
                <p>Makan dengan sehat, tidur dengan baik, bernapas dengan dalam, bergerak dengan harmoni</p>
                <p class="name">Jean Pierre Barral</p>
                <span class="position">a Physical Therapist.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-6 wrap-about">
        <div class="img img-2 mb-4" style="background-image: url(../../../assets/img/menu/abouts.jpg);">
        </div>
      </div>
      <div class="col-md-6 wrap-about ftco-animate">
        <div class="heading-section">
          <div class="pl-md-5">
            <h2 class="mb-2">Tips and Tricks</h2>
          </div>
        </div>
        <div class="pl-md-5">
          <p>Kita akan memberikan beberapa tips untuk anda mengenai kesehatan</p>
          <div class="row">
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diet"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">4 Sehat 5 Sempurna</h3>
                <p>Mulailah konsumsi makanan yang mengandung unsur 4 sehat 5 sempurna</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-workout"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Istirahat Yang Cukup</h3>
                <p>Orang dewasa membutuhkan 7-8 jam untuk tidur sehingga menciptakan tubuh yang sehat</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diet-1"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Makan Yang Teratur</h3>
                <p>Kita Dianjurkan Makan 3x Sehari Agar Tubuh Tidak Kekurangan Nutrisi</p>
              </div>
            </div>
            <div class="services-2 col-lg-6 d-flex w-100">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-first"></span>
              </div>
              <div class="media-body pl-3">
                <h3 class="heading">Olahraga Teratur</h3>
                <p>Untuk Membuat Tubuh Mu Tetap Segar dan Fit, Jangan Lupa Berolahraga</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

<?php
require_once("../../../footer/menu_footer.php")
?>