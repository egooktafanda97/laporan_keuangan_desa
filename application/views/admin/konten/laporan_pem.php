 <html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 1cm 1cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 5.5cm;
                margin-left: 0cm;
                margin-right: 0cm;
                margin-bottom: 4cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 5cm;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 4cm;
            }
            .kiri{
                width: 30%;
                text-align: center;
            }
            .tengah{
              width: 40%;
            }
            .kanan{
                width: 30%;
                text-align:  center;
            }
        </style>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <img src="assets/img/icon/logo.png" style="position: absolute; width: 100px; height: auto;">
            <table style="width: 100%;">
              <tr>
                <td align="center">
                  <span style="line-height: 1.6; font-weight: bold; margin-bottom: 0;">
                    PEMERINTAHAN KABUPATEN KUANTAN SINGINGI
                    <br>KECAMATAN BENAI
                    <br><h3 style="margin: 0;">DESA PULAU INGU</h3>
                  </span>
                  Alamat: jl.poros desa No. 01 Desa Pulau Ingu
                  <br>Kec. Benai Kabupaten KUANTAN SINGINGI Provinsi Riau Kode Pos 29566
                </td>
              </tr>
            </table>

            <hr class="line-title"> 
            <p align="center">
              LAPORAN UANG MASUK
            </p>
        </header>

         <footer>
            

            <table style="width: 100%">
                <tr>
                    <td class="kiri">
                     SEKDES
                      <br>
                      <br>
                      <br>
                      <br>
                      <hr>
                    </td>
                     <td class="tengah">
                    
                    </td>
                    <td class="kanan">
                      PULAU INGU <?=date('d/M/Y');?>
                        <br>
                        KEPALA DESA
                        <br>
                        <br>
                        <br>
                        <br>
                        <hr>
                      </td>
                </tr>
            </table>


        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <div style="width: 100%">
          	<table id="example" class="table table-striped table-bordered" style="width:100%">
						        <thead>
						            <tr style="background-color: #ccc;">
						                <th>No</th>
						                <th>Tanggal</th>
						                <th>pembangunan</th>
						                <th>Jenis Pembangunan</th>
						                <th>Lokasi</th>
						                <th>Biaya</td> 
						            </tr>
						        </thead>
						        <tbody>

						        <?php $i=1; foreach ($data as $key ): ?>
						            <tr>
						                <td><?=$i++;?></td>
						                <td><?=$key->tanggal;?></td>
						                <td><?=$key->pembangunan;?></td>
						                <td><?=$key->jenis;?></td>
						                <td><?=$key->lokasi;?></td>
						                <td><?="Rp. ".$this->fungsi->rupiah($key->biaya);?>-,</td>  
						            </tr>
						        <?php endforeach ?>
                    <tr style="background-color: orange">
                    <td colspan="5"><b>Total</b></td>
                    <td><b><?="Rp. ".$this->fungsi->rupiah($sums);?></b></td>
                  </tr>
						    </table>
        </div>
    </body>
</html>