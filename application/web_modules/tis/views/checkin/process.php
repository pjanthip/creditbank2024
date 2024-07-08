<link rel="stylesheet" href="<?php echo base_url('assets/plugins/mcdatepicker-master/dist/mc-calendar.min.css'); ?>" />
<script src="<?php echo base_url('assets/plugins/mcdatepicker-master/dist/mc-calendar.min.js'); ?>"></script>
<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('tis/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form  id="getData" name="getData" role="form" accept-charset="utf-8" method="post" action="<?php echo site_url('tis/checkin/process'); ?>">
                        <div class="row">
                            <div class="input-group col-md-4">
                                <span class="input-group-text" id="">เลือกวันที่เช็คชื่อ</span>
                                    
                                    <input type="text" id="check_date" name="check_date" class="form-control" value="<?php echo $current_date; ?>">
                                    <input type="hidden" name="course_id" id="course_id" value="1"/>
                                    <input type="hidden" name="group_id" id="group_id" value="1"/>
                            </div>
                            
                            <button type="button" id="btn-search" class="btn waves-effect waves-light btn-primary">เลือกวัน</button>
                            <a href="javascript: location.reload(true);" class="btn waves-effect waves-light btn-info text-white ml-2"><i class="fa-solid fa-arrow-rotate-right"></i> Refresh</a>
                        </div>
                                </form>
                        <br>

                        <?php
                            $this->load->view('tis/checkin/table_form_'.$form);
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Containner -->
        <!-- ============================================================== -->
    </div>
    <div id="ccccc"></div>
</div>
<script>

    const myDatePicker = MCDatepicker.create({
        el: '#check_date',
        dateFormat: 'YYYY-MM-DD',
        customOkBTN: 'ตกลง',
        customCancelBTN: 'ยกเลิก',
        customClearBTN: 'ล้าง',
        customWeekDays: ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'],
        customMonths: ['มกราคม',
            'กุมภาพันธ์',
            'มีนาคม',
            'เมษายน',
            'พฤษภาคม',
            'มิถุนายน',
            'กรกฎาคม',
            'สิงหาคม',
            'กันยายน',
            'ตุลาคม',
            'พฤศจิกายน',
            'ธันวาคม'
        ]
    })

    $('#btn-search').click(function() {
        //const myDatePicker = MCDatepicker.create({el: '#check_date'});
        myDatePicker.open();
    });

    myDatePicker.onSelect((date, formatedDate) => getData());

    function getData(){
        $('#getData').submit();
    }

function leave_note(std_code,time_){
    //alert('#'+time_+'-leave-'+std_code);
    $('#'+time_+'-leave-note-'+std_code).prop( "disabled", false );
}
function close_leave_note(std_code,time_){
    //alert('#'+time_+'-leave-'+std_code);
    $('#'+time_+'-leave-note-'+std_code).prop( "disabled", true );
}
function clear_check(id){
    $('.radio-'+id).prop( "checked", false );
    //$('.note-'+id).prop( "disabled", true ).val('');
}
function check_coming(id){
    $('.coming-'+id).prop( "checked", true );
}
    function save(){
        const date_ = $('#check_date').val().split('-');
        var mL = ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
        Swal.fire({
            title: 'คุณต้องการบันทึกเวลาเรียน ?',
            html: 'ประจำวันที่ '+date_[2]+' เดือน '+mL[(parseInt(date_[1])-1)]+' ปี พ.ศ. '+(parseInt(date_[0])+543),
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'บันทึก',
            cancelButtonText: 'ยกเลิก',
            cancelButtonColor: '#d33'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#savedata').ajaxSubmit({//ฟอร์มบันทึกข้อมูล
                    dataType: 'json',
                    success: processJson // เมื่อทำงานเสร็จให้ไปทำ fucntion นี้ต่อ
                });
            }
        })
    }

    function processJson(jdata) {// function เมื่อ ส่งค่าไปทำงานเสร็จ
        if (jdata.status) {
            Swal.fire({
                title: 'แจ้งเตือน',
                html: 'บันทึกเวลาเรียนสำเร็จ',
                icon: 'success',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'ปิด'
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
    /*function save(){
    const date_ = $('#check_date').val().split('-');
    var mL = ['มกราคม','กุมภาพันธ์','มีนาคม','เมษายน','พฤษภาคม','มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พฤศจิกายน','ธันวาคม'];
    Swal.fire({
        title: 'คุณต้องการบันทึกเวลาเรียน ?',
        html: 'ประจำวันที่ '+date_[2]+' เดือน '+mL[(parseInt(date_[1])-1)]+' ปี พ.ศ. '+(parseInt(date_[0])+543)+'<br/>หมู่เรียน : รุ่นที่ 3',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'บันทึก',
        cancelButtonText: 'ยกเลิก',
    cancelButtonColor: '#d33'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                title: 'บันทึกเวลาเรียนสำเร็จ',
                icon: 'success',
                showDenyButton: false,
                showCancelButton: false,
                confirmButtonText: 'ปิด'
            })
        }
    })
}*/
</script>