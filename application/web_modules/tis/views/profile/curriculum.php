<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <div class="row g-0">
                <div class="card col-12 p-0 box-learner-content">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fa-solid fa-school-flag"></i> ข้อมูลหลักสูตร</h5>
                    </div>
                    <div class="card-body fs-16">
                    <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
        <div class="responsive-wrapper 
            responsive-wrapper-wxh-572x612"
            style="-webkit-overflow-scrolling: touch; overflow: auto;">

            <iframe src="<?php echo base_url('assets/files/course_structure.pdf'); ?>"> 
            <p style="font-size: 110%;"><em><strong>ERROR: </strong>  
        An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
            </iframe>
            
        </div>
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
                        <h5><i class="fas fa-book-open"></i><span class="ml-2">ข้อมูลหลักสูตร</span></h5>
                    </div>
                    <a href="<?php echo site_url('sis/report/generateCurriculumPDF'); ?>" target="_blank" class="btn btn-success ml-auto">
                        <i class="bi bi-printer"></i> Print Friendly
                    </a>
                </div>
            </div>
            <div class="card-body">
                <h5>
                    <strong>
                        มหาวิทยาลัยราชภัฏเชียงราย<br>
                        หลักสูตร <?php echo $curriculum_name ?> สาขาวิชา <?php echo $curriculum_major_name ?> <br>
                        <?php echo $curriculum_eng_name . " " ?> <?php echo $curriculum_major_year ?>
                    </strong>
                </h5>
                <hr>
                <ul><strong>ก) หมวดวิชาการศึกษาทั่วไป 30 หน่วยกิต</strong>
                    <ul>
                        <li><strong>1. กลุ่มวิชาคณิตศาสตร์ วิทยาศาสตร์และเทคโนโลยี 6 นก.</strong></li>
                        <ul>
                            <li><strong>- บังคับเรียน 3 นก.</strong></li><i>บังคับเรียน 1 รายวิชา จำนวน 3 หน่วยกิต </i> <br>
                            <table style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;" width="30"> ที่ </th>
                                        <th style="text-align:center;"> รหัสวิชา </th>
                                        <th width="800" style="text-align:left"> ชื่อวิชา </th>
                                        <th style="text-align:center;" width="100"> น(ท-ป-อ) </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">1. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1111 </td>
                                        <td>วิทยาศาสตร์และคณิตศาสตร์ในชีวิตประจำวัน<br>Essential Science and Mathematics in Daily Life</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                </tbody>
                            </table>
                            <li><strong>- เลือกเรียน 3 นก.</strong></li><i>เลือกเรียน จากรายวิชาใดวิชาหนึ่งต่อไปนี้อีกไม่น้อยกว่า 3 หน่วยกิต</i> <br>
                            <table style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;" width="30"> ที่ </th>
                                        <th style="text-align:center;"> รหัสวิชา </th>
                                        <th width="800" style="text-align:left"> ชื่อวิชา </th>
                                        <th style="text-align:center;" width="100"> น(ท-ป-อ) </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">1. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1112 </td>
                                        <td>เทคโนโลยีสารสนเทศเพื่อการสื่อสารและการเรียนรู้<br>Information Technology for Communication and Learning</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">2. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1113 </td>
                                        <td>สุขภาพเพื่อชีวิต<br>Healthy Life</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                        <li><strong>2. กลุ่มวิชาภาษาและการสื่อสาร 15 นก.</strong></li><i>กลุ่มวิชาภาษาและการสื่อสาร ให้เรียนไม่น้อยกว่า 15 หน่วยกิต โดยเป็นรายวิชาบังคับเรียนทุกวิชา ดังนี้</i> <br>
                        <table style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="text-align:center;" width="30"> ที่ </th>
                                    <th style="text-align:center;"> รหัสวิชา </th>
                                    <th width="800" style="text-align:left"> ชื่อวิชา </th>
                                    <th style="text-align:center;" width="100"> น(ท-ป-อ) </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">1. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1121 </td>
                                    <td>การสื่อสารภาษาอังกฤษเบื้องต้น<br>Fundamental English Communication</td>
                                    <td style="text-align:center;vertical-align: top;">2(1-2-3) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">2. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1122 </td>
                                    <td>การเขียนภาษาอังกฤษในชีวิตประจำวัน<br>English Writing in Daily Life</td>
                                    <td style="text-align:center;vertical-align: top;">2(1-2-3) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">3. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1123 </td>
                                    <td>การอ่านภาษาอังกฤษในชีวิตประจำวัน<br>English Reading in Daily Life</td>
                                    <td style="text-align:center;vertical-align: top;">2(1-2-3) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">4. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1124 </td>
                                    <td>ท่องโลกด้วยภาษาอังกฤษ<br>English Language as Windows to the World</td>
                                    <td style="text-align:center;vertical-align: top;">2(1-2-3) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">5. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1125 </td>
                                    <td>ภาษาอังกฤษเพื่ออาชีพ<br>English for Careers</td>
                                    <td style="text-align:center;vertical-align: top;">2(1-2-3) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">6. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1126 </td>
                                    <td>ภาษาอังกฤษในศตวรรษที่ 21<br>English in the 21st Century</td>
                                    <td style="text-align:center;vertical-align: top;">2(1-2-3) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">7. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1127 </td>
                                    <td>ภาษาไทยเพื่อการสื่อสารในศตวรรษที่ 21<br>Thai for Communication in the 21st Century</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                            </tbody>
                        </table>
                        <li><strong>3. กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ 6 นก.</strong></li>
                        <ul>
                            <li><strong>- บังคับเรียน 3 นก.</strong></li><i>บังคับเรียน 1 รายวิชา จำนวน 3 หน่วยกิต</i> <br>
                            <table style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;" width="30"> ที่ </th>
                                        <th style="text-align:center;"> รหัสวิชา </th>
                                        <th width="800" style="text-align:left"> ชื่อวิชา </th>
                                        <th style="text-align:center;" width="100"> น(ท-ป-อ) </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">1. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1131 </td>
                                        <td>พลเมืองดี<br>Good Citizen</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                </tbody>
                            </table>
                            <li><strong>- เลือกเรียน 3 นก.</strong></li><i>เลือกเรียน จากรายวิชาใดวิชาหนึ่งต่อไปนี้อีกไม่น้อยกว่า 3 หน่วยกิต</i> <br>
                            <table style="width:100%;">
                                <thead>
                                    <tr>
                                        <th style="text-align:center;" width="30"> ที่ </th>
                                        <th style="text-align:center;"> รหัสวิชา </th>
                                        <th width="800" style="text-align:left"> ชื่อวิชา </th>
                                        <th style="text-align:center;" width="100"> น(ท-ป-อ) </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">1. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1132 </td>
                                        <td>วิถีวัฒนธรรม<br>Cultural Way</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">2. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1133 </td>
                                        <td>ปรัชญาของเศรษฐกิจพอเพียง<br>Sufficiency Economy Philosophy</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">3. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1135 </td>
                                        <td>สุนทรียสร้างสรรค์<br>Creative Aesthetics</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">4. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1136 </td>
                                        <td>การเมืองและกฎหมายโลก<br>World Politics and Laws</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                    <tr style="border-bottom:1px solid #ccc">
                                        <td style="text-align:center;vertical-align: top;">5. </td>
                                        <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1137 </td>
                                        <td>สมรรถนะของบัณฑิต<br>Competency of Graduate</td>
                                        <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                    </tr>
                                </tbody>
                            </table>
                        </ul>
                        <li><strong>4. กลุ่มวิชาบูรณาการและเสริมสร้างทักษะชีวิต 3 นก.</strong></li><i>กลุ่มวิชาบูรณาการและเสริมสร้างทักษะชีวิต ให้เรียนไม่น้อยกว่า 3 หน่วยกิต ให้เลือกเรียนจากรายวิชาใดวิชาหนึ่งต่อไปนี้<br>
                        </i> <br>
                        <table style="width:100%;">
                            <thead>
                                <tr>
                                    <th style="text-align:center;" width="30"> ที่ </th>
                                    <th style="text-align:center;"> รหัสวิชา </th>
                                    <th width="800" style="text-align:left"> ชื่อวิชา </th>
                                    <th style="text-align:center;" width="100"> น(ท-ป-อ) </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">1. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1141 </td>
                                    <td>การออกกำลังกายเพื่อชีวิต<br>Exercise for Life</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">2. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1142 </td>
                                    <td>พลังงานกับการดำเนินชีวิต<br>Energy for Life</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">3. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1143 </td>
                                    <td>ประชาคมอาเซียน<br>ASEAN Community</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">4. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1144 </td>
                                    <td>การเมืองการปกครองของไทย<br>Thai Politics and Government</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">5. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1145 </td>
                                    <td>กฎหมายเกี่ยวกับชีวิตประจำวัน<br>Law in Daily Life</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">6. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1146 </td>
                                    <td>การรู้เท่าทันการสื่อสาร<br>Communication Literacy</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">7. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1147 </td>
                                    <td>การเป็นผู้ประกอบการในเขตเศรษฐกิจพิเศษ<br>Entrepreneurship in Special Economic Zone</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">8. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1148 </td>
                                    <td>สิ่งแวดล้อมในโลกปัจจุบัน<br>Environment in Today’s World</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">9. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1204 </td>
                                    <td>ภาษาจีนเพื่อการสื่อสารเบื้องต้น<br>Chinese for Basic Communication</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">10. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1206 </td>
                                    <td>ภาษาญี่ปุ่นเพื่อการสื่อสารเบื้องต้น<br>Japanese for Basic Communication</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">11. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1207 </td>
                                    <td>ภาษาพม่าเพื่อการสื่อสารเบื้องต้น<br>Burmese for Basic Communication</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">12. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1209 </td>
                                    <td>ภาษาเกาหลีเพื่อการสื่อสารเบื้องต้น<br>Korean for Basic Communication</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                                <tr style="border-bottom:1px solid #ccc">
                                    <td style="text-align:center;vertical-align: top;">13. </td>
                                    <td style="text-align:center;vertical-align: top;font-weight: bold;">GEN1210 </td>
                                    <td>ภาษาเวียดนามเพื่อการสื่อสารเบื้องต้น<br>Vietnamese for Basic Communication</td>
                                    <td style="text-align:center;vertical-align: top;">3(3-0-6) </td>
                                </tr>
                            </tbody>
                        </table>
                    </ul>
                </ul>
            </div>
        </div>-->
    </div>
