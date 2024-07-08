<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Schedule Report | Credit Bank System</title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/theme/eliteadmin/assets/images/favicon.png">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        body {
            font-family: 'Sarabun', sans-serif;
        }

        .right {
            float: right;
            width: 25%;
        }

        .right-half {
            float: right;
            width: 50%;
        }

        .middle {
            float: left;
            width: 50%;
        }

        .left {
            float: left;
            width: 25%;
        }

        .left-half {
            float: left;
            width: 50%;
        }
    </style>
</head>

<body>
    <div>
        <div class='left'>
            <div style="text-align: center;">
                <h2>
                    สถาบันการเรียนรู้ตลอดชีวิต <br>
                    ข้อมูลหลักสูตร
                </h2>
            </div><br>
        </div>
        <div class="middle">
            <div style="text-align: center;">
                <img src="<?php echo base_url() ?>assets/images/CLLI_Logo_final.png" alt="logo" style="width: 200px;" />
            </div>
        </div>
        <div class='right'>
            <div style="text-align: center;">
                <h2>ฉบับพิมพ์โดยนักศึกษา</h2>
            </div><br>
            <span style="font-size: 16px;">
                รหัสประจำตัว 601463017 <br>
                ชื่อ นายธราธร ทิพยโสตถิ
            </span>
        </div>
    </div>
    <br>
    <table style="text-align: center; font-size: 12px;">
        <tr>
            <th style="font-size: 14px;">ชั่วโมง <br> เวลา</th>
            <th style="padding: 5px;">1 <br> 8:30-9:20</th>
            <th style="padding: 5px;">2 <br> 9:20-10:10</th>
            <th style="padding: 5px;">3 <br> 10:10-11:00</th>
            <th style="padding: 5px;">4 <br> 11:10-11:50</th>
            <th style="padding: 5px;">5 <br> 11:50-12:40</th>
            <th style="padding: 5px;">6 <br> 12:40-13:30</th>
            <th style="padding: 5px;">7 <br> 13:30-14:20</th>
            <th style="padding: 5px;">8 <br> 14:20-15:10</th>
            <th style="padding: 5px;">9 <br> 15:10-16:00</th>
            <th style="padding: 5px;">10 <br> 16:00-16:50</th>
            <th style="padding: 5px;">11 <br> 16:50-17:40</th>
            <th style="padding: 5px;">12 <br> 17:40-18:30</th>
            <th style="padding: 5px;">13 <br> 18:30-19:20</th>
            <th style="padding: 5px;">14 <br> 19:20-20:10</th>
        </tr>
        <tr>
            <th style="font-size: 14px;">จันทร์</th>
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
        <tr>
            <th style="font-size: 14px;">อังคาร</th>
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
        <tr>
            <th style="font-size: 14px;">พุธ</th>
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
        <tr>
            <th style="font-size: 14px;">พฤหัสบดี</th>
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
        <tr>
            <th style="font-size: 14px;">ศุกร์</th>
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
        <tr>
            <th style="font-size: 14px;">เสาร์</th>
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
        <tr>
            <th style="font-size: 14px;">อาทิตย์</th>
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
    </table>
    <br><br>
    <table style="text-align: center;">
        <tr class="text-center">
            <th scope="col">ที่</th>
            <th scope="col">รหัสวิชา</th>
            <th scope="col">ชื่อวิชา</th>
            <th scope="col">SEC</th>
            <th scope="col">จำนวน น.ศ</th>
            <th scope="col">อาจารย์ผู้สอน</th>
            <th scope="col">หน่วยกิต</th>
            <th scope="col">ประเภท</th>

        </tr>
        <?php
        $count = 1;
        foreach ($schedule_data as $row) {
            echo '<tr class="text-center">';
            echo '<th scope="row">' . $count . '</th>';
            echo '<td>' . $row['subject_id'] . '</td>';
            echo '<td>' . $row['subject_name'] . '</td>';
            echo '<td>' . $row['subject_section'] . '</td>';
            echo '<td>' . $row['subject_count'] . '</td>';
            echo '<td>' . $row['subject_teacher'] . '</td>';
            echo '<td>' . $row['subject_credit'] . '</td>';
            echo '<td>' . $row['subject_student'] . '</td>';
            echo '</tr>';
            $count++;
        }
        ?>
    </table>
</body>

</html>