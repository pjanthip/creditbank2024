<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');



class Profile extends CI_Controller
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

        public function index()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ข้อมูลส่วนตัว';
                $response['icon_page'] = '<i class="fa-solid fa-id-badge"></i>';
                $response['page'] = 'profile';

                        $response['breadcrumb'] = array(
                                'ข้อมูลส่วนตัว' => array(site_url('sis/profile'), 'active'),
                        );

                $response['learner'] = $this->get_profile($this->session->userdata('learner_id'),1);

                $this->load->view('sis/theme/header', $response);
                $this->load->view('sis/profile/profile_view', $response);
                $this->load->view('sis/theme/footer', $response);
        }

        public function getTable_fname($tb,$fid,$id,$fname){ //ดึงชื่อฟิวส์ออกมาแสดง  พารามิเตอร์คือ ชื่อตาราง,ชื่อฟิวส์อ้างอิง,ค่าที่อ้างอิง,ชื่อฟิวส์ที่จะแสดง
                    $sql = "select $fname from $tb where $fid = '$id' ";
            $data = $this->db->query($sql);
            if ($data->num_rows() > 0) {
                $result = $data->row();
                return $result->$fname;
            }
            }

        public function contact()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ข้อมูลการติดต่อ';
                $response['icon_page'] = '<i class="fas fa-address-card"></i>';
                $response['page'] = 'contact';

                $response['breadcrumb'] = array(
                        'ข้อมูลการติดต่อ' => array(site_url('sis/contact'), 'active'),
                );

                $response['learner'] = $this->get_profile($this->session->userdata('learner_id'),1);
                 $learner = $this->get_profile($this->session->userdata('learner_id'),2);
                 $response['DISTRICT'] = $this->getTable_fname("districts","id",$learner->DISTRICT_ID,"name_th");
                 $response['AMPHUR'] = $this->getTable_fname("amphures","id",$learner->AMPHUR_ID,"name_th");
                 $response['PROVINCE'] = $this->getTable_fname("province","province_id",$learner->PROVINCE_ID,"province_name");

                $this->load->view('sis/theme/header', $response);
                $this->load->view('sis/profile/contact', $response);
                $this->load->view('sis/theme/footer', $response);
        }

        public function plan_curr()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ข้อมูลหลักสูตร';
                $response['icon_page'] = '<i class="fas fa-book-open"></i>';
                $response['page'] = 'curriculum';

                $curriculum_data = array(
                        'curriculum_id' => "1",
                        'curriculum_name' => "วิทยาศาสตร์บัณฑิต",
                        'curriculum_major_name' => "วิทยาการคอมพิวเตอร์",
                        'curriculum_eng_name' => "(Bachelor of Science Program in Computer Science)",
                        'curriculum_major_year' => "(วท.บ. 4 ปี) หลักสูตร 2560",
                        'curriculum_subject' => "หมวดวิชาการศึกษาทั่วไป 30 หน่วยกิต",
                        'curriculum_sub_subject_1' => "กลุ่มวิชาคณิตศาสตร์ วิทยาศาสตร์และเทคโนโลยี 6 นก.",
                        'curriculum_sub_subject_2' => "กลุ่มวิชาภาษาและการสื่อสาร 15 นก.",
                        'curriculum_sub_subject_3' => "กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์ 6 นก."
                );

                $this->load->view('sis/theme/header', $response);
                $this->load->view('sis/profile/curriculum', $curriculum_data);
                $this->load->view('sis/theme/footer', $response);
        }

        public function plan_course()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ข้อมูลแผนการเรียน';
                $response['icon_page'] = '<i class="far fa-list-alt"></i>';
                $response['page'] = 'course';

                $this->load->view('sis/theme/header', $response);
                $this->load->view('sis/profile/course', $response);
                $this->load->view('sis/theme/footer', $response);
        }

        public function get_profile($id,$q)
        {
                $sql = "SELECT
                tb_learner.id,
                tb_learner.learner_code,
                tb_learner.learner_idcard,
                tb_learner.card_type_id,
                tb_learner.prefix_name_id,
                tb_learner.learner_fname_th,
                tb_learner.learner_lname_th,
                tb_learner.learner_fname_en,
                tb_learner.learner_lname_en,
                tb_learner.learner_gender,
                tb_learner.learner_birthday,
                tb_learner.learner_origin,
                tb_learner.learner_nation,
                tb_learner.religion_id,
                tb_learner.learner_talent,
                tb_learner.education_level_id,
                tb_learner.education_degree_id,
                tb_learner.education_major_id,
                tb_learner.learner_graduate,
                tb_learner.learner_grade,
                tb_learner.learner_old_school,
                tb_learner.learner_sgraduate,
                tb_learner.learner_swork,
                tb_learner.learner_add_no,
                tb_learner.learner_add_moo,
                tb_learner.learner_alley,
                tb_learner.learner_road,
                tb_learner.PROVINCE_ID,
                tb_learner.AMPHUR_ID,
                tb_learner.DISTRICT_ID,
                tb_learner.learner_post,
                tb_learner.learner_tel,
                tb_learner.learner_phone,
                tb_learner.learner_email,
                tb_learner.learner_line,
                tb_learner.register_member_id,
                tb_learner.learner_type_id,
                tb_learner.faculty_id,
                tb_learner.major_id,
                tb_learner.learner_graduate_date,
                tb_learner.learner_username,
                tb_learner.learner_password,
                tb_learner.learner_display,
                tb_learner.learner_status,
                tb_learner.curriculum_id,
                tb_card_type.card_type_name,
                tb_prefix_name.prefix_name_full_th,
                tb_prefix_name.prefix_name_full_en,
                tb_religion.religion_name,
                tb_education_level.education_level_name,
                tb_education_background.education_background_name,
                districts.name_th,
                amphures.name_th,
                province.province_name,
                tb_faculty.faculty_name_th,
                tb_major.major_name,
                tb_curriculum.curriculum_id,
                tb_curriculum.curriculum_name_th,
                tb_curriculum.curriculum_name_en,
                tb_curriculum.curriculum_degree_th,
                tb_curriculum.curriculum_degree_en,
                tb_curriculum.classroom_detail,
                tb_curriculum.curriculum_year,
                tb_curriculum.curriculum_category_id,
                tb_curriculum.curriculum_type_id,
                tb_curriculum.major_id,
                tb_curriculum.showStatus,
                tb_curriculum_type.curriculum_type_name
                FROM
                tb_learner
                INNER JOIN tb_card_type ON tb_learner.card_type_id = tb_card_type.card_type_id
                INNER JOIN tb_prefix_name ON tb_learner.prefix_name_id = tb_prefix_name.prefix_name_id
                INNER JOIN tb_religion ON tb_learner.religion_id = tb_religion.religion_id
                INNER JOIN tb_education_level ON tb_learner.education_level_id = tb_education_level.education_level_id
                INNER JOIN tb_education_background ON tb_learner.education_degree_id = tb_education_background.education_background_id
                INNER JOIN province ON tb_learner.PROVINCE_ID = province.province_id
                INNER JOIN amphures ON tb_learner.AMPHUR_ID = amphures.id
                INNER JOIN districts ON tb_learner.DISTRICT_ID = districts.id
                INNER JOIN tb_faculty ON tb_learner.faculty_id = tb_faculty.faculty_id
                INNER JOIN tb_major ON tb_learner.major_id = tb_major.major_id
                INNER JOIN tb_curriculum ON tb_learner.curriculum_id = tb_curriculum.curriculum_id
                INNER JOIN tb_curriculum_type ON tb_curriculum.curriculum_type_id = tb_curriculum_type.curriculum_type_id
                WHERE
                tb_learner.learner_code = '" . $id . "'";
                if($q==1){
                        return $this->db->query($sql)->result();
                }else{
                        return $this->db->query($sql)->row();
                }
        }
}
