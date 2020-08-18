 <script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Profil</h2>
						
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
         <!--================Portfolio Details Area =================-->
        <section class="portfolio_details_area p_120">
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-12">
							
							<div class="card">
  								<div class="card-body ">
								  <h2><center>PROFIL</center></h2>
								  <hr>
								  <div class="row">
								  	<div class="col-md-5">
								  		<img src="<?=base_url('assets/img/profil/').$prof['cover'];?>" style="width: 100%">
								  	</div>
								  	<div class="col-md-7">
			             		  		<?=$prof['profil'];?>
								  	</div>
								  	
								  </div>
								  


								 </div>
					  								
							</div>

						<br>
							<div class="card">
  								<div class="card-body">
  								  
  								  <h2><center>Visi</center></h2>
  								  <hr>
			             		  <?=$prof['visi'];?>

								 </div>
					  		</div>
					  		<br>
					  		<div class="card">
  								<div class="card-body">
  								  
  								  <h2><center>Misi</center></h2>
  								  <hr>
			             		  <?=$prof['misi'];?>

								 </div>
					  		</div>
					  		<br>
					  		<div class="card">
  								<div class="card-body">
  								  
  								 <div class="form-group">
								    <center><h3>Struktur Organisasi</h3></center>
								    <hr>
								
								  		<img src="<?=base_url('assets/img/profil/').$prof['struktur'];?>" style="width: 100%">
								
								  </div>

								 </div>
					  		</div>		
					  	</form>			
						





							
						</div>
					</div>
       				
        		</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->


