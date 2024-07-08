<?php $session   =  $this->session->userdata(); ?>
<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url('tis/home'); ?>">
                <!-- Logo icon -->
                <b>
                    <img src="<?php echo base_url('assets/theme/canvas/images/CLLI_Logo_white.png')?>" alt="logo" class="logo-custom"/>
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span>
                    <b>
                        CRRU-CB(TIS)
                    </b>
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

                <li class="nav-item">
                    <form class="app-search d-none d-md-block d-lg-block">
                        <i class="fa fa-user"></i> <b>CRRU Credit Bank | Teacher Information System</b>
                    </form>
                </li>
            </ul>

            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    
                <?php
                        if($this->session->userdata('teacher_display')!=""){
                            echo '<a href="'.base_url('assets/images/teacher_display/'.$this->session->userdata('teacher_display')).'" data-toggle="lightbox"><img src="'.base_url('assets/images/teacher_display/'.$this->session->userdata('teacher_display')).'" alt="user-img" class="rounded-circle border border-white mr-2" height="50" width="50"></a>';
                        }else{
                            echo '<img src="'.base_url('assets/images/user.png').'" alt="user-img" class="img-circle" width="50">';
                        }
                    ?>
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic text-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span class="hidden-md-down"><?php echo $this->session->userdata('fulllname');?> &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <!-- text-->
                        <a href="<?php echo site_url('tis/login/logout')?>" class="dropdown-item"><i class="fa fa-power-off"></i> ออกจากระบบ</a>
                        <!-- text-->
                    </div>
                </li>
            </ul>

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->