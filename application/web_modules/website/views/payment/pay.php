<div class="pcoded-main-container">
    <div class="pcoded-content mt-0">
        <div class="page-wrapper">
            <!-- [ Main Content ] start -->
            
            <?php
                if(date("Y-m-d H:i:s")>=date($training->training_register_pay_start)):
            ?>
            <div class="row">
                <!-- [ horizontal-layout ] start -->
                <!-- <div class="col-sm-12 ">
                    <div class="card col-md-12">
                        <h5 class="card-header"><i class="far fa-credit-card"></i> ช่องทางการชำระเงิน</h5>
                        <div class="card-body text-center">
                            <?php //if($training->training_register_pay_start)?>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-4 p-5">
                                    <img style="width:100%;"
                                        src="<?php echo base_url('assets/images/icon/krungsri.png'); ?>" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped " style="font-size:24px;">
                                        <thead>
                                            <tr>
                                                <th>รายการ</th>
                                                <th>รายละเอียด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center font-weight-bold">ธนาคาร</td>
                                                <td class="text-left">กรุงศรีอยุธยา</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">สาขา</td>
                                                <td class="text-left">มหาวิทยาลัยราชภัฏเชียงราย</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">ชื่อบัญชี</td>
                                                <td class="text-left">มหาวิทยาลัยราชภัฏเชียงราย</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">เลขที่บัญชี</td>
                                                <td class="text-left">422 - 1 - 32443 - 0</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">QR CODE</td>
                                                <td class="text-left">-</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">จำนวนเงินที่ต้องชำระ</td>
                                                <td class="text-left font-weight-bold text-danger"><?php echo number_format($training->training_register_price, 2)?> บาท</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-sm-12 ">
                    <div class="card col-md-12">
                        <h5 class="card-header"><i class="far fa-credit-card"></i> ช่องทางการชำระเงิน</h5>
                        <div class="card-body text-center">
                            <?php //if($training->training_register_pay_start)?>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-4 p-5">
                                    <img style="width:100%;"
                                        src="<?php echo base_url('assets/images/icon/logo-krungthai.png'); ?>" />
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped " style="font-size:24px;">
                                        <thead>
                                            <tr>
                                                <th>รายการ</th>
                                                <th>รายละเอียด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center font-weight-bold">ธนาคาร</td>
                                                <td class="text-left">กรุงไทย</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">สาขา</td>
                                                <td class="text-left">เชียงราย</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">ชื่อบัญชี</td>
                                                <td class="text-left">มหาวิทยาลัยราชภัฏเชียงราย</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">ประเภทบัญชี</td>
                                                <td class="text-left">กระแสรายวัน</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">เลขที่บัญชี</td>
                                                <td class="text-left">504 - 6 - 06683 - 1</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">QR CODE</td>
                                                <td class="text-left">-</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center font-weight-bold">จำนวนเงินที่ต้องชำระ</td>
                                                <td class="text-left font-weight-bold text-danger"><?php echo number_format($training->training_register_price, 2)?> บาท</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 ">
                    <div class="card col-md-12">
                        <h5 class="card-header"><i class="far fa-credit-card"></i> แจ้งชำระเงิน</h5>
                        <div class="card-body text-center">
                            <form class="form-horizontal" id="postForm" name="postForm" role="form"
                                accept-charset="utf-8" method="post"
                                action="<?php echo site_url('website/pay/save_register_pay_66_v5'); ?>"
                                enctype="multipart/form-data">
                                <input type="hidden" name="training_member_id" id="training_member_id"
                                    value="<?php echo $training->training_member_id?>">

                                    
                                <div class="row">
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4">รหัสบัตรประชาชน : </div>
                                        <div class="col-md-8 mb-4">
                                            <input type="text" id="training_member_idcard"
                                                name="training_member_idcard"
                                                class="form-control th-sarabun form-control-sm"
                                                value="<?php echo $training->training_member_idcard?>" readonly="readonly"></div>
                                    </div>
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4">ชื่อ - สกุล : </div>
                                        <div class="col-md-8 mb-4"><input type="text" id="curriculum_name"
                                                name="curriculum_name" class="form-control th-sarabun form-control-sm"
                                                value="<?php echo $register->prefix_name_full_th.''.$register->register_member_fname_th.' '.$register->register_member_lname_th ?>"
                                                disabled></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4">หลักสูตร : </div>
                                        <div class="col-md-8 mb-4"><input type="text" id="curriculum_name_th"
                                                name="curriculum_name_th"
                                                class="form-control th-sarabun form-control-sm"
                                                value="<?php echo $training->curriculum_name_th?>" disabled></div>
                                    </div>
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4">ชุดฝึกอบรม : </div>
                                        <div class="col-md-8 mb-4"><input type="text" id="training_name"
                                                name="training_name" class="form-control th-sarabun form-control-sm"
                                                value="<?php echo $training->training_name?>" disabled></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4"><span
                                                class="text-danger">*</span> ธนาคารที่โอน : </div>
                                        <div class="col-md-8 mb-4">

                                            <?php echo form_dropdown('bank_id', ['' => 'เลือกธนาคาร'] + $tb_banks, '', ['class' => 'select2 education_level_id form-control form-control-sm']); ?>

                                        </div>
                                    </div>
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4"><span
                                                class="text-danger">*</span> สาขาที่โอน : </div>
                                        <div class="col-md-8 mb-4"><input type="text" id="training_member_bank"
                                                name="training_member_bank"
                                                class="form-control th-sarabun form-control-sm"
                                                placeholder="สาขาที่โอน"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4"><span
                                                class="text-danger">*</span> วันที่โอน : </div>
                                        <div class="col-md-8 mb-4 row">
                                            <select id="day" name="day"
                                                class="form-control form-control-sm col-md-2 text-center">
                                                <option value="">เลือก</option>
                                                <?php
                                                    for($i=1;$i<=31;$i++){
                                                        echo '<option value="'.$i.'">'.$i.'</option>';
                                                    }
                                                ?>

                                            </select>
                                            <select id="month" name="month"
                                                class="form-control form-control-sm col-md-7 text-center">
                                                <option value="">เลือก</option>
                                                <?php
                                                    $month = array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
                                                    for($i=1;$i<=12;$i++){
                                                        echo '<option value="'.($i).'">'.$month[$i-1].'</option>';
                                                    }
                                                ?>
                                            </select>
                                            <select id="year" name="year"
                                                class="form-control form-control-sm col-md-3 text-center">
                                                <option value="">เลือก</option>
                                                <?php
                                                    for($i=2023;$i<=2023;$i++){
                                                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                                    }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 row">
                                        <div class="col-md-4 text-right font-weight-bold mb-4"><span
                                                class="text-danger">*</span> เวลาที่โอน : </div>
                                        <div class="col-md-8 mb-4 row">
                                            <select id="time1" name="time1"
                                                class="form-control form-control-sm col-md-3 text-center">
                                                <option value="">ชั่วโมง</option>
                                                <?php
                                                    for($i=0;$i<=23;$i++){
                                                        echo '<option value="'.$i.'">'.sprintf("%02d",$i).'</option>';
                                                    }
                                                ?>

                                            </select>
                                            <select id="time2" name="time2"
                                                class="form-control form-control-sm col-md-2 text-center">
                                                <option value="">นาที</option>
                                                <?php
                                                    for($i=0;$i<=59;$i++){
                                                        echo '<option value="'.$i.'">'.sprintf("%02d",$i).'</option>';
                                                    }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                
                                    <div class="col-md-12 row">
                                        <div class="col-md-2 text-right font-weight-bold "><span
                                                class="text-danger">*</span> หลักฐานการชำระเงิน : </div>
                                        <div class="col-md-8 ">
                                            <input id="file-1" type="file" name="file" class="uploadfile">
                                        </div>
                                    </div>
                                   
                            </form>
                        </div>


                        <br><br>
                        <div class="text-right p-4 pt-5">
                            <button type="button" id="bt-payment"
                                class="btn btn-primary text-white">แจ้งชำระเงิน</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php else:?>
            <div class="row">
                <div class="card col-md-12">
                        <div class="card-body text-center">
                            <div class="text-center" style="padding:150px 0;">
                                <div class="text-center text-secondary font-weight-bold"># ชุดฝึกอบรมที่ P2 สุขศึกษาและการสื่อสารทางด้านสาธารณสุข</div>
                                <h1 class="p-3 display-3 font-weight-bold" style="color:#FFCD00;">กำหนดชำระค่าลงทะเบียน</h1>
                                <h3 class="p-2 text-danger">(<?php echo format_datetimelong($training->training_register_pay_start)." ถึง ".format_datetimelong($training->training_register_pay_end);?>)</h3>
                                <h3 class="p-2">หากมีข้อสงสัยติดต่อได้ที่ 053-776-008 หรือ LINE ID : <a href="https://lin.ee/SY4Vzp7" class="text-primary" target="_blank">@lifelong.crru</a><br/>(ฝ่ายงานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย)</h3>
                                <a href="<?php echo site_url('register')?>" class="mt-5 btn waves-effect waves-light btn-primary mb-1">กลับสู่หน้าหลัก</a>
                            </div>
                        </div>
                    </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>



