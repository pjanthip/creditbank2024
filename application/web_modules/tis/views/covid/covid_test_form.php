<div class="page-wrapper">
    <div class="container-fluid">
        <!-- load breadcrumb view from theme directory -->
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <!-- ----------------------------------------- -->
        <div class="card shadow rounded">
            <div class="card-header bg-danger text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><span class="ml-2">แบบฟอร์มแจ้งหลักฐานการตรวจเชื้อโควิด-19</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- using form validation from codeigniter -->
                <?php echo form_open_multipart('sis/covid/on_form_submit') ?>
                <!-- -------------------------------------- -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- hidden input text participant_id -->
                        <input type="text" id="covid_test_participant_id" name="covid_test_participant_id" value="<?php echo $participant_id ?>" readonly hidden>
                        <!-- -------------------------------- -->
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label for="covid_test_date_time">วัน / เวลาที่ตรวจเชื้อ</label>
                                <input class="form-control" type="datetime-local" id="covid_test_date_time" name="covid_test_date_time" value="<?php echo set_value('covid_test_date_time'); ?>">
                                <?php echo form_error('covid_test_date_time', '<div class="text-danger" style="font-size:14px;">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="covid_test_participant_tel">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" id="covid_test_participant_tel" name="covid_test_participant_tel" placeholder="เบอร์โทรศัพท์" value="<?php echo set_value('covid_test_participant_tel'); ?>">
                                    <?php echo form_error('covid_test_participant_tel', '<div class="text-danger" style="font-size:14px;">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- covid test method -->
                        <label for="covid_test_method">วิธีการตรวจเชื้อโควิด</label>
                        <div class="form-group mb-4" name="covid_test_method">
                            <!-- method 1 -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="covid_test_method" id="covid_test_method_1" value="ตรวจ ATK ด้วยตนเอง" checked onclick="check_covid_test_method()" <?php if (set_value('covid_test_method') === "ตรวจ ATK ด้วยตนเอง") echo "checked"; ?>>
                                <label class="form-check-label" for="covid_test_method_1">ตรวจ ATK ด้วยตนเอง</label>
                            </div>
                            <!-- method 2 -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="covid_test_method" id="covid_test_method_2" value="ตรวจ ATK โดยเจ้าหน้าที่" onclick="check_covid_test_method()" <?php if (set_value('covid_test_method') === "ตรวจ ATK โดยเจ้าหน้าที่") echo "checked"; ?>>
                                <label class="form-check-label" for="covid_test_method_2">ตรวจ ATK โดยเจ้าหน้าที่</label>
                            </div>
                            <!-- other method -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="covid_test_method" id="covid_test_method_3" value="other" onclick="check_covid_test_method()" <?php if (set_value('covid_test_method') === "other") echo "checked"; ?>>
                                <label class="form-check-label" for="covid_test_method_3">อื่นๆ ระบุ</label>
                            </div>
                            <!-- input text for detail when choose other method -->
                            <input id="other_method" name="other_method" class="form-control" type="text" placeholder="กรุณาป้อนรายละเอียดเพิ่มเติม" disabled value="<?php echo set_value('other_method'); ?>">
                            <?php echo form_error('other_method', '<div class="text-danger" style="font-size:14px;">', '</div>'); ?>
                        </div>
                        <!-- covid test result -->
                        <label for="covid_test_result">ผลการตรวจเชื้อโควิด-19</label>
                        <div class="form-group" name="covid_test_result">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="covid_test_result" id="covid_test_result_1" value="1" checked>
                                <label class="form-check-label text-success" for="covid_test_result_1">ไม่พบเชื้อโควิด-19</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="covid_test_result" id="covid_test_result_2" value="2">
                                <label class="form-check-label text-danger" for="covid_test_result_2">พบเชื้อโควิด-19</label>
                            </div>
                        </div>
                        <!-- covid test file -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="covid_test_img">กรุณาแนบไฟล์ภาพหลักฐานผลการตรวจ</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="covid_test_img" name="covid_test_img" accept="image/png, image/jpeg" value="<?php echo set_value('covid_test_img'); ?>" />
                                        <label class="custom-file-label" for="covid_test_img">ไม่ได้เลือกไฟล์ใด</label>
                                    </div>
                                    <small class="form-text text-muted">**ขนาดของไฟล์รูปภาพต้องไม่เกิด 5 Mb</small>
                                    <?php echo form_error('covid_test_img', '<div class="text-danger" style="font-size:14px;">', '</div>'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- submit -->
                <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">บันทึก</button>
                        <button type="button" class="btn btn-secondary ml-4">ย้อนกลับ</button>
                    </div>
                </div>
                <!-- close form validation from codeigniter -->
                <?php echo form_close(); ?>
                <!-- ----------------------------------------- -->
            </div>
        </div>
    </div>
</div>

<script>
    // check covid test method on radio click
    function check_covid_test_method() {
        // if method 3 is check anable input text for detail
        if (document.getElementById('covid_test_method_3').checked) {
            document.getElementById('other_method').disabled = false;
        }
        // else disable it
        else {
            document.getElementById('other_method').disabled = true;
        }
    }

    check_covid_test_method()
</script>