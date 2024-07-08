<section class="page-title bg-transparent">
    <div class="container">
        <div class="page-title-row">

            <div class="page-title-content">
                <h1 class="font-noto"><?php echo $title; ?></h1>
                <span< /span>
            </div>

            <!-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb  font-noto">
                    <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>"><?php echo $this->lang->line('nav_home'); ?></a></li>
                    <?php
                    foreach ($breadcrumb as $label => $info) {
                        if (isset($info['active']) && $info['active']) {
                            echo '<li class="breadcrumb-item active" aria-current="page">' . $label . '</li>';
                        } else {
                            echo '<li class="breadcrumb-item"><a href="' . $info['url'] . '">' . $label . '</a></li>';
                        }
                    }
                    ?>
                </ol>
            </nav> -->

        </div>
    </div>
</section>
<section id="">
    <div class="content-wrap bg-light overflow-visible py-3 pt-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb fs-12 font-noto">
                    <li class="breadcrumb-item"><i class="fas fa-folder-open pe-2"></i> <a href="<?php echo site_url(); ?>"><?php echo $this->lang->line('nav_home'); ?></a></li>
                    <?php
                    foreach ($breadcrumb as $label => $info) {
                        if (isset($info['active']) && $info['active']) {
                            echo '<li class="breadcrumb-item active" aria-current="page">' . $label . '</li>';
                        } else {
                            echo '<li class="breadcrumb-item"><a href="' . $info['url'] . '">' . $label . '</a></li>';
                        }
                    }
                    ?>
                </ol>
            </nav>
        </div>
    </div>
</section>