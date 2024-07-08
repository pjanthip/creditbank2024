<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/register');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left"></i> ย้อนกลับ</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">ข้อมูลการเปิดรับสมัครผู้เรียน</h5>
                        <form class="form-material m-t-40">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 pt-2">คณะ / สำนักวิชา</label>
                                    <div class="col-sm-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกคณะ / สำนักวิชา</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 pt-2">สาขาวิชา</label>
                                    <div class="col-sm-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกสาขาวิชา</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 pt-2">หลักสูตร</label>
                                    <div class="col-sm-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกหลักสูตร</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 pt-2">ชื่อชุดฝึกอบรม</label>
                                    <div class="col-sm-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกชื่อชุดฝึกอบรม</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="training_name">ระยะเวลารับสมัคร</label>
                                    <div class="col-md-3">
                                        <input type="text" id="training_name" name="training_name" class="form-control" placeholder="วัน เวลา ที่เริ่มสมัคร">
                                    </div>
                                    <div class="col-md-1 text-center"> ถึง </div>
                                    <div class="col-md-3">
                                        <input type="text" id="training_name" name="training_name" class="form-control" placeholder="วัน เวลา ที่สิ้นสุดสมัคร">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">ค่าสมัคร</label>
                                    <div class="col-md-1">
                                        <input type="text" id="training_name" name="training_name" class="form-control" placeholder="0">
                                    </div>
                                    <div class="col-md-1">บาท</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">ช่องทางการชำระ</label>
                                    <div class="col-md-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกช่องทางการชำระ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">จำนวนที่รับสมัคร</label>
                                    <div class="col-md-1">
                                        <input type="text" id="training_name" name="training_name" class="form-control" placeholder="0">
                                    </div>
                                    <div class="col-md-1">คน</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">สำรอง</label>
                                    <div class="col-md-1">
                                        <input type="text" id="training_name" name="training_name" class="form-control" placeholder="0">
                                    </div>
                                    <div class="col-md-1">คน</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">ไฟล์ประกาศรับสมัคร</label>
                                    <div class="col-md-9">
                                        <input type="file" id="training_name" name="training_name" class="form-control" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">รูปประชาสัมพันธ์</label>
                                    <div class="col-md-6">
                                        <input type="file" id="training_name" name="training_name" class="form-control" >
                                    </div>
                                    <div class="col-md-3 text-muted">ขนาดรูป ( กว้าง 1920px * สูง 891px ) &nbsp; | &nbsp; นามสกุล .jpg</div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info waves-effect waves-light m-r-10 text-white">บันทึก</button>
                            <a href="<?php echo site_url('admin/curriculums/form_curriculums_add');?>" class="btn btn-dark waves-effect waves-light">ยกเลิก</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Containner -->
        <!-- ============================================================== -->
    </div>
</div>