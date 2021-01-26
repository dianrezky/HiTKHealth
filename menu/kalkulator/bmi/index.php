
<?php  require_once("../../../header/menu_header.php")?>
<div class="hero-wrap js-fullheight" style="background-image: url('../../../assets/img/menu/bg_1ss.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
          	<h2 class="subheading">Ketahui Berat Badan Ideal Mu Dengan Menghitung BMI Mu Yuk!</h2>
          	<h1 class="mb-4">Ayo Hitung BMI Mu!</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
    	<div class="container">
	    	<div class="row justify-content-end">
	    		<div class="col-lg-4">
						<form method="POST" action="hasil/" class="appointment-form">
							<h3 class="mb-3">Calculator Perhitungan BMI</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="bb" class="form-control" placeholder="Berat Badan" required>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<input type="text" name="tb" class="form-control" placeholder="Tinggi Badan" required>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="kelamin" class="form-control">
	                      	<option value="">Jenis kelamin</option>
	                        <option value="Laki-laki">Laki-laki</option>
	                        <option value="Perempuan">Perempuan</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" name="submit" value="Hitung BMI" class="btn btn-primary py-3 px-4" required>
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
 
