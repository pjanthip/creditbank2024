<?php
    $limit = 60;
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card-group">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-user"></i></h3>
                                    <p class="text-muted">ข้อมูลการลงทะเบียนวันนี้</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-primary font-weight-bold"><?php echo $today_register;?> คน</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <?php
                                    $persen = (intval($today_register)>0)? 100:0;
                                ?>
                                <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $persen;?>%; height: 20px;"
                                    aria-valuenow="<?php echo $persen;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $persen;?>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-flex no-block align-items-center">
                                <div>
                                    <h3><i class="fas fa-users"></i></h3>
                                    <p class="text-muted">ข้อมูลการลงทะเบียนทั้งหมด</p>
                                </div>
                                <div class="ml-auto">
                                    <h2 class="counter text-cyan font-weight-bold"><?php echo $all_register;?> / <?php echo $limit;?> คน</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="progress">
                                <?php
                                    $persen = 0;
                                    $persen = (intval($all_register)*100)/$limit;
                                    $persen = number_format($persen, 1, '.', ' ');
                                ?>
                                <div class="progress-bar bg-cyan" role="progressbar" style="width: <?php echo $persen;?>%; height: 20px;"
                                    aria-valuenow="<?php echo $persen;?>" aria-valuemin="0" aria-valuemax="100"><?php echo $persen;?>%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body" style="padding:50px;">
                        
                    <div class="row d-flex justify-content-between">
                        <a href="<?php echo site_url('admin/check_register');?>" class="card text-white bg-primary mb-3 col-md-3 text-center" style="background-color: #8876ff !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                            <div class="card-body">
                                <i class="far fa-user-circle" style="font-size:100px;" aria-hidden="true"></i>
                                <h3 class="text-white pt-3">ตรวจสอบข้อมูลผู้สมัคร</h3>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/profile');?>" class="card text-white bg-primary mb-3 col-md-3 text-center" style="background-color: #4582ff !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                            <div class="card-body">
                                <i class="fas fa-book" style="font-size:100px;" aria-hidden="true"></i>
                                <h3 class="text-white pt-3">ข้อมูลส่วนตัว</h3>
                            </div>
                        </a>
                        <a href="<?php echo site_url('admin/setting');?>" class="card text-white bg-primary mb-3 col-md-3 text-center" style="background-color: #fe4155 !important;border-radius: 26px !important;padding:50px 20px 20px 20px;">
                            <div class="card-body">
                                <i class="fas fa-info-circle" style="font-size:100px;" aria-hidden="true"></i>
                                <h3 class="text-white pt-3">คู่มือ</h3>
                            </div>
                        </a>
                    </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
</div>