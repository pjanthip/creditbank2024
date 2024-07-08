<section id="main_network" class="py-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row text-center">
                    <h2 class="font-noto"><?php echo $this->lang->line('topic_network');?></h2>
                    <div>
                        <img src="<?php echo base_url('assets/images/website/teamwork.gif') ?>" class="col-6" />
                    </div>
                </div>
            </div>
            <div class="col-md-8">

                <div class="row justify-content-center mw-lg mx-auto gutter-20">
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
                    <div class="col-md-3">
                        <a class="btn-network">
                            <div class="col-md-4 text-center">
                                <img src="<?php echo base_url('assets/images/website/teamwork.gif') ?>" class="w-100" />
                            </div>
                            <div class="col-md-8 d-flex align-items-center">
                                <div class="font-noto fs-14 fw-bold ps-1"><?php echo $faculty_name;?></div>
                            </div>
                        </a>
                    </div>
                    <?php endif; endforeach;?>

                </div>

            </div>
        </div>
    </div>
</section>

<style>
    #main_network {
        background-color: rgb(238, 252, 248);
        ;
    }

    #main_network h2 {
        color: rgb(7, 136, 134);
    }

    .btn-network {
        padding: 11px 12px;
        display: flex;
        border-radius: 8px;
        box-shadow: rgba(0, 0, 0, 0.04) 0px 0px 2px 0px, rgba(0, 0, 0, 0.08) 0px 4px 10px 0px;
        background-color: rgb(255, 255, 255);
        cursor: pointer;
        color: rgba(0, 0, 0, 0.65);
    }

    .btn-network:hover {
        background-color: #dcf9f3;
    }

    .btn-network:active {
        background-color: #78ebd6;
    }
</style>


<!-- <div class="fancy-title title-bottom-border topmargin">
    <h3>เครือข่ายความร่วมมือ</h3>
</div>

<ul class="clients-grid grid-2 grid-sm-3 grid-md-4 mb-0">
    <li class="grid-item"><a href="http://edu.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_edu.png" alt="คณะครุศาสตร์"></a></li>
    <li class="grid-item"><a href="http://human.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_hm.png" alt="คณะมนุษยศาสตร์"></a></li>
    <li class="grid-item"><a href="http://ms.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_ms.png" alt="คณะวิทยาการจัดการ"></a></li>
    <li class="grid-item"><a href="https://science.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_sci.png" alt="คณะวิทยาศาสตร์และเทคโนโลยี"></a></li>
    <li class="grid-item"><a href="http://www.ind.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_ind.png" alt="คณะเทคโนโลยีอุตสาหกรรม"></a></li>
    <li class="grid-item"><a href="https://www.stam2002.com/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_stam.png" alt="วิทยาลัยการแพทย์พื้นบ้านและการแพทย์ทางเลือก"></a></li>
    <li class="grid-item"><a href="http://tourismhotel.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_sot.png" alt="สำนักวิชาการท่องเที่ยว"></a></li>
    <li class="grid-item"><a href="https://scit.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_scit.png" alt="สำนักวิชาคอมพิวเตอร์และเทคโนโลยีสารสนเทศ"></a></li>
    <li class="grid-item"><a href="http://law.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_law.png" alt="สำนักวิชานิติศาสตร์"></a></li>
    <li class="grid-item"><a href="http://accounting.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_account.png" alt="สำนักวิชาบัญชี"></a></li>
    <li class="grid-item"><a href="https://pubadm.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_pubadm.png" alt="สำนักวิชารัฐศาสตร์และรัฐประศาสนศาสตร์"></a></li>
    <li class="grid-item"><a href="https://hs.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_hs.png" alt="สำนักวิชาวิทยาศาสตร์สุขภาพ"></a></li>
    <li class="grid-item"><a href="https://social.crru.ac.th/" target="_blank"><img src="<?php echo base_url(); ?>assets/images/icon/faculty/ico_soc.png" alt="สำนักวิชาสังคมศาสตร์"></a></li>
</ul> -->