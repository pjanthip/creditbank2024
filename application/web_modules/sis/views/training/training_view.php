<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Info box -->
        <!-- ============================================================== -->
        <div class="card shadow rounded">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th class="col-md-1">ชุดฝึกอบรม</th>
                                <th class="col-md-4">ชื่อชุดฝึกอบรม</th>
                                <th class="col-md-1">จำนวนผู้สมัคร</th>
                                <!--<th class="col-md-2">ผู้สมัครชุดฝึกอบรม</th>-->
                                <th class="col-md-2">ลงทะเบียน</th>
                                <th class="col-md-2">ชำระเงิน</th>
                                <th class="col-md-2">สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $c = 1;
                            foreach ($training as $data) {

                                $training_active = $data->showStatus;

                                $sql = "SELECT * FROM tb_training_register WHERE training_id = '" . $data->training_id . "'";
                                $q = $this->db->query($sql);
                                if ($q->num_rows() > 0) {
                                    $register = $q->row();
                                    $price = number_format($register->training_register_price) . " บาท";
                                    $max_member = $register->training_register_qty;

                                    $sql2 = "SELECT * FROM tb_training_member WHERE training_register_id = '" . $register->training_register_id . "'";
                                    $q2 = $this->db->query($sql2);
                                    if ($q2->num_rows() > 0) {
                                        $training_member = $q2->row();
                                        $member = $q2->num_rows;
                                    } else {
                                        $member = "0";
                                    }
                                    $status_register = $register->training_register_status;

                                    $paymentDate = date('Y-m-d H:i:s');
                                    $paymentDate = date('Y-m-d H:i:s', strtotime($paymentDate));
                                    //echo $paymentDate; // echos today! 
                                    $contractDateBegin = date('Y-m-d H:i:s', strtotime($register->training_register_pay_start));
                                    $contractDateEnd = date('Y-m-d H:i:s', strtotime($register->training_register_pay_end));

                                    if (($paymentDate >= $contractDateBegin) && ($paymentDate <= $contractDateEnd)) {
                                        $status_pay = 1;
                                    } else {
                                        if ($paymentDate < $contractDateBegin) {
                                            $status_pay = 0;
                                        } else {
                                            $status_pay = 2;
                                        }
                                    }

                                    $sql3 = "SELECT * FROM tb_training_member WHERE training_member_idcard = '" . $learner->learner_idcard . "' AND training_register_id = '".$register->training_register_id."'";
                                    $q3 = $this->db->query($sql3);
                                    if ($q3->num_rows() > 0) {
                                        $data3 = $q3->row();
                                        if($data3->training_member_spay ==1){
                                            $status_reg =  '<a href="javascript:void(0)" onclick="getSlip(\''.$data3->training_member_id.'\');" class="text-success"><i class="fa-solid fa-circle-check"></i> ชำระเงินเรียบร้อยแล้ว <i class="fas fa-external-link-alt"></i></a>';
                                            if($data3->member_status ==0){$status_reg .=  '<br/><span class="text-info"><i class="fa-solid fa-circle-info"></i> รอตรวจสอบ</span>';}
                                            elseif($data3->member_status ==1){$status_reg .=  '<br/><span class="text-danger"><i class="fa-solid fa-circle-minus"></i> ยกเลิกการสมัคร</span>';}
                                            elseif($data3->member_status ==2){$status_reg .=  '<br/><span class="text-warning"><i class="fa-solid fa-circle-exclamation"></i> แก้ไขข้อมูลแจ้งชำระเงิน</span>';}
                                            else{$status_reg .=  '<br/><span class="text-success"><i class="fa-solid fa-circle-check"></i> อนุมัติผล "ผ่าน" การสมัครเรียน</span>';}
                                            $btn_regis = 'ไม่สามารถยกเลิกได้';
                                        }else{
                                            $status_reg =  '<span class="text-danger"><i class="fa-solid fa-circle-xmark"></i> ยังไม่ชำระเงิน</span>';
                                            
                                        $btn_regis = '<button type="button" class="btn btn-danger ml-2 has-ripple" onclick="regis_training_cancel(\''.$register->training_register_id.'\', \''.$learner->learner_idcard.'\')"><i class="fa-solid fa-xmark"></i> ยกเลิกการสมัคร</button>';
                                        }
                                        $btn_pay = '<a href="'.site_url('sis/training/pay/'.$register->training_register_id).'" class="btn btn-info ml-2 has-ripple">ชำระเงิน</a>';
                                    } else {
                                        $status_reg = '<span class="">-</span>';
                                        $btn_pay = '<button type="button" disabled class="btn btn-secondary ml-2 has-ripple">ไม่สามารถชำระเงินได้</button>';
                                    }
                                } else {
                                    $price = "-";
                                    $member = "0";
                                    $max_member = "0";
                                    $status_register = 0;
                                    $status_pay = 0;
                                    $status_reg = '<span class="">-</span>';
                                    $btn_pay = '<button type="button" disabled class="btn btn-secondary ml-2 has-ripple">ไม่สามารถชำระเงินได้</button>';
                                }

                                if($training_active == 1){
                                    $active = 'class="table-warning"';
                                }else{
                                    $active = '';
                                }
                            ?>
                                <tr <?php echo $active;?>>
                                    <th scope="row" class="text-center"><?php echo $c?></th>
                                    <td>
                                        <?php echo $data->training_name ?>
                                        <?php if($q->num_rows()>0):?>
                                        <br/>
                                        <span class="fs-12 text-success">
                                        <span class="font-weight-bold">ระยะเวลาการสมัคร</span><br/><?php echo format_datetimeshot($register->training_register_datetime_start);?> - <?php echo format_datetimeshot($register->training_register_datetime_end);?>
                                        </span><br/>
                                        <span class="fs-12 text-success">
                                        <span class="font-weight-bold">ระยะเวลาการชำระเงิน</span><br/><?php echo format_datetimeshot($register->training_register_pay_start);?> - <?php echo format_datetimeshot($register->training_register_pay_end);?>
                                        </span><br/>
                                        <span class="fs-12 text-success">
                                        <span class="font-weight-bold">ค่าลงทะเบียน</span><br/><?php echo $price ?>
                                        </span>
                                        <?php endif;?>
                                    </td>
                                    <td class="text-center"><?php echo $member ?> คน / <?php echo $max_member ?> คน</td>
                                    <td class="text-center">
                                        <?php if ($status_register == 0) : ?>
                                            <button type="button" disabled class="btn btn-secondary ml-2 has-ripple">ยังไม่เปิดให้ลงทะเบียน<span class="ripple ripple-animate" style="height: 99.9844px; width: 99.9844px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -34.0703px; left: 24.1641px;"></span></button>
                                        <?php endif; ?>
                                        <?php if ($status_register == 1) : ?>
                                            <?php if ($q3->num_rows() > 0):?>
                                                <?php echo $btn_regis;?>
                                            <?php else:?>
                                                <button type="button" class="btn btn-info ml-2 has-ripple" onclick="regis_training_member('<?php echo $register->training_register_id?>', '1','<?php echo $learner->learner_idcard;?>')">สมัครเรียน</button>
                                            <?php endif;?>
                                            <!--<button type="button" class="btn btn-success ml-2 has-ripple" onclick="regis_training_member('<?php echo $register->training_register_id?>', '1','<?php echo $learner->learner_idcard;?>')"><i class="fa-solid fa-check"></i> สมัครแล้ว</button>-->
                                        <?php endif; ?>
                                        <?php if ($status_register == 2) : ?>
                                            <button type="button" disabled class="btn btn-success ml-2 has-ripple">ปิดลงทะเบียน<span class="ripple ripple-animate" style="height: 99.9844px; width: 99.9844px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -34.0703px; left: 24.1641px;"></span></button>
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($status_pay == 0) : ?>
                                            <button type="button" disabled class="btn btn-secondary ml-2 has-ripple">ยังไม่ถึงกำหนดชำระเงิน<span class="ripple ripple-animate" style="height: 99.9844px; width: 99.9844px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -34.0703px; left: 24.1641px;"></span></button>
                                        <?php endif; ?>
                                        <?php if ($status_pay == 1) : ?>
                                            <?php echo $btn_pay;?>
                                        <?php endif; ?>
                                        <?php if ($status_pay == 2) : ?>
                                            <button type="button" disabled class="btn btn-danger ml-2 has-ripple">ปิดชำระเงิน<span class="ripple ripple-animate" style="height: 99.9844px; width: 99.9844px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: -34.0703px; left: 24.1641px;"></span></button>
                                        <?php endif; ?>
                                    </td>
                                    <td class=""><?php echo $status_reg;?></td>
                                </tr>
                            <?php $c++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="slipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title slipHeader" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body slipPreview"></div>
      <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(function() {
        $('#myTable').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
            },
            responsive: true
        });
    });

    function getSlip(id){
            //alert(id);
            var param = {
                id : id
            }
            $.post("<?php echo site_url('sis/training/getSlip')?>", param, function(res) {
                $(".slipHeader").html('สลิปชำระค่าลงทะเบียนชุดฝึกอบรม');
                $(".slipPreview").html(res);
            });
            $("#slipModal").modal();
        };

    function regis_training_member(training_register_id,training_member_status,learner_idcard){
        Swal.fire({
            title: 'ยืนยันการสมัครเรียน',
            html: '<span class="fs-14">ชุดฝึกอบรมที่ 2 ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</span>',
            showDenyButton: false,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'ยืนยัน',
            confirmButtonColor: '#03a9f3',
            cancelButtonText: 'ยกเลิก',
            cancelButtonColor: '#d33'
        }).then((result) => {
            if (result.isConfirmed) {
                event.preventDefault();
                $.post('<?php echo site_url("sis/training/regis_training_member")?>', { training_register_id : training_register_id, training_member_status : training_member_status, learner_idcard : learner_idcard}, function(response){
                    if(response.status){
                        Swal.fire({
                            title: 'สมัครเรียบร้อยแล้ว',
                            icon: 'success',
                            html: '<span class="fs-14">ชุดฝึกอบรมที่ 2 ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</span>',
                            confirmButtonText: 'ชำระเงิน',
                            confirmButtonColor: '#03a9f3',
                            showCancelButton: true,
                            cancelButtonText: 'ปิด',
                            cancelButtonColor: '#d33',
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: 'ยังไม่ถึงกำหนดชำระเงิน',
                                    icon: 'info',
                                    html: '<span class="fs-14 text-danger">ระยะเวลาการชำระเงิน 25 พ.ค. 65  00:00 น. - 15 มิ.ย. 65  23:59 น.</span>',
                                    showConfirmButton: false,
                                    showCancelButton: true,
                                    cancelButtonText: 'ปิด',
                                    cancelButtonColor: '#d33',
                                    allowOutsideClick: false
                                }).then((result) => {window.location.reload();})
                            }else{
                                window.location.reload();
                            }
                        })
                    }else{
                        Swal.fire({
                            title: 'การสมัครไม่สำเร็จ',
                            icon: 'error',
                            html: '<span class="fs-14 text-danger">กรุณาติดต่อ ฝ่ายงานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย</span>',
                            showConfirmButton: false,
                            showCancelButton: true,
                            cancelButtonText: 'ปิด',
                            cancelButtonColor: '#d33'
                        })
                    }
                    /*$.ajax({
                        type: "POST",
                        url: "<?php echo site_url('sis/training/line_notify') ?>",
                        data: {
                            id: response.id,
                            idcard: response.idcard,
                            function: 'training'
                        },
                        success: function(data) {}
                    });*/
                    
                }, 'json' );
            }
        })
    }

    function regis_training_cancel(training_register_id,learner_idcard){
        Swal.fire({
            title: 'ยกเลิกการสมัคร',
            html: '<span class="fs-14">ชุดฝึกอบรมที่ 2 ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</span>',
            showDenyButton: false,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'ยืนยัน',
            confirmButtonColor: '#03a9f3',
            cancelButtonText: 'ยกเลิก',
            cancelButtonColor: '#d33'
        }).then((result) => {
            if (result.isConfirmed) {
                event.preventDefault();
                $.post('<?php echo site_url("sis/training/regis_training_cancel")?>', { training_register_id : training_register_id, learner_idcard : learner_idcard}, function(response){
                    if(response.status){
                        Swal.fire({
                            title: 'ยกเลิกเรียบร้อยแล้ว',
                            icon: 'success',
                            html: '<span class="fs-14">ชุดฝึกอบรมที่ 2 ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</span>',
                            showConfirmButton: false,
                            showCancelButton: true,
                            cancelButtonText: 'ปิด',
                            cancelButtonColor: '#d33',
                            allowOutsideClick: false
                        }).then((result) => {window.location.reload();})
                    }else{
                        Swal.fire({
                            title: 'การสมัครไม่สำเร็จ',
                            icon: 'error',
                            html: '<span class="fs-14 text-danger">กรุณาติดต่อ ฝ่ายงานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย</span>',
                            showConfirmButton: false,
                            showCancelButton: true,
                            cancelButtonText: 'ปิด',
                            cancelButtonColor: '#d33'
                        })
                    }
                }, 'json' );
            }
        })
    }

    
    
</script>