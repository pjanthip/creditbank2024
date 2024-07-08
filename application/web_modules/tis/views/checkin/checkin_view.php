
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
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-1">#</th>
                                        <th class="col-md-3">Tool</th>
                                        <th class="col-md-6">ชุดฝึกอบรม</th>
                                        <th class="col-md-1">หมู่เรียน</th>
                                        <th class="col-md-1">จำนวนผู้เรียน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if ($this->session->userdata('teacher_id') == '8') {
                                    ?>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">
                                            <a href="<?php echo site_url('tis/checkin/process')?>" class="btn waves-effect waves-light btn-primary">เช็คชื่อผู้เรียน</a>
                                            <a href="#" class="btn waves-effect waves-light btn-info">รายงาน</a>
                                        </td>
                                        <td>ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา</td>
                                        <td class="text-center">รุ่นที่ 3</td>
                                        <td class="text-center">52 คน</td>
                                    </tr>
                                    <?php }?>
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
                },
                "responsive": true
            });
        });

    </script>