<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <!--<div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/register/addregister');?>" class="btn btn-info d-lg-block text-white"><i class="fa fa-plus-circle mr-1"></i> เปิดรับสมัครผู้เรียนใหม่</a>
        </div>-->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">หน่วยงานจัดการศึกษา</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $faculty_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">สาขาวิชา</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $major_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">หลักสูตร</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $curriculum_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">รุ่นที่</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $training_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-1">#</th>
                                        <th class="col-md-7">รายการ</th>
                                        <th class="col-md-2">ผู้สมัครชุดฝึกอบรม</th>
                                        <th class="col-md-2">Tool</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $cc=1;
                                        foreach ($register as $data) {
                                            $sql = "SELECT * FROM tb_major INNER JOIN tb_faculty ON tb_major.faculty_id = tb_faculty.faculty_id WHERE tb_major.major_id='$data->major_id'";
                                            $faculty = $this->db->query($sql)->row();
                                            $sql = "SELECT * FROM tb_training_member WHERE training_register_id = '$data->training_register_id' ORDER BY training_member_id ASC";
                                            $qtyMember_training = $this->db->query($sql)->num_rows();
                                            $sql = "SELECT * FROM tb_register_member WHERE curriculum_id = 'C00001' AND register_status <> 0  AND register_datetime_record >= '2023-02-01' AND register_datetime_record <= '2023-05-07'";
                                            $qtyMember = $this->db->query($sql)->num_rows();

                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $cc;?></td>
                                        <td>
                                            <div class="mb-2"><strong class="text-primary">หลักสูตร :</strong> <?php echo $data->curriculum_name_th;?></div>
                                            <div class="mb-2"><strong class="text-primary">ชื่อชุดฝึกอบรม :</strong> <?php echo $data->training_name;?></div>
                                            <div class="mb-2"><strong class="text-primary">หน่วยงาน :</strong> <?php echo $faculty->faculty_name_th;?></div>
                                            <div class="mb-2"><strong class="text-primary">ค่าสมัคร :</strong> <?php echo $data->training_register_price;?> บาท</div>
                                            <div class="mb-2"><strong class="text-primary">ระยะเวลา :</strong> <?php echo format_datetimeshot($data->training_register_datetime_start);?> - <?php echo format_datetimeshot($data->training_register_datetime_end);?> <?php check_intime($data->training_register_datetime_start,$data->training_register_datetime_end);?></div>
                                            <div class=""><strong class="text-primary">จำนวนผู้สมัครในหลักสูตร :</strong> <?php echo $qtyMember;?> คน</div>
                                        </td>
                                        <td class="text-center"><?php echo $qtyMember_training;?> / <?php echo $data->training_register_qty;?> คน</td>
                                        <td class="text-center">
                                            <form id="form-<?php echo $data->training_register_id;?>" action="<?php echo site_url('admin/register_training/result66');?>" method="post">
                                            
                                                <input type="hidden" name="txt-training_register_id" id="txt-training_register_id" value="<?php echo $data->training_register_id;?>"/>
                                                <input type="hidden" name="txt-curriculum_id" id="txt-curriculum_id" value="<?php echo $data->curriculum_id;?>"/>
                                                <input type="hidden" name="txt-faculty_id" id="txt-faculty_id" value="<?php echo $faculty->faculty_id;?>"/>
                                                <input type="hidden" name="txt-major_id" id="txt-major_id" value="<?php echo $data->major_id;?>"/>
                                                <input type="hidden" name="txt-training_id" id="txt-training_id" value="<?php echo $data->training_id;?>"/>

                                                <input type="hidden" name="txt-curriculum_name" id="txt-curriculum_name" value="<?php echo $data->curriculum_name_th;?>"/>
                                                <input type="hidden" name="txt-faculty_name" id="txt-faculty_name" value="<?php echo $faculty->faculty_name_th;?>"/>
                                                <input type="hidden" name="txt-major_name" id="txt-major_name" value="<?php echo $faculty->major_name;?>"/>
                                                <input type="hidden" name="txt-training_name" id="txt-training_name" value="<?php echo $data->training_name;?>"/>
                                                <a href="javascript:void(0);" onclick="get_result('<?php echo $data->training_register_id;?>');" class="text-info font-18 mr-1"> <i class="fas fa-list-alt"></i></a>
                                                <a href="javascript:void(0);" class="text-primary font-18 mr-1"> <i class="fas fa-edit"></i></a>
                                                <a href="javascript:void(0);" class="text-danger font-18"> <i class="fas fa-trash-alt"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php $cc++;}?>
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

        function get_result(id){
            /*alert($("#txt-curriculum_id").val());
            alert($("#txt-faculty_id").val());
            alert($("#txt-major_id").val());*/
            $('#form-'+id).submit();
        }

        function get_major(id_faculty) {
            //alert(id_faculty);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/register/get_major') ?>",
                data: {
                    id: id_faculty,
                    function: 'faculty'
                },
                success: function(data) {
                    $('#major_id').html(data);
                    $('#curriculum_id').html('<option value="">-เลือกหลักสูตร-</option>');
                    $('#major_id').val('').trigger('change');
                    $('#curriculum_id').val('').trigger('change');
                }
            });
        }

        function get_curriculum(major_id) {
            if(major_id !=""){
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('admin/register/get_major') ?>",
                    data: {
                        id: major_id,
                        function: 'curriculum'
                    },
                    success: function(data) {
                        $('#curriculum_id').html(data);
                        $('#curriculum_id').val('').trigger('change');
                    }
                });
            }
        }
    </script>