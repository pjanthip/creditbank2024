<?php echo $this->load->view('website/theme/breadcrumb'); ?>

<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">

            <div class="row">
                <?php for($i=0;$i<=10;$i++):?>
                <div class="col-md-4 mb-4">
                    <div class="card bg-white border-0 border-bottom border-success border-4 shadow">
                        <div class="card-body p-4">
                            <p class="m-0 text-muted fs-14 font-noto text-end">#ID : <?php echo sprintf('%06d', $i);?></p>
                            <h4 class="mb-1 font-noto">ชื่อคู่มือการใช้งาน</h4>
                            <p class="mb-3 text-muted fs-14 font-noto">อัปเดต 13 กุมภาพันธ์ 2024</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="font-noto fs-12 ">เปิดอ่าน <?php echo number_format(13567);?> ครั้ง</div>
                                <div class="text-center"><a href="#" class="btn btn-success font-noto px-5">อ่าน</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endfor;?>
            </div>

        </div>
    </div>
</section>

