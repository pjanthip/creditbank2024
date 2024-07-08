        </div><!-- Wrapper -->

    <!-- Bootstrap popper Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/popper/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/dist/js/custom.min.js"></script>
    <!-- This page plugins -->
    <!--morris JavaScript -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Popup message jquery -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/toast-master/js/jquery.toast.js"></script>

    <!-- This is data table -->
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/datatables.net-bs4/js/dataTables.responsive.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="<?php echo base_url('assets/plugins/sweetAlert/sweetalert2.all.js'); ?>"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->

    <!-- Plugins -->
    <!--<script src="<?php echo base_url(); ?>appjs/global.js" charset="utf-8"></script>-->
    <?php
    /*if (isset($plugin)) {
        echo generate_plugin($plugin);
    }*/
    ?>

    <!-- AppJS-->
    <?php
    /*if (isset($appjs)) {
        echo generate_plugin($appjs);
    }*/
    ?>
    <script>
        $(".btn-delete").click(function(e) {

            if (confirm("ยืนยันการลบข้อมูล") == true) {

                var href = $(this).attr('href');
                $.get(href, function(response) {

                    if (response.status == true) {
                        
                        Swal.fire({
                            title: '<strong>แจ้งเตือน</u></strong>',
                            type: 'success',
                            html: '',
                            showCloseButton: false,
                            showCancelButton: false,
                            focusConfirm: false
                        })

                        setTimeout(function() {

                            window.location.reload();
                        }, '1000');
                    } else {

                    }
                }, 'json');
            }
        });

        $(function () {
            $('#example23').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
        });
    </script>
</body>

</html>
