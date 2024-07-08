<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>

        <div class="row g-0">
            <div class="card col-12 p-0 box-learner-content">
                <div class="card-header">
                    <h5 class="card-title"><i class="fa-solid fa-bullhorn"></i> แผนการเรียน</h5>
                </div>
                <div class="card-body fs-16">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th class="col-2">ชุดฝึกอบรมที่</th>
                                    <th class="col-8">ชื่อชุดฝึกอบรม</th>
                                    <th class="col-2">แผนการเรียน</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00001.pdf');?>" target="_blank" class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00002.pdf');?>" target="_blank"  class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>อนามัยการเจริญพันธุ์และโภชนศาสตร์</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00003.pdf');?>" target="_blank"  class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>กระบวนการสร้างเสริมสุขภาพในชุมชน</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00004.pdf');?>" target="_blank"  class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>อาชีวอนามัยสิ่งแวดล้อม</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00005.pdf');?>" target="_blank"  class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>บริหารสาธารณสุขและกฏหมายสาธารณสุข</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00006.pdf');?>" target="_blank" class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>สถิติและการวิจัยทางด้านสาธารณสุข</td>
                                    <td class="text-center">
                                    <a href="<?php echo base_url('assets/files/C00001-T00007.pdf');?>"  target="_blank"  class="btn waves-effect waves-light btn-primary">รายละเอียด</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <!--<div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="far fa-list-alt"></i><span class="ml-2">ข้อมูลแผนการเรียน</span></h5>
                    </div>
                    <a href="<?php echo site_url('sis/report/generateCoursePDF'); ?>" target="_blank" class="btn btn-success ml-auto">
                        <i class="bi bi-printer"></i> Print Friendly
                    </a>
                </div>
            </div>
            <div class="card-body">
                <h5>
                    <strong>
                        แผนการเรียนสาขาวิชา วิทยาการคอมพิวเตอร์ วท.บ.4ปี หมู่ 1 ประเภท ปริญญาตรี ภาคปกติ (เรียนวันจันทร์-วันศุกร์) เข้าเรียน 1/2560
                    </strong>
                </h5>
                <hr><br>
                <h5 class="text-center">
                    <strong>
                        ภาคเรียนที่ 1/2560
                    </strong>
                </h5>
                <table class="table table-sm table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ที่</th>
                            <th scope="col">รหัสวิชา</th>
                            <th scope="col">ชื่อวิชา</th>
                            <th scope="col">น(ท-ป-อ)</th>
                            <th scope="col">กลุ่มวิชา</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>CIT1002</td>
                            <td>คณิตศาสตร์ดีสครีต</td>
                            <td>3(3-0-6)</td>
                            <td>วิชาแกน</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>CIT1535</td>
                            <td>อัลกอริทึมและการเขียนผังงาน</td>
                            <td>3(2-2-5)</td>
                            <td>วิชาเอกบังคับ</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>GEN1112</td>
                            <td>เทคโนโลยีสารสนเทศเพื่อการสื่อสารและการเรียนรู้</td>
                            <td>3(3-0-6)</td>
                            <td>กลุ่มวิชาคณิตศาสตร์ วิทยาศาสตร์และเทคโนโลยี (เลือกเรียน)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>-->
    </div>
</div>