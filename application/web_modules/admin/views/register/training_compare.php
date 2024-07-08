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
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="inlineFormCustomSelect">
                                        <option selected="">เลือกคณะ / สำนักวิชา</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="inlineFormCustomSelect">
                                        <option selected="">เลือกสาขาวิชา</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="inlineFormCustomSelect">
                                        <option selected="">เลือกหลักสูตร</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 mb-1 mt-1">
                                    <select class="form-select form-control col-12" id="inlineFormCustomSelect">
                                        <option selected="">เลือกชุดฝึกอบรม</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-4 mt-2 col text-center">
            <button type="button" class="btn btn-facebook text-white"><i class="fas fa-retweet"></i> ตรวจสอบข้อมูลการเทียบโอนรายวิชาในระดับปริญญาตรี</button>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th class="col-md-1">#</th>
                                        <th class="col-md-2">หลักสูตร</th>
                                        <th class="col-md-3">ชุดฝึกอบรม</th>
                                        <th class="col-md-4">รายวิชาในระดับปริญญาตรี</th>
                                        <th class="col-md-2">คณะ/สาขาวิชา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา</td>
                                        <td>
                                            <div class="row">
                                                <span class="font-weight-bold mr-1">รหัสวิชา :</span>H00001
                                            </div>
                                            <div class="row mt-2"><span class="font-weight-bold mr-1">ชื่อวิชา :</span>ชื่อรายวิชาในระดับปริญญาตรี</div>
                                            <div class="row mt-2"><span class="font-weight-bold mr-1">หน่วยกิต :</span>3(3-0-6)</div>
                                            <div class="row mt-2"><span class="font-weight-bold mr-1">รายละเอียด :</span>รายละเอียดรายวิชารายละเอียดรายวิชารายละเอียดรายวิชารายละเอียดรายวิชารายละเอียดรายวิชา</div>
                                        </td>
                                        <td>
                                            <div class="row"><span class="font-weight-bold mr-1">คณะ/สำนัก :</span>สำนักวิชาวิทยาศาสตร์สุขภาพ</div>
                                            <div class="row mt-2"><span class="font-weight-bold mr-1">สาขาวิชา :</span>สาธารณสุขศาสตร์ วท.บ.4ปี</div>
                                        </td>
                                    </tr>
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
<script>
        $(function () {
            $('#myTable').DataTable({
                "language":{
                    "url": "https://cdn.datatables.net/plug-ins/1.11.3/i18n/th.json"
                }
            });
        });

    </script>