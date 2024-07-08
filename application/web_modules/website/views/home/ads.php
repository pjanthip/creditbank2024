<section id="content">
    <div class="content-wrap bg-info">

        <div class="container">

            <div class="row justify-content-around align-items-center">
                <div class="col-md-4">
                    <h2 class="display-5 fw-medium font-noto"><?php echo $this->lang->line('ads_topic');?></h2>
                    <p class="font-noto"><?php echo $this->lang->line('ads_detail');?></p>
                </div>

                <div class="col-md-6 rounded-5">
                    <video id="slide-video" class="d-block w-100 h-100 rounded-5 shadow" poster="<?php echo canvas; ?>images/videos/explore-poster.jpg" preload="auto" loop="" autoplay="" playsinline="" muted="">
                        <source src="<?php echo canvas; ?>images/videos/explore.webm" type="video/webm">
                        <source src="<?php echo canvas; ?>images/videos/explore.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>

    </div>
</section>