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
  								<div class="card-body" style="overflow-y: auto;">
  									<center><h2>PEMBANGUNAN</h2></center>
							<table id="example" class="table table-striped table-bordered" style="width:100%">
						        <thead>
						            <tr>
						                <th>No</th>
						                <th>Tanggal</th>
						                <th>pembangunan</th>
						                <th>Jenis Pembangunan</th>
						                <th>Lokasi</th>
						                <th>Biaya</th>
						                <th>Gambar</th>
						                <th>Maps</th>
						                
						            </tr>
						        </thead>
						        <tbody>

						        <?php $i=1; foreach ($pen as $key ): ?>
						            <tr>
						                <td><?=$i++;?></td>
						                <td><?=$key->tanggal;?></td>
						                <td><?=$key->pembangunan;?></td>
						                <td><?=$key->jenis;?></td>
						                <td><?=$key->lokasi;?></td>
						                <td><?="Rp. ".$this->fungsi->rupiah($key->biaya);?>-,</td>
						                <td><a href="" class="btn btn-primary btn-sm gm" data-toggle="modal" data-target=".bd-example-modal-lg" data-gm="<?=$key->img;?>"><li class="fa fa-picture-o"></li> Gambar</a></td>
						                <td><a href="<?=base_url('Home/lok/').$key->id;?>" class="btn btn-info btn-sm"><li class="fa fa-map-marker"></li> Maps</a></td>
						                
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
						          	 <li class="list-group-item">Total Seluruh Pendapatan : 
						          	 	<br>
						          	 	<b><?="Rp. ".$this->fungsi->rupiah($p);?>-,</b>
						          	 </li>
									  <li class="list-group-item">Total Seluruh Biaya Pengeluaran : <br><b><?="Rp. ".$this->fungsi->rupiah($total);?>-,</b></li>
									   <li class="list-group-item">Total Seluruh Biaya Pembangunan : <br><b><?="Rp. ".$this->fungsi->rupiah($pembangunans);?>-,</b></li>
									  <li class="list-group-item">Saldo Saat ini : 
									  	<br>
									  	<b><?="Rp. ".$this->fungsi->rupiah($totals);?>-,</b></li>
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
									  	Total Pendapatan : <?="Rp. ".$this->fungsi->rupiah($tot_p);?>
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



<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <img src="" class="im" style="width: 100%;">
    </div>
  </div>
</div>

<script src="<?=base_url('assets/konten/');?>js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$('.gm').click(function(){
		var im = $(this).data('gm');
		$('.im').attr('src',"<?=base_url('assets/img/pembangunan/');?>"+im);
	});
</script>