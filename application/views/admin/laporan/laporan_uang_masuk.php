

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Data Pendapatan</h2>
        </div>
    </div>
</div>
      <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        

                        <div class="card p-3">
                         
                          <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							    <thead style="background-color: #ccc">
							        <tr>
							            <th>No</th>
							            <th>Tanggal</th>
							            <th>Sumber Dana</th>
							            <th>Jumlah</th>
							            
							           
							            
							        </tr>
							    </thead>

							    <?php $i=1; foreach ($all as $key): ?>
							        <tr>
							            <th><?=$i++;?></th>
							            <th><?=$key->tanggal?></th>
							            <th><?=$key->sumber?></th>
							            <th><?="Rp. ".$this->fungsi->rupiah($key->jumlah);?></th>
							            
							        </tr>
							    <?php endforeach ?>

							    <tr>
							        <th colspan="3">Total</th>
							        <th></th>
							    </tr>

							  
							    </tbody>
							</table>
                        </div>
                        

                        
                    </div>
                </div>
            </div>

            

