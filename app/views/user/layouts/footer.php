   <!--   Core JS Files   -->
   <script src="<?= BASE_URL; ?>/assets/js/core/jquery.3.2.1.min.js"></script>
   <script src="<?= BASE_URL; ?>/assets/js/core/popper.min.js"></script>
   <script src="<?= BASE_URL; ?>/assets/js/core/bootstrap.min.js"></script>

   <!-- jQuery UI -->
   <script src="<?= BASE_URL; ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
   <script src="<?= BASE_URL; ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

   <!-- jQuery Scrollbar -->
   <script src="<?= BASE_URL; ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

   <!-- jQuery Sparkline -->
   <script src="<?= BASE_URL; ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

   <!-- Datatables -->
   <script src="<?= BASE_URL; ?>/assets/js/plugin/datatables/datatables.min.js"></script>

   <!-- Atlantis JS -->
   <script src="<?= BASE_URL; ?>/assets/js/atlantis.min.js"></script>

   <script>
       $('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
           type: 'line',
           height: '70',
           width: '100%',
           lineWidth: '2',
           lineColor: 'rgba(255, 255, 255, .5)',
           fillColor: 'rgba(255, 255, 255, .15)'
       });

       $('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
           type: 'line',
           height: '70',
           width: '100%',
           lineWidth: '2',
           lineColor: 'rgba(255, 255, 255, .5)',
           fillColor: 'rgba(255, 255, 255, .15)'
       });

       $('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
           type: 'line',
           height: '70',
           width: '100%',
           lineWidth: '2',
           lineColor: 'rgba(255, 255, 255, .5)',
           fillColor: 'rgba(255, 255, 255, .15)'
       });
   </script>

   <script>
       $(document).ready(function() {
           $('#basic-datatables').DataTable({});
       });
   </script>
   </body>

   </html>