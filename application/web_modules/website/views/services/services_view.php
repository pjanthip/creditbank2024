<section id="page-title" class="page-title-pattern">
    <div class="container clearfix">
        <h1><?php echo $title_page; ?></h1>
        <span><?php echo $title_page_detail; ?></span>
        <?php $this->load->view('website/theme/breadcrumb'); ?>
    </div>
</section>
<section id="content">
    <div class="content-wrap" style="padding-top:100px;">
        <div class="container clearfix">
            <div class="row d-flex justify-content-between">
                <a href="<?php echo site_url('sis'); ?>" class="card text-white bg-primary mb-3 col-md-3 text-center" style="background-color: #8876ff !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                    <div class="card-body">
                        <i class="far fa-user-circle" style="font-size:100px;"></i>
                        <h3 class="text-white pt-3">ระบบผู้เรียน</h3>
                    </div>
                </a>
                <a href="<?php echo site_url('tis'); ?>"" class=" card text-white bg-primary mb-3 col-md-3 text-center" style="background-color: #4582ff !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                    <div class="card-body">
                        <i class="fas fa-chalkboard-teacher" style="font-size:100px;"></i>
                        <h3 class="text-white pt-3">ระบบผู้สอน</h3>
                    </div>
                </a>
                <a onclick="javascript:check_std();" class="card text-white bg-primary mb-3 col-md-3 text-center" style="background-color: #fe4155 !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                    <div class="card-body">
                        <i class="far fa-address-card" style="font-size:100px;"></i>
                        <h3 class="text-white pt-3">ระบบรับสมัครผู้เรียน</h3>
                    </div>
                </a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="container clearfix">
            <div class="row d-flex justify-content-between">
                <a href="<?php echo site_url('payment'); ?>" class="card text-dark bg-primary mb-3 col-md-3 text-center" style="background-color: #7ff !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                    <div class="card-body">
                        <i class="fa-solid fa-money-bill-wave" style="font-size:100px;"></i>
                        <h3 class="text-dark pt-3">ระบบแจ้งชำระเงิน</h3>
                    </div>
                </a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section><!-- #content end -->