<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-fileinput-master/css/fileinput.css">
<!--<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileinput-master/js/fileinput_locale_th.js"></script>-->

<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-fileinput-master/js/fileinput.js"></script>

<script>
$(document).ready(function() {

    var file = $("#file-1");
    file.fileinput({
        language: 'th',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary",
        removeIcon: '<i class="fa fa-trash"></i>',
        cancelIcon: '<i class="fa fa-remove"></i>',
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });


    $("#bt-payment").click(function(e) { // เมื่อกดปุ่มบันทึกข้อมูล

        e.preventDefault();
        //$('#bt-payment').html('loading');

        $('#postForm').ajaxSubmit({ //ฟอร์มบันทึกข้อมูล
            dataType: 'json',
            success: processJson // เมื่อทำงานเสร็จให้ไปทำ fucntion นี้ต่อ
        });

    });


});


function processJson(response) {

    if (response.status == true) {
        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url('website/register_66/line_notify') ?>",
                        data: {
                            id: response.id,
                            function: 'pay'
                        },
                        success: function(data) {}
                    });
        Swal.fire({
            title: 'แจ้งเตือน',
            html: 'บันทึกข้อมูลเรียบร้อย',
            type: 'success',
        });
        setTimeout(() => {

            window.location.href="payment-view";
        }, 500);
    } else {

        Swal.fire({
            title: 'แจ้งเตือน',
            html: response.message,
            type: 'error',
        });
    }
}
</script>

<?php $this->load->view('website/register-66/include/footer2');?>