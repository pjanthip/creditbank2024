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
                    <a class="waves-effect waves-dark" href="<?php echo site_url('sis/home'); ?>" aria-expanded="false">
                        <i class="fa-solid fa-house py-2"></i>
                        <span class="hide-menu">หน้าหลัก</span>
                    </a>
                </li>
                <?php $active = ($page == "index" || $page == "contact" || $page == "curriculum" || $page == "course") ? "active" : ""; ?>
                <li class="<?php echo $active; ?> my-0">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-id-badge py-2"></i><span class="hide-menu">ข้อมูลผู้เรียน</span></a>
                    <?php $in = ($page == "index" || $page == "contact" || $page == "curriculums_type") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "index") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/profile'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ข้อมูลส่วนตัว</a></li>
                        <?php $active = ($page == "contact") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/profile/contact'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ข้อมูลการติดต่อ</a></li>
                        <?php $active = ($page == "curriculum") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/profile/plan_curr'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ข้อมูลหลักสูตร</a></li>
                        <?php $active = ($page == "course") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/profile/plan_course'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ข้อมูลแผนการเรียน</a></li>
                    </ul>
                </li>
                <li class="">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-table py-2"></i><span class="hide-menu">ตารางเรียน</span></a>
                    <?php $in = ($page == "study_schedule" || $page == "test_schedule" || $page == "open_course") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "study_schedule") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/schedule/study_schedule'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ตารางเรียน</a></li>
                        <!--<?php $active = ($page == "test_schedule") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/schedule/test_schedule'); ?>" class="<?php echo $active; ?>">ตารางสอบ</a></li>
                        <?php $active = ($page == "open_course") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/schedule/open_course'); ?>" class="<?php echo $active; ?>">รายวิชาที่เปิดสอน</a></li>-->
                    </ul>
                </li>
                <li class="">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-chalkboard-user py-2"></i><span class="hide-menu">สมัครเรียน(ชุดฝึกอบรม)</span></a>
                    <?php $in = ($page == "training_register") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "training_register") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/training/register'); ?>" class="<?php echo $active; ?>"><i class="fa-regular fa-circle"></i> ลงทะเบียน</a></li>
                    </ul>
                </li>
                
                <li class="">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-font py-2"></i><span class="hide-menu">ผลการเรียน</span></a>
                    <?php $in = ($page == "grade") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "grade") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('sis/grade/index'); ?>" class="<?php echo $active; ?>">ผลการเรียน</a></li>
                        <!-- <li><a href="<?php echo site_url('sis/report/generateTranscript'); ?>" target="_blank">ใบแสดงผลการเรียน</a></li>
                        <li><a href="<?php echo site_url('admin/curriculums/category'); ?>">วุฒิบัตร</a></li> -->

                    </ul>
                </li>
                <!--<li class="">
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book py-2"></i><span class="hide-menu">คำร้องเอกสารสำคัญ</span></a>
                    <?php $in = ($page == "curriculums" || $page == "curriculums_category" || $page == "curriculums_type") ? "in" : ""; ?>
                    <ul aria-expanded="false" class="collapse ">
                        <?php $active = ($page == "curriculums") ? "active" : ""; ?>
                        <li class="<?php echo $active; ?>"><a href="<?php echo site_url('admin/curriculums'); ?>" class="<?php echo $active; ?>">เอกสาร 1</a></li>
                    </ul>
                </li>-->
                <br>
                <li>
                    <a href="<?php echo site_url('sis/login/logout') ?>" class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
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