<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/curriculums');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left"></i> ย้อนกลับ</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">ข้อมูลหลักสูตร</h5>
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
                                    <label class="col-md-3 pt-2" for="curriculum_name_th">ชื่อหลักสูตร(ไทย)</label>
                                    <div class="col-md-9">
                                        <input type="text" id="curriculum_name_th" name="curriculum_name_th" class="form-control" placeholder="ชื่อหลักสูตร(ไทย)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="curriculum_name_en">ชื่อหลักสูตร(English)</label>
                                    <div class="col-md-9">
                                        <input type="text" id="curriculum_name_en" name="curriculum_name_en" class="form-control" placeholder="ชื่อหลักสูตร(English)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="curriculum_degree_th">ชื่อปริญญา(ไทย)</label>
                                    <div class="col-md-9">
                                        <input type="text" id="curriculum_degree_th" name="curriculum_degree_th" class="form-control" placeholder="ชื่อปริญญา(ไทย)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="curriculum_degree_en">ชื่อปริญญา(English)</label>
                                    <div class="col-md-9">
                                        <input type="text" id="curriculum_degree_en" name="curriculum_degree_en" class="form-control" placeholder="ชื่อปริญญา(English)">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="curriculum_year">หลักสูตรปี</label>
                                    <div class="col-md-2">
                                        <input type="text" id="curriculum_year" name="curriculum_year" class="form-control" placeholder="2564">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3" for="curriculum_degree_en">รายละเอียดหลักสูตร</label>
                                    <div class="col-md-9">
                                        <textarea id="curriculum_degree_en" name="curriculum_degree_en" class="form-control" rows="5" placeholder="รายละเอียดหลักสูตร"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 pt-2">รูปแบบหลักสูตร</label>
                                    <div class="col-sm-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกรูปแบบหลักสูตร</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-sm-3 pt-2">ประเภทหลักสูตร</label>
                                    <div class="col-sm-9">
                                        <select class="form-select col-sm-12 form-control">
                                            <option>เลือกประเภทหลักสูตร</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="training_name">คุณสมบัติผู้เรียน</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1 text-center align-middle">#</th>
                                                            <th class="col-md-10 text-center align-middle">คุณสมบัติผู้เรียน</th>
                                                            <th class="col-md-1 text-center align-middle">*</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center align-middle">1</td>
                                                            <td>
                                                                <textarea id="curriculum_degree_en" name="curriculum_degree_en" class="form-control" rows="2" placeholder="คุณสมบัติผู้เรียน"></textarea>
                                                            </td>
                                                            <td class="text-center align-middle">
                                                                <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light mt-2"><i class="far fa-trash-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <button type="button" class="btn btn-info waves-effect waves-light m-r-10 text-white">เพิ่มคุณสมบัติผู้เรียน</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="training_name">อาชีพหลังสำเร็จการศึกษา</label>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table id="mainTable" class="table editable-table table-bordered table-striped m-b-0">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-1 text-center align-middle">#</th>
                                                            <th class="col-md-10 text-center align-middle">ชื่ออาชีพ</th>
                                                            <th class="col-md-1 text-center align-middle">*</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center align-middle">1</td>
                                                            <td>
                                                                <input type="text" id="curriculum_year" name="curriculum_year" class="form-control" placeholder="ชื่ออาชีพ">
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light mt-2"><i class="far fa-trash-alt"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row pt-2">
                                            <button type="button" class="btn btn-info waves-effect waves-light m-r-10 text-white">เพิ่มอาชีพ</button>
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