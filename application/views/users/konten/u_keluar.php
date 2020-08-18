 <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Project Details</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="projects.html">Projects</a>
							<a href="project-details.html">Project Details</a>
						</div>
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
						<div class="col-md-8">
							<div class="card">
  								<div class="card-body">
  									<center><h2>UANG KELUAR</h2></center>
							<table id="example" class="table table-striped table-bordered" style="width:100%">
						        <thead>
						            <tr>
						                <th>No</th>
						                <th>Tanggal</th>
						                <th>Keterangan</th>
						                <th>Jumlah</th>
						                
						            </tr>
						        </thead>
						        <tbody>

						        <?php $i=1; foreach ($pen as $key ): ?>
						            <tr>
						                <td><?=$i++;?></td>
						                <td><?=$key->tanggal;?></td>
						                <td><?=$key->di_pergunakan;?></td>
						                <td><?="Rp. ".$this->fungsi->rupiah($key->jumlah);?>-,</td>
						                
						            </tr>
						        <?php endforeach ?>
						        
						          
						    </table>
						</div>
					</div>
						</div>

						<div class="col-md-4">
							<div class="card">
  								<div class="card-body">
  									<center><h2>SUM</h2></center>
									
						          	<ul class="list-group">
						          	 <li class="list-group-item">Total Seluruh Pendapatan : <br><b><?="Rp. ".$this->fungsi->rupiah($p);?>-,</b></li>
									  <li class="list-group-item">Total Seluruh Pengeluaran : <br><b><?="Rp. ".$this->fungsi->rupiah($total);?>-,</b></li>
									  <li class="list-group-item">Saldo Saat ini : <br><b><?="Rp. ".$this->fungsi->rupiah($totals);?>-,</b></li>
									</ul>
						   			 
								</div>
							</div>
							<br>
							<div class="card">
  								<div class="card-body">
  									<center><h4>Cari Pendapatan</h4></center>
  									<hr>
									
						          	<ul class="list-group">
									  <form class="form-inline" action="" method="get">
									    <input class="form-control mr-sm-2" type="search" placeholder="Search" name="cari" aria-label="Search">
									    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
									  </form>

									 <?php if (!empty($val_c)) {?>
									 <div class="btn btn-warning text-left">
									  	Total Pengeluaran : <?="Rp. ".$this->fungsi->rupiah($tot_p);?>
									  </div>
									<?php } ?>
									 



									</ul>
						   			 
								</div>
							</div>
						</div>


					</div>
       				
        		</div>
        	</div>
        </section>
        <!--================End Portfolio Details Area =================-->