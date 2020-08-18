<script src="//cdn.ckeditor.com/4.12.1/full/ckeditor.js"></script>
<?php echo $map['js']; ?>
<div class="row">
						<div class="col-md-12">
							
							<div class="card">
  								<div class="card-body ">
  								  <div class="row">
  								  	<div class="col-md-10 text-right">
  								  		<div class="form-group">
								  			<button class="btn btn-info ups"data-toggle="modal" data-target="#exampleModal">Upload Image</button>
								  		</div>
  								  	</div>
  								 <form action="<?=base_url('func_admin/ins_profil');?>" method="post" enctype="multipart/form-data">
  								  	<div class="col-md-2 text-right">
  								  		
  								  		<div class="form-group">
								  			<button class="btn btn-primary ups">Entri</button>
								  		</div>

  								  	</div>	
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlInput1">Cover</label>
								    <input type="file" class="form-control" name="cov">
								  </div>

								  <h2><center>PROFIL</center></h2>
			             		  <textarea class="ckeditor" id="ckedtor" name="editor1"></textarea>
								 </div>
					  								
							</div>

						<br>
							<div class="card">
  								<div class="card-body">
  								  
  								  <h2><center>Visi</center></h2>
			             		  <textarea class="ckeditor" id="ckedtor" name="editor2"></textarea>

								 </div>
					  		</div>
					  		<br>
					  		<div class="card">
  								<div class="card-body">
  								  
  								  <h2><center>Misi</center></h2>
			             		  <textarea class="ckeditor" id="ckedtor" name="editor3"></textarea>

								 </div>
					  		</div>
					  		<br>
					  		<div class="card">
  								<div class="card-body">
  								  
  								 <div class="form-group">
								    <label for="exampleFormControlInput1">Struktur Organisasi</label>
								    <input type="file" class="form-control" name="st">
								  </div>

								 </div>
					  		</div>	
					  		<input type="hidden" name="xy" id="xy">	
					  	</form>	

					  	<div class="card">
  								<div class="card-body text-center">
  								<h3>Titik Koordinat Kantor Desa</h3>
  								  
  								 <?=$map['html'];?>

								 </div>
					  		</div>		
					  			

						





							
						</div>
					</div>

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