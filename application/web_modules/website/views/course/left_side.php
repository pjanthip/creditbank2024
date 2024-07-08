<aside class="sidebar col-lg-3">
    <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

        <div class="widget font-noto">

            <h3 class="font-noto pb-1 mb-1"><?php echo $this->lang->line('course_filter_faculty'); ?></h3>
            <div class="form-result"></div>
            <form>
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
                <div class="form-check border-bottom py-2">
                    <input class="form-check-input" type="checkbox" value="" id="<?php echo $faculty->faculty_id;?>">
                    <label class="form-check-label fw-normal" for="<?php echo $faculty->faculty_id;?>"><?php echo $faculty_name;?></label>
                </div>
                <?php endif; endforeach;?>
            </form>

        </div>

    </div>
</aside>