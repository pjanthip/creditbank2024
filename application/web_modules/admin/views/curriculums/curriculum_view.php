<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/curriculums/addcurriculums');?>" class="btn btn-info d-lg-block text-white"><i class="fa fa-plus-circle mr-1"></i> เพิ่มหลักสูตรใหม่</a>
            <button type="button" class="btn btn-warning d-lg-block text-dark ml-2"><i class="fas fa-download"></i> ดาวน์โหลด</button>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-3 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="inlineFormCustomSelect">
                                        <option selected="">เลือกคณะ / สำนักวิชา</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="inlineFormCustomSelect">
                                        <option selected="">เลือกสาขาวิชา</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-5 mb-1 mt-1">
                                    <input type="text" class="form-control" value="" placeholder="คำค้นหา">
                                </div>
                                <div class="form-group col-md-1 mb-1 mt-1">
                                    <button type="button" class="btn btn-primary text-white">ค้นหา</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <?php for($i=1;$i<=100;$i++){?>
            <div class="col-md-6 col-lg-3">
                <div class="card" style="border-top:5px solid #fb9678; border-bottom:1px solid #fb9678;">
                    <div class="card-body pb-0">
                        <h5 class="card-title">#<?php echo $i;?> หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</h5>
                        <div class="curriculum-detail font-12 text-muted">
                            <div class="d-flex no-block align-items-center">
                                <span><i class="far fa-calendar-alt"></i> <span class="font-weight-bold">หลักสูตรปี :</span> 2563</span>
                            </div>
                            <div class="d-flex no-block align-items-center">
                                <span><i class="fas fa-bookmark"></i> <span class="font-weight-bold">รูปแบบหลักสูตร :</span> การฝึกอบรม</span>
                            </div>
                            <div class="d-flex no-block align-items-center">
                                <span><i class="far fa-bookmark"></i> <span class="font-weight-bold">ประเภทหลักสูตร :</span> สะสมหน่วยกิต</span>
                            </div>
                            <div class="d-flex no-block align-items-center p-t-10">
                                <span><i class="fas fa-university"></i> <span class="font-weight-bold">คณะ / สำนักวิชา :</span> สำนักวิชาวิทยาศาสตร์สุขภาพ</span>
                            </div>
                            <div class="d-flex no-block align-items-center p-t-10">
                                <span><i class="fa fa-graduation-cap"></i> <span class="font-weight-bold">สาขาวิชา :</span> สาธารณสุขศาสตร์ วท.บ.4 ปี</span>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success btn-rounded text-white waves-effect waves-light m-t-15 mb-0">ดูข้อมูลทั้งหมด</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul class="nav nav-pills card-header-pills">
                            <li class="nav-item col-md-6">
                                <a class="nav-link active text-center btn-sm" href="javascript:void(0)"><i class="fas fa-edit"></i> แก้ไข</a>
                            </li>
                            <li class="nav-item col-md-6">
                                <a class="nav-link active text-center btn-sm" href="javascript:void(0)"><i class="fas fa-trash-alt"></i> ลบ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    <!-- ============================================================== -->
    <!-- End Containner -->
    <!-- ============================================================== -->
    </div>
</div>