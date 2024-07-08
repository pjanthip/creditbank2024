<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor"><?php echo $icon_page; ?> <?php echo $title_page; ?></h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url('sis/home'); ?>">หน้าหลัก</a></li>

                <?php
                if (isset($breadcrumb)) {
                    foreach ($breadcrumb as $k => $v) {
                        if ($v[1] == "active") {
                            echo '<li class="breadcrumb-item active" aria-current="page">' . $k . '</li>';
                        } else {
                            echo '<li class="breadcrumb-item"><a href="' . $v[0] . '">' . $k . '</a></li>';
                        }
                    }
                }
                ?>
            </ol>
            <!--<button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>-->
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->