<?php 
if (!empty($ed)) {
    $id        = $ed['id'];
    $sumber    = $ed['sumber'];
    $jumlah    = $ed['jumlah'];
    $tanggal   = $ed['tanggal'];  
}else{
    $id        = '';
    $sumber    = '';
    $jumlah    = '';
    $tanggal   = '';   
}

?>




<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">PENDAPATAN</h2>
        </div>
    </div>
</div>
      <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        

                        <div class="card">
                          <h5 class="card-header"></h5>
                          <div class="card-body">
                            <h5 class="card-title">


                            <div class="card">
                                <p> </p>
                                <div class="card-body">
                                    <form action="<?=base_url('func_admin/pendapatan');?>" id="basicform" data-parsley-validate="" method="post">
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <div class="form-group">
                                            <label for="inputUserName">Sumber Dana</label>
                                            <input id="inputUserName" type="text" name="sumber" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control" value="<?=$sumber?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Jumlah</label>
                                            <input id="inputUserName" type="text" name="jumlah" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?=$jumlah?>">
                                        </div>
                                        <div class="form-group">
                                             <label for="inputUserName">Tanggal</label>
                                            <input type="date" name="tgl" class="form-control" value="<?=$tanggal?>">
                                        </div>
                                        <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                              
                                        </div>
                                    </form>
                                </div>
        
                        <!-- ============================================================== -->
                        <!-- end basic form -->


                          </div>
                        </div>
                        

                        
                    </div>
                </div>
            </div>