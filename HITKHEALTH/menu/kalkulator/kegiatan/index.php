<?php  require_once("../../../header/menu_header.php")?>
<div class="hero-wrap js-fullheight" style="background-image: url('../../../assets/img/menu/bg.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Ketahui Kalori Yang Dibakar Oleh Tubuhmu Untuk Melakukan Suatu Kegiatan</h2>
          	<h1 class="mb-4">Ayo Hitung Kalori Suatu Kegiatan !</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form method="POST" action="hasil_bakarkalori/" class="appointment-form">
							<h3 class="mb-3">Kalkulator Kalori Kegiatan</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="bb" class="form-control" placeholder="Berat Badan">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="tb" class="form-control" placeholder="Durasi Kegiatan (Menit)">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="category" class="form-control">
                          <option value="">Jenis Aktivitas</option>
	                        <option value="olahraga">Sports (Basket, Sepak Bola, dll)</option>
	                        <option value="home">Home Activities (Menyapu, Mengepel, dll)</option>
                          <option value="inactive">Inactivity (Duduk, dll)</option>
	                        <option value="berkebun">Gardening</option>
                          <option value="menari">Dancing</option>
                          <option value="berkendara">Berkendara (Mobil, Motor, Pesawat, dll)</option>
                          <option value="volunteer">Kegiatan Volunteer</option>
                          <option value="agama">Kegiatan Beragama</option>
                          <option value="berjalan">Berjalan</option>
                          <option value="berlari">Berlari</option>
                          <option value="music">Bermain Music (Drum, Gitar, dll)</option>
                          <option value="bekerja">Bekerja (chef, karyawan, dll)</option>
                          <option value="self">Self Care (Makan, Mandi, dll)</option>
                          <option value="water">Water Activities (Berenang, Snorkeling, dll)</option>
                          <option value="winter">Winter Activities (Skating, Ski, dll)</option>
                          <option value="sepeda">Bersepeda</option>
                          <option value="latihan">Conditioning Exercise (Sit Up, Pull Up, dll)</option>
                          <option value="fishhunt">Fishing and Hunting (Memancing Ikan, Berburu, dll)</option>
                          <option value="lainnya">Lainnya (Bermain Catur, Menulis, dll)</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" name="submit" value="Hitung Kalori Kegiatan" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
							</div>
	    			</form>
	    		</div>
	    	</div>
	    </div>
    </section>
   
   
    <?php

      include '../footer.php';

    ?>
	
  