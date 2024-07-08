<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/training');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left"></i> ย้อนกลับ</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">ข้อมูลชุดฝึกอบรม</h5>
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
                                    <label class="col-md-3 pt-2" for="training_name">ชื่อชุดฝึกอบรม</label>
                                    <div class="col-md-9">
                                        <input type="text" id="training_name" name="training_name" class="form-control" placeholder="ชื่อหลักสูตร(ไทย)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_objective">วัตถุประสงค์</label>
                                    <div class="col-md-9">
                                        <textarea id="training_objective" name="training_objective" class="form-control" rows="5" placeholder="วัตถุประสงค์"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="training_scope">ขอบเขต</label>
                                    <div class="col-md-9">
                                        <textarea id="training_scope" name="training_scope" class="form-control" rows="5" placeholder="ขอบเขต"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="training_name">วิชาเทียบโอน</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1 text-center">#</th>
                                                            <th class="col-md-2 text-center">รหัสวิชา</th>
                                                            <th class="col-md-3 text-center">ชื่อวิชา</th>
                                                            <th class="col-md-2 text-center">จำนวนหน่วยกิต</th>
                                                            <th class="col-md-4 text-center">รายละเอียดรายวิชา</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for($i=1;$i<=1;$i++){?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $i;?><br/><button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light mt-2"><i class="far fa-trash-alt"></i></button></td>
                                                            <td>
                                                                <input type="text" id="subject_code" name="subject_code" class="form-control text-center" placeholder="รหัสวิชา">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="subject_name" name="subject_name" class="form-control" placeholder="ชื่อวิชา">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="subject_name" name="subject_name" class="form-control text-center" placeholder="0(0-0-0)">
                                                            </td>
                                                            <td>
                                                                <textarea id="subject_detail" name="subject_detail" class="form-control" rows="10" placeholder="รายละเอียดรายวิชา"></textarea>
                                                            </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <button type="button" class="btn btn-info waves-effect waves-light m-r-10 text-white">เพิ่มวิชาเทียบโอน</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="training_name">หน่วยการเรียนรู้</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1 text-center align-middle">ที่</th>
                                                            <th class="col-md-4 text-center align-middle">ชื่อหน่วยการเรียนรู้</th>
                                                            <th class="col-md-1 text-center align-middle">จำนวนชั่วโมง</th>
                                                            <th class="col-md-2 text-center align-middle">กิจกรรม<br/>การเรียนรู้</th>
                                                            <th class="col-md-2 text-center align-middle">สื่อ/อุปกรณ์</th>
                                                            <th class="col-md-2 text-center align-middle">การวัด<br/>และประเมินผล</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php for($i=1;$i<=1;$i++){?>
                                                        <tr>
                                                            <td class="text-center">
                                                                <input type="text" id="subject_code" name="subject_code" class="form-control text-center" placeholder="1"><br/>
                                                                <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light mt-2"><i class="far fa-trash-alt"></i></button>
                                                            </td>
                                                            <td>
                                                                <input type="text" id="subject_code" name="subject_code" class="form-control" placeholder="ชื่อหน่วยการเรียนรู้">
                                                            </td>
                                                            <td>
                                                                <input type="text" id="subject_name" name="subject_name" class="form-control text-center" placeholder="0">
                                                            </td>
                                                            <td>
                                                            <textarea id="subject_detail" name="subject_detail" class="form-control" rows="10" placeholder="กิจกรรมการเรียนรู้"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea id="subject_detail" name="subject_detail" class="form-control" rows="10" placeholder="สื่อ/อุปกรณ์"></textarea>
                                                            </td>
                                                            <td>
                                                                <textarea id="subject_detail" name="subject_detail" class="form-control" rows="10" placeholder="รายละเอีการวัดและประเมินผลยดรายวิชา"></textarea>
                                                            </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <button type="button" class="btn btn-info waves-effect waves-light m-r-10 text-white">เพิ่มหน่วยการเรียนรู้</button>
                                        </div>
                                    </div>
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