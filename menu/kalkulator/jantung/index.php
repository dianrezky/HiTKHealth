<?php require_once("../../../header/menu_header.php")?>
    <div class="hero-wrap js-fullheight" style="background-image: url('../../../assets/img/menu/detak.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Ketahui Detak Jantung Mu!</h2>
          	<h1 class="mb-4">Ayo Hitung Sekarang Juga !</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form method="POST" action="hasil_jantung/" class="appointment-form">
              <h3 class="mb-3">Kalkulator Detak Jantung</h3>
              <div class="row">
                  <div class="col-md-12">
									  <div class="form-group">
			    					  <input type="text" name="usia" class="form-control" placeholder="Usia">
                    </div>
                  </div>
                </div>
							<div class="row">
                <div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>Kategori Usia
	                      <select name="kategori" class="form-control">
	                      	<option value="">Jawab</option>
	                        <option value="satu">1 - 2 Tahun</option>
                          <option value="dua">3 - 4 Tahun</option>
	                        <option value="tiga">5 - 6 Tahun</option>
	                        <option value="empat">7 - 9 Tahun</option>
	                        <option value="lima">10 Tahun Keatas</option>
	                      </select>
	                    </div>
			              </div>
                  </div>
                <div class="row">
								  <div class="col-md-12">
									  <div class="form-group">
			    					  <div class="form-field">
	          					  <div class="select-wrap">
	                        <div class="icon"><span class="fa fa-chevron-down"></span></div>Jenis kelamin Anda
	                        <select name="kelamin" class="form-control">
	                      	  <option value="">Jawab</option>
	                          <option value="Laki-laki">Laki-laki</option>
	                          <option value="Perempuan">Perempuan</option>
	                        </select>
	                      </div>
			                </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
									  <div class="form-group">
			    					  <div class="form-field">
	          					  <div class="select-wrap">
	                        <div class="icon"><span class="fa fa-chevron-down"></span></div>Apakah Anda Atlet Pro ?
	                        <select name="atlet" class="form-control">
	                      	  <option value="">Jawab</option>
	                          <option value="ya">Ya</option>
	                          <option value="tidak">Tidak</option>
	                        </select>
	                      </div>
			                </div>
                    </div>
                  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" name="submit" value="Hitung Detak Jantung" class="btn btn-primary py-3 px-4">
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
	
  <!-- loader -->
  
<?php 
  require_once("../../../footer/menu_footer.php")
?>