<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-font"></i><span class="ml-2">ผลการเรียน (ใช้แสดงเฉพาะผลการศึกษาเรียนรู้)</span></h5>
                    </div>
                    <a href="<?php echo site_url('sis/grade/check_gpa'); ?>" target="_self" class="btn btn-success ml-auto">
                    <i class="fa-solid fa-floppy-disk"></i> บันทึกผลการเรียน
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="scrollTable">
                    <table class="table table-hover table-bordered table-sm">
                        <thead>
                            <tr class="text-center">
                                <th rowspan="4" class="col-1 align-middle">ที่</th>
                                <th rowspan="4" class="col-1 align-middle">รหัสผู้เรียน</th>
                                <th rowspan="4" class="col-2 align-middle">ชื่อ - สกุล</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 1</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 2</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 3</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 4</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 5</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 6</th>
                                <th colspan="2" class="col-1">ชุดฝึกอบรมที่ 7</th>
                                <th rowspan="4" class="col-1 align-middle">หมายเหตุ</th>
                            </tr>
                            <tr class="text-center">
                                <?php
                                    $cc=0;
                                    $sql_training = "SELECT * FROM tb_training WHERE curriculum_id = 'C00001' ORDER BY training_id ASC";
                                    $training = $this->db->query($sql_training)->result();
                                    foreach($training as $key => $item_training){
                                        $cc++;
                                ?>
                                <th colspan="2" class="" id="status-<?php echo $item_training->training_id;?>">
                                    <select class="form-control form-control-sm text-center" name="status_<?php echo $item_training->training_id;?>" id="status_<?php echo $item_training->training_id;?>">
                                        <option value="0" class="">-</option>
                                        <option value="1" class="" <?php echo ($item_training->showStatus==1)? "selected":"";?>>ดำเนินการ</option>
                                        <option value="2" class="" <?php echo ($item_training->showStatus==2)? "selected":"";?>>เสร็จสิ้น</option>
                                    </select>
                                </th>
                                <?php }?>
                            </tr>
                            <tr class="text-center">
                                <?php
                                    $cc=0;
                                    foreach($training as $key => $item_training){
                                        $cc++;
                                ?>
                                <th colspan="2" class="" id="announce-<?php echo $item_training->training_id;?>">
                                    <?php
                                        if($item_training->training_scope==1){
                                            echo '<button type="button" class="btn btn-success"><i class="fa-regular fa-circle-check"></i> แจ้งผู้เรียน</button>';
                                        }else{
                                            echo '<button type="button" class="btn btn-light"><i class="fa-regular fa-circle"></i> แจ้งผู้เรียน</button>';
                                        }
                                    ?>
                                    
                                </th>
                                <?php }?>
                            </tr>
                            <tr class="text-center">
                                <th>คะแนน</th>
                                <th>เกรด</th>
                                <th>คะแนน</th>
                                <th>เกรด</th>
                                <th>คะแนน</th>
                                <th>เกรด</th>
                                <th>คะแนน</th>
                                <th>เกรด</th>
                                <th>คะแนน</th>
                                <th>เกรด</th>
                                <th>คะแนน</th>
                                <th>เกรด</th>
                                <th>คะแนน</th>
                                <th>เกรด</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $cc=0;
                                $sql_learner = "SELECT tb_learner.*,tb_prefix_name.* FROM tb_learner INNER JOIN tb_prefix_name ON tb_learner.prefix_name_id = tb_prefix_name.prefix_name_id ORDER BY learner_code ASC";
                                $learner = $this->db->query($sql_learner)->result();
                                foreach($learner as $key => $item_learner){
                                    $cc++;
                            ?>
                            <?php $bg_color = ($item_learner->learner_code == "65112012005" || $item_learner->learner_code == "65112012051")? "bg-warning":"";?>
                            <tr class="<?php echo $bg_color;?>">
                                <th class="text-center align-middle"><?php echo $cc;?></th>
                                <td class="text-center align-middle"><?php echo $item_learner->learner_code;?></td>
                                <th class="align-middle"><?php echo $item_learner->prefix_name_full_th.$item_learner->learner_fname_th.' '.$item_learner->learner_lname_th;?></th>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00001'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();
                                            
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t1[]" id="T00001-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t1[]" id="T00001-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00002'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();

                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t2[]" id="T00002-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t2[]" id="T00002-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00003'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();

                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t3[]" id="T00003-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t3[]" id="T00003-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00004'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();

                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t4[]" id="T00004-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t4[]" id="T00004-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00005'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();

                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t5[]" id="T00005-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t5[]" id="T00005-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00006'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();

                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t6[]" id="T00006-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t6[]" id="T00006-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class=""></td>
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
                                        tb_grade_dummy.learner_code = '".$item_learner->learner_code."' AND
                                        tb_grade_dummy.training_register_id = 'T00007'";
                                        $T1_numrows = $this->db->query($sql_T1)->num_rows();
                                        if($T1_numrows>0){
                                            $T1_data = $this->db->query($sql_T1)->row();

                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t7[]" id="T00007-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success" '.(($T1_data->grade_result=="ดีเยี่ยม")? "selected":'').'>ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary" '.(($T1_data->grade_result=="ดีมาก")? "selected":'').'>ดีมาก</option>
                                                        <option value="ดี" class="text-info" '.(($T1_data->grade_result=="ดี")? "selected":'').'>ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark" '.(($T1_data->grade_result=="ดีพอใช้")? "selected":'').'>ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning" '.(($T1_data->grade_result=="พอใช้")? "selected":'').'>พอใช้</option>
                                                        <option value="อ่อน" class="text-muted" '.(($T1_data->grade_result=="อ่อน")? "selected":'').'>อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;" '.(($T1_data->grade_result=="อ่อนมาก")? "selected":'').'>อ่อนมาก</option>
                                                        <option value="ตก class="text-danger" '.(($T1_data->grade_result=="ตก")? "selected":'').'>ตก</option>
                                                    </select>';

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
                                            echo    '<select class="form-control form-control-sm mb-1 text-center" name="t7[]" id="T00007-'.$item_learner->learner_code.'">
                                                        <option value="" class="text-secondary">-</option>
                                                        <option value="ดีเยี่ยม" class="text-success">ดีเยี่ยม</option>
                                                        <option value="ดีมาก" class="text-primary">ดีมาก</option>
                                                        <option value="ดี" class="text-info">ดี</option>
                                                        <option value="ดีพอใช้" class="text-dark">ดีพอใช้</option>
                                                        <option value="พอใช้" class="text-warning">พอใช้</option>
                                                        <option value="อ่อน" class="text-muted">อ่อน</option>
                                                        <option value="อ่อนมาก" class="" style="color:#FF5E00;">อ่อนมาก</option>
                                                        <option value="ตก class="text-danger">ตก</option>
                                                    </select>';
                                            echo '-';
                                        }
                                    ?>
                                </td>
                                <td class="align-middle">
                                    <?php
                                        if($item_learner->learner_code == "65112012005" || $item_learner->learner_code == "65112012051"){
                                            echo '* ลาออก';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>