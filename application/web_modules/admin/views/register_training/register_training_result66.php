<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/register_training/training66');?>" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">หน่วยงานจัดการศึกษา</label>
                                        <div class="col-md-10">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $faculty_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">สาขาวิชา</label>
                                        <div class="col-md-10">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $major_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">หลักสูตร</label>
                                        <div class="col-md-10">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $curriculum_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">ชุดฝึกอบรม</label>
                                        <div class="col-md-10">
                                            <input type="text" id="training_name" name="training_name" class="form-control" value="<?php echo $training_name;?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php foreach($training_register as $data){?>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">ค่าสมัคร</label>
                                        <div class="col-md-1">
                                            <input type="text" id="training_name" name="training_name" class="form-control text-center" value="<?php echo number_format($data->training_register_price, 0, '', ',');?>" disabled>
                                        </div>
                                        <label class="col-md-1" for="training_objective">บาท</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">จำนวนที่รับ</label>
                                        <div class="col-md-1">
                                            <input type="text" id="training_name" name="training_name" class="form-control text-center" value="<?php echo $data->training_register_qty;?>" disabled>
                                        </div>
                                        <label class="col-md-1" for="training_objective">คน</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 mb-1 mt-1">
                                    <div class="row">
                                        <label class="col-md-2" for="training_objective">สำรองที่นั่ง</label>
                                        <div class="col-md-1">
                                            <input type="text" id="training_name" name="training_name" class="form-control text-center" value="<?php echo $data->training_register_reserve;?>" disabled>
                                        </div>
                                        <label class="col-md-1" for="training_objective">คน</label>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center bg-info"><h4 class="font-weight-bold m-b-0 text-white">รายชื่อผู้สมัครในชุดฝึกอบรม</h4></div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="table-responsive m-t-40">
                                <table id="table-member" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="col-md-1">ลำดับที่สมัคร</th>
                                            <th class="col-md-3">ผู้สมัคร</th>
                                            <th class="col-md-2">วันที่สมัครเป็นผู้เรียน</th>
                                            <th class="col-md-2">วันที่สมัครเรียนชุดฝึกอบรม</th>
                                            <th class="col-md-2">สถานะชำระเงิน</th>
                                            <th class="col-md-2">ตรวจสอบ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $cc=1;
                                            foreach($training_member as $member){
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo sprintf('%02d', $cc);?></td>
                                            <td><?php echo $member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th?><br/>(ID : <?php echo $member->training_member_idcard;?>)</td>
                                            <td class="text-center"><?php echo format_datetimeshot($member->register_datetime_record);?></td>
                                            <td class="text-center"><?php echo format_datetimeshot($member->training_member_date_register);?></td>
                                            <td class="text-center">
                                                <?php
                                                    if($member->training_member_spay==1){
                                                        echo '<a href="javascript:void(0)" onclick="getSlip('.$member->training_member_id.',\''.$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th.'\');" class="text-success">ชำระเงินเรียบร้อยแล้ว <i class="fas fa-external-link-alt"></i></a>';
                                                        if($member->member_status==2){
                                                            //echo '<div class="text-warning">(แก้ไข)</div>';
                                                        }
                                                    }else{
                                                        echo '<span class="text-warning">ยังไม่ชำระเงิน</span>';
                                                    }
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                    if($member->training_member_spay==1):
                                                        echo show_approve_combobox($member->training_member_id,$member->member_status);
                                                ?>
                                                <button type="button" onclick="set_approve('<?php echo $member->training_member_id;?>','<?php echo $member->training_member_idcard;?>');" class="btn waves-effect waves-light btn-primary col-4">บันทึก</button>
                                                <?php endif?>
                                            </td>
                                        </tr>
                                        <?php
                                            $cc++;}
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- End Containner -->
    <!-- ============================================================== -->
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
        $(function () {
            $('#table-member').DataTable({
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
                },
                responsive: true,
                "pageLength": 50
            });
        });

        function getSlip(id,slip_name){
            //alert(id);
            var param = {
                id : id
            }
            $.post("<?php echo site_url('admin/register_training/getSlip')?>", param, function(res) {
                $(".slipHeader").html(slip_name);
                $(".slipPreview").html(res);
            });
            $("#slipModal").modal();
        };

        function set_approve(rid,idc){
            if($('#approve-'+rid).val() != ""){
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('admin/register_training/set_approve') ?>",
                    data: {
                        id: rid,
                        idc: idc,
                        status: $('#approve-'+rid).val()
                    },
                    success: function(status) {
                        if(status == 1){
                            Swal.fire({
                                title: 'สำเร็จ',
                                html: 'บันทึกข้อมูลเรียบร้อยแล้ว',
                                type: 'success',
                            });
                            setTimeout(() => {
                                window.location.reload();
                            }, 1500);
                        }else{
                            Swal.fire({
                                title: 'แจ้งเตือน',
                                html: 'เกิดข้อผิดพลาดระหว่างการบันทึกข้อมูล',
                                type: 'error',
                            });
                            setTimeout(() => {
                                window.location.reload();
                            }, 1500);
                        }
                    }
                });
            }else{
                Swal.fire({
                    title: 'แจ้งเตือน',
                    html: 'กรุณาเลือกสถานะตรวจสอบ',
                    type: 'error',
                });
            }
        }
    </script>