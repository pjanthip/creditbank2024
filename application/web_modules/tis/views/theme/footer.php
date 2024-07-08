<button type="button" class="btn btn-success btn-floating btn-lg" id="btn-back-to-top" style="position: fixed;bottom: 20px;right: 20px;display: none;">
    <i class="fas fa-arrow-up"></i>
</button>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
        $(document).ready(function() {

            $(".select2").select2();   
        });

    let mybutton = document.getElementById("btn-back-to-top");

    window.onscroll = function() {
        scrollFunction();
    };

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })

    $(function() {
        $('#course_table').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
            }
        });

});
</script>


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


<script src="<?php echo base_url('assets/plugins/lightbox/lightbox.js');?>" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/lightbox/lightbox.css');?>">

</body>

</html>