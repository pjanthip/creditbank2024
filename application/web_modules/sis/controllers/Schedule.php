<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');



class Schedule extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('mydate_helper');
        if($this->session->userdata('is_student_logged_in')==FALSE){
                redirect('sis/login');
        }
    }

    public function main_variable()
    {
        define("CANVAS", base_url() . "assets/theme/canvas/");
        define("ABLE", base_url() . "assets/theme/able/dist/");

        $reponse['title'] = 'ระบบข้อมูลผู้เรียน | CRRU-CREDITBANK';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = '';
        $reponse['page'] = '';
        return $reponse;
    }

    public function study_schedule()
    {
        $response = $this->main_variable();
        $response['title_page'] = 'ตารางเรียน';
        $response['icon_page'] = '<i class="fas fa-table"></i>';
        $response['page'] = 'study_schedule';

        $data['schedule_data'] = array(
            array(
                "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                "subject_section" => "",
                "subject_student" => "",
                "subject_start" => "1",
                "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_room" => "แบบออนไลน์",
                "subject_end" => "5",
                "subject_day" => "saturday"
            ),
            array(
                "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                "subject_section" => "",
                "subject_student" => "",
                "subject_start" => "7",
                "subject_end" => "6",
                "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_room" => "แบบออนไลน์",
                "subject_day" => "saturday"
            ),
            array(
                "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                "subject_section" => "",
                "subject_student" => "",
                "subject_start" => "1",
                "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_room" => "แบบออนไลน์",
                "subject_end" => "5",
                "subject_day" => "sunday"
            ),
            array(
                "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                "subject_section" => "",
                "subject_student" => "",
                "subject_start" => "7",
                "subject_end" => "6",
                "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_room" => "แบบออนไลน์",
                "subject_day" => "sunday"
            )
        );

        //================= 14 May ==================
        if($this->input->post('date_training', true)=='14may'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 14 พฤษภาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "ความรู้พื้นฐานและศัพท์เฉพาะทางกายวิภาคศาสตร์",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "ความรู้พื้นฐานและศัพท์เฉพาะทางสรีรวิทยาของมนุษย์ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );

        //================= 15 May ==================

        }else if($this->input->post('date_training', true)=='15may'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 15 พฤษภาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบโครงร่างและกระดูก",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบโครงร่างและกระดูก (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 21 May ==================

        }else if($this->input->post('date_training', true)=='21may'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 21 พฤษภาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบผิวหนัง",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบผิวหนัง (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 22 May ==================

        }else if($this->input->post('date_training', true)=='22may'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 22 พฤษภาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบกล้ามเนื้อ",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบกล้ามเนื้อ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 28 May ==================

        }else if($this->input->post('date_training', true)=='28may'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 28 พฤษภาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบไหลเวียนโลหิต",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบไหลเวียนโลหิต (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 29 May ==================

        }else if($this->input->post('date_training', true)=='29may'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 29 พฤษภาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบหายใจ",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบหายใจ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 4 Jun ==================

        }else if($this->input->post('date_training', true)=='4jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 4 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบฮอร์โมนและต่อมไร้ท่อ",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบฮอร์โมนและต่อมไร้ท่อ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 5 Jun ==================

        }else if($this->input->post('date_training', true)=='5jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 5 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบทางเดินอาหาร",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบทางเดินอาหาร (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 11 Jun ==================

        }else if($this->input->post('date_training', true)=='11jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 11 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบประสาท",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบประสาท (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 12 Jun ==================

        }else if($this->input->post('date_training', true)=='12jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 12 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบทางเดินปัสสาวะและระบบสืบพันธุ์",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กายวิภาคศาสตร์และสรีรวิทยาในระบบทางเดินปัสสาวะและระบบสืบพันธุ์ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 18 Jun ==================

        }else if($this->input->post('date_training', true)=='18jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 18 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "พื้นฐานการเกิดพยาธิวิทยา",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "พื้นฐานการเกิดพยาธิวิทยา (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 19 Jun ==================

        }else if($this->input->post('date_training', true)=='19jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 19 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กลไกการเปลี่ยนแปลงและการปรับตัวของเซลล์ การเกิดเนื้องอกและมะเร็ง",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กลไกการเปลี่ยนแปลงและการปรับตัวของเซลล์ การเกิดเนื้องอกและมะเร็ง (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 25 Jun ==================

        }else if($this->input->post('date_training', true)=='25jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 25 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กระบวนการอักเสบ สาเหตุ กลไกการเกิดพยาธิสภาพ อาการและอาการแสดง ในระบบเลือด ระบบภูมิคุ้มกัน ระบบทางเดินหายใจ ระบบไหลเวียนโลหิต ระบบโครงร่างและกล้ามเนื้อ",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กระบวนการอักเสบ สาเหตุ กลไกการเกิดพยาธิสภาพ อาการและอาการแสดง ในระบบเลือด ระบบภูมิคุ้มกัน ระบบทางเดินหายใจ ระบบไหลเวียนโลหิต ระบบโครงร่างและกล้ามเนื้อ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 26 Jun ==================

        }else if($this->input->post('date_training', true)=='26jun'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 26 มิถุนายน 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "กระบวนการอักเสบ สาเหตุ กลไกการเกิดพยาธิสภาพ อาการและอาการแสดง ในระบบทางเดินอาหาร ระบบต่อมไร้ท่อ ระบบประสาท และระบบทางเดินปัสสาวะ",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "กระบวนการอักเสบ สาเหตุ กลไกการเกิดพยาธิสภาพ อาการและอาการแสดง ในระบบทางเดินอาหาร ระบบต่อมไร้ท่อ ระบบประสาท และระบบทางเดินปัสสาวะ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 2 Jul ==================

        }else if($this->input->post('date_training', true)=='2jul'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน เสาร์ ที่ 2 กรกฎาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "การนำความรู้ทางพยาธิวิทยาไปใช้ในการสร้างเสริม ป้องกัน รักษา และฟื้นฟูสุขภาพตามขอบเขตวิชาชีพสาธารณสุข",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "การนำความรู้ทางพยาธิวิทยาไปใช้ในการสร้างเสริม ป้องกัน รักษา และฟื้นฟูสุขภาพตามขอบเขตวิชาชีพสาธารณสุข (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            ),
            array(
                "subject_id" => "lesson04",
                "subject_name" => "สรุปผลการเรียนรู้ประจำวัน",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "17.00 – 17.30 น."
            )
        );
        
        //================= 3 Jul ==================

        }else if($this->input->post('date_training', true)=='3jul'){
            $data['subject_topic']='ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา (วัน อาทิตย์ ที่ 3 กรกฎาคม 2565)';
        
        $data['subject_data'] = array(
            array(
                "subject_id" => "lesson01",
                "subject_name" => "ลงทะเบียนและชี้แจงวัตถุประสงค์ หัวข้อการอบรม",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "-",
                "subject_note" => "",
                "subject_time" => "07.30 - 08.00 น."
            ),
            array(
                "subject_id" => "lesson02",
                "subject_name" => "สอบประเมินผลวัดความรู้",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล<br/>อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "08.00 – 12.00 น."
            ),
            array(
                "subject_id" => "lesson03",
                "subject_name" => "สอบประเมินผลวัดความรู้ (ต่อ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "v7kpl2i",
                "subject_teacher" => "อ.จุฑามาศ เมืองมูล<br/>อ.ฐิติมา ทาสุวรรณอินทร์",
                "subject_note" => "",
                "subject_time" => "13.00 – 17.00 น."
            )
        );

    }else{
        $data['subject_topic']='';

        $data['subject_data'] = array(
            array(
                "subject_id" => "",
                "subject_name" => "",
                "subject_platform" => "",
                "subject_classroom_code" => "",
                "subject_teacher" => "",
                "subject_note" => "",
                "subject_time" => ""
            )
        );

    }

    $data['date_training']=$this->input->post('date_training', true);

        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/schedule/schedule_view', $data);
        $this->load->view('sis/theme/footer', $response);
    }

    public function test_schedule()
    {
        $response = $this->main_variable();
        $response['title_page'] = 'ตารางสอบ';
        $response['icon_page'] = '<i class="fas fa-table"></i>';
        $response['page'] = 'test_schedule';

        $data['schedule_data'] = array(
            array(
                "subject_id" => "CHE1101",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "1",
                "subject_room" => "1238",
                "subject_end" => "4",
                "subject_day" => "monday"
            ),
            array(
                "subject_id" => "CHE1101",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "4",
                "subject_end" => "3",
                "subject_room" => "4938",
                "subject_day" => "tuseday"
            ),
            array(
                "subject_id" => "CHE1103",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "10",
                "subject_end" => "4",
                "subject_room" => "2660",
                "subject_day" => "tuseday"
            ),
            array(
                "subject_id" => "CHE1104",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "1",
                "subject_end" => "4",
                "subject_room" => "2660",
                "subject_term" => "1",
                "subject_day" => "wednesday"
            ),
            array(
                "subject_id" => "CHE1104",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "7",
                "subject_end" => "4",
                "subject_room" => "2660",
                "subject_day" => "wednesday"
            ),
            array(
                "subject_id" => "CHE1105",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "9",
                "subject_end" => "4",
                "subject_room" => "2660",
                "subject_day" => "thursday"
            ),
            array(
                "subject_id" => "CHE1106",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_start" => "2",
                "subject_end" => "4",
                "subject_room" => "2660",
                "subject_day" => "friday"
            )
        );

        $data['subject_data'] = array(
            array(
                "subject_id" => "CHE1101",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Online + Onsite",
                "subject_classroom_code" => "yzlu6se",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AB",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Online + Onsite",
                "subject_classroom_code" => "zqgh3e",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            ),
            array(
                "subject_id" => "CHE1103",
                "subject_name" => "วิชา B",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Online",
                "subject_classroom_code" => "hsw32se",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            ),
            array(
                "subject_id" => "CHE1104",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            ),
            array(
                "subject_id" => "CHE1104",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            ),
            array(
                "subject_id" => "CHE1105",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            ),
            array(
                "subject_id" => "CHE1106",
                "subject_name" => "วิชา C",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_platform" => "Onsite",
                "subject_classroom_code" => "",
                "subject_credit" => "3(3-0-6)",
                "subject_accepted" => "50",
                "subject_teacher" => "teacher A",
                "subject_note" => "Note from teacher",
            )
        );

        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/schedule/test_schedule', $data);
        $this->load->view('sis/theme/footer', $response);
    }

    public function open_course()
    {
        $response = $this->main_variable();
        $response['title_page'] = 'รายวิชาที่เปิดสอน';
        $response['icon_page'] = '<i class="fas fa-table"></i>';
        $response['page'] = 'open_course';

        $data['courses'] = array(
            array(
                "subject_id" => "CHE1101",
                "subject_name" => "กฎหมายธุรกิจและการพาณิชย์",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "1"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "Tharathon Tippayasotti",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_name" => "วิชา A",
                "subject_section" => "AA",
                "subject_student" => "ป.ตรี (จ-ศ)",
                "subject_teacher" => "teacher A",
                "subject_room" => "2660",
                "subject_credit" => "3(3-0-6)",
                "subject_student_accept" => "50",
                "subject_student_accepted" => "42",
                "mid_term_test" => "2/14/2022 15:00 - 16:00",
                "final_term_test" => "2/28/2022 15:00 - 16:00",
                "status" => "2"
            )
        );

        $data['classes'] = array(
            array(
                "subject_id" => "CHE1101",
                "subject_day" => "monday",
                "subject_start" => "1",
                "subject_end" => "4",
                "subject_room" => "1234"
            ),
            array(
                "subject_id" => "CHE1101",
                "subject_day" => "monday",
                "subject_start" => "5",
                "subject_end" => "3",
                "subject_room" => "5678"
            ),
            array(
                "subject_id" => "CHE1102",
                "subject_day" => "tuesday",
                "subject_start" => "3",
                "subject_end" => "4",
                "subject_room" => "9427"
            )
        );

        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/schedule/open_course', $data);
        $this->load->view('sis/theme/footer', $response);
    }
}
