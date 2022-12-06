        <div class="fixed-bottom footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <footer class="fixed-bottom">
                                <p>Copyright © 2022. All rights reserved. Developer by <a href="#/">STT YBSI</a></p>
                            <!-- </footer> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery ============================================ -->
        <script src="<?= base_url('asset/js/vendor/jquery-1.12.4.min.js')?>"></script>
    <!-- bootstrap JS ============================================ -->
    <script src="<?= base_url('asset/js/bootstrap.min.js')?>"></script>
    <!-- wow JS ============================================ -->
    <script src="<?= base_url('asset/js/wow.min.js')?>"></script>
    <!-- price-slider JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery-price-slider.js')?>"></script>
    <!-- meanmenu JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery.meanmenu.js')?>"></script>
    <!-- owl.carousel JS ============================================ -->
    <script src="<?= base_url('asset/js/owl.carousel.min.js')?>"></script>
    <!-- sticky JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery.sticky.js')?>"></script>
    <!-- scrollUp JS ============================================ -->
    <script src="<?= base_url('asset/js/jquery.scrollUp.min.js')?>"></script>
    <!-- counterup JS ============================================ -->
    <script src="<?= base_url('asset/js/counterup/jquery.counterup.min.js')?>"></script>
    <script src="<?= base_url('asset/js/counterup/waypoints.min.js')?>"></script>
    <script src="<?= base_url('asset/js/counterup/counterup-active.js')?>"></script>
    <!-- mCustomScrollbar JS ============================================ -->
    <script src="<?= base_url('asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script src="<?= base_url('asset/js/scrollbar/mCustomScrollbar-active.js')?>"></script>
    <!-- metisMenu JS ============================================ -->
    <script src="<?= base_url('asset/js/metisMenu/metisMenu.min.js')?>"></script>
    <script src="<?= base_url('asset/js/metisMenu/metisMenu-active.js')?>"></script>
    <!-- data table JS ============================================ -->
    <script src="<?= base_url('asset/js/data-table/bootstrap-table.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/tableExport.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/data-table-active.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/bootstrap-table-editable.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/bootstrap-editable.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/bootstrap-table-resizable.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/colResizable-1.5.source.js')?>"></script>
    <script src="<?= base_url('asset/js/data-table/bootstrap-table-export.js')?>"></script>
    <!--  editable JS ============================================ -->
    <script src="<?= base_url('asset/js/editable/jquery.mockjax.js')?>"></script>
    <script src="<?= base_url('asset/js/editable/mock-active.js')?>"></script>
    <script src="<?= base_url('asset/js/editable/select2.js')?>"></script>
    <script src="<?= base_url('asset/js/editable/moment.min.js')?>"></script>
    <script src="<?= base_url('asset/js/editable/bootstrap-datetimepicker.js')?>"></script>
    <script src="<?= base_url('asset/js/editable/bootstrap-editable.js')?>"></script>
    <script src="<?= base_url('asset/js/editable/xediable-active.js')?>"></script>
    <!-- Chart JS ============================================ -->
    <script src="<?= base_url('asset/js/chart/jquery.peity.min.js')?>"></script>
    <script src="<?= base_url('asset/js/peity/peity-active.js')?>"></script>
    <!-- tab JS ============================================ -->
    <script src="<?= base_url('asset/js/tab.js')?>"></script>
    <!-- morrisjs JS ============================================ -->
    <script src="<?= base_url('asset/js/morrisjs/raphael-min.js')?>"></script>
    <script src="<?= base_url('asset/js/morrisjs/morris.js')?>"></script>
    <script src="<?= base_url('asset/js/morrisjs/morris-active.js')?>"></script>
    <!-- morrisjs JS ============================================ -->
    <script src="<?= base_url('asset/js/sparkline/jquery.sparkline.min.js')?>"></script>
    <script src="<?= base_url('asset/js/sparkline/jquery.charts-sparkline.js')?>"></script>
    <script src="<?= base_url('asset/js/sparkline/sparkline-active.js')?>"></script>
    <!-- calendar JS ============================================ -->
    <script src="<?= base_url('asset/js/calendar/moment.min.js')?>"></script>
    <script src="<?= base_url('asset/js/calendar/fullcalendar.min.js')?>"></script>
    <script src="<?= base_url('asset/js/calendar/fullcalendar-active.js')?>"></script>
    <!-- plugins JS ============================================ -->
    <script src="<?= base_url('asset/js/plugins.js')?>"></script>
    <!-- main JS ============================================ -->
    <script src="<?= base_url('asset/js/main.js')?>"></script>
    <!-- tawk chat JS ============================================ -->
    <script src="<?= base_url('asset/js/tawk-chat.')?>"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    function bacagambar(input){
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#gambar_nodin').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#view_gambar").change(function(){
        bacagambar(this);
    });  
    </script>
    <script type="text/javascript">
        // $(document).ready(function(){
        //     tampil_data_barang();   //pemanggilan fungsi tampil barang.
            
        //     $('#mydata').dataTable();
            
        //     //fungsi tampil barang
        //     function tampil_data_barang(){
        //         $.ajax({
        //             type  : 'ajax',
        //             url   : '<?php echo base_url()?>/Desa/datapenduduk_API',
        //             async : false,
        //             dataType : 'json',
        //             success : function(data){
        //                 var html = '';
        //                 var i;
        //                 for(i=0; i<data.length; i++){
        //                     html += '<tr>'+
        //                             '<td> 3229384756 </td>'+
        //                             '<td> Nurjaman </td>'+
        //                                 // '<td>'+data[i].nik+'</td>'+
        //                                 // '<td>'+data[i].nama+'</td>'+
        //                             '</tr>';
        //                 }
        //                 $('#Tampilkan_data').html(html);
        //             }
    
        //         });
        //     }
    
        // });
    </script>
</body>

</html>