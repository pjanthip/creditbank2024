<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        

        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="bi bi-download"></i><span class="ml-2">Download กำหนดการฝึกอบรม</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url('assets/files/BPFC0001T0001.pdf') ?>" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                ชุดฝึกอบรมที่ 1
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url('assets/files/BPFC0001T0002.pdf') ?>" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                ชุดฝึกอบรมที่ 2
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url('assets/files/BPFC0001T0003.pdf') ?>" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                ชุดฝึกอบรมที่ 3
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url('assets/files/BPFC0001T0004.pdf') ?>" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                ชุดฝึกอบรมที่ 4
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url('assets/files/BPFC0001T0005.pdf') ?>" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                ชุดฝึกอบรมที่ 5
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url('assets/files/BPFC0001T0006.pdf') ?>" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                ชุดฝึกอบรมที่ 6
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>