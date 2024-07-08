<!-- [ Main Content ] start -->

<div class="pcoded-main-container">
        <div class="pcoded-content mt-0">
            <div class="page-wrapper">
                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- [ horizontal-layout ] start -->
                    <div class="col-sm-12 ">
                        <div class="card col-md-12">
                            <h5 class="card-header"><i class="far fa-check-circle"></i>สมัครเรียนชุดฝึกอบรม</h5>
                            <div class="card-body text-center">

                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $member->prefix_name_full_th.$member->register_member_fname_th." ".$member->register_member_lname_th;?></h5>
                                        <p class="card-text">เบอร์โทรศัพท์ : <?php echo $member->register_member_phone?> &nbsp; &nbsp; &nbsp; &nbsp; | &nbsp; &nbsp; &nbsp; &nbsp; อีเมล์ : <?php echo $member->register_member_email?></p>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>ที่</th>
                                                <th>ชุดฝึกอบรม</th>
                                                <th>ค่าลงทะเบียน</th>
                                                <th>กำหนดชำระค่าลงทะเบียน</th>
                                                <th>*</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td class="text-center">1</td>
                                                <td class="text-left font-weight-bold">ชุดฝึกอบรม "ปรับพื้นฐานทางด้านสาธารณสุข"</td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center">
                                                </td>
                                            </tr>
                                            <?php foreach($tb_training_registers as $key => $item):?>
                                                <?php
                                                    $sql = "SELECT * FROM tb_training_member_66 WHERE training_member_idcard = '$member->register_member_idcard' AND training_register_id = '$item->training_register_id'";
                                                    $data_member = $this->db->query($sql)->row();
                                                ?>
                                                <?php
                                                    $date_now = date('Y-m-d H:i:s');

                                                    if($item->training_register_pay_start <= $date_now && $item->training_register_pay_end >= $date_now){
                                                        $text_color = "text-success";

                                                        if($data_member->training_member_spay == 1){
                                                            if($data_member->member_status == 1){
                                                                $button = '<a href="#"  class="btn btn-danger ml-2">ยกเลิกการสมัครเรียน</a>';
                                                            }elseif($data_member->member_status == 2){
                                                                $button = '<a href="'.site_url('payment-pay').'"  class="btn btn-primary ml-2">ชำระเงิน</a>';
                                                            }elseif($data_member->member_status == 3){
                                                                $button = '<a class="btn btn-success" href="'.base_url('assets/document_66/slip/'.$data_member->training_member_slip).'" target="_blank">ชำระเงินเรียบร้อยแล้ว</a>';
                                                            }else{
                                                                $button = '<a class="btn btn-warning" href="'.base_url('assets/document_66/slip/'.$data_member->training_member_slip).'" target="_blank">รอตรวจสอบ</a>';
                                                            }
                                                        }else{
                                                            $button = '<a href="'.site_url('payment-pay').'"  class="btn btn-primary ml-2">ชำระเงิน</a>';   
                                                        }
                                                    }elseif($item->training_register_pay_end <= $date_now){
                                                        $text_color = "text-danger";
                                                        $button = '<a class="btn btn-light" href="'.base_url('assets/document_66/slip/'.$data_member->training_member_slip).'" target="_blank">ประวัติชำระเงิน</a>';
                                                    }else{
                                                        $text_color = "text-warning";
                                                        $button = '';
                                                    }
                                                ?>
                                            <tr>
                                                <td class="text-center"><i class="fa-solid fa-circle-check text-success"></i></td>
                                                <td class="text-left"><?php echo $item->training_name?></td>
                                                <td class="text-center"><?php echo number_format($item->training_register_price);?> บาท</td>
                                                <!-- <td class="text-center"><?php echo $person_register;?> คน / <?php echo $item->training_register_qty?> คน</td>
                                                <td class="text-center"><?php echo $person_register_reserve;?> คน / <?php echo $item->training_register_reserve?> คน </td> -->
                                                <td colspan="1" class="text-left <?php echo $text_color;?>">
                                                    กำหนดชำระค่าลงทะเบียน (<?php echo format_datetimeshot($item->training_register_pay_start)?> - <?php echo format_datetimeshot($item->training_register_pay_end)?>)
                                                </td>
                                                <td class="text-center">
                                                    <?php echo $button;?>
                                                </td>
                                                
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    <!-- <h2 class="text-danger py-5">*** หมายเหตุ : ผู้สมัครจะต้องกดปุ่ม <button type="button"  class="btn btn-primary ml-2">สมัครเรียน</button> ให้ครบทุกชุดฝึกอบรม จึงจะสามารถชำระค่าลงทะเบียนได้</h2> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" text-center col-12">
                        <a href="<?php echo site_url('payment');?>" class="btn btn-outline-secondary"><i class="fas fa-chevron-circle-left"></i> ออกจากระบบ</a>
                    </div>
                    <!-- [ horizontal-layout ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
    </div>
    <script>
    </script>