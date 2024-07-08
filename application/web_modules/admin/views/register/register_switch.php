<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card" style="padding:100px 0 200px 0;">
                    <div class="card-body">
                        <div class="col-12 text-center" style="padding-top:100px;"><input type="checkbox" checked class="js-switch" data-color="#00c292" data-size="large" /></div>
                        <div class="col-12 text-center mt-4"><h3 class="font-weight-bold">Status : <span class="text-success">Opening</span><span class="text-danger">Close</span></h3></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- End Containner -->
    <!-- ============================================================== -->
    </div>
</div>
<script>
        $(function () {
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function () {
                new Switchery($(this)[0], $(this).data());
            });
            $('#myTable').DataTable({
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
                }
            });
        });

    </script>