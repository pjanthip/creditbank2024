<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<?php $session = $this->session->userdata();?>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="<?php echo site_url('admin/home');?>" aria-expanded="false">
                        <i class="fas fa-tachometer-alt"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <?php if($this->session->userdata('user_type')!=2 && $this->session->userdata('user_type')!=3){?>
                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบพัฒนาหลักสูตร</li>
                <?php $active = ($page == "curriculums" || $page == "curriculums_category" || $page == "curriculums_type")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book"></i><span class="hide-menu">ข้อมูลหลักสูตร</span></a>
                    <?php $in = ($page == "curriculums" || $page == "curriculums_category" || $page == "curriculums_type")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <?php $active = ($page == "curriculums")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/curriculums');?>" class="<?php echo $active;?>">หลักสูตร</a></li>
                        <?php $active = ($page == "curriculums_category")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/curriculums/category');?>" class="<?php echo $active;?>">รูปแบบหลักสูตร</a></li>
                        <?php $active = ($page == "curriculums_type")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/curriculums/type');?>" class="<?php echo $active;?>">ประเภทหลักสูตร</a></li>
                    </ul>
                </li>

<!-- ####################################################################################################  -->
                <?php } if($this->session->userdata('user_type')==2){?>
                    <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบรับสมัคร</li>
                <?php $active = ($page == "check_register")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-address-card"></i><span class="hide-menu">ข้อมูลการสมัคร</span></a>
                    <?php $in = ($page == "check_register")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <?php $active = ($page == "check_register")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/check_register');?>" class="<?php echo $active;?>">ตรวจสอบข้อมูลผู้สมัคร</a></li>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/leaner66');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 4</a></li>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/leaner66_v5');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 5</a></li>
                    </ul>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ตั้งค่า</li>
                <?php $active = ($page == "profile" || $page == "change_password")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book"></i><span class="hide-menu">โปรไฟล์ของฉัน</span></a>
                    <?php $in = ($page == "profile" || $page == "change_password")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <?php $active = ($page == "profile")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/profile');?>" class="<?php echo $active;?>">ข้อมูลส่วนตัว</a></li>
                        <?php $active = ($page == "change_password")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/profile/change_password');?>" class="<?php echo $active;?>">เปลี่ยนรหัสผ่าน</a></li>
                    </ul>
                </li>
                <?php $active = ($page == "setting")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="waves-effect waves-dark <?php echo $active;?>" href="<?php echo site_url('admin/setting');?>"><i class="fas fa-info-circle"></i><span class="hide-menu">คู่มือ</span></a>
                </li>
