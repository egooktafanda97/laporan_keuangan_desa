<?php 
if (!empty($pem)) {
    $id              = $pem['id'];
    $pembangunan     = $pem['pembangunan'];
    $jenis           = $pem['jenis'];
    $lokasi          = $pem['lokasi'];
    $koordinat       = $pem['koordinat'];
    $biaya           = $pem['biaya'];
    $tanggal         = $pem['tanggal'];  
    $gambar          = $pem['img'];
}else{
    $id              = '';
    $pembangunan     = '';
    $jenis           = ''; 
    $lokasi          = ''; 
    $koordinat       = ''; 
    $biaya           = '';  
    $tanggal         = '';
    $gambar          = '';  
}

?>

<?php echo $map['js']; ?>


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">PEMBANGUNAN</h2>
        </div>
    </div>
</div>
      <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6 col-6">
                        

                        <div class="card">
                          <h5 class="card-header"></h5>
                          <div class="card-body">
                            <h5 class="card-title">


                            <div class="card">
                                <p> </p>
                                <div class="card-body">
                                    <form action="<?=base_url('func_admin/pembangunan');?>" id="basicform" data-parsley-validate="" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?=$id?>">
                                        <input type="hidden" name="img" value="<?=$gambar?>">
                                        <div class="form-group">
                                            <label for="inputUserName">Nama Pembangunan</label>
                                            <input id="inputUserName" type="text" name="pembangunan" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control" value="<?=$pembangunan?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputUserName">Jenis Pembangunan</label>
                                            <input id="inputUserName" type="text" name="jenis" data-parsley-trigger="change" required="" autocomplete="off" class="form-control" value="<?=$jenis?>">
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Lokasi</label>
                                            <textarea class="form-control" name="lokasi"  rows="3" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control"><?=$lokasi;?></textarea>
                                          </div>
                                          
                                            <input id="xy" type="hidden" name="Koordinat" data-parsley-trigger="change" readonly required="" autocomplete="off" class="form-control" value="<?=$koordinat?>">
                                       
                                        <div class="form-group">
                                            <label for="inputUserName">Biaya</label>
                                            <input id="inputUserName" type="text" name="biaya" data-parsley-trigger="change" required=""  autocomplete="off" class="form-control" value="<?=$biaya?>">
                                        </div>
                                         <div class="form-group">
                                            <label for="inputUserName">Gambar</label>
                                            <input id="inputUserName" type="file" name="img" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                             <label for="inputUserName">Tanggal</label>
                                            <input type="date" name="tgl" class="form-control" value="<?=$tanggal?>">
                                        </div>
                                        <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                        </form>  
                                    </div>
                                    
                                </div>
        
                        <!-- ============================================================== -->
                        <!-- end basic form -->


                          </div>
                        </div>
                        

                        
                    </div>

                        <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6 col-6">
                        

                        <div class="card">
                          <h5 class="card-header">Maps Lokasi Pembangunan</h5>
                          <div class="card-body">
                            <h5 class="card-title">


                            <div class="card">
                                <p> </p>
                                <div class="card-body">
                                  <?php echo $map['html']; ?>
                                </div>
                                    
                                </div>
        
                        <!-- ============================================================== -->
                        <!-- end basic form -->


                          </div>
                        </div>
                        

                        
                    </div>

                </div>
            </div>