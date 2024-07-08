<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="d-flex no-block align-items-center ">
                    <h5><i class="far fa-id-badge "></i><span class="ml-2">ข้อมูลส่วนตัว</span></h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row mt-4 mb-5">
                    <img src="<?php echo base_url() ?>/assets/images/download.jpg" class="img-fluid mx-auto d-block" alt="profileImage">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        เลขบัตรประจำตัวประชาชน
                        <hr>
                        <input type="text" name="info_idcard" id="info_idcard" class="form-control th-sarabun form-control-md mb-4" value="1103702802298" placeholder="" readonly="readonly">
                    </div>
                    <div class="col-lg-6">
                        ประเภทบัตร
                        <hr>
                        <input type="text" name="info_idcrad_category" id="info_idcrad_category" class="form-control th-sarabun form-control-md mb-4" value="บัตรประจำตัวประชาชนคนไทย (บัตรประจำตัวประชาชน)" placeholder="" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        ชื่อ
                        <hr>
                        <input type="text" name="info_name_th" id="info_name_th" class="form-control th-sarabun form-control-md mb-4" value="นายธราธร" placeholder="" readonly="readonly">
                    </div>
                    <div class="col-sm-6">
                        นามสกุล
                        <hr>
                        <input type="text" name="info_surname_th" id="info_surname_th" class="form-control th-sarabun form-control-md mb-4" value="ทิพยโสตถิ" placeholder="" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        Name
                        <hr>
                        <input type="text" name="info_name_eng" id="info_name_eng" class="form-control th-sarabun form-control-md mb-4" value="Tharathon" placeholder="" readonly="readonly">
                    </div>
                    <div class="col-sm-6">
                        Surname
                        <hr>
                        <input type="text" name="info_surnamename_eng" id="info_surnamename_eng" class="form-control th-sarabun form-control-md mb-4" value="Tippayasotti" placeholder="" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        เพศ
                        <hr>
                        <div class="col-md-8 mb-4 text-left">
                            <input type="radio" name="info_gender" id="info_gender" value="M" checked disabled>
                            <label for="radio">ชาย</label>
                            <input class="ml-5" type="radio" name="info_gender" id="info_gender" value="F" disabled>
                            <label for="radio">หญิง</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        วันเกิด วัน-เดือน-ปี
                        <hr>
                        <input name="info_birth" id="info_birth" type="date" class="form-control datepicker mb-4" value="2022-02-07" disabled>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        สัญชาติ
                        <hr>
                        <input type="text" name="info_nation" id="info_nation" class="form-control th-sarabun form-control-md mb-4" value="ไทย" placeholder="" readonly="readonly">
                    </div>
                    <div class="col-sm-6">
                        เชื้อชาติ
                        <hr>
                        <input type="text" name="info_race" id="info_race" class="form-control th-sarabun form-control-md mb-4" value="ไทย" placeholder="" readonly="readonly">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        ศาสนา
                        <hr>
                        <input type="text" name="info_religion" id="info_religion" class="form-control th-sarabun form-control-md mb-4" value="พุทธ" placeholder="" readonly="readonly">
                    </div>
                    <div class="col-sm-6">
                        ความสามารถพิเศษ
                        <hr>
                        <input type="text" name="info_specialist" id="info_specialist" class="form-control th-sarabun form-control-md mb-4" value="-" placeholder="" readonly="readonly">
                    </div>
                </div>

            </div>
        </div>

        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="d-flex align-items-center ">
                    <h5><i class="fas fa-university"></i><span class="ml-2">ข้อมูลวุฒิการศึกษา/ระดับการศึกษา</span></h5>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6">
                                ระดับการศึกษา
                                <hr>
                                <input type="text" name="info_education_level" id="info_education_level" class="form-control th-sarabun form-control-md mb-4" value="ปริญญาตรี" placeholder="" readonly="readonly">
                            </div>
                            <div class="col-sm-6">
                                วุฒิการศึกษา
                                <hr>
                                <input type="text" name="info_education_degree" id="info_education_degree" class="form-control th-sarabun form-control-md mb-4" value="083706 ป.ตรี วิทยาการคอมพิวเตอร์" placeholder="" readonly="readonly">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                สถานศึกษา/โรงเรียน
                                <hr>
                                <input type="text" name="info_old_school" id="info_old_school" class="form-control th-sarabun form-control-md mb-4" value="มหาวิทยาลัยราชภัฏเชียงราย" placeholder="" readonly="readonly">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                ปีที่จบ
                                <hr>
                                <input type="text" name="info_graduate" id="info_graduate" class="form-control th-sarabun form-control-md mb-4" value="2564" placeholder="" readonly="readonly">
                            </div>
                            <div class="col-6">
                                เกรดเฉลี่ย
                                <hr>
                                <input type="text" name="info_grade" id="info_grade" class="form-control th-sarabun form-control-md mb-4" value="4.00" placeholder="" readonly="readonly">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                เรียนจบแล้ว
                                <hr>
                                <div class="col-md-8 mb-4 text-left">
                                    <input type="radio" name="info_is_graduate" id="info_is_graduate" value="1" checked disabled>
                                    <label for="radio">ใช่</label>
                                    <input class="ml-5" type="radio" name="info_is_graduate" id="info_is_graduate" value="2" disabled>
                                    <label for="radio">ไม่</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                ทำงานแล้ว
                                <hr>
                                <div class="col-md-8 mb-4 text-left">
                                    <input type="radio" name="info_is_work" id="info_is_work" value="1" checked disabled>
                                    <label for="radio">ใช่</label>
                                    <input class="ml-5" type="radio" name="info_is_work" id="info_is_work" value="2" disabled>
                                    <label for="radio">ไม่</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>