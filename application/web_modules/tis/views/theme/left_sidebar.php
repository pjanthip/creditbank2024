<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<?php $session = $this->session->userdata(); ?>

<aside class="left-sidebar text-white">



    <!-- Sidebar scroll-->
    <div class="scroll-sidebar scroll-sidebar ps ps--theme_default ps--active-y">
        <div class="user-profile">
            <div class="user-pro-body">
                <span class=" u-dropdown hide-menu">เมนูหลัก</span>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <?php $active = ($page == "home") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="waves-effect waves-dark" href="<?php echo site_url('tis/home'); ?>" aria-expanded="false">
                        <i class="fa-solid fa-house py-2"></i>
                        <span class="hide-menu">หน้าหลัก</span>
                    </a>
                </li>
                <?php $active = ($page == "index" || $page == "contact" || $page == "curriculum" || $page == "course") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="waves-effect waves-dark" href="<?php echo site_url('tis/schedule'); ?>" aria-expanded="false"><i class="fas fa-table py-2"></i><span class="hide-menu">ตารางสอน</span></a>
                </li>
                <?php $active = ($page == "checkin" || $page == "checkin_learner") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="waves-effect waves-dark" href="<?php echo site_url('tis/checkin'); ?>" aria-expanded="false"><i class="fa-solid fa-user-check py-2"></i><span class="hide-menu">เช็คชื่อผู้เรียน</span></a>
                </li>
                <?php $active = ($page == "index" || $page == "contact" || $page == "curriculum" || $page == "course") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="waves-effect waves-dark" href="<?php echo site_url('tis/grade'); ?>" aria-expanded="false"><i class="fa-solid fa-font py-2"></i><span class="hide-menu">ส่งเกรด</span></a>
                </li>
                <?php $active = ($page == "change_password" || $page == "change_password") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-address-card py-2"></i><span class="hide-menu">ข้อมูลส่วนตัว</span></a>
                    <?php $in = ($page == "profile" || $page == "change_password") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "profile") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('tis/profile'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ข้อมูลส่วนตัว</a></li>
                        <?php $active = ($page == "change_password") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('tis/profile/change_password'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> เปลี่ยนรหัสผ่าน</a></li>
                    </ul>
                </li>
                <li class="nav-small-cap">--- SYSTEM SERVICES</li>
                <?php $active = ($page == "checkin_help" || $page == "admin_help") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-circle-info py-2"></i><span class="hide-menu">คู่มือ</span></a>
                    <?php $in = ($page == "checkin_help" || $page == "admin_help") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "checkin_help" || $page == "admin_help") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('tis/help/checkin_help'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ระบบเช็คชื่อ</a></li>
                        <?php $active = ($page == "admin_help") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('tis/help/admin_help'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ติดต่อผู้ดูแลระบบ</a></li>
                    </ul>
                </li>
                <!--
                <li class="">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-font py-2"></i><span class="hide-menu">เกรด</span></a>
                    <?php $in = ($page == "grade") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "grade") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/grade/index'); ?>" class="<?php echo $active; ?>">ผลการเรียน</a></li>
                        <li><a href="<?php echo site_url('sis/report/generateTranscript'); ?>" target="_blank">ใบแสดงผลการเรียน</a></li>
                        <li><a href="<?php echo site_url('admin/curriculums/category'); ?>">วุฒิบัตร</a></li>

                    </ul>
                </li>
                <li class="">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book py-2"></i><span class="hide-menu">คำร้องเอกสารสำคัญ</span></a>
                    <?php $in = ($page == "curriculums" || $page == "curriculums_category" || $page == "curriculums_type") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "curriculums") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('admin/curriculums'); ?>" class="<?php echo $active; ?>">เอกสาร 1</a></li>
                    </ul>
                </li>-->
                <br>
                <li>
                    <a href="<?php echo site_url('tis/login/logout') ?>" class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fa fa-power-off py-2"></i>
                        <span class="hide-menu">ออกจากระบบ</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->