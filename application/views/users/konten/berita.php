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
								  <div class="row">
								  	
								  	<?php foreach ($berita as $key) {?>
								  	<div class="col-md-6">	
								  		<div class="card" style="width: 100%; height: 450px;">
										  <img class="card-img-top" src="<?=$key['thm']?>" alt="Card image cap">
										  <div class="card-body">
										    <a href="<?=base_url('Home/s_berita/').$key['id'];?>"><h5 class="card-title"><?=$key['judul'];?></h5></a>
										  </div>
										</div>
								  	</div>
								  <?php } ?>



								  	
								  </div>
								  


								 </div>
					  								
							</div>

						<br>
						</div>
					</div>
       				
        		</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->