<!-- ####################################################################################################  -->


                <?php } if($this->session->userdata('user_type')!=2 && $this->session->userdata('user_type')!=3){?>
                <?php $active = ($page == "training" || $page == "training_compare")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book-open"></i><span class="hide-menu">ข้อมูลชุดฝึกอบรม</span></a>
                    <?php $in = ($page == "training" || $page == "training_compare")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <?php $active = ($page == "training")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/training');?>" class="<?php echo $active;?>">ชุดฝึกอบรม</a></li>
                        <?php $active = ($page == "training_compare")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/training/compare');?>" class="<?php echo $active;?>">ข้อมูลเทียบโอนรายวิชา</a></li>
                    </ul>
                </li>
                <?php } if($this->session->userdata('user_type')!=2){?>
                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบรับสมัคร</li>
                <?php $active = ($page == "register_switch" || $page == "register" || $page == "register_result" || $page == "learner" || $page == "sendmail")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">รับสมัครผู้เรียน</span></a>
                    <?php $in = ($page == "register_switch" || $page == "register" || $page == "register_result" || $page == "learner" || $page == "sendmail")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <!--<?php $active = ($page == "register_switch")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/switch');?>" class="<?php echo $active;?>">เปิด / ปิด ฟอร์ม</a></li>-->
                        <!-- <?php $active = ($page == "register")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 3</a></li> -->
                        <?php $active = ($page == "register")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/leaner65');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 3</a></li>
                        <?php $active = ($page == "register4")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/leaner66');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 4</a></li>
                        <?php $active = ($page == "register5")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/leaner66_v5');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 5</a></li>
                        <!--<?php $active = ($page == "learner")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/learner');?>" class="<?php echo $active;?>">บันทึกข้อมูลผู้เรียน</a></li>
                        <?php $active = ($page == "sendmail")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/mailling');?>" class="<?php echo $active;?>">ระบบส่ง E-mail</a></li>-->
                    </ul>
                </li>
                <?php } if($this->session->userdata('user_type')!=2){?>
                <?php $active = ($page == "register_training_switch" || $page == "register_training" || $page == "register_training4")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-user-friends"></i><span class="hide-menu">รับสมัครชุดฝึกอบรม</span></a>
                    <?php $in = ($page == "register_training_switch" || $page == "register_training")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <!--<?php $active = ($page == "register_training_switch")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register_training/switch');?>">เปิด / ปิด ชุดฝึกอบรม</a></li>-->
                        <?php $active = ($page == "register_training")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register_training');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 3</a></li>
                        <?php $active = ($page == "register_training4")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register_training/training66');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 4</a></li>
                        <?php $active = ($page == "register_training5")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register_training/training66_v5');?>" class="<?php echo $active;?>">ข้อมูลการสมัคร รุ่น 5</a></li>
                    </ul>
                </li>
                <?php } if($this->session->userdata('user_type')!=2){?>
                <?php $active = ($page == "register_learner")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-address-card"></i><span class="hide-menu">นำเข้าผู้เรียนใหม่</span></a>
                    <?php $in = ($page == "register_learner")? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <?php $active = ($page == "register_learner")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register_learner');?>" class="<?php echo $active;?>">บันทึกข้อมูล</a></li>
                    </ul>
                </li>
                <?php } if($this->session->userdata('user_type')!=2){?>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-flag"></i><span class="hide-menu">รายงานผล</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html">รับสมัครผู้เรียน</a></li>
                        <li><a href="index2.html">รับสมัครชุดฝึกอบรม</a></li>
                    </ul>
                </li>
                <?php } if($this->session->userdata('user_type')!=2){?>
                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบจัดการเรียนการสอน</li>
                <?php if($this->session->userdata('user_type')!=3){?>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-list-alt"></i><span class="hide-menu">แผนการเรียน</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html">ข้อมูลแผนการเรียน</a></li>
                        <li><a href="index2.html">จัดแผนการเรียน</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-calendar-alt"></i><span class="hide-menu">ตารางเรียน</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index.html">ข้อมูลตารางเรียน</a></li>
                        <li><a href="index2.html">จัดตารางเรียน</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-clock"></i><span class="hide-menu">เวลาเรียน</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="index2.html">เวลาเรียนผู้เรียน</a></li>
                        <li><a href="index.html">ตั้งค่าระบบเวลาเรียน</a></li>
                    </ul>
                </li>
                <?php }?>
                <?php $active = ($page == "grade")? "active":"";?>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-font"></i><span class="hide-menu">ผลการเรียน</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo site_url('admin/grade');?>">ผลการเรียนผู้เรียน</a></li>
                        <?php if($this->session->userdata('user_type')!=3){?>
                        <li><a href="index.html">ตรวจรับผลการเรียน</a></li>
                        <?php }?>
                    </ul>
                </li>

                <?php } if($this->session->userdata('user_type')!=2 && $this->session->userdata('user_type')!=3){?>
                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบผู้เรียน</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-id-badge"></i>
                        <span class="hide-menu">ข้อมูลผู้เรียน</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-table"></i>
                        <span class="hide-menu">ตารางเรียน</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-font"></i>
                        <span class="hide-menu">ผลการเรียน</span>
                    </a>เ
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-money-bill-alt"></i>
                        <span class="hide-menu">สมัครชุดฝึกอบรม</span>
                    </a>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบผู้สอน</li>
        
                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ข้อมูลผู้สอน</li>
                <?php $active = ($page == "teacher")? "active":"";?>
                <li class="<?php echo $active;?>">
                    <a class="has-arrow waves-effect waves-dark <?php echo $active;?>" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">รับสมัครผู้เรียน</span></a>
                    <?php $in = ($page == "register_switch" )? "in":"";?>
                    <ul aria-expanded="false" class="collapse <?php echo $in;?>">
                        <?php $active = ($page == "register_switch")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/register/switch');?>" class="<?php echo $active;?>">ตารางสอน</a></li>
                        <?php $active = ($page == "register")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/checkin');?>" class="<?php echo $active;?>">เช็คชื่อออนไลน์</a></li>
                        <?php $active = ($page == "register_result")? "active":"";?>
                        <li class="<?php echo $active;?>"><a href="<?php echo site_url('admin/teacher/grade_review');?>" class="<?php echo $active;?>">ส่งเกรดออนไลน์</a></li>
                        <?php $active = ($page == "learner")? "active":"";?>
                    </ul>
                </li>
               
                <!--<li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">ข้อมูลผู้สอน</span>
                    </a>
                </li>-->
                

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบใบคำร้อง</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">ใบคำร้องต่างๆ</span>
                    </a>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบประเมินผล</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">ประเมินหลักสูตร</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">ประเมินผู้สอน</span>
                    </a>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบเทียบโอนหน่วยกิต</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">พิมพ์ใบรับรองผล</span>
                    </a>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">ข้อมูลการเทียบโอน</span>
                    </a>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบจัดการข้อมูลหน่วยงาน</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">หน่วยงาน(ภายใน)</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-check-square"></i>
                        <span class="hide-menu">หน่วยงาน(ภายนอก)</span>
                    </a>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ระบบรายงานผล</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">ผลการดำเนินงาน</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="far fa-calendar-alt"></i>
                        <span class="hide-menu">พิมพ์รายงานผล</span>
                    </a>
                </li>

                <li class="nav-small-cap text-uppercase font-weight-bold border-top border-muted">--- ข้อมูลเว็บไซต์</li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">แบนเนอร์สไลด์</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">ประกาศ</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">ข่าวประชาสัมพันธ์</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">ปฏิทินวิชาการ</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">การชำระค่าธรรมเนียม</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">ตารางกิจกรรม</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">เอกสารดาวน์โหลด</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">เกี่ยวกับเรา</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">โครงสร้างหน่วยงาน</span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-database"></i>
                        <span class="hide-menu">ผู้บริหารและบุคลากร</span>
                    </a>
                </li>
                <?php }?>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->