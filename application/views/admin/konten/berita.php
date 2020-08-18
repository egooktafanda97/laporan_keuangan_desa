<script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>

<?php 
if (!empty($berita)) {
    $judul = $berita['judul'];
    $konten = $berita['berita'];
    $thm = $berita['thm'];
    $id =  $berita['id'];
    $vw =  $berita['view'];
}else{
    $judul = '';
    $konten = '';
    $thm =  '';
    $id =  '';
    $vw = '';
}

?>

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
                        

                        <div class="card">
                          <h5 class="card-header"></h5>

                          <div class="card-body">
                            <h5 class="card-title">
                            <div class="card">
                                <div class="row" style="margin-top: 5px;">
                                <div class="col-md-8"></div>
                                <div class="col-md-2 text-right"><button class="btn btn-warning ups"data-toggle="modal" data-target="#exampleModal">Upload Image</button></div>
                                <form action="<?=base_url('func_admin/ins_berita/');?>" method="post">
                                    <input type="hidden" name="id" value="<?=$id;?>">
                                    <input type="hidden" name="vw" value="<?=$vw;?>">
                              <div class="col-md-2 text-right"><button class="btn btn-primary">Entri</button></div>
                              </div>
                                <div class="card-body">
                                   
                                    <div class="form-group">
                                    <label for="exampleFormControlInput1">Judul</label>
                                    <input type="text" class="form-control" name="judul" id="exampleFormControlInput1" placeholder="" value="<?=$judul;?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleFormControlInput1">Thumbnail</label>
                                    <input type="text" class="form-control" name="thumbnail" id="exampleFormControlInput1" placeholder="url gambar" value="<?=$thm;?>">
                                  </div>
                                  <br>
                                    <label for="exampleFormControlInput1">Konten</label>
                                     <textarea class="ckeditor" id="ckedtor" name="editor"><?=$konten;?></textarea>
                                    
                                    </form>

                                </div>
        
                        <!-- ============================================================== -->
                        <!-- end basic form -->


                          </div>
                        </div>
                        

                        
                    </div>
                </div>
            </div>


            <script type="text/javascript">
    CKEDITOR.replace( 'editor', {
    height: 500  
});
</script>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body hid">
        <div class="alert alert-warning" role="alert">
         <div class="col">
          <input type="text" class="form-control urls" placeholder="First name">
        </div>
        </div>
      </div>
      <form id="up_img">
      <div class="modal-body">
       <input type="file" name="imag" class="imag" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary btn-up" name="" value="Simpan">
      </div>
    </form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $('.hid').hide();
    $('.ups').click(function(){
    $('.hid').hide();
    $('#up_img').show();
    });
    $('.btn-up').click(function(){
        $('#up_img').hide();
        $('.hid').show();
          var file_data = $('.imag').prop('files')[0];
             if(file_data != undefined) {
                var form_data = new FormData();                  
                form_data.append('file', file_data);
                $.ajax({
                    type: 'POST',
                    url: "<?=base_url('func_admin/img_upload');?>",
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success:function(response) {
                       $('.urls').val("<?=base_url('assets/img/uploaded/');?>"+response);
                    }
                });
            }
        return false;
    })
</script>
