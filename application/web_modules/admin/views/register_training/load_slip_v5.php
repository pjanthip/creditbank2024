<div class="row mb-2">
    <div class="col-md-3">ธนาคารที่โอน</div>
    <div class="col-md-9"><?php echo $tb_training_member->bank_name;?></div>
</div>
<div class="row mb-2">
    <div class="col-md-3">สาขาที่โอน</div>
    <div class="col-md-9"><?php echo $tb_training_member->training_member_bank;?></div>
</div>
<div class="row mb-2">
    <div class="col-md-3">วัน เวลา ที่โอน</div>
    <div class="col-md-9">
        <?php
            
            $str_pay = strtotime($tb_training_member->training_member_transfer_date.' '.$tb_training_member->training_member_transfer_time);
            $day_pay = date('Y-m-d H:i:s',$str_pay);
            echo format_datetimeshot($day_pay);
        ?>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-3">ไฟล์สลิปชำระเงิน</div>
    <div class="col-md-9">
        <a href="<?php echo base_url('assets/document_66/slip/'.$tb_training_member->training_member_slip);?>" target="_blank">
            <img src="<?php echo base_url('assets/document_66/slip/'.$tb_training_member->training_member_slip);?>" style="max-height:300px;" />
        </a>
        <div class="row">
            <a class="mt-4 btn waves-effect waves-light btn-rounded btn-sm btn-info text-white" href="<?php echo base_url('assets/document_66/slip/'.$tb_training_member->training_member_slip);?>" target="_blank"><?php echo base_url('assets/document_66/slip/'.$tb_training_member->training_member_slip);?> <i class="fas fa-external-link-alt ml-1"></i></a>
        </div>
    </div>
</div>