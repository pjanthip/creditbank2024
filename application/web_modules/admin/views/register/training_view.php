<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->
        <div class="mb-4 row pl-2">
            <a href="<?php echo site_url('admin/training/addtraining');?>" class="btn btn-info d-lg-block text-white"><i class="fa fa-plus-circle mr-1"></i> เพิ่มชุดฝึกอบรมใหม่</a>
        </div>

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
                                <div class="form-group col-md-5 mb-1 mt-1">
                                    <input type="text" class="form-control" value="" placeholder="คำค้นหา">
                                </div>
                                <div class="form-group col-md-1 mb-1 mt-1">
                                    <button type="button" class="btn btn-primary text-white">ค้นหา</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
                                        <th class="col-md-3">ชื่อชุดฝึกอบรม</th>
                                        <th class="col-md-2">คณะ</th>
                                        <th class="col-md-2">สาขาวิชา</th>
                                        <th class="col-md-2">Tool</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>อนามัยการเจริญพันธุ์และโภชนศาสตร์</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>กระบวนการสร้างเสริมสุขภาพในชุมชน</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">5</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>อาชีวอนามัยสิ่งแวดล้อม</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">6</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>บริหารสาธารณสุขและกฏหมายสาธารณสุข</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">7</td>
                                        <td>หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน</td>
                                        <td>สถิติและการวิจัยทางด้านสาธารณสุข</td>
                                        <td>สำนักวิชาวิทยาศาสตร์สุขภาพ</td>
                                        <td>สาธารณสุขศาสตร์ วท.บ.4ปี</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-facebook waves-effect btn-circle waves-light" type="button"> <i class="far fa-edit"></i> </button>
                                            <button type="button" class="btn btn-sm btn-googleplus waves-effect btn-circle waves-light ml-1"><i class="far fa-trash-alt"></i></button>
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