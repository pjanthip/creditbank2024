<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-table"></i><span class="ml-2">รายวิชาที่เปิดสอน</span></h5>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="scrollTable">
                    <table id="course_table" class="table table-sm table-hover table-bordered" style="font-size: 12px;">
                        <thead class="bg-info">
                            <tr class="text-center text-white">
                                <th scope="col">ที่</th>
                                <th scope="col">ประเภท</th>
                                <th scope="col">Section</th>
                                <th scope="col">รหัสวิชา</th>
                                <th scope="col" style="min-width: 200px;">ชื่อวิชา</th>
                                <th scope="col">หน่วยกิต</th>
                                <th scope="col">ผู้สอน</th>
                                <th scope="col" style="min-width: 100px;">เวลา/ห้อง</th>
                                <th scope="col" style="min-width: 100px;">เวลา/ห้อง</th>
                                <th scope="col" style="min-width: 100px;">เวลา/ห้อง</th>
                                <th scope="col">สอบกลางภาค</th>
                                <th scope="col">สอบปลายภาค</th>
                                <th scope="col">รับ</th>
                                <th scope="col">ลง</th>
                                <th scope="col">สถานะ </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($courses as $row) {
                                echo '<tr">';
                                echo '<th scope="row" class="text-center">' . $count . '</th>';
                                echo '<td class="text-center">' . $row['subject_student'] . '</td>';
                                echo '<td class="text-center">' . $row['subject_section'] . '</td>';
                                echo '<td class="text-center">' . $row['subject_id'] . '</td>';
                                echo '<td>' . $row['subject_name'] . '</td>';
                                echo '<td class="text-center">' . $row['subject_credit'] . '</td>';
                                echo '<td>' . $row['subject_teacher'] . '</td>';
                                $classes_column_check = 0;
                                foreach ($classes as $class) {
                                    if ($class['subject_id'] == $row['subject_id']) {
                                        echo '<td class="text-center">';
                                        echo '<div class="bg-success rounded text-white p-1 ">' . ucwords($class['subject_day']) . '</br>' . $class['subject_start'] . ' - ' . ($class['subject_start'] + $class['subject_end']) . '</br>' . $class['subject_room'] . '</div>';
                                        echo '</td>';
                                        $classes_column_check++;
                                        continue;
                                    }
                                }
                                for ($classes_column_check; $classes_column_check < 3; $classes_column_check++) {
                                    echo '<td></td>';
                                }
                                echo '<td class="text-center">' . $row['mid_term_test'] . '</td>';
                                echo '<td class="text-center">' . $row['final_term_test'] . '</td>';
                                echo '<td class="text-center">' . $row['subject_student_accept'] . '</td>';
                                echo '<td class="text-center">' . $row['subject_student_accepted'] . '</td>';
                                if ($row['status'] == "1") {
                                    echo '<td class="text-center">';
                                    echo '<div class="bg-success rounded text-white p-1 text-center">เปิด</div>';
                                    echo '</td>';
                                } else if ($row['status'] == "2") {
                                    echo '<td class="text-center">';
                                    echo '<div class="bg-warning rounded text-white p-1 text-center" data-toggle="tooltip" data-placement="top" title="ต้องชำระเงินเพิ่ม">เปิดใหม่</div></br>';
                                    echo '</td>';
                                }
                                echo '</tr>';
                                $count++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    
</script>