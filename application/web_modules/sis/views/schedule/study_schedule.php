<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-table"></i><span class="ml-2">ตารางเรียน</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>เลือกภาคเรียน : 1/2560 </option>
                            <option><i class="bi bi-calendar3"></i>เลือกภาคเรียน : 1/2561 </option>
                            <option><i class="bi bi-calendar3"></i>เลือกภาคเรียน : 2/2561 </option>
                            <option><i class="bi bi-calendar3"></i>เลือกภาคเรียน : 1/2562 </option>
                        </select>
                    </div>
                </form>
                <hr><br>
                <!-- Study Schedule -->
                <div class="scrollTable">
                    <table class="table table-hover table-bordered" style="font-size: 12px;">
                        <thead class="bg-info">
                            <tr class="text-center text-white">
                                <th scope="col">วัน</th>
                                <th scope="col">1 <br> 8:30-9:20</th>
                                <th scope="col">2 <br> 9:20-10:10</th>
                                <th scope="col">3 <br> 10:10-11:00</th>
                                <th scope="col">4 <br> 11:10-11:50</th>
                                <th scope="col">5 <br> 11:50-12:40</th>
                                <th scope="col">6 <br> 12:40-13:30</th>
                                <th scope="col">7 <br> 13:30-14:20</th>
                                <th scope="col">8 <br> 14:20-15:10</th>
                                <th scope="col">9 <br> 15:10-16:00</th>
                                <th scope="col">10 <br> 16:00-16:50</th>
                                <th scope="col">11 <br> 16:50-17:40</th>
                                <th scope="col">12 <br> 17:40-18:30</th>
                                <th scope="col">13 <br> 18:30-19:20</th>
                                <th scope="col">14 <br> 19:20-20:10</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">จันทร์</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "monday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">อังคาร</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "tuseday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">พุธ</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "wednesday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">พฤหัสบดี</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "thursday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">ศุกร์</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "friday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                            <tr class="text-center">
                                <th scope="row">เสาร์</th>
                                <?php
                                $lastPointer = 0;
                                foreach ($schedule_data as $row) {
                                    if ($row['subject_day'] == "sasterday") {
                                        if ($row['subject_start'] == "1") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
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
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ห้อง : " . $row['subject_room'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                    }
                                }
                                if ($lastPointer == 0) {
                                    $lastPointer = 1;
                                }
                                for ($lastPointer; $lastPointer <= 14; $lastPointer++) {
                                    echo '<td></td>';
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="bi bi-journal-text"></i><span class="ml-2">รายละเอียดวิชาที่เรียน</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Subject Detail -->
                <div class="scrollTable">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-info">
                            <tr class="text-center text-white">
                                <th>ที่</th>
                                <th>SEC</th>
                                <th>รหัสวิชา</th>
                                <th style="min-width: 200px;">ชื่อวิชา</th>
                                <th>หน่วยกิต</th>
                                <th>จำนวน นศ.</th>
                                <th style="min-width: 125px;">อาจารย์ผู้สอน</th>
                                <th style="min-width: 130px;">รูปแบบการสอน</th>
                                <th style="min-width: 100px;">ประเภท นศ.</th>
                                <th style="min-width: 125px;">Google Classroom Code</th>
                                <th style="min-width: 200px;">แจ้งเตือนรายวิชา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($subject_data as $row) {
                                echo '<tr class="text-center">';
                                echo '<th scope="row">' . $count . '</th>';
                                echo '<td>' . $row['subject_section'] . '</td>';
                                echo '<td>' . $row['subject_id'] . '</td>';
                                echo '<td class="text-left">' . $row['subject_name'] . '</td>';
                                echo '<td>' . $row['subject_credit'] . '</td>';
                                echo '<td>' . $row['subject_accepted'] . '</td>';
                                echo '<td class="text-left">' . $row['subject_teacher'] . '</td>';
                                echo '<td>' . $row['subject_platform'] . '</td>';
                                echo '<td>' . $row['subject_student'] . '</td>';
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
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="bi bi-download"></i><span class="ml-2">Download ตารางเรียนตามภาคเรียน</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-1" style="max-width: 125px;">
                        <a class="card shadow rounded text-center" href="<?php echo base_url() ?>sis/report/generateStudySchedulePDF/601463017/1/2564" target="_blank">
                            <div class="card-body">
                                <i class="bi bi-filetype-pdf"></i><br>
                                1/2564
                            </div>
                        </a>
                    </div>
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