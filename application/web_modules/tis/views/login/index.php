<?php $this->load->view('admin/theme/header_login'); ?>
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card py-0 px-0">
                <div class="card-header text-center ">
                    <img class="py-4" src="<?php echo base_url('assets/theme/canvas/images/logo-dark@2x_.png')?>"/>
                    <h3 class="text-center pt-2 text-white">Teacher Information System (TIS)</h3>
                </div>
                <p class="text-center mb-4 mt-0 text-white">เข้าสู่ระบบบริการข้อมูลผู้สอน</p>
                <form class="myform" id="loginform" method="post" action="<?php echo site_url('tis/login/signin')?>">
                    <div class="form-group mb-2"> <input type="textbox" name="teacher_id" id="teacher_id" class="form-control " placeholder="Username" value=""> </div>
                    <div class="form-group mb-2"> <input type="password" name="password" id="password" class="form-control" placeholder="Password" value=""> </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-12">
                            <a href="" class="link_"><i class="fas fa-question-circle"></i> ลืมรหัสผ่าน</a>
                        </div>
                        <div class="col-md-6 col-12 text-right">
                            <a href="<?php echo site_url();?>" class="link_"><i class="fas fa-home"></i> กลับสู่หน้าหลัก</a>
                        </div>
                    </div>
                    <div class="form-group mt-3"> <button type="submit" class="btn btn-block btn-primary btn-lg"><small style="color:#0c3c24;"><i class="far fa-user pr-2"></i>เข้าสู่ระบบ</small></button> </div>
                    
						<?php if($msg_error):?>
                            <div class="alert alert-danger text-center" role="alert">
                                <i class="fa-solid fa-triangle-exclamation"></i> <?php echo $msg_error;?>
                            </div>
						<?php endif;?>
                </form>
            </div>
        </div>
    </div>
</div>


<style>
    body {
    background-color: #ffffff;
}

.card {
    border: none;
    /*border-top: 5px solid rgb(176, 106, 252);*/
    border-top: 5px solid #01cc66;
    background: #0c3c24;
    color: #57557A
}

p {
    font-weight: 600;
    font-size: 15px
}

.fab {
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    background: #2A284D;
    height: 40px;
    width: 90px
}

.fab:hover {
    cursor: pointer
}

.fa-twitter {
    color: #56ABEC
}

.fa-facebook {
    color: #1775F1
}

.fa-google {
    color: #CB5048
}

.division {
    float: none;
    position: relative;
    margin: 30px auto 20px;
    text-align: center;
    width: 100%;
    box-sizing: border-box
}
.link_{
    color:#ffffff;
}
.link_:hover{
    color:#FFFFFF;
}
.division .line {
    border-top: 1.5px solid #57557A;
    ;
    position: absolute;
    top: 13px;
    width: 85%
}

.line.l {
    left: 52px
}

.line.r {
    right: 45px
}

.division span {
    font-weight: 600;
    font-size: 14px
}

.myform {
    padding: 0 25px 0 33px
}

.form-control {
    border: 1px solid #57557A;
    border-radius: 3px;
    background: #fff;
    margin-bottom: 20px;
    letter-spacing: 1px
}

.form-control:focus {
    border: 1px solid #57557A;
    border-radius: 3px;
    box-shadow: none;
    background: #fff;
    color: #000000;
    letter-spacing: 1px
}

.bn {
    text-decoration: underline
}

.bn:hover {
    cursor: pointer
}

.form-check-input {
    margin-top: 8px !important
}

.btn-primary {
    /*background: linear-gradient(135deg, rgba(176, 106, 252, 1) 39%, rgba(116, 17, 255, 1) 101%);*/
    background: linear-gradient(135deg, rgba(172, 199, 83, 1) 39%, rgba(0, 139, 206, 1) 101%);
    border: none;
    font-weight:bold ;
    border-radius: 50px
}

.btn-primary:focus {
    box-shadow: none;
    border: none
}

small {
    color: #F2CEFF
}

.far.fa-user {
    font-size: 13px
}

@media(min-width: 767px) {
    .bn {
        text-align: right
    }
}

@media(max-width: 767px) {
    .form-check {
        text-align: center
    }

    .bn {
        text-align: center;
        align-items: center
    }
}

@media(max-width: 450px) {
    .fab {
        width: 100%;
        height: 100%
    }

    .division .line {
        width: 50%
    }
}
</style>

<?php if($msg_error):?>
	<script>
		Swal.fire({
			title: 'แจ้งเตือน',
			html: "<?php echo $msg_error?>",
			type: 'error',
		});
	</script>
<?php endif?>


<?php $this->load->view('admin/theme/footer'); ?>