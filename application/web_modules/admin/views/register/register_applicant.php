<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/register/result');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</a>
        </div>

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
                                            <input type="text" id="training_name" name="training_name"
                                                class="form-control" value="สำนักวิชาวิทยาศาสตร์สุขภาพ" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">สาขาวิชา</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name"
                                                class="form-control"
                                                value="สาขาวิชาสาธารณสุขศาสตร์ แขนงวิชาสาธารณสุขชุมชน" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">หลักสูตร</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name"
                                                class="form-control"
                                                value="หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-3" for="training_objective">ชุดฝึกอบรม</label>
                                        <div class="col-md-9">
                                            <input type="text" id="training_name" name="training_name"
                                                class="form-control" value="กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา"
                                                disabled>
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
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">ข้อมูลส่วนตัวของผู้สมัคร</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-horizontal">
                            <div class="form-body">
                                <h3 class="box-title">ข้อมูลส่วนตัว</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">เลขบัตรประจำตัวประชาชน /
                                                ประเภทบัตร</label>
                                            <div class="row col-md-9">
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control" value="1-5799-00352-88-6">
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-control form-select">
                                                        <option value="">บัตรประจำตัวประชาชนคนไทย (บัตรประจำตัวประชาชน)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">คำนำหน้า ชื่อ -
                                                สกุล</label>
                                            <div class="row col-md-9">
                                                <div class="col-md-2 mb-2">
                                                    <select class="form-control form-select">
                                                        <option value="">นาย</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5 mb-2">
                                                    <input type="text" class="form-control" value="ปณิธาน">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" value="จันทร์ทิพย์">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">First name - Last
                                                name</label>
                                            <div class="row col-md-9">
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control" value="Pranithan">
                                                </div>
                                                <div class="col-md-6 mb-2">
                                                    <input type="text" class="form-control" value="Janthip">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">เพศ</label>
                                            <div class="row col-md-9">
                                                <div class="col-md-1 custom-control custom-radio mb-2">
                                                    <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">ชาย</label>
                                                </div>
                                                <div class="col-md-1 custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">หญิง</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">วันเกิด
                                                วัน-เดือน-ปี</label>
                                            <div class="row col-md-3">
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">เชื้อชาติ</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="ไทย">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">สัญชาติ</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="ไทย">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ศาสนา</label>
                                            <div class="row col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">คริสต์</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ความสามารถพิเศษ</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="ไทย">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->

                                <h3 class="box-title">ข้อมูลวุฒิการศึกษา/ระดับการศึกษา</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ระดับการศึกษา</label>
                                            <div class="row col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">ปริญญาตรี</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">วุฒิการศึกษา</label>
                                            <div class="row col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">083706 ป.ตรี วิทยาการคอมพิวเตอร์</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">สถานศึกษา/โรงเรียน</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="มหาวิทยาลัยราชภัฏเชียงราย">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ปีที่จบ</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="2555">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">เกรดเฉลี่ย</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="4.00">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">เรียนจบแล้ว</label>
                                            <div class="row col-md-9">
                                                <div class="col-md-1 custom-control custom-radio mb-2">
                                                    <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">ใช่</label>
                                                </div>
                                                <div class="col-md-1 custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">ไม่ใช่</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ทำงานแล้ว</label>
                                            <div class="row col-md-9">
                                                <div class="col-md-1 custom-control custom-radio mb-2">
                                                    <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">ใช่</label>
                                                </div>
                                                <div class="col-md-1 custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="member" class="form-check-input">
                                                    <label class="form-check-label" for="customRadio3">ไม่ใช่</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->

                                <h3 class="box-title">ที่อยู่ปัจจุบัน หรือ ที่อยู่ที่ติดต่อได้</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ที่อยู่เลขที่</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="13">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">หมู่ที่</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="8">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ซอย</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ถนน</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">จังหวัด</label>
                                            <div class="row col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">เชียงราย</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">อำเภอ</label>
                                            <div class="row col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">แม่สรวย</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ตำบล</label>
                                            <div class="row col-md-9">
                                                <select class="form-control form-select">
                                                    <option value="">ศรีถ้อย</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">รหัสไปรษณีย์</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="57180">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">โทรศัพท์บ้าน</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="053776008">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">โทรศัพท์มือถือ</label>
                                            <div class="row col-md-2">
                                                <input type="text" class="form-control" value="0918575085">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">E-mail</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="p.janthip@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">ไฟล์เอกสารการสมัคร</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-1">ที่</th>
                                        <th class="col-md-4">รายการ</th>
                                        <th class="col-md-1">แฟ้ม</th>
                                        <th class="col-md-1">วันที่อัพโหลด</th>
                                        <th class="col-md-1">วันที่แก้ไข</th>
                                        <th class="col-md-2">เหตุผลการแก้ไข</th>
                                        <th class="col-md-1">สถานะ</th>
                                        <th class="col-md-1 text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>รูปถ่าย 1.5 นิ้ว (ไฟล์ JPG)</td>
                                        <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td>เปลี่ยนรูปใหม่</td>
                                        <td class="text-center">ผ่าน</td>
                                        <td class="text-center">
                                            <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>สำเนาบัตรประจำตัวประชาชน (ไฟล์ PDF)</td>
                                        <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td class="text-center">-</td>
                                        <td></td>
                                        <td class="text-center">ผ่าน</td>
                                        <td class="text-center">
                                            <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>สำเนาทะเบียนบ้าน (ไฟล์ PDF)</td>
                                        <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td class="text-center">-</td>
                                        <td></td>
                                        <td class="text-center">ผ่าน</td>
                                        <td class="text-center">
                                            <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>สำเนาทะเบียนบ้าน (ไฟล์ PDF)</td>
                                        <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td class="text-center">-</td>
                                        <td></td>
                                        <td class="text-center">ผ่าน</td>
                                        <td class="text-center">
                                            <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>สำเนาหนังสือรับรองวุฒิการศึกษา (ไฟล์ PDF)</td>
                                        <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td class="text-center">-</td>
                                        <td></td>
                                        <td class="text-center">ผ่าน</td>
                                        <td class="text-center">
                                            <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>สำเนาหนังสือสำคัญการเปลี่ยนชื่อ – นามสกุล และคำนำหน้าชื่อ (ไฟล์ PDF) *ถ้ามี</td>
                                        <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                        <td class="text-center">31/01/65 21:00</td>
                                        <td class="text-center">-</td>
                                        <td></td>
                                        <td class="text-center">ผ่าน</td>
                                        <td class="text-center">
                                            <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">การสมัครเรียนชุดฝึกอบรม</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-horizontal">
                            <div class="form-body">

                                <h3 class="box-title">ข้อมูลชุดฝึกอบรม</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">หลักสูตร</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ชุดฝึกอบรม</label>
                                            <div class="row col-md-9">
                                                <input type="text" class="form-control" value="กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ลำดับที่สมัคร</label>
                                            <div class="row col-md-1">
                                                <input type="text" class="form-control" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ลำดับที่สำรอง</label>
                                            <div class="row col-md-1">
                                                <input type="text" class="form-control" value="0">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->

                                <h3 class="box-title">ข้อมูลการชำระเงิน</h3>
                                <hr class="m-t-0 m-b-40">

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="col-md-1">ที่</th>
                                                <th class="col-md-2">วัน เวลา ที่โอน</th>
                                                <th class="col-md-2">ช่องทางการชำระเงิน</th>
                                                <th class="col-md-2">ธนาคารที่โอน</th>
                                                <th class="col-md-2">สาขาที่โอน</th>
                                                <th class="col-md-1">หลักฐานการชำระเงิน</th>
                                                <th class="col-md-1">สถานะ</th>
                                                <th class="col-md-1 text-nowrap">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td class="text-center">31/01/65 21:00</td>
                                                <td>422 - 1 - 32443 - 0<br/>มหาวิทยาลัยราชภัฏเชียงราย<br/>ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)</td>
                                                <td>ธนาคารกรุงศรีอยุธยา จำกัด (มหาชน)</td>
                                                <td>Mobile banking</td>
                                                <td class="text-center"><a href="#" target="_blank" class="text-danger"><i class="fas fa-file-pdf" aria-hidden="true"></i></a></td>
                                                <td class="text-center">ตรวจสอบแล้ว</td>
                                                <td class="text-center">
                                                    <a href="#" onclick="editUpload(20)" class="text-danger" style="font-size:20px;">
                                                        <i class="fas fa-edit" aria-hidden="true"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">อนุมัติผลการสมัครผู้เรียน</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" class="form-horizontal">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="control-label text-end col-md-3 mb-2">ผลการสมัคร</label>
                                            <div class="row col-md-2">
                                                <select class="form-control form-select">
                                                    <option value="">รอการตรวจสอบ</option>
                                                    <option value="">อนุมัติผล</option>
                                                    <option value="">ไม่อนุมัติผล</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <hr/>
                                <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success text-white">บันทึกผล</button>
                                                        <button type="button" class="btn btn-inverse">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"> </div>
                                        </div>
                                    </div>
                            </div>
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
<script>
$(function() {
    $('#myTable').DataTable({
        "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
        }
    });
});
</script>