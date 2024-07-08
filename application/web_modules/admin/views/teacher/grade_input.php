<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-12 text-left"> <b>หลักสูตร : </b> หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน <br>
                            <b>ชุดฝึกอบรม </b> กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา	<br>
                            <b>ชื่อวิชา</b> กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา	<br>
                            <b>จำนวนหน่วยกิต</b> 3 หน่วยกิต <br>
                            จำนวนผู้เรียน 17 คน <br>
                        </div> 
                        <br>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover table-condensed">
                            <thead>
                                <tr class="bg-primary">
                                    <th class="text-center">รหัสนักเรียน</th>
                                    <th class="text-center">ชื่อนักเรียน</th>
                                    <th class="text-center">คะแนนเต็ม 50</th>
                                    <th class="text-center">คะแนนเต็ม 50</th>
                                    <th class="text-center">รวมทั้งหมด</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>02045</td>
                                    <td class="text-left">กิตติคุณ อูปแก้ว</td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td>
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                </tr>
                                <tr>
                                    <td>02045</td>
                                    <td class="text-left">กิตติคุณ อูปแก้ว</td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td>
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                </tr>
                                <tr>
                                    <td>02045</td>
                                    <td class="text-left">กิตติคุณ อูปแก้ว</td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td>
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                </tr>
                                <tr>
                                    <td>02045</td>
                                    <td class="text-left">กิตติคุณ อูปแก้ว</td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td class="text-center">
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                    <td>
                                    <input type="text" class="form-control" value="5" style="text-center">
                                    </td>
                                </tr>
                               
    
                            </tbody>
                            </table>

                            <div class="col-12 text-center">
                                     <a href="" class="btn btn-sm btn-info">
                                        <span class="fa fa-save"></span>
                                        ยืนยัน
                                        </a>
                            </div>
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
<script>
        $(function () {
            $('#myTable').DataTable({
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
                }
            });
        });

    </script>