     <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.html"><img src="<?=base_url('assets/img/icon/logo.png');?>" alt="" style="width: 60px;"></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="<?=base_url();?>">Home</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Keuangan</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="<?=base_url('Home/u_masuk');?>">Uang Masuk</a></li>
										<li class="nav-item"><a class="nav-link" href="<?=base_url('Home/u_keluar');?>">Uang Keluar</a></li>
										<li class="nav-item"><a class="nav-link" href="<?=base_url('Home/u_pembangunan');?>">Pembangunan</a></li>
										<!-- <li class="nav-item"><a class="nav-link" href="elements.html">Laporan</a></li> -->
									</ul>
								</li> 
								<li class="nav-item"><a class="nav-link" href="<?=base_url('home/berita');?>">Berita</a></li>
								<li class="nav-item"><a class="nav-link" href="<?=base_url('Home/profil');?>">Profil</a></li> 
								
								<!-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> -->
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->