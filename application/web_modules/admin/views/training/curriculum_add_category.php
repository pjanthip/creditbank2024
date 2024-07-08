<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/curriculums/category');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left"></i> ย้อนกลับ</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase">ข้อมูลรูปแบบหลักสูตร</h5>
                        <form class="form-material m-t-40">
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-3 pt-2" for="curriculum_category_name">รูปแบบหลักสูตร</label>
                                    <div class="col-md-9">
                                        <input type="text" id="curriculum_category_name" name="curriculum_category_name" class="form-control" placeholder="รูปแบบหลักสูตร">
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