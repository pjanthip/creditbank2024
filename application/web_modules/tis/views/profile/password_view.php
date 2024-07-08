<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <?php
            foreach ($teacher as $data) {
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form  id="passwordForm" name="passwordForm" role="form" accept-charset="utf-8" method="post">
                            <input type="hidden" name="teacher_id" id="teacher_id" value="<?php echo $data->teacher_id;?>"/>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="username">Username</label>
                                    <div class="input-group col-md-4">
                                        <span class="input-group-text" id="basic-addon11"><i class="ti-user"></i></span>
                                        <input type="text" class="form-control" name="teacher_username" id="teacher_username" placeholder="Username" aria-label="Username" readonly aria-describedby="basic-addon4" value="<?php echo $data->teacher_username;?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="username">Current Password</label>
                                    <div class="input-group col-md-4">
                                        <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                        <input type="password" id="password-pcurrent" name="password-pcurrent" class="form-control" placeholder="Current Password" aria-label="Password" aria-describedby="basic-addon4" value="">
                                        <span class="input-group-text see_pass" id="pcurrent"><i class="far fa-eye-slash"></i></span>
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-5"/>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="username">New Password</label>
                                    <div class="input-group col-md-4">
                                        <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                        <input type="password" id="password-pnew" name="password-pnew"  class="chk_pass form-control" placeholder="New Password" aria-label="Password" aria-describedby="basic-addon4" value="">
                                        <span class="input-group-text see_pass" id="pnew"><i class="far fa-eye-slash"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="username">Confirm new Password</label>
                                    <div class="input-group col-md-4">
                                        <span class="input-group-text" id="basic-addon4"><i class="ti-lock"></i></span>
                                        <input type="password" id="password-pconfirm" name="password-pconfirm"  class="chk_pass form-control" placeholder="Confirm new Password" aria-label="Password" aria-describedby="basic-addon4" value="">
                                        <span class="input-group-text see_pass" id="pconfirm"><i class="far fa-eye-slash"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for="">เงื่อนไขการตั้ง Password</label>
                                    <div class="col-md-10">
                                        <div class="alert alert-success">
                                            <p><i class="fas fa-check-circle"></i> มีความยาวอย่างน้อย 8 ตัวอักษร หรือมากกว่า</p>
                                            <p><i class="fas fa-check-circle"></i> มีทั้งตัวเลขและตัวอักษรภาษาอังกฤษ</p>
                                            <p><i class="fas fa-check-circle"></i> มีตัวอักษรพิมพ์เล็กและพิมพ์ใหญ่</p>
                                            <p class="mb-0 pb-0"><i class="fas fa-check-circle"></i> มีอักขระพิเศษ !@#$%^&*</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-2" for=""></label>
                                    <div class="col-md-10">
                                        <button type="button" id="bt-update-password" class="btn btn-warning waves-effect waves-light m-r-10 text-dark"><i class="fas fa-key"></i> เปลี่ยนรหัสผ่าน</button>
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

    $( ".see_pass" ).click(function() {
        if($("#password-"+this.id).attr("type")=="password"){
                $("#password-"+this.id).attr("type","text");
                $("#"+this.id).html('<i class="far fa-eye"></i>');
            }else{
                $("#password-"+this.id).attr("type","password");
                $("#"+this.id).html('<i class="far fa-eye-slash"></i>');
            }
    });

    $("#bt-update-password").click(function (e) {// เมื่อกดปุ่มบันทึกข้อมูล
        var error_ = 0;
        var alertHTML = "";
        if($("#password-pcurrent").val()==""){
            error_ = 1;
            alertHTML = "กรุณากรอก Current Password";
        }
        if($("#password-pnew").val()==""){
            error_ = 1;
            alertHTML += "<br/>กรุณากรอก New Password";
        }
        if($("#password-pconfirm").val()==""){
            error_ = 1;
            alertHTML += "<br/>กรุณากรอก Confirm new Password";
        }

        if(error_==1){
            Swal.fire({
                title: 'แจ้งเตือน',
                html: alertHTML,
                type: 'error'
            });
            exit();
        }
        
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('tis/profile/chk_pass') ?>",
                data: {
                    id: $("#teacher_username").val(),
                    password: $("#password-pcurrent").val()
                },
                success: function(data) {
                    if(data == 0){
                        Swal.fire({
                            title: 'แจ้งเตือน',
                            html: "ท่านกรอก Current Password ไม่ถูกต้อง",
                            type: 'error'
                        });
                        exit();
                    }
                }
            });
            

        if($("#password-pnew").val() != $("#password-pconfirm").val()){
            Swal.fire({
                title: 'แจ้งเตือน',
                html: "ท่านกรอก New Password และ Confirm new Password ไม่ตรงกัน",
                type: 'error'
            });
            exit();
        }

        var Regex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
        
        if(!Regex.test($("#password-pnew").val())) {
            Swal.fire({
                title: 'แจ้งเตือน',
                html: "เงื่อนไขการตั้ง Password ไม่ถูกต้อง",
                type: 'error'
            });
            exit();
        }
        
        $.ajax({
            type: "POST",
            url: "<?php echo site_url('tis/profile/update_password') ?>",
                data: {
                    id: $("#teacher_username").val(),
                    password: $("#password-pnew").val()
                },
                success: function(data) {
                    if(data == 1){
                        Swal.fire({
                            title: 'แจ้งเตือน',
                            html: "เปลี่ยนรหัสผ่านเรียบร้อยแล้ว",
                            type: 'success'
                        });
                        setTimeout(() => {
                            window.location.reload();
                        }, 1500);
                    }
                }
            });
    });
</script>