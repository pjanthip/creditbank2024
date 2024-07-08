<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <form action="<?php echo site_url('admin/register/leaner66_v5')?>" method="post" id="fback">
                <input type="hidden" name="txt-curriculum_id" id="txt-curriculum_id" value="<?php echo $back_curriculum_id;?>"/>
                <input type="hidden" name="txt-faculty_id" id="txt-faculty_id" value="<?php echo $back_faculty_id;?>"/>
                <input type="hidden" name="txt-major_id" id="txt-major_id" value="<?php echo $back_major_id;?>"/>
                <input type="hidden" name="txt-training_id" id="txt-training_id" value="<?php echo $back_training_id;?>"/>
                
                <input type="hidden" name="txt-curriculum_name" id="txt-curriculum_name" value="<?php echo $back_curriculum_name;?>"/>
                <input type="hidden" name="txt-faculty_name" id="txt-faculty_name" value="<?php echo $back_faculty_name;?>"/>
                <input type="hidden" name="txt-major_name" id="txt-major_name" value="<?php echo $back_major_name;?>"/>
                <input type="hidden" name="txt-training_name" id="txt-training_name" value="<?php echo $back_training_name;?>"/>
                <button type="button" id="bt-back-curri" class="btn btn-dark d-lg-block text-white"><i class="fas fa-arrow-left"></i> ย้อนกลับ</button>
            </form>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header font-weight-bold font-18 bg-info text-white"><i class="fas fa-user mr-2"></i>ข้อมูลส่วนตัวของผู้สมัคร</div>
                    <div class="card-body font-18">
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ชื่อ - สกุล (ภาษาไทย)</div>
                            <div class="col-md-7"><?php echo $prefix_name_full_th.$register_member_fname_th;?> <?php echo $register_member_lname_th;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ชื่อ - สกุล (ภาษาอังกฤษ)</div>
                            <div class="col-md-7"><?php echo $register_member_fname_en;?> <?php echo $register_member_lname_en;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">เลขบัตรประจำตัว</div>
                            <div class="col-md-7"><?php echo $register_member_idcard;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ประเภทบัตรประจำตัว</div>
                            <div class="col-md-7"><?php echo $card_type_name;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">เพศ</div>
                            <div class="col-md-7"><?php echo getSex($register_member_gender);?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">วัน/เดือน/ปี เกิด</div>
                            <div class="col-md-7"><?php echo $register_member_birthday;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">เชื้อชาติ</div>
                            <div class="col-md-7"><?php echo $register_member_origin;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">สัญชาติ</div>
                            <div class="col-md-7"><?php echo $register_member_nation;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ศาสนา</div>
                            <div class="col-md-7"><?php echo $religion_name;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ความสามารถพิเศษ</div>
                            <div class="col-md-7"><?php echo $register_member_talent;?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header font-weight-bold font-18 bg-info text-white"><i class="fas fa-university mr-2"></i>ข้อมูลวุฒิการศึกษา/ระดับการศึกษา</div>
                    <div class="card-body font-18">
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ระดับการศึกษา</div>
                            <div class="col-md-7"><?php echo $education_level_name;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">วุฒิการศึกษา</div>
                            <div class="col-md-7"><?php echo $education_background_name;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">สถานศึกษา/โรงเรียน</div>
                            <div class="col-md-7"><?php echo $register_member_old_school;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ปีที่จบ</div>
                            <div class="col-md-7"><?php echo $register_member_graduate;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">เกรดเฉลี่ย</div>
                            <div class="col-md-7"><?php echo $register_member_grade;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">เรียนจบแล้ว</div>
                            <div class="col-md-7"><?php echo ($register_member_sgraduate=="1")? "ใช่":"ไม่ใช่";?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ทำงานแล้ว</div>
                            <div class="col-md-7"><?php echo ($register_member_swork=="1")? "ใช่":"ไม่ใช่";?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header font-weight-bold font-18 bg-info text-white"><i class="fas fa-address-card mr-2"></i>ที่อยู่ปัจจุบัน หรือ ที่อยู่ที่ติดต่อได้</div>
                    <div class="card-body font-18">
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">ที่อยู่</div>
                            <div class="col-md-7">
                                <span class="mr-2">เลขที่ <?php echo $register_member_add_no;?></span>
                                <span class="mr-2">หมู่ <?php echo $register_member_add_moo;?></span>
                                <?php echo ($register_member_alley!="")? (($register_member_alley!="-")? '<span class="mr-2">ซอย '.$register_member_alley.'</span>':""):"";?>
                                <?php echo ($register_member_road!="")? (($register_member_road!="-")? '<span class="mr-2">ถนน '.$register_member_road.'</span>':""):"";?>
                                <span class="mr-2">ตำบล<?php echo $DISTRICT;?></span>
                                <span class="mr-2">อำเภอ<?php echo $AMPHUR;?></span>
                                <span class="mr-2">จังหวัด<?php echo $PROVINCE;?></span>
                                <span><?php echo $register_member_post;?></span>
                            </div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">โทรศัพท์บ้าน</div>
                            <div class="col-md-7"><?php echo $register_member_tel;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">โทรศัพท์มือถือ</div>
                            <div class="col-md-7"><?php echo $register_member_phone;?></div>
                        </div>
                        <hr/>
                        <div class="row">
                            <div class="col-md-3 font-weight-bold border-right mr-5">E-mail</div>
                            <div class="col-md-7"><?php echo $register_member_email;?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header font-weight-bold font-18 bg-warning "><i class="fas fa-paperclip mr-2"></i>เอกสารประกอบการสมัคร</div>
                    <div class="card-body font-14">

                        <div class="table-responsive">
                            <table class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="text-center">
                                    <tr>
                                        <th class="col-1">ที่</th>
                                        <th class="col-4">รายการ</th>
                                        <th class="col-1">แฟ้ม</th>
                                        <th class="col-1">วันที่อัพโหลด</th>
                                        <th class="col-2">สถานะ</th>
                                        <th class="col-1">วันที่ตรวจสอบ</th>
                                        <th class="col-2">อนุมัติผล</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $cc=1;
                                        foreach($document as $row){
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $cc;?></td>
                                        <td><?php echo $row->document_type_name;?></td>
                                        <td class="text-center">
                                            <?php
                                                if($row->document_file_name!=""){
                                                    if($row->document_file_type == "jpg" || $row->document_file_type == "png" || $row->document_file_type == "gif"){
                                                        $icon = '<i class="fas fa-file-image mr-2"></i>ไฟล์รูปภาพ';
                                                        $color = 'text-info';
                                                        $lightbox = 'data-toggle="lightbox"';
                                                    }else{
                                                        $icon = '<i class="fas fa-file-pdf mr-2"></i>ไฟล์เอกสาร';
                                                        $color = 'text-danger';
                                                        $lightbox = '';
                                                    }
                                                    echo '<a href="'.base_url('assets/document_66/'.$row->document_file_name).'" '.$lightbox.' target="_blank" class="'.$color.'">'.$icon.'</a>';
                                                }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                            //echo do_date_name_st1($row->document_update);
                                                if($row->document_update!=""){
                                                    echo format_datetimeshot($row->document_update);
                                                }else{
                                                    if($row->document_upload!=""){
                                                        echo format_datetimeshot($row->document_upload);
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td class="text-center <?php echo getColorStatusDocument($row->document_reason_id)?>"><?php echo getLabelStatusDocument($row->document_reason_id);?></td>
                                        <td class="text-center">
                                            <?php
                                            //echo do_date_name_st1($row->document_update);
                                                if($row->ducument_reason_update!=""){
                                                    echo format_datetimeshot($row->ducument_reason_update);
                                                }
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            <?php
                                                if($register_status =="2"){
                                            ?>
                                            <button type="button" onclick="check_doc(<?php echo $row->document_id?>);" class="btn waves-effect waves-light w-100 btn-info text-white">ตรวจเอกสาร</button>
                                            <?php }?>
                                        </td>
                                    </tr>
                                    <?php $cc++;}?>
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

<div id="modal-upload" class="modal fade"  role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h4" id="myLargeModalLabel">ไฟล์อัพโหลด</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body divPreview">

            </div>
            <div class="modal-footer p-2">
                <button type="button" class="btn btn-light btn-sm" data-dismiss="modal" aria-label="Close"><i
                        class="fas fa-times-circle"></i> ปิดหน้าต่าง</button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/plugins/sweetAlert/8.11.8/sweetalert2.all.js');?>" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/sweetAlert/8.11.8/sweetalert2.css');?>">

<script src="<?php echo base_url('assets/plugins/lightbox/lightbox.js');?>" charset="UTF-8"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/plugins/lightbox/lightbox.css');?>">

<script>
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    $("#bt-back-curri").click(function() {
        $('#fback').submit();
    });

    function check_doc(id){
        var param = {
            document_id: id
        }
        $.post("<?php echo site_url('admin/register/load_form_upload_v5')?>", param, function(res) {

            $(".divPreview").html(res);
        });
        $("#modal-upload").modal();
    }
</script>