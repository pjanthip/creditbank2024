<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <?php
            foreach ($coordinator as $data) {
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header font-weight-bold font-18 bg-info text-white"><i class="fas fa-user mr-2"></i>ข้อมูลส่วนตัวของผู้ประสานงาน</div>
                    <div class="card-body font-18">
                        <form  id="profileForm" name="profileForm" role="form" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/profile/update_profile'); ?>">
                            <input type="hidden" name="coordinator_id" id="coordinator_id" value="<?php echo $data->coordinator_id;?>"/>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="training_objective">ชื่อ - สกุล</label>
                                    <div class="col-md-2">
                                        <?php echo form_dropdown('prefix_name_id', ['' => 'เลือกคำนำหน้า'] + $tb_prefix_name, $data->prefix_name_id ?? '',['class' => 'form-select col-sm-12 form-control','id' => 'prefix_name_id']); ?>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="coordinator_fname" name="coordinator_fname" class="form-control" placeholder="ชื่อ" value="<?php echo $data->coordinator_fname;?>">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" id="coordinator_lname" name="coordinator_lname" class="form-control" placeholder="สกุล" value="<?php echo $data->coordinator_lname;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="training_objective">ตำแหน่ง</label>
                                    <div class="col-md-10">
                                        <input type="text" id="rank_id" name="rank_id" class="form-control" placeholder="ตำแหน่ง" value="<?php echo $data->rank_id;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="training_objective">หน่วยงาน</label>
                                    <div class="col-md-5">
                                        <input type="text" id="" name="" class="form-control" placeholder="คณะ" value="<?php echo $data->faculty_name_th;?>" readonly>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="" name="" class="form-control" placeholder="สาขาวิชา" value="<?php echo $data->major_name;?>" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="training_objective">ข้อมูลติดต่อ</label>
                                    <div class="col-md-3">
                                        <input type="text" id="coordinator_tel" name="coordinator_tel" class="form-control" placeholder="เบอร์โทร" value="<?php echo $data->coordinator_tel;?>">
                                    </div>
                                    <div class="col-md-7">
                                        <input type="text" id="coordinator_email" name="coordinator_email" class="form-control" placeholder="E-mail" value="<?php echo $data->coordinator_email;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for=""></label>
                                    <div class="col-md-10">
                                        <button type="button" id="bt-update-profile" class="btn btn-warning waves-effect waves-light m-r-10 text-dark"><i class="fas fa-edit"></i> แก้ไขข้อมูล</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <!-- ============================================================== -->
        <!-- End Containner -->
        <!-- ============================================================== -->
    </div>
</div>

<script src="<?php echo base_url('assets/plugins/sweetAlert/8.11.8/sweetalert2.all.js');?>" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/sweetAlert/8.11.8/sweetalert2.css');?>">

<script src="<?php echo base_url('assets/plugins/lightbox/lightbox.js');?>" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/lightbox/lightbox.css');?>">

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
    $("#bt-update-profile").click(function (e) {// เมื่อกดปุ่มบันทึกข้อมูล
        $('#profileForm').ajaxSubmit({//ฟอร์มบันทึกข้อมูล
            dataType: 'json',
            success: processJson // เมื่อทำงานเสร็จให้ไปทำ fucntion นี้ต่อ
        });
    });
    function processJson(jdata) {// function เมื่อ ส่งค่าไปทำงานเสร็จ
        if (jdata.status) {
            Swal.fire({
                title: 'แจ้งเตือน',
                html: 'แก้ไขข้อมูล เรียบร้อยแล้ว',
                type: 'success',
            })
            setTimeout(() => {
                window.location.reload();
            }, 1500);
        } else {
            Swal.fire({
                title: 'แจ้งเตือน',
                html: 'เกิดข้อผิดพลาดในการบันทึก',
                type: 'error',
            });
        }
    }
</script>