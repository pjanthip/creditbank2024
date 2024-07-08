<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <?php foreach ($learner as $data) {?>
            <div class="row g-0">
                <div class="card col-12 p-0 box-learner-content">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fa-solid fa-address-card"></i> ข้อมูลผู้เรียน</h5>
                    </div>
                    <div class="card-body fs-16">
                        <div class="alert alert-warning w-100" role="alert">สถานะ : <strong>กำลังศึกษา</strong></div>
                        <div class="row mb-5 mt-4">
                            <a class="col-md-2 mx-auto d-block" href="<?php echo base_url('assets/images/learner_display/65112012/' . $data->learner_display); ?>" data-toggle="lightbox">
                                <img src="<?php echo base_url('assets/images/learner_display/65112012/' . $data->learner_display); ?>" height="450" class="img-fluid border border-secondary" alt="profileImage">
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">รหัสผู้เรียน</th>
                                        <td style="width:70%;"><?php echo $data->learner_code; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ชื่อ - นามสกุล</th>
                                        <td style="width:70%;"><?php echo $data->prefix_name_full_th . $data->learner_fname_th . ' ' . $data->learner_lname_th; ?> (<?php echo $data->learner_fname_en . ' ' . $data->learner_lname_en; ?>)</td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">คณะ / สำนักวิชา / วิทยาลัย</th>
                                        <td style="width:70%;"><?php echo $data->faculty_name_th; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">สาขาวิชา</th>
                                        <td style="width:70%;"><?php echo $data->major_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ประเภทหลักสูตร</th>
                                        <td style="width:70%;"><?php echo $data->curriculum_type_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">หมู่เรียน</th>
                                        <td style="width:70%;">1</td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">เข้าปี</th>
                                        <td style="width:70%;">1/2565</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-0">
                <div class="card col-12 p-0 box-learner-content">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fa-solid fa-tags"></i> ข้อมูลประวัติส่วนตัว</h5>
                    </div>
                    <div class="card-body fs-16">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">เลขที่บัตรประชาชน</th>
                                        <td style="width:70%;"><?php echo $data->learner_idcard; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ประเภทบัตรที่ถือครอง</th>
                                        <td style="width:70%;"><?php echo $data->card_type_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">วัน เดือน ปี เกิด</th>
                                        <td style="width:70%;"><?php echo $data->learner_birthday; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">เพศ</th>
                                        <td style="width:70%;"><?php echo ($data->learner_gender=="M" ? "ชาย" : "หญิง"); ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">เชื้อชาติ</th>
                                        <td style="width:70%;"><?php echo $data->learner_origin; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">สัญชาติ</th>
                                        <td style="width:70%;"><?php echo $data->learner_nation; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ศาสนา</th>
                                        <td style="width:70%;"><?php echo $data->religion_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ความสามารถพิเศษ</th>
                                        <td style="width:70%;"><?php echo $data->learner_talent; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-0">
                <div class="card col-12 p-0 box-learner-content">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fa-solid fa-school-flag"></i> ข้อมูลวุฒิการศึกษาเดิม</h5>
                    </div>
                    <div class="card-body fs-16">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ระดับการศึกษา</th>
                                        <td style="width:70%;"><?php echo $data->education_level_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">วุฒิการศึกษา</th>
                                        <td style="width:70%;"><?php echo $data->education_background_name; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">สถานศึกษา/โรงเรียน</th>
                                        <td style="width:70%;"><?php echo $data->learner_old_school; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ปีที่จบ</th>
                                        <td style="width:70%;"><?php echo $data->learner_graduate; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">เกรดเฉลี่ย</th>
                                        <td style="width:70%;"><?php echo $data->learner_grade; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>