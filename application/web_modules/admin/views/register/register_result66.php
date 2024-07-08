<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <!-- <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/register');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</a>
        </div> -->

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
                    <div class="card-header text-center bg-dark"><h4 class="font-weight-bold m-b-0 text-white">รายชื่อผู้สมัคร (<?php echo $qty_regsiter?>/50)</h4></div>
                    <div class="card-body">
                        
                    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <a href="<?php echo site_url('admin/register/export_register');?>" class="btn btn-success" target="_blank" ><i class="fa-solid fa-download"></i> Download รายชื่อผู้สมัคร</a>
                        <div class="table-responsive m-t-20">
                            <table id="table-member" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-1">ลำดับที่สมัคร</th>
                                        <th class="col-md-4">ผู้สมัคร</th>
                                        <th class="col-md-2">วันที่สมัคร</th>
                                        <th class="col-md-3">ผลการตรวจสอบ</th>
                                        <th class="col-md-2">ตรวจสอบ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $sql = "SELECT * FROM tb_register_member INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id
                                                    WHERE
                                                    tb_register_member.curriculum_id = '$curriculum_id' AND
                                                    `register_datetime_record` >= '2023-02-01' AND
                                                    `register_datetime_record` <= '2023-05-07'
                                                    ORDER BY
                                                    tb_register_member.register_member_id ASC
                                            ";
                                            $register = $this->db->query($sql)->result();
                                            $cc=1;
                                            foreach ($register as $member) {
                                                switch($member->register_status){
                                                    case 0 : $status = '<span class="text-danger">ยกเลิก</span>';
                                                        break;
                                                    case 1 : $status = '<span class="text-warning">กรอกข้อมูลไม่ครบ</span>';
                                                        break;
                                                    case 2 : $status = '<span class="text-warning">ค้างส่งเอกสาร</span>';
                                                        break;
                                                    case 3 : $status = '<span class="text-warning">รอตรวจสอบ</span>';
                                                        break;
                                                    case 4 : $status = '<span class="text-warning">รอชำระเงิน</span>';
                                                        break;
                                                    case 5 : $status = '<span class="text-warning">รอตรวจสอบการชำระเงิน</span>';
                                                        break;
                                                    default : $status = '<span class="text-success">สมัครเรียบร้อยแล้ว</span>';
                                                }
                                                $chk ="";
                                                if($member->register_status == 2){
                                                    $sql_1 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 1";
                                                    $chk_status_1 = $this->db->query($sql_1)->num_rows();
                                                    $sql_2 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 2";
                                                    $chk_status_2 = $this->db->query($sql_2)->num_rows();
                                                    $sql_3 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 3";
                                                    $chk_status_3 = $this->db->query($sql_3)->num_rows();
                                                    $chk .= ($chk_status_3>0)? '<span class="text-success">ผ่าน '.$chk_status_3.'</span>':'';
                                                    $chk .= ($chk_status_2>0)? (($chk!="")? ' | <span class="text-info">รอตรวจ '.$chk_status_2.'</span>':'<span class="text-info">รอตรวจ '.$chk_status_2.'</span>'):'';
                                                    $chk .= ($chk_status_1>0)? (($chk!="")? ' | <span class="text-warning">รอตรวจ '.$chk_status_1.'</span>':'<span class="text-warning">รอตรวจ '.$chk_status_1.'</span>'):'';
                                                }else if($member->register_status > 2){
                                                    $chk = '<span class="text-success">ผ่าน 6</span>';
                                                }else if($member->register_status == 0){
                                                    $chk = '<span class="text-danger">ยกเลิกการสมัคร</span>';
                                                }
                                                echo    '<tr>
                                                            <td class="text-center align-middle">'.sprintf('%02d', $cc).'</td>
                                                            <td class="align-middle">'.$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th.'</td>
                                                            <td class="text-center align-middle">'.$member->register_datetime_record.'</td>
                                                            <td class="text-center align-middle">'.$chk.'</td>
                                                            <td class="text-center align-middle">
                                                                <form id="form-'.$member->register_member_id.'" action="'.site_url('admin/register/profile66').'" method="post">
                                                                    <input type="hidden" name="member-id" id="member-id-'.$member->register_member_id.'" value="'.$member->register_member_id.'"/>
                                                                    <input type="hidden" name="curri-id" id="curri-id-'.$member->register_member_id.'" value="'.$curriculum_id.'"/>
                                                                    <input type="hidden" name="txt-faculty_id" id="txt-faculty_id" value="'.$faculty_id.'"/>
                                                                    <input type="hidden" name="txt-major_id" id="txt-major_id" value="'.$major_id.'"/>
                                                                    <input type="hidden" name="txt-training_id" id="txt-training_id" value="'.$training_id.'"/>

                                                                    <input type="hidden" name="txt-curriculum_name" id="txt-curriculum_name" value="'.$curriculum_name.'"/>
                                                                    <input type="hidden" name="txt-faculty_name" id="txt-faculty_name" value="'.$faculty_name.'"/>
                                                                    <input type="hidden" name="txt-major_name" id="txt-major_name" value="'.$major_name.'"/>
                                                                    <input type="hidden" name="txt-training_name" id="txt-training_name" value="'.$training_name.'"/>
                                                                    <button type="button" id="'.$member->register_member_id.'" onclick="javascript:submitfrm(\''.$member->register_member_id.'\');" class="check_profile btn waves-effect waves-light btn-info text-white">ตรวจสอบข้อมูล</button>
                                                                </form>
                                                            </td>
                                                        </tr>';
                                                $cc++;
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
            $('#table-member').DataTable({
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
                },
                responsive: true,
                "pageLength": 50
            });
        });

        function submitfrm(id){
            //alert(id);
            $('#form-'+id).submit();
        };
    </script>