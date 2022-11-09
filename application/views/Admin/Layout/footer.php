        <div class="fixed-bottom footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <footer class="">
                                <p>Copyright © 2022. All rights reserved. Developer by <a href="#/">STT YBSI</a></p>
                            </footer>
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
    <!-- <script src="<?= base_url('asset/js/chart/jquery.peity.min.js')?>"></script> -->
    <!-- <script src="<?= base_url('asset/js/peity/peity-active.js')?>"></script> -->
    <!-- Charts JS ============================================ -->
    <script src="<?= base_url("asset/js/charts/Chart.js")?>"></script>
    <script>
        var ctx = document.getElementById('GrafikRekap').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',
            // The data for our dataset
            data: {
                labels: ["SKTM","SKTM","SKTM","SKTM","SKTM","SKTM","SKTM"],
                datasets: [{
                    label:'Jumlah ',
                    backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)','rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)'],
                    borderColor: ['rgb(255, 99, 132)','rgb(255, 99, 132)','rgb(255, 99, 132)','rgb(255, 99, 132)','rgb(255, 99, 132)','rgb(255, 99, 132)','rgb(255, 99, 132)'],
                    data: ["10","100","27","15","5","1","30"]
                }]
            },
            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
    <!-- <script src="<?= base_url("asset/js/charts/bar-chart.js")?>"></script> -->
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
    <script>
        function myFunction() {
            var x = document.getElementById("showPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>