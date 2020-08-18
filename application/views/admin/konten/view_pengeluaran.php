

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Data Pengeluaran</h2>
        </div>
    </div>
</div>
      <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        

                        <div class="card p-3">
                        	<div class="row">
                        		<div class="col-md-4">
                        			<a href="<?=base_url('Admin/pengeluaran/');?>" class="btn btn-primary" style="width: 100%;">+ Data</a>
                        		</div>
                        		<div class="col-md-4">
                        			
                        		</div>
                        		<div class="col-md-4">
                        			<form action="" method="get">
                        			<div class="input-group mb-3">
		                                	<input type="text" name="cari" class="form-control form-control-sm">
		                                    <div class="input-group-append">
		                                	<input type="submit" name="" class="btn btn-primary btn-sm" value="Cari">
		                                </div>
		                            </div>
		                            </form>
                        		</div>
                        		
                        	</div>



                        	<hr>
                         
                          <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							    <thead style="background-color: #ccc">
							        <tr>
							            <th>No</th>
							            <th>Pengeluaran</th>
							            <th>Jumlah</th>
							            <th>Tanggal</th>
							            <th>Action</th>
							            
							        </tr>
							    </thead>

							    <?php $i=1; foreach ($all as $key): ?>
							        <tr>
							            <th><?=$i++;?></th>
							            <th><?=$key->di_pergunakan?></th>
							            <th><?="Rp. ".$this->fungsi->rupiah($key->jumlah);?></th>
							            <th><?=$key->tanggal?></th>
							            <th>
							            	<a href="<?=base_url('admin/pengeluaran/').$key->id;?>" class="btn btn-warning btn-xs"><li class="fas fa-edit"></li>Edit</a> 
							            	<a  onclick="return confirm(' you want to delete?');" href="<?=base_url('func_admin/del_pengeluaran/').$key->id;?>" class="btn btn-danger btn-xs"><li class=" fas fa-trash"></li> Hapus</a>
							            </th>
							        </tr>
							    <?php endforeach ?>

							  
							    </tbody>
							</table>
                        </div>
                        

                        
                    </div>
                </div>
            </div>


