<?php

if (!defined('BASEPATH'))
        exit('No direct script access allowed');

class Schedule extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('mydate_helper');
                $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
                if ($this->session->userdata('is_teacher_logged_in') == FALSE) {
                        redirect('tis/login');
                }
        }

        public function main_variable()
        {
                define("CANVAS", base_url() . "assets/theme/canvas/");
                define("ABLE", base_url() . "assets/theme/able/dist/");

                $reponse['title'] = 'ตารางสอน | CRRU-CB(TIS)';
                $reponse['keywords'] = '';
                $reponse['description'] = '';
                $reponse['author'] = '';
                $reponse['page'] = '';
                return $reponse;
        }

        public function index()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ตารางสอน';
                $response['icon_page'] = '<i class="fas fa-table py-2"></i>';
                $response['page'] = '';

                $response['breadcrumb'] = array(
                        'ตารางสอน' => array(site_url('tis/schedule'), 'active')
                );

                $response['tb_training'] = $this->GetDataTablemodel->form_dropdown_tb_training('C00001', 2565);


                if ($this->input->post('training_id') != "") {
                        $response['search_training_id'] = $this->input->post('training_id', true);
                        if ($response['search_training_id'] == "T00001") {
                                if ($this->session->userdata('teacher_id') == '8') {
                                        $response['schedule_data'] = array(
                                                array(
                                                        "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                                                        "subject_section" => "",
                                                        "subject_student" => "",
                                                        "subject_start" => "1",
                                                        "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                                                        "subject_room" => "รุ่นที่ 3",
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
                                                        "subject_room" => "รุ่นที่ 3",
                                                        "subject_day" => "saturday"
                                                ),
                                                array(
                                                        "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                                                        "subject_section" => "",
                                                        "subject_student" => "",
                                                        "subject_start" => "1",
                                                        "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                                                        "subject_room" => "รุ่นที่ 3",
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
                                                        "subject_room" => "รุ่นที่ 3",
                                                        "subject_day" => "sunday"
                                                )
                                        );
                                        
                $response['tb_teaching_type'] = $this->GetDataTablemodel->form_dropdown_tb_teaching_type();
                                        // GET Detail รายวิชา
                $sql = "SELECT * FROM tb_course INNER JOIN tb_training ON tb_course.traning_id = tb_training.training_id WHERE tb_course.traning_id = '".$response['search_training_id']."'";
                $response['tb_course'] = $this->db->query($sql)->row();

                $sql = "SELECT * FROM tb_learner_group WHERE group_id = " . $response['tb_course']->learner_group_id;
                $response['learner_qty'] = $this->db->query($sql)->num_rows();

                $sql = "SELECT * FROM tb_course_teacher INNER JOIN tb_teacher ON tb_course_teacher.teacher_id = tb_teacher.teacher_id INNER JOIN tb_prefix_name ON tb_teacher.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_course_teacher.course_id = '" . $response['tb_course']->course_id . "' ORDER BY tb_course_teacher.course_teacher_id ASC";
                $response['teacher'] = $this->db->query($sql)->result();
                $response['is_data'] = TRUE;
                                } else {
                                        $response['schedule_data'] = array();
                                        $response['is_data'] = FALSE;

                                }
                        } else {
                                $response['schedule_data'] = array();
                                $response['is_data'] = FALSE;
                        }
                } else {
                        $response['search_training_id'] = "T00001";
                        if ($this->session->userdata('teacher_id') == '8') {
                                $response['schedule_data'] = array(
                                        array(
                                                "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                                                "subject_section" => "",
                                                "subject_student" => "",
                                                "subject_start" => "1",
                                                "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                                                "subject_room" => "รุ่นที่ 3",
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
                                                "subject_room" => "รุ่นที่ 3",
                                                "subject_day" => "saturday"
                                        ),
                                        array(
                                                "subject_id" => "ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา",
                                                "subject_section" => "",
                                                "subject_student" => "",
                                                "subject_start" => "1",
                                                "subject_code" => "อ.จุฑามาศ เมืองมูล , อ.ฐิติมา ทาสุวรรณอินทร์",
                                                "subject_room" => "รุ่นที่ 3",
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
                                                "subject_room" => "รุ่นที่ 3",
                                                "subject_day" => "sunday"
                                        )
                                );

                $response['tb_teaching_type'] = $this->GetDataTablemodel->form_dropdown_tb_teaching_type();

                // GET Detail รายวิชา
                $sql = "SELECT * FROM tb_course INNER JOIN tb_training ON tb_course.traning_id = tb_training.training_id WHERE tb_course.traning_id = '".$response['search_training_id']."'";
                $response['tb_course'] = $this->db->query($sql)->row();

                $sql = "SELECT * FROM tb_learner_group WHERE group_id = " . $response['tb_course']->learner_group_id;
                $response['learner_qty'] = $this->db->query($sql)->num_rows();

                $sql = "SELECT * FROM tb_course_teacher INNER JOIN tb_teacher ON tb_course_teacher.teacher_id = tb_teacher.teacher_id INNER JOIN tb_prefix_name ON tb_teacher.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_course_teacher.course_id = '" . $response['tb_course']->course_id . "' ORDER BY tb_course_teacher.course_teacher_id ASC";
                $response['teacher'] = $this->db->query($sql)->result();
                $response['is_data'] = TRUE;
                        } else {
                                $response['schedule_data'] = array();
                                $response['is_data'] = FALSE;
                        }
                }

                $this->load->view('tis/theme/header', $response);
                $this->load->view('tis/schedule/schedule_view', $response);
                $this->load->view('tis/theme/footer', $response);
        }
}
