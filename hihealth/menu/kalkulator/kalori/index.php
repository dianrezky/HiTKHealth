<?php require_once("../../../header/menu_header.php")?>
    <div class="hero-wrap js-fullheight" style="background-image: url('../../../assets/img/menu/bg_1s.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Ketahui kalori yang dibutuhkan oleh tubuhmu sekrang juga</h2>
          	<h1 class="mb-4">Ayo Hitung Kalori Mu!</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form method="POST" action="hasil_kalori/index.php" class="appointment-form">
							<h3 class="mb-3">Calculator Perhitungan Kalori</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="bb" class="form-control" placeholder="Berat Badan">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="umur" class="form-control" placeholder="Umur">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="tb" class="form-control" placeholder="Tinggi Badan">
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="kelamin" class="form-control">
	                        <option value="">Jenis Kelamin</option>
	                        <option value="Laki-laki">Laki-laki</option>
	                        <option value="Perempuan">Perempuan</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="kegiatan" class="form-control">
	                        <option value="">Kegiatan</option>
	                      	<option value="TidakAktif">Tidak Aktif</option>
	                        <option value="CukupAktif">Cukup Aktif (Olahraga 1-3 kali/minggu)</option>
							<option value="Aktif">Aktif (Olahraga 3-5 kali/minggu)n</option>
							<option value="SangatAktif">Sangat Aktif (Olahraga 6-7 kali/minggu)</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="pemakan" class="form-control">
						  <option value="">Jenis Makanan</option>
						  <option value="LactoVegetarian">Lacto Vegetarian (Tidak makan daging,ikan,unggas dan telur namun masih mengonsumsi produk yang dihasilkan dari susu)</option>
                        <option value="OvoVegetarian">Ovo Vegetarian (Tidak mengonsumsi daging,ikan,unggas dan produk susu, namun masih memperbolehkan konsumsi telur)</option>
                        <option value="NonVegetarian">Non Vegetarian</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			            	<input type="submit" name="hitung" value="Hitung Kalori" class="btn btn-primary py-3 px-4">
							
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
  