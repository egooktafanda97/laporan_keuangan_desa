
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Blank Pageheader </h2>
        </div>
    </div>
</div>
      <!-- end pageheader -->
                <!-- ============================================================== -->
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="card">
                                <h5 class="card-header">Diagram Pendapatan</h5>
                                <div class="card-body">
                                    <div id="morris_line1"></div>
                                </div>
                            </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="card">
                                <h5 class="card-header">Diagram Pembangunan</h5>
                                <div class="card-body">
                                    <div id="morris_line2"></div>
                                </div>
                            </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                            <div class="card">
                                <h5 class="card-header">Diagram pengeluaran</h5>
                                <div class="card-body">
                                    <div id="morris_line3"></div>
                                </div>
                            </div>
                </div>
            </div>

 <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
 <script src="<?=base_url();?>assets/vendor/charts/morris-bundle/raphael.min.js"></script>
 <script src="<?=base_url();?>assets/vendor/charts/morris-bundle/morris.js"></script>
<script type="text/javascript">
     $('#morris_line1').length
            // Use Morris.Area instead of Morris.Line
            Morris.Line({
                element: 'morris_line1',
                behaveLikeLine: true,
                data: [<?=$chart;?>],

                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                   lineColors: ['#5969ff', '#ff407b'],
                     resize: true,
                        gridTextSize: '14px'
            });
            $('#morris_line2').length
            // Use Morris.Area instead of Morris.Line
            Morris.Line({
                element: 'morris_line2',
                behaveLikeLine: true,
                data: [<?=$charts_;?>],

                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                   lineColors: ['#5969ff', '#ff407b'],
                     resize: true,
                        gridTextSize: '14px'
            });
             $('#morris_line3').length
            // Use Morris.Area instead of Morris.Line
            Morris.Line({
                element: 'morris_line3',
                behaveLikeLine: true,
                data: [<?=$chart__;?>],

                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Series A', 'Series B'],
                   lineColors: ['#5969ff', '#ff407b'],
                     resize: true,
                        gridTextSize: '14px'
            });
           
</script>

