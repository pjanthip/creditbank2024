<?php $this->load->view('admin/theme/header_login'); ?>
<style>
	.card{
		border-radius: 10px;
	}
</style>
<section id="wrapper">
	<div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
		<div class="login-box card">
			<div class="card-body">
				
				<form class="form-horizontal form-material" id="loginform" method="post" action="<?php echo site_url('admin/login/signin')?>">
					<h3 class="text-center m-b-20">Credit Bank By CLLI.</h3>
					<div class="form-group ">
						<div class="col-xs-12">
							<input class="form-control text-center" type="text" name="username" required="" placeholder="Username"> </div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control text-center" name="password" type="password" required="" placeholder="Password"> </div>
					</div>
					<div class="form-group">
						<div class="row d-flex justify-content-center">
							<div class="custom-control custom-radio mr-4">
								<input type="radio" id="type_login-coor" name="type_login" class="form-check-input" value="2" checked>
								<label class="form-check-label" for="type_login-coor">ผู้ประสานงาน</label>
							</div>
							<div class="custom-control custom-radio">
								<input type="radio" id="type_login-clli" name="type_login" class="form-check-input" value="3">
								<label class="form-check-label" for="type_login-clli">CLLI</label>
							</div>
						</div>
					</div>
				
				
					<div class="form-group text-center">
						<?php if($msg_error):?>
							<div class="label label-md label-danger text-center" style="font-size: 100%;"><?php echo $msg_error;?></div>
						<?php endif;?>
						<div class="col-xs-12 p-b-20 text-center">
							<button class="btn btn-block btn-lg btn-info btn-rounded" type="submit">เข้าสู่ระบบ</button>
						</div>
					</div>
					<!--<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
							<div class="social">
								<button class="btn  btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
								<button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
							</div>
						</div>
					</div>
					<div class="form-group m-b-0">
						<div class="col-sm-12 text-center">
							Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a>
						</div>
					</div>-->
				</form>
			</div>
		</div>
	</div>
</section>
    


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
