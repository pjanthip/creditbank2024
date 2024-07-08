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
                        <form action="<?php echo site_url('admin/check_register')?>" method="post" onsubmit="return check_selec();">
                            <div class="row d-flex justify-content-center">
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="curriculum" name="curriculum">
                                        <option value="">-กรุณาเลือกหลักสูตร-</option>
                                        <?php
                                            foreach ($curriculum as $curriculums) {
                                                $selected = ($cid == $curriculums['curriculum_id'])? "selected":"";
                                                //$selected = '';
                                                echo '<option value="'.$curriculums['curriculum_id'].'" '.$selected.'>'.$curriculums['curriculum_name_th'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <!--<div class="form-group col-md-5 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="training_id" name="training_id" >
                                        <option value="0">-กรุณาเลือกชุดฝึกอบรม-</option>
                                        <?php
                                            $sql = "SELECT * FROM tb_training WHERE curriculum_id = '$cid' AND showStatus = 1 ORDER BY training_id ASC";
                                            $training= $this->db->query($sql)->result_array();
                                            foreach ($training as $trainings) {
                                                $selected = ($tid == $trainings['training_id'])? "selected":"";
                                                //$selected = '';
                                                echo '<option value="'.$trainings['training_id'].'" '.$selected.'>'.$trainings['training_name'].'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>-->
                                <div class="form-group col-md-1 mb-1 mt-1">
                                    <input type="submit" class="btn btn-primary text-white" value="ค้นหา"></input>
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
                        <div class="table-responsive m-t-40">
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
                                                    tb_register_member.curriculum_id = '$cid'
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
                                                    $sql_1 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 1 AND document_type_id <> 6";
                                                    $chk_status_1 = $this->db->query($sql_1)->num_rows();
                                                    $sql_2 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 2 AND document_type_id <> 6";
                                                    $chk_status_2 = $this->db->query($sql_2)->num_rows();
                                                    $sql_3 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 3 AND document_type_id <> 6";
                                                    $chk_status_3 = $this->db->query($sql_3)->num_rows();
                                                    $sql_0 = "SELECT document_id FROM tb_document WHERE register_member_id = '".$member->register_member_id."' AND document_reason_id = 0 AND document_type_id <> 6";
                                                    $chk_status_0 = $this->db->query($sql_0)->num_rows();
                                                    $chk .= ($chk_status_3>0)? '<span class="text-success">ผ่าน '.$chk_status_3.'</span>':'';
                                                    $chk .= ($chk_status_0>0)? (($chk!="")? ' | <span class="text-danger">ไม่ผ่าน '.$chk_status_0.'</span>':'<span class="text-danger">ไม่ผ่าน '.$chk_status_0.'</span>'):'';
                                                    $chk .= ($chk_status_2>0)? (($chk!="")? ' | <span class="text-info">รอตรวจ '.$chk_status_2.'</span>':'<span class="text-info">รอตรวจ '.$chk_status_2.'</span>'):'';
                                                    $chk .= ($chk_status_1>0)? (($chk!="")? ' | <span class="text-warning">แก้ไข '.$chk_status_1.'</span>':'<span class="text-warning">แก้ไข '.$chk_status_1.'</span>'):'';
                                                }else if($member->register_status > 2){
                                                    $chk = '<span class="text-success">ตรวจครบแล้ว</span>';
                                                }else if($member->register_status == 0){
                                                    $chk = '<span class="text-danger">ยกเลิกการสมัคร</span>';
                                                }
                                                echo    '<tr>
                                                            <td class="text-center align-middle">'.$cc.'</td>
                                                            <td class="align-middle">'.$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th.'</td>
                                                            <td class="text-center align-middle">'.$member->register_datetime_record.'</td>
                                                            <td class="text-center align-middle">'.$chk.'</td>
                                                            <td class="text-center align-middle">
                                                                <form id="form-'.$member->register_member_id.'" target="_blank" action="'.site_url('admin/check_register/profile').'" method="post">
                                                                    <input type="hidden" name="member-id" id="member-id-'.$member->register_member_id.'" value="'.$member->register_member_id.'"/>
                                                                    <input type="hidden" name="curri-id" id="curri-id-'.$member->register_member_id.'" value="'.$cid.'"/>
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
        <!-- ============================================================== -->
        <!-- End Containner -->
        <!-- ============================================================== -->
    </div>
</div>

<script src="<?php echo base_url('assets/plugins/sweetAlert/8.11.8/sweetalert2.all.js');?>" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/sweetAlert/8.11.8/sweetalert2.css');?>">
<style>
#table-member tr td{
  padding: 5px !important;
  margin: 0 !important;
}
</style>
<script>
    $(function () {
        $('#table-member').DataTable({
            responsive: true,
            "pageLength": 50
        });
    });

    /*$('.check_profile').click(function() {
            $('#form-'+this.id).submit();
        });*/

       function submitfrm(id){
            //alert(id);
            $('#form-'+id).submit();
        };

    function get_traning(id_curriculum) {
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('admin/check_register/get_training') ?>",
            data: {
                id: id_curriculum
            },
            success: function(data) {
                $('#training_id').html(data);
                $('#training_id').val('0').trigger('change');
            }
        });
    }
    function check_selec(){
        //alert($('#training_id').val());
        /*if($('#curriculum').val() !=""){
            if($('#training_id').val()!=null){
                if($('#training_id').val()!=0){
                    return true;
                }
            }
        }*/
        if($('#curriculum').val() !=""){
            return true;
        }
        
        Swal.fire({
            type: 'error',
            title: 'กรุณาเลือกหลักสูตร'
        })
        return false;
    }
</script>