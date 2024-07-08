<?php
    date_default_timezone_set("Asia/Bangkok");
?>
<form class="form-horizontal" id="postForm" name="postForm" role="form" accept-charset="utf-8" method="post" action="<?php echo site_url('admin/register/update_document'); ?>">
    <input type="hidden" name="document_id" id="document_id" value="<?php echo $tb_document->document_id ?>">
    <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body font-18">
                    <div class="row">
                        <div class="col-md-3 font-weight-bold border-right mr-5">สถานะเอกสาร</div>
                        <div class="col-md-7">
                            <select class="form-control form-select col-10" id="document_reason_status" name="document_reason_status">
                                <option selected="" disabled>- เลือกปรับสถานะเอกสาร -</option>
                                <?php
                                    for($i=0;$i<=3;$i++){
                                        $selected = ($tb_document->document_reason_id == $i)? "selected" :"";
                                        echo '<option value="'.$i.'" '.$selected.'>'.getLabelStatusDocument($i).'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3 font-weight-bold border-right mr-5">เหตุผล</div>
                        <div class="col-md-7"><textarea class="form-control col-12" rows="5" id="document_reason" name="document_reason"><?php echo $tb_document->ducument_reason;?></textarea></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3 font-weight-bold border-right mr-5">ผู้ตรวจเอกสาร</div>
                        <div class="col-md-7"><input class="form-control" type="text" placeholder="<?php echo $this->session->userdata('fulllname');?>" readonly></div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-3 font-weight-bold border-right mr-5">วันที่ตรวจสอบ</div>
                        <div class="col-md-7"><input class="form-control" type="text" id="ducument_reason_update" name="ducument_reason_update" value="<?php echo format_datetimeshot(date("Y-m-d H:i:s"));?>" readonly></div>
                    </div>
                    <hr />
                    
                    <div class="row">
                        <div class="col-md-3 font-weight-bold mr-5"></div>
                        <div class="col-md-7">
                            <button type="button" id="bt-update-document" class="btn btn-info waves-effect waves-light m-r-10 text-white">บันทึก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $("#bt-update-document").click(function (e) {// เมื่อกดปุ่มบันทึกข้อมูล
        $('#postForm').ajaxSubmit({//ฟอร์มบันทึกข้อมูล
            dataType: 'json',
            success: processJson // เมื่อทำงานเสร็จให้ไปทำ fucntion นี้ต่อ
        });
    });
    function processJson(jdata) {// function เมื่อ ส่งค่าไปทำงานเสร็จ
        if (jdata.status) {
            Swal.fire({
                title: 'แจ้งเตือน',
                html: 'บันทึกผลการตรวจเอกสาร เรียบร้อยแล้ว',
                type: 'success',
            })
            setTimeout(() => {
                window.location.reload();
            }, 1500);
        } else {
            Swal.fire({
                title: 'แจ้งเตือน',
                html: 'เกิดข้อผิดพลาดในการบันทึก',
                type: 'error',
            });
        }
    }
</script>