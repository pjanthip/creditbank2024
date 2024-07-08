<div class="card mx-auto" style="max-width: 400px;">
    <div class="card-header py-3 text-center bg-dark">
        <h3 class="mb-0 fw-normal text-light font-noto"><i class="fa-solid fa-right-to-bracket"></i> <?php echo $this->lang->line('login_frm_header');?></h3>
    </div>
    <div class="card-body mx-auto p-5 py-4">
		<div class="center">
			<a href="#" class="btn button-mini btn-outline-dark button-rounded w-100 ms-0 font-noto">
				<img src="<?php echo base_url("assets/images/icon/etc/google.png");?>" height="16" class="me-1"/>
				<?php echo $this->lang->line('login_frm_google');?>
			</a>
		</div>
		<div class="divider divider-center my-3"><?php echo $this->lang->line('login_frm_line');?></div>
        <form id="login-form" name="login-form" class="mb-0 row font-noto" action="#" method="post">
            <div class="col-12 form-group">
				<label for="login-form-username" clss="fs-14"><?php echo $this->lang->line('login_frm_username');?>:</label>
                <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="<?php echo $this->lang->line('login_frm_username');?>">
            </div>

            <div class="col-12 form-group">
				<label for="login-form-username" clss="fs-14"><?php echo $this->lang->line('login_frm_password');?>:</label>
                <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="<?php echo $this->lang->line('login_frm_password');?>">
            </div>

            <div class="col-12 text-end">
                <a href="#" class="text-dark fw-light text-smaller font-noto"><?php echo $this->lang->line('login_frm_forgot');?></a>
            </div>

            <div class="col-12 mt-4">
                <button class="button w-100 m-0" id="login-form-submit" name="login-form-submit"
                    value="login"><?php echo $this->lang->line('login_frm_header');?></button>
            </div>
        </form>
    </div>
    <div class="card-footer py-4 text-center font-noto">
        <p class="mb-0"><?php echo $this->lang->line('login_frm_account_txt');?> <a href="#"><u><?php echo $this->lang->line('login_frm_register');?></u></a></p>
    </div> 
</div>

<style>
:root {--cnvs-mfp-overlay-opacity: 0.3;}
</style>