</div>


<style>
    /* CSS for responsive iframe */
/* ========================= */

/* outer wrapper: set max-width & max-height; max-height greater than padding-bottom % will be ineffective and height will = padding-bottom % of max-width */
#Iframe-Master-CC-and-Rs {
  max-width: 95%;
  max-height: 100%; 
  overflow: hidden;
}

/* inner wrapper: make responsive */
.responsive-wrapper {
  position: relative;
  height: 0;    /* gets height from padding-bottom */
  
  /* put following styles (necessary for overflow and scrolling handling on mobile devices) inline in .responsive-wrapper around iframe because not stable in CSS:
    -webkit-overflow-scrolling: touch; overflow: auto; */
  
}
 
.responsive-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  
  margin: 0;
  padding: 0;
  border: none;
}

/* padding-bottom = h/w as % -- sets aspect ratio */
/* YouTube video aspect ratio */
.responsive-wrapper-wxh-572x612 {
  padding-bottom: 107%;
}

/* general styles */
/* ============== */
.set-border {
  border: 5px inset #4f4f4f;
}
.set-box-shadow { 
  -webkit-box-shadow: 4px 4px 14px #4f4f4f;
  -moz-box-shadow: 4px 4px 14px #4f4f4f;
  box-shadow: 4px 4px 14px #4f4f4f;
}
.set-padding {
  padding: 40px;
}
.set-margin {
  margin: 30px;
}
.center-block-horiz {
  margin-left: auto !important;
  margin-right: auto !important;
}

</style>