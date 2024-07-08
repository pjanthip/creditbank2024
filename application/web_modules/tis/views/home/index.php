<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('tis/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="row g-0">
            <div class="card col-12 p-0 box-learner-content">
                <div class="card-header">
                    <h5 class="card-title"><i class="fa-solid fa-bullhorn"></i> ข่าวประชาสัมพันธ์</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th class="col-1">#</th>
                                    <th class="col-6">ข่าวประชาสัมพันธ์</th>
                                    <th class="col-2">วันที่</th>
                                    <th class="col-3">Tool</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center" colspan="4">* ไม่มีข้อมูลข่าวสาร</td>
                                    </td>
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
                    <h5 class="card-title"><i class="fa-solid fa-bookmark"></i> เมนูด่วน</h5>
                </div>
                <div class="card-body">
                    <div class="row button-group">
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo site_url('tis/schedule')?>" class="btn btn-express w-100 btn-lg btn-outline-dark"><i class="fa-solid fa-table"></i><br/>ตารางสอน</a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo site_url('tis/checkin')?>" class="btn btn-express w-100 btn-lg btn-outline-dark"><i class="fa-solid fa-user-check"></i><br/>เช็คชื่อผู้เรียน</a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="<?php echo site_url('tis/grade')?>" class="btn btn-express w-100 btn-lg btn-outline-dark"><i class="fa-solid fa-font"></i><br/>ระบบส่งเกรด</a>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <a href="#" class="btn btn-express w-100 btn-lg btn-outline-dark"><i class="fa-solid fa-address-card"></i><br/>ข้อมูลส่วนตัว</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-0">
            
            <div class="card col-lg-12 box-learner-content p-0">
                <div class="card-header">
                    <h5 class="card-title"><i class="fa-solid fa-address-card"></i> ติดต่อสอบถาม</h5>
                </div>
                <div class="card-body">
                    <ul>
                        <li><a href="<?php echo site_url();?>" target="_blank" class="text-danger font-weight-bold">ฝ่ายงานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย</a></li>
                        <li><span class="text-success font-weight-bold">โทรศัพท์ :</span> 053 776 008</li>
                        <li><span class="text-success font-weight-bold">Line Official Account :</span> @522rhvze</li>
                        <li><span class="text-success font-weight-bold">E-Mail :</span> clli@crru.ac.th</li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>