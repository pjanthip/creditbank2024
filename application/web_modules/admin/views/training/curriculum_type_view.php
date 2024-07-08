<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="text-right">
                            <a href="<?php echo site_url('admin/curriculums/addtype');?>" class="btn btn-info text-white "><i class="fa fa-plus-circle mr-1"></i> เพิ่มประเภทหลักสูตรใหม่</a>
                        </div>
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-1">#</th>
                                        <th class="col-md-9">รายการ</th>
                                        <th class="col-md-2">Tool</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>สะสมหน่วยกิต</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
            $('#myTable').DataTable({
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
                }
            });
        });

    </script>