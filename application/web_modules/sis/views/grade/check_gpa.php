<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-font"></i><span class="ml-2">ผลการเรียน (ใช้แสดงตรวจสอบการคำนวณเกรดเฉลี่ยสะสม)</span></h5>
                    </div>
                    <a href="<?php echo site_url('sis/grade/index'); ?>" target="_self" class="btn btn-success ml-auto">
                        กลับไปหน้าแสดงผลการเรียน
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row bg-info p-2 rounded text-white" style="font-size: 18px;">
                    <div class="col-md-12 ">
                        ปีระเบียบการวัดผล 2560
                    </div>
                </div><br>
                <div class="row bg-success p-2 rounded text-white" style="font-size: 18px;">
                    <div class="col-md-12 ">
                        รวมหน่วยกิตเรียนสะสมและยกเว้น[TTCR ALL] : 138 หน่วยกิตเรียนสะสม [TCR] : 138 คิดเป็นเกรดเฉลี่ยสะสม [TTG/TC] : 435.5/131 = 3.32 --- 3.324427480916
                    </div>
                </div><br>
                <div class="scrollTable">
                    <table class="table table-hover" style="font-size: 12px;">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">ที่</th>
                                <th scope="col" style="min-width: 200px;">กลุ่มวิชา</th>
                                <th scope="col" style="min-width: 200px;">ชื่อวิชา</th>
                                <th scope="col">ภาคเรียนที่</th>
                                <th scope="col">รหัสวิชา</th>
                                <th scope="col" style="min-width: 100px;">น(ท-ป-อ)</th>
                                <th scope="col" style="min-width: 150px;">ตรวจสอบ</th>
                                <th scope="col">รหัสเกรดที่บันทึก</th>
                                <th scope="col">ชื่อเกรดตามระเบียบ</th>
                                <th scope="col">GP</th>
                                <th scope="col">CD</th>
                                <th scope="col">TG</th>
                                <th scope="col">TTG</th>
                                <th scope="col">TC</th>
                                <th scope="col">TCR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ (บังคับเรียน)</td>
                                <td>พลเมืองดี </br> Good Citizen</td>
                                <td class="text-center">1/2561</td>
                                <td class="text-center">GEN1131</td>
                                <td class="text-center">3(3-0-6)</td>
                                <td class="text-center" style="font-size: 12px;"><span class="bg-warning rounded text-white p-1">-TCR-TC-TTG</span></td>
                                <td class="text-center">A</td>
                                <td class="text-center">A</td>
                                <td class="text-center">4</td>
                                <td class="text-center">3</td>
                                <td class="text-center">12</td>
                                <td class="text-center"><span class="bg-info rounded text-white p-1">12</span></td>
                                <td class="text-center"><span class="bg-success rounded text-white p-1">3</span></td>
                                <td class="text-center"><span class="bg-dark rounded text-white p-1">3</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ (บังคับเรียน)</td>
                                <td>การสื่อสารภาษาอังกฤษเบื้องต้น </br> Fundamental English Communication</td>
                                <td class="text-center">1/2561</td>
                                <td class="text-center">GEN1131</td>
                                <td class="text-center">3(3-0-6)</td>
                                <td class="text-center" style="font-size: 12px;"><span class="bg-warning rounded text-white p-1">-TCR-TC-TTG</span></td>
                                <td class="text-center">A</td>
                                <td class="text-center">A</td>
                                <td class="text-center">4</td>
                                <td class="text-center">3</td>
                                <td class="text-center">12</td>
                                <td class="text-center"><span class="bg-info rounded text-white p-1">12</span></td>
                                <td class="text-center"><span class="bg-success rounded text-white p-1">3</span></td>
                                <td class="text-center"><span class="bg-dark rounded text-white p-1">3</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ (บังคับเรียน)</td>
                                <td>พลเมืองดี </br> Good Citizen</td>
                                <td class="text-center">1/2561</td>
                                <td class="text-center">GEN1131</td>
                                <td class="text-center">3(3-0-6)</td>
                                <td class="text-center" style="font-size: 12px;"><span class="bg-warning rounded text-white p-1">-TCR-TC-TTG</span></td>
                                <td class="text-center">A</td>
                                <td class="text-center">A</td>
                                <td class="text-center">4</td>
                                <td class="text-center">3</td>
                                <td class="text-center">12</td>
                                <td class="text-center"><span class="bg-info rounded text-white p-1">12</span></td>
                                <td class="text-center"><span class="bg-success rounded text-white p-1">3</span></td>
                                <td class="text-center"><span class="bg-dark rounded text-white p-1">3</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ (บังคับเรียน)</td>
                                <td>พลเมืองดี </br> Good Citizen</td>
                                <td class="text-center">1/2561</td>
                                <td class="text-center">GEN1131</td>
                                <td class="text-center">3(3-0-6)</td>
                                <td class="text-center" style="font-size: 12px;"><span class="bg-warning rounded text-white p-1">-TCR-TC-TTG</span></td>
                                <td class="text-center">A</td>
                                <td class="text-center">A</td>
                                <td class="text-center">4</td>
                                <td class="text-center">3</td>
                                <td class="text-center">12</td>
                                <td class="text-center"><span class="bg-info rounded text-white p-1">12</span></td>
                                <td class="text-center"><span class="bg-success rounded text-white p-1">3</span></td>
                                <td class="text-center"><span class="bg-dark rounded text-white p-1">3</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ (บังคับเรียน)</td>
                                <td>พลเมืองดี </br> Good Citizen</td>
                                <td class="text-center">1/2561</td>
                                <td class="text-center">GEN1131</td>
                                <td class="text-center">3(3-0-6)</td>
                                <td class="text-center" style="font-size: 12px;"><span class="bg-warning rounded text-white p-1">-TCR-TC-TTG</span></td>
                                <td class="text-center">A</td>
                                <td class="text-center">A</td>
                                <td class="text-center">4</td>
                                <td class="text-center">3</td>
                                <td class="text-center">12</td>
                                <td class="text-center"><span class="bg-info rounded text-white p-1">12</span></td>
                                <td class="text-center"><span class="bg-success rounded text-white p-1">3</span></td>
                                <td class="text-center"><span class="bg-dark rounded text-white p-1">3</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ (บังคับเรียน)</td>
                                <td>พลเมืองดี </br> Good Citizen</td>
                                <td class="text-center">1/2561</td>
                                <td class="text-center">GEN1131</td>
                                <td class="text-center">3(3-0-6)</td>
                                <td class="text-center" style="font-size: 12px;"><span class="bg-warning rounded text-white p-1">-TCR-TC-TTG</span></td>
                                <td class="text-center">A</td>
                                <td class="text-center">A</td>
                                <td class="text-center">4</td>
                                <td class="text-center">3</td>
                                <td class="text-center">12</td>
                                <td class="text-center"><span class="bg-info rounded text-white p-1">12</span></td>
                                <td class="text-center"><span class="bg-success rounded text-white p-1">3</span></td>
                                <td class="text-center"><span class="bg-dark rounded text-white p-1">3</span></td>
                            </tr>
                        </tbody>
                    </table><br>
                </div>
                <div class="row bg-warning p-3 rounded" style="font-size: 16px;">
                    <div class="col-md-12 ">
                        <ul>
                            <li>GP : ค่าระดับเกรด</li>
                            <li>CD : จำนวนหน่วยกิต</li>
                            <li>TG : จำนวนของผลคูณเกรดและหน่วยกิต</li>
                            <li>TTG : จำนวนสะสมของผลคูณเกรดและหน่วยกิต</li>
                            <li>TC : หน่วยกิตสะสมที่ใช้ในการคำนวณ</li>
                            <li>TCR : หน่วยกิตสะสมที่ไม่ใช้ในการคำนวณเกรดเฉลี่ย</li>
                            <li><strong>*</strong> : วิชาที่มีการเรียนซ้ำ</li>
                            <li><strong>-TCR</strong> : แถวหรือวิชานี้มีการคิดในช่อง TCR </li>
                            <li><strong>-TCR-TC-TTG</strong> : แถวหรือวิชานี้มีการคิดในช่อง TCR TC TTG</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row bg-warning p-3 rounded" style="font-size: 16px;">
                    <div class="col-md-12 ">
                        โปรดคิดเกรดเฉลี่ยด้วยตนเองอีกครั้ง **กรณีที่ชื่อเกรดตามระเบียบวัดผลไม่แสดงทางสำนักส่งเสริมวิชาการและงานทะเบียนอยู่ระหว่างการปรับเกรดให้ตรงกับระเบียบวัดผล ในการคิดเกรดเฉลี่ยอาจมีความผิดพลาด ดังนั้นให้นักศึกษาตรวจสอบคิดเกรดเฉลี่ยด้วยตนเองไปก่อนจนกว่าทางสำนักส่งเสริมวิชาการฯ จะทำการปรับเกรดให้แล้วเสร็จ**
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>