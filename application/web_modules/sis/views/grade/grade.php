<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-font"></i><span class="ml-2">ผลการเรียน (ใช้แสดงเฉพาะผลการศึกษาเรียนรู้)</span></h5>
                    </div>
                    <!-- <a href="<?php echo site_url('sis/grade/check_gpa'); ?>" target="_self" class="btn btn-success ml-auto">
                        ตรวจสอบค่าระดับเกรดเฉลี่ยสะสม GPAd
                    </a> -->
                </div>
            </div>
            <div class="card-body">
                <h4 class="text-center mb-4">
                    <strong>
                        <?php echo $this->session->userdata('learner_id').' '.$this->session->userdata('fulllname');?>
                    </strong>
                </h4>
                <div class="scrollTable">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" class="col-1">ที่</th>
                                <th scope="col" class="col-1">ชุดฝึกอบรมที่</th>
                                <th scope="col" class="col-5">ชื่อชุดฝึกอบรม</th>
                                <th scope="col" class="col-2">ผลการประเมิน</th>
                                <th scope="col" class="col-3">หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $cc = 0;
                                $sql = "SELECT * FROM tb_training ORDER BY training_id ASC ";
                                $training = $this->db->query($sql)->result();
                                foreach($training as $key => $item){
                                    $cc++;
                            ?>
                            <tr>
                                <th class="text-center"><?php echo $cc;?></th>
                                <td class="text-center"><?php echo $cc;?> / 2565</td>
                                <td><?php echo $item->training_name;?></td>
                                <td class="text-center">
                                    <?php
                                        $sql_T1 = "SELECT
                                        tb_grade_dummy.grade_id,
                                        tb_grade_dummy.learner_code,
                                        tb_grade_dummy.training_register_id,
                                        tb_grade_dummy.grade_result,
                                        tb_grade_dummy.grade_note
                                        FROM
                                        tb_grade_dummy
                                        WHERE
                                        tb_grade_dummy.learner_code = '".$this->session->userdata('learner_id')."' AND
                                        tb_grade_dummy.training_register_id = '".$item->training_id."'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();
                                            switch($T1_data->grade_result){
                                                case 'ดีเยี่ยม': echo '<span class="font-weight-bold text-success">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                case 'ดีมาก': echo '<span class="font-weight-bold text-primary">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                case 'ดี': echo '<span class="font-weight-bold text-info">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                case 'ดีพอใช้': echo '<span class="font-weight-bold text-dark">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                case 'พอใช้': echo '<span class="font-weight-bold text-warning">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                case 'อ่อน': echo '<span class="font-weight-bold text-muted">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                case 'อ่อนมาก': echo '<span class="font-weight-bold" style="color:#FF5E00;">'.$T1_data->grade_result.'</span>';
                                                    break;
                                                default: echo '<span class="font-weight-bold text-danger">'.$T1_data->grade_result.'</span>';
                                            }
                                            
                                        }else{
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        if($item->showStatus == 0){
                                            echo '<span class="text-muted">* ยังไม่มีการจัดการเรียนการสอน</span>';
                                        }elseif($item->showStatus == 1){
                                            echo '<span class="text-warning">* กำลังจัดการเรียนการสอน</span>';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>