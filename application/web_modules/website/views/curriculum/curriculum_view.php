<section id="page-title" class="page-title-pattern">
    <div class="container clearfix">
        <h1><?php echo $title_page;?></h1>
        <span><?php echo $title_page_detail;?></span>
        <?php $this->load->view('website/theme/breadcrumb');?>
    </div>
</section>
<section id="content">
    <div class="content-wrap" style="padding-top:40px;">
        <div class="container clearfix">
            <!-- START BOX SEARCH ######################################## -->
            <div class="card text-dark bg-warning mb-6">
                <div class="card-header text-center font-weight-bold">
                    <i class="fas fa-search"></i> ค้นหาหลักสูตร
                </div>
                <div class="card-body">
                    <form class="mb-0">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">คณะ / สำนักวิชา</label>
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option>1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleFormControlSelect1">สาขาวิชา</label>
                                <select class="form-select" id="exampleFormControlSelect1">
                                    <option>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-10">
                                <label for="exampleFormControlInput1">คำค้นหา</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="form-group col-md-2" style="padding-top:34px;">
                                <button type="submit" class="btn btn-primary w-100"><i class="fas fa-search"></i>ค้นหาหลักสูตร</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END BOX SEARCH ######################################## -->

            <!-- START RESULTS ######################################## -->
            <div class="row th-sarabun">
                <div class="title-block" style="border-left:none;border-right:7px solid #ffc107;text-align:right;padding:0px 20px 5px 0px;border-bottom:1px solid #ffc107;">
                    <h3>ผลการค้นหา <span class="text-danger">1 หลักสูตร</span></h3>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <img class="img-responsive" alt="user" src="<?php echo CANVAS;?>images/events/4.jpg">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">หลักสูตรการศึกษาต่อเนื่อง
                                สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</h4>
                            <div class="curriculum-detail font-12 text-muted">
                                <div class="d-flex no-block align-items-center">
                                    <span><i class="far fa-calendar-alt" aria-hidden="true"></i> <span
                                            class="font-weight-bold">หลักสูตรปี :</span> 2563</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><i class="fas fa-bookmark" aria-hidden="true"></i> <span
                                            class="font-weight-bold">รูปแบบ
                                            :</span> การฝึกอบรม</span>
                                </div>
                                <div class="d-flex no-block align-items-center">
                                    <span><i class="far fa-bookmark" aria-hidden="true"></i> <span
                                            class="font-weight-bold">ประเภท
                                            :</span> สะสมหน่วยกิต</span>
                                </div>
                                <div class="d-flex no-block align-items-center p-t-10">
                                    <span><i class="fas fa-university" aria-hidden="true"></i>
                                        สำนักวิชาวิทยาศาสตร์สุขภาพ</span>
                                </div>
                                <div class="d-flex no-block align-items-center p-t-10">
                                    <span><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                        สาธารณสุขศาสตร์ วท.บ.4 ปี</span>
                                </div>
                            </div>
                            <button
                                class="btn btn-warning btn-rounded text-dark waves-effect waves-light mt-3">รายละเอียด</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</section><!-- #content end -->