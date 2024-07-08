<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
        <div class="pcoded-content mt-0">
            <div class="page-wrapper">
                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- [ horizontal-laeout ] start -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header text-right">
								<img class="p-0 m-0" src="<?php echo site_url('assets/images/theme/icon/logo_crru1.png');?>" height="41"/>
                                <h5>ระบบรับสมัครผู้เรียน | คลังหน่วยกิต</h5>
                            </div>
                            <div class="card-body d-flex justify-content-center">
                                
								<div class="card col-md-6">
									<h5 class="card-header text-center">เลขบัตรประจำตัวประชาชน | Passport Number</h5>
									<div class="card-body text-center">
										<div class="form-group fill">
                                                <input type="text" id="citizen_id" name="citizen_id" class="form-control text-center th-sarabun fs-28" 
                                                style="letter-spacing: 5px" placeholder="กรอกเลขประจำตัวประชาชน">
										</div>
										<button type="button" onclick="check_register()" class="btn btn-primary">ตรวจสอบข้อมูลส่วนตัว <i class="fas fa-search"></i></button>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                    <!-- [ horizontal-layout ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
    </div>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <img class="col-12" src="<?php echo base_url('assets/images/line_contact.png');?>" alt="Creditbank by CRRU">
      </div>
      <div class="modal-footer row text-center">
          <div class="col "><button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button></div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="fullalert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <img class="col-12" src="<?php echo base_url('assets/images/notify-03.png');?>" alt="Creditbank by CRRU">
      </div>
      <div class="modal-footer row text-center">
          <div class="col "><button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button></div>
      </div>
    </div>
  </div>
</div>

    <script>
        $(document).ready(function () {

            $("#citizen_id").inputmask("9-9999-99999-99-9", { "clearIncomplete": true });

            $(document).on('keypress',function(e) {
               
                if(e.which == 13) {
                    
                    check_register();
                }
            }); 
        });
        $(window).on('load', function() {
            //$('#exampleModalCenter').modal('show');
        });

        function check_register()
        {   
            show_preload();
            var citizen_id = $("#citizen_id").val();
            var url = "<?php echo site_url('website/payment/check_register')?>";
            $.post(url, { citizen_id : citizen_id }, function(response){

                hide_preload();
                // console.log(response.status);
                // console.log(response.message);
                // console.log(response.register_status);
                if(response.status == true){
                   window.location.href = "payment-view";
                }else{
                    Swal.fire({
                            title: 'แจ้งเตือน',
                            html: response.message,
                            type: 'error',
                        });
                        setTimeout(() => {
                            
                            $("#citizen_id").val("").focus();
                        }, 1000);
                }
            }, 'json');
        }

    </script>
  