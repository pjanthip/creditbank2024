<div class="modal fade" id="TableListRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="TableListRegisterLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl font-noto">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 font-noto" id="TableListRegisterLabel">New message</h1>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="mb-0">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">หลักสูตร :</label>
                        <input type="text" class="form-control" id="recipient-name" disabled>
                    </div>
                    <div class="mb-3">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead class="table-light">
                                    <!-- <tr class="text-center fs-14 align-middle">
                                        <th class="col-1">#</th>
                                        <th class="col-4">รอบการสมัคร</th>
                                        <th class="col-2">วันที่ลงทะเบียน</th>
                                        <th class="col-2">ค่าลงทะเบียน</th>
                                        <th class="col-1">แจ้งเตือน <span class="fs-10">(Line Notify)</span></th>
                                        <th class="col-1">ลงทะเบียน</th>
                                    </tr> -->
                                    <tr class="text-center align-middle">
                                        <th style="width:5%;">#</th>
                                        <th style="width:34%;">รอบการสมัคร</th>
                                        <th style="width:15%;">ค่าลงทะเบียน</th>
                                        <th style="width:20%;">วันที่ลงทะเบียน</th>
                                        <th style="width:13%;">แจ้งเตือน</th>
                                        <th style="width:13%;">ลงทะเบียน</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr class="">
                                        <td class="text-center">1</td>
                                        <td>
                                            <div id="content-register">
                                                <div id="register-title">รุ่นที่ 6 <button onclick="getDetail('001');" id="btn-001" type="button" class="btn btn-outline-secondary btn-sm fs-12 mb-2 ms-2">รายละเอียด <i class="fa-solid fa-caret-down"></i></button></div>
                                                <div id="register-001" class="box-detail alert alert-light fs-14 mb-0" role="alert">
                                                    <div class="text-secondary ps-4 ">
                                                        <ul class="mb-0">
                                                            <li>ชุดฝึกอบรมที่ P1 วิทยาศาสตร์ทางสาธารณสุข</li>
                                                            <li>ชุดฝึกอบรมที่ P2 สุขศึกษาและการสื่อสารทางด้านสาธารณสุข</li>
                                                            <li>ชุดฝึกอบรมที่ P3 การพยาบาลและเภสัชวิทยาทางสาธารณสุข</li>
                                                            <li>ชุดฝึกอบรมที่ P4 สุขาภิบาลอาหารและสิ่งแวดล้อม</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center" style="background-color: #e6f7ff;">1 ส.ค. 67 - 30 ก.ย. 67</td>
                                        <td class="text-center"><button class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="สมัครรับการแจ้งเตือนเมื่อรอบการสมัครเริ่มต้น"><i class="fa fa-bell"></i> แจ้งเตือน</button></td>
                                        <td class="text-center"><button class="btn btn-danger"><i class="fa fa-sign-in-alt"></i> ลงทะเบียน</button></td>
                                    </tr>
                                    <tr class="">
                                        <td class="text-center">2</td>
                                        <td>
                                            <div id="content-register">
                                                <div id="register-title">รุ่นที่ 7 <button onclick="getDetail('002');" id="btn-002" type="button" class="btn btn-outline-secondary btn-sm fs-12 mb-2 ms-2">รายละเอียด <i class="fa-solid fa-caret-down"></i></button></div>
                                                <div id="register-002" class="box-detail alert alert-light fs-14 mb-0" role="alert">
                                                    <div class="text-secondary ps-4">
                                                        <ul class="mb-0">
                                                            <li>ชุดฝึกอบรมที่ P1 วิทยาศาสตร์ทางสาธารณสุข</li>
                                                            <li>ชุดฝึกอบรมที่ P2 สุขศึกษาและการสื่อสารทางด้านสาธารณสุข</li>
                                                            <li>ชุดฝึกอบรมที่ P3 การพยาบาลและเภสัชวิทยาทางสาธารณสุข</li>
                                                            <li>ชุดฝึกอบรมที่ P4 สุขาภิบาลอาหารและสิ่งแวดล้อม</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">-</td>
                                        <td class="text-center" style="background-color: #e6f7ff;">1 ต.ค. 67 - 30 พ.ย. 67</td>
                                        <td class="text-center"><button class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="สมัครรับการแจ้งเตือนเมื่อรอบการสมัครเริ่มต้น"><i class="fa fa-bell"></i> แจ้งเตือน</button></td>
                                        <td class="text-center"><button class="btn btn-danger"><i class="fa fa-sign-in-alt"></i> ลงทะเบียน</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-regular fa-circle-xmark"></i> ปิด</button>
            </div>
        </div>
    </div>
</div>
<style>
    .box-detail{
        display: none;
    }
</style>
<script>
    const exampleModal = document.getElementById('TableListRegister')
    if (exampleModal) {
        exampleModal.addEventListener('show.bs.modal', event => {
            // Button that triggered the modal
            const button = event.relatedTarget
            // Extract info from data-bs-* attributes
            const recipient = button.getAttribute('data-bs-whatever')
            // If necessary, you could initiate an Ajax request here
            // and then do the updating in a callback.

            // Update the modal's content.
            const modalTitle = exampleModal.querySelector('.modal-title')
            const modalBodyInput = exampleModal.querySelector('.modal-body input')

            modalTitle.textContent = `ตารางลงทะเบียน ${recipient}`
            modalBodyInput.value = recipient
        })
    }

    function getDetail(id){
        $('#register-'+id).slideToggle(300, function() {
            if($('#register-'+id).css('display') == 'none'){
                $('#btn-'+id).removeClass('btn-secondary');
                $('#btn-'+id).addClass('btn-outline-secondary');
                $('#btn-'+id).html('รายละเอียด <i class="fa-solid fa-caret-down"></i>');
            }else{
                $('#btn-'+id).addClass('btn-secondary');
                $('#btn-'+id).removeClass('btn-outline-secondary');
                $('#btn-'+id).html('รายละเอียด <i class="fa-solid fa-caret-up"></i>');
            }
        });
    }
</script>