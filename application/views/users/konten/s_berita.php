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

         <section class="portfolio_details_area p_120">
        	<div class="container">
        		<h2><?=$berita['judul'];?></h2>
        		<p><?=$berita['tanggal'];?></p>
        		<hr>
        		<div class="row">
        			<div class="col-md-4">
        				<img src="<?=$berita['thm'];?>" style="width: 100%">
        			</div>
        			<div class="col-md-8">
        				<?=$berita['berita'];?>
        			</div>
        		</div>
			</div>
		</section>