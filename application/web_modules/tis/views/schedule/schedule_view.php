<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('tis/theme/breadcrumb'); ?>
        <div class="card shadow rounded">
            <div class="card-header bg-teacher2 text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-table"></i><span class="ml-2">ตารางสอน</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?php echo site_url('tis/schedule') ?>" method="post" class="row mt-2">
                    <div class="form-group col-lg-4 col-md-11">
                        <?php echo form_dropdown('training_id', ['' => 'เลือกชุดฝึกอบรม'] + $tb_training, $search_training_id ?? '', ['class' => 'form-control']); ?>
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn waves-effect waves-light btn-primary">ดูรายละเอียด</button>
                    </div>
                </form>
                <div class="scrollTable">
                    <table class="table table-hover table-bordered" style="font-size: 12px;">
                        <thead class="bg-teacher">
                            <tr class="text-center">
                                <th scope="col">วัน</th>
                                <th scope="col">1 <br> 7:30-8:00</th>
                                <th scope="col">2 <br> 8:00-9:00</th>
                                <th scope="col">3 <br> 9:00-10:00</th>
                                <th scope="col">4 <br> 10:00-11:00</th>
                                <th scope="col">5 <br> 11:00-12:00</th>
                                <th scope="col">6 <br> 12:00-13:00</th>
                                <th scope="col">7 <br> 13:00-14:00</th>
                                <th scope="col">8 <br> 14:00-15:00</th>
                                <th scope="col">9 <br> 15:00-16:00</th>
                                <th scope="col">10 <br> 16:00-16:00</th>
                                <th scope="col">11 <br> 16:00-17:00</th>
                                <th scope="col">12 <br> 17:00-17:30</th>
                                <th scope="col">13 <br> 17:30-18:00</th>
                                <th scope="col">14 <br> 18:00-19:00</th>
                                <th scope="col">15 <br> 19:00-20:00</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="text-center">
                                <th scope="row">เสาร์</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "saturday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "15") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 15) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 15; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                            <tr class="text-center">
                                <th scope="row ">อาทิตย์</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "sunday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "15") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "หมู่เรียน : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 15) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 15; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="fs-14 text-danger"></div>
                <hr><br>
                <div class="scrollTable">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-info text-white">
                            <tr class="text-center">
                                <th style="width:3%">ที่</th>
                                <th style="width:5%">รายชื่อ</th>
                                <th style="width:17%">รูปแบบการสอน</th>
                                <th style="width:12%">Google Classroom Code</th>
                                <th style="width:23%">แจ้งเกี่ยวกับเรียนออนไลน์<br />เช่น ป้อน Link Microsoft Teams หรือ Note แจ้งผู้เรียน</th>
                                <th style="width:15%">ชุดฝึกอบรม</th>
                                <th style="width:7%">จำนวนผู้เรียน</th>
                                <th style="width:18%">ผู้สอน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($is_data):
                            ?>
                            <tr>
                                <th scope="row">1</th>
                                <td class="">
                                    <div class="dropdown">
                                        <button class="btn btn-success dropdown-toggle col-12 text-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            รายชื่อ
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="<?php echo site_url('assets/files/std_group_M012565BPH3.pdf');?>" target="_blank">PDF File</a>
                                            <a class="dropdown-item" href="<?php echo site_url('assets/files/std_group_M012565BPH3.xls');?>" target="_blank">Excel File</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="input-group mb-3">
                                        <?php echo form_dropdown('teaching_type_id', ['' => 'เลือกรูปแบบการเรียน'] + $tb_teaching_type, $tb_course->teaching_type_id ?? '', ['class' => 'form-control']); ?>
                                        <div class="input-group-append">
                                            <button class="btn btn-info text-white" type="button"><i class="fa-solid fa-floppy-disk"></i></button>
                                            <button class="btn btn-danger text-white" type="button"><i class="fa-solid fa-xmark"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" value="<?php echo $tb_course->course_classroom_code;?>">
                                        <div class="input-group-append">
                                            <button class="btn btn-info text-white" type="button"><i class="fa-solid fa-floppy-disk"></i></button>
                                            <button class="btn btn-danger text-white" type="button"><i class="fa-solid fa-xmark"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">

                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $tb_course->course_classroom_note;?></textarea>
                                    <br />
                                    <button class="btn btn-info text-white" type="button"><i class="fa-solid fa-floppy-disk"></i></button>
                                    <button class="btn btn-danger text-white" type="button"><i class="fa-solid fa-xmark"></i></button>
                                </td>
                                <td class=""><b>ชุดฝึกอบรมที่ <?php echo substr($tb_course->traning_id,-1,1);?></b> <?php echo $tb_course->training_name;?></td>
                                <td class="text-center"><?php echo $learner_qty;?> คน</td>
                                <td class="">
                                    <?php
                                        foreach ($teacher as $data) {
                                            echo $data->prefix_name_full_th.$data->teacher_fname.' '.$data->teacher_lname.'<br/>';
                                        }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            else:
                            ?>
                            <tr>
                                <td colspan="8" class="text-center text-danger">* ไม่มีข้อมูล</td>
                            </tr>
                            <?php
                            endif;
                            /*$count = 1;
                            foreach ($subject_data as $row) {
                                echo '<tr class="text-center">';
                                echo '<th scope="row">' . $count . '</th>';
                                echo '<td>' . $row['subject_time'] . '</td>';
                                echo '<td class="text-left">' . $row['subject_name'] . '</td>';
                                echo '<td class="text-left">' . $row['subject_teacher'] . '</td>';
                                echo '<td>' . $row['subject_platform'] . '</td>';
                                echo '<td>';
                                echo '<div class="input-group">';
                                echo '<input type="text" id="' . $row['subject_id'] . '" class="form-control" value="' . $row['subject_classroom_code'] . '" readonly>';
                                echo '<span class="input-group-append">';
                                echo '<button class="btn btn-success" onclick="copyToClipboard(\'#' . $row['subject_id'] . '\')">';
                                echo '<i class="bi bi-clipboard-check"></i>';
                                echo '</button>';
                                echo '</span>';
                                echo '</div>';
                                echo '</td>';
                                echo '<td>';
                                echo '<textarea class="form-control"  readonly>' . $row['subject_note'] . '</textarea>';
                                echo '</td>';
                                echo '</tr>';
                                $count++;
                            }*/
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).val()).select();
        document.execCommand("copy");
        $temp.remove();
    }
</script>