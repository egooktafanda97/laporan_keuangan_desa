

<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">BERITA</h2>
        </div>
    </div>
</div>
      <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card p-3">
                        	<div class="row">
                        		<div class="col-md-8">
                        			<div class="col-12"><a href="<?=base_url('Admin/pendapatan/');?>" class="btn btn-primary" style="width: 20%;">+ Berita</a></div>
                        		</div>
                        		
                        		<div class="col-md-4">
                        			<div class="input-group mb-3">
		                                	<input type="text" class="form-control">
		                                    <div class="input-group-append">
		                                	<button type="button" class="btn btn-primary btn-sm">Go!</button>
		                                </div>
		                            </div>
                        		</div>
                        		
                        	</div>



                        	<hr>
                         
                          <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
							    <thead style="background-color: #ccc">
							        <tr>
							            <th>No</th>
							            <th>Judul</th>
							            <th>tanggal</th>
							            <th>View</th>
							            <th>Action</th>
							            
							        </tr>
							    </thead>

							    <?php $i=1; foreach ($all as $key): ?>
							        <tr>
							            <th><?=$i++;?></th>
							            <th><?=$key->judul?></th>
							            <th><?=$key->tanggal?></th>
							            <th><?=$key->view?></th>
							            <th>
							            	<a href="<?=base_url('admin/pendapatan/').$key->id;?>" class="btn btn-info btn-xs">Preview</a> 
							            	<a href="<?=base_url('admin/berita/').$key->id;?>" class="btn btn-warning btn-xs"><li class="fas fa-edit"></li>Edit</a> 
							            	<a  onclick="return confirm(' you want to delete?');" href="<?=base_url('func_admin/del_berita/').$key->id;?>" class="btn btn-danger btn-xs"><li class=" fas fa-trash"></li> Hapus</a>
							            </th>
							        </tr>
							    <?php endforeach ?>

							  
							    </tbody>
							</table>
                        </div>
                        

                        
                    </div>
                </div>
            </div>


