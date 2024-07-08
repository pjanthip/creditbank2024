<div class="card shadow rounded">
            <div class="card-header bg-info text-white d" style="border-top-left-radius: 0.25rem;border-top-right-radius: 0.25rem;">
                <div class="row">
                    <div class="d-flex align-items-center">
                        <h5><i class="fas fa-table"></i><span class="ml-2">ตารางเรียน</span></h5>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!--<form action="">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>เลือกภาคเรียน : 1/2560 </option>
                            <option><i class="bi bi-calendar3"></i>เลือกภาคเรียน : 1/2561 </option>
                            <option><i class="bi bi-calendar3"></i>เลือกภาคเรียน : 2/2561 </option>
                            <option><i class="bi bi-calendar3"></i>เลือกภาคเรียน : 1/2562 </option>
                        </select>
                    </div>
                </form>
                <hr><br>-->
                <!-- Study Schedule -->
                <div class="scrollTable">
                    <table class="table table-hover table-bordered" style="font-size: 12px;">
                        <thead class="bg-info">
                            <tr class="text-center text-white">
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
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "15") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
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
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 1) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "2") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 2) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "3") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 3) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "4") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 4) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "5") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 5) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "6") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 6) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "7") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 7) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "8") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 8) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "9") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 9) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "10") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 10) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "11") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 11) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "12") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 12) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "13") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 13) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "14") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
                                            $lastPointer = $row['subject_start'] + $row["subject_end"];
                                            continue;
                                        } else if ($lastPointer <= 14) {
                                            echo '<td></td>';
                                            $lastPointer++;
                                        }
                                        if ($row['subject_start'] == "15") {
                                            echo '<td colspan="' . $row["subject_end"] . '">' . $row['subject_student'] . " " . $row['subject_id'] . "<br>" . $row['subject_section'] . "<br>" . "ผู้สอน : " . $row['subject_code'] . '</td>';
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
                <div class="fs-14 text-danger">*หมายเหตุ : กำหนดการฝึกอบรม เริ่มวันที่ 14 พฤษภาคม - 3 กรกฎาคม  2565 </div>

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
                <form action="<?php echo site_url('sis/schedule/study_schedule')?>" method="post" class="row mt-2">
                <div class="form-group col-lg-4 col-md-11">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-11">
                        <select class="form-control" id="exampleFormControlSelect1" name="date_training">
                            
                            <option>------- เลือกวันที่ -------</option>

                            <option disabled class="bg-warning text-dark">------- พฤษภาคม -------</option>

                            <option value="14may" <?php echo ($date_training=="14may")? "selected":"";?>>วัน เสาร์ ที่ 14 พฤษภาคม 2565</option>
                            <option value="15may" <?php echo ($date_training=="15may")? "selected":"";?>>วัน อาทิตย์ ที่ 15 พฤษภาคม 2565</option>

                            <option value="21may" <?php echo ($date_training=="21may")? "selected":"";?>>วัน เสาร์ ที่ 21 พฤษภาคม 2565</option>
                            <option value="22may" <?php echo ($date_training=="22may")? "selected":"";?>>วัน อาทิตย์ ที่ 22 พฤษภาคม 2565</option>

                            <option value="28may" <?php echo ($date_training=="28may")? "selected":"";?>>วัน เสาร์ ที่ 28 พฤษภาคม 2565</option>
                            <option value="29may" <?php echo ($date_training=="29may")? "selected":"";?>>วัน อาทิตย์ ที่ 29 พฤษภาคม 2565</option>
                            
                            <option disabled class="bg-warning text-dark">------- มิถุนายน -------</option>

                            <option value="4jun" <?php echo ($date_training=="4jun")? "selected":"";?>>วัน เสาร์ ที่ 4 มิถุนายน 2565</option>
                            <option value="5jun" <?php echo ($date_training=="5jun")? "selected":"";?>>วัน อาทิตย์ ที่ 5 มิถุนายน 2565</option>

                            <option value="11jun" <?php echo ($date_training=="11jun")? "selected":"";?>>วัน เสาร์ ที่ 11 มิถุนายน 2565</option>
                            <option value="12jun" <?php echo ($date_training=="12jun")? "selected":"";?>>วัน อาทิตย์ ที่ 12 มิถุนายน 2565</option>

                            <option value="18jun" <?php echo ($date_training=="18jun")? "selected":"";?>>วัน เสาร์ ที่ 18 มิถุนายน 2565</option>
                            <option value="19jun" <?php echo ($date_training=="19jun")? "selected":"";?>>วัน อาทิตย์ ที่ 19 มิถุนายน 2565</option>

                            <option value="25jun" <?php echo ($date_training=="25jun")? "selected":"";?>>วัน เสาร์ ที่ 25 มิถุนายน 2565</option>
                            <option value="26jun" <?php echo ($date_training=="26jun")? "selected":"";?>>วัน อาทิตย์ ที่ 26 มิถุนายน 2565</option>
                            
                            <option disabled class="bg-warning text-dark">------- กรกฎาคม -------</option>

                            <option value="2jul" <?php echo ($date_training=="2jul")? "selected":"";?>>วัน เสาร์ ที่ 2 กรกฎาคม 2565</option>
                            <option value="3jul" <?php echo ($date_training=="3jul")? "selected":"";?>>วัน อาทิตย์ ที่ 3 กรกฎาคม 2565</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                    <button type="submit" class="btn waves-effect waves-light btn-primary">ดูรายละเอียด</button>
                    </div>
                </form>
                <hr><br>
                <?php if($subject_topic !=""):?>
                <h4 class="text-center mb-4 font-weight-bold"><?php echo $subject_topic;?></h4>
                <div class="scrollTable">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-info">
                            <tr class="text-center text-white">
                                <th style="width:3%">ที่</th>
                                <th style="width:10%">เวลา</th>
                                <th style="width:25%">เนื้อหาการอบรม</th>
                                <th style="width:10%">อาจารย์ผู้สอน</th>
                                <th style="width:10%">รูปแบบการสอน</th>
                                <th style="width:13%">Google Classroom Code</th>
                                <th style="width:19%">แจ้งเตือนรายวิชา</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
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
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php endif;?>
            </div>
        </div>