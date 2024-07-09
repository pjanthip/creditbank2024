<?php echo $this->load->view('website/theme/breadcrumb'); ?>

<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">

        <div class="row col-mb-50">
						<div class="col-sm-6 col-lg-4">
							<h3 class="font-noto">หน้าเว็บไซต์</h3>

							<ul class="iconlist mb-0 font-noto">
								<li><i class="fas fa-home"></i> <a href="#"><?php echo $this->lang->line('nav_home'); ?></a></li>
								<li><i class="fa-solid fa-handshake"></i> <a href="#"><?php echo $this->lang->line('topic_network'); ?></a>
									<ul>
                                        <?php
                                            foreach($list_faculty as $faculty):
                                                if(strtolower($this->lang->line('lang')) == "th"):
                                                    $faculty_name = $faculty->faculty_name_th;
                                                elseif(strtolower($this->lang->line('lang')) == "en"):
                                                    $faculty_name = $faculty->faculty_name_en;
                                                else:
                                                    $faculty_name = $faculty->faculty_name_cn;
                                                endif;

                                                if($faculty_name!=""):
                                        ?>
                                        <li><i class="fa-solid fa-caret-right"></i> <a href="#"><?php echo $faculty_name;?></a></li>
                                        <?php endif; endforeach;?>
									</ul>
								</li>
							</ul>
						</div>

						<div class="col-sm-6 col-lg-4 font-noto">
							<h3 class="font-noto"><?php echo $this->lang->line('nav_course'); ?></h3>

							<ul class="iconlist mb-0">
								<li><i class="fa-solid fa-book"></i> <a href="#"><?php echo $this->lang->line('nav_course');?></a></li>
                                <li><i class="fas fa-filter"></i> <a href="#">ประเภทหลักสูตร</a>
                                    <ul>
                                        <li><i class="fa-solid fa-caret-right"></i> <a href="#">สะสมหน่วยกิต (Creditbank)</a></li>
                                        <li><i class="fa-solid fa-caret-right"></i> <a href="#">ส่งเสริมทักษะการเรียนรู้ตลอดชีวิต (Up-Skill/Re-Skill)</a></li>
                                    </ul>
                                </li>
                                <li><i class="fas fa-filter"></i> <a href="#">ประเภทการจัดเรียนการสอน</a>
                                    <ul>
                                        <li><i class="fa-solid fa-caret-right"></i> <a href="#">ชุดฝึกอบรม (Modula)</a></li>
                                        <li><i class="fa-solid fa-caret-right"></i> <a href="#">เรียนล่วงหน้า (Pre-Degree)</a></li>
                                    </ul>
                                </li>
								<li><i class="fa-solid fa-school"></i> <a href="#">หลักสูตรแยกตามหน่วยงาน</a>
									<ul>
                                        <?php
                                            foreach($list_faculty as $faculty):
                                                if(strtolower($this->lang->line('lang')) == "th"):
                                                    $faculty_name = $faculty->faculty_name_th;
                                                elseif(strtolower($this->lang->line('lang')) == "en"):
                                                    $faculty_name = $faculty->faculty_name_en;
                                                else:
                                                    $faculty_name = $faculty->faculty_name_cn;
                                                endif;

                                                if($faculty_name!=""):
                                        ?>
                                        <li><i class="fa-solid fa-caret-right"></i> <a href="#"><?php echo $faculty_name;?></a></li>
                                        <?php endif; endforeach;?>
									</ul>
								</li>
							</ul>
						</div>

						<div class="col-sm-6 col-lg-4 font-noto">
							<h3 class="font-noto"><?php echo $this->lang->line('nav_services'); ?></h3>

							<ul class="iconlist mb-0">
								<li><i class="fa-solid fa-circle-info"></i> <a href="#"><?php echo $this->lang->line('nav_services_about'); ?></a></li>
								<li><i class="fa-solid fa-bullhorn"></i> <a href="#"><?php echo $this->lang->line('nav_services_announce'); ?></a></li>
								<li><i class="fa-solid fa-newspaper"></i> <a href="#"><?php echo $this->lang->line('nav_services_news'); ?></a></li>
								<li><i class="fa-solid fa-download"></i> <a href="#"><?php echo $this->lang->line('nav_services_download'); ?></a></li>
								<li><i class="fa-solid fa-circle-question"></i> <a href="#"><?php echo $this->lang->line('nav_services_faq'); ?></a></li>
								<li><i class="fa-solid fa-book"></i> <a href="#"><?php echo $this->lang->line('nav_services_manual'); ?></a></li>
							</ul>

                            <div class="line"></div>

                            <h3 class="font-noto">สมาชิก / ผู้เรียน</h3>

							<ul class="iconlist mb-0">
								<li><i class="fa-solid fa-right-to-bracket"></i> <a href="#">เข้าสู่ระบบ</a></li>
								<li><i class="fa-regular fa-address-card"></i> <a href="#">สมัครสมาชิก</a></li>
							</ul>

                            <div class="line"></div>

                            <h3 class="font-noto">ผู้สอน</h3>

                            <ul class="iconlist mb-0">
                                <li><i class="fa-solid fa-right-to-bracket"></i> <a href="#">เข้าสู่ระบบ</a></li>
                                <li><i class="fa-regular fa-address-card"></i> <a href="#">สมัครสมาชิก</a></li>
                            </ul>

						</div>
					</div>

        </div>
    </div>
</section>