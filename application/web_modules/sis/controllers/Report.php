<?php

use SebastianBergmann\Environment\Console;

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('mydate_helper');
        if ($this->session->userdata('is_student_logged_in') == FALSE) {
            redirect('sis/login');
        }
    }

    public function generateCurriculumPDF($stdID = null)
    {
        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf([
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/tmp',
            ]),
            'fontdata' => $fontData + [
                'sarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'I' => 'THSarabunNew Italic.ttf',
                    'B' => 'THSarabunNew Bold.ttf',
                    'BI' => 'THSarabunNew BoldItalic.ttf'
                ]
            ],
            'default_font' => 'sarabun'
        ]);

        $html = $this->load->view('sis/report/curriculum_report', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function generateCoursePDF($stdID = null)
    {
        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf([
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/tmp',
            ]),
            'fontdata' => $fontData + [
                'sarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'I' => 'THSarabunNew Italic.ttf',
                    'B' => 'THSarabunNew Bold.ttf',
                    'BI' => 'THSarabunNew BoldItalic.ttf'
                ]
            ],
            'default_font' => 'sarabun'
        ]);

        $html = $this->load->view('sis/report/course_report', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function generateStudySchedulePDF()
    {

        $student_id = $this->uri->segment(4);
        $term = $this->uri->segment(5);
        $year = $this->uri->segment(6);

        $data['student_data'] = array(
            "student_id" => $student_id,
            "student_frontname" => "นาย",
            "student_name" => "ธราธร",
            "student_surname" => "ทิพยโสตถิ",
        );

        $data['study_term'] = array(
            "term" => $term,
            "year" => $year
        );

        $data['schedule_data'] = array(
            array(
                "subject_id" => "CHE1101",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "1",
                "subject_end" => "4",
                "subject_platform" => "Online + Onsite",
                "subject_classroom_code" => "yzlu6se",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "monday"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AB",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "8",
                "subject_end" => "3",
                "subject_platform" => "Online + Onsite",
                "subject_classroom_code" => "zqgh3e",
                "subject_room" => "4938",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "monday"
            ),
            array(
                "subject_id" => "CHE1103",
                "subject_name" => "วิชา B",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "10",
                "subject_end" => "4",
                "subject_platform" => "Online",
                "subject_classroom_code" => "hsw32se",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "tuseday"
            ),
            array(
                "subject_id" => "CHE1104",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "1",
                "subject_end" => "4",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "wednesday"
            ),
            array(
                "subject_id" => "CHE1104",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "7",
                "subject_end" => "4",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "wednesday"
            ),
            array(
                "subject_id" => "CHE1105",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "9",
                "subject_end" => "4",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "thursday"
            ),
            array(
                "subject_id" => "CHE1106",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "2",
                "subject_end" => "4",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_count" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
                "subject_term" => "1",
                "subject_year" => "2564",
                "subject_day" => "friday"
            )
        );

        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf([
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/tmp',
            ]),
            'fontdata' => $fontData + [
                'sarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'I' => 'THSarabunNew Italic.ttf',
                    'B' => 'THSarabunNew Bold.ttf',
                    'BI' => 'THSarabunNew BoldItalic.ttf'
                ]
            ],
            'default_font' => 'sarabun'
        ]);

        $html = $this->load->view('sis/report/study_schedule_report', $data, true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function generateTranscript()
    {
        $defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf([
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/tmp',
            ]),
            'fontdata' => $fontData + [
                'sarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'I' => 'THSarabunNew Italic.ttf',
                    'B' => 'THSarabunNew Bold.ttf',
                    'BI' => 'THSarabunNew BoldItalic.ttf'
                ]
            ],
            'default_font' => 'sarabun'
        ]);

        $html = $this->load->view('sis/report/transcript_report', [], true);
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function testView()
    {
        $this->load->view('sis/report/transcript_report');
    }
}
