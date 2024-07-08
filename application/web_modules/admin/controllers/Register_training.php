<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Register_training extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
		$this->load->helper('mydate_helper');
                if($this->session->userdata('is_admin_logged_in')==FALSE){
                        redirect('admin/login');
                }
	}

	public function main_variable(){
                define("CANVAS",base_url()."assets/theme/canvas/");
                define("ABLE",base_url()."assets/theme/able/dist/");

                $reponse['title']='ผู้ดูแลระบบ | CRRU-CBMIS';
                $reponse['keywords']='';
                $reponse['description']='';
                $reponse['author']='';
                $reponse['page']='';
                return $reponse;
        
    }

    public function index(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='ข้อมูลการสมัครชุดฝึกอบรม';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_training';

        $reponse['tb_faculty'] = $this->GetDataTablemodel->form_dropdown_tb_faculty();

        /*if($this->input->post('search', true) == 1){
            $faculty_id = $this->input->post('faculty_id', true);
            $major_id = $this->input->post('major_id', true);
            $curriculum_id = $this->input->post('curriculum_id', true);
            $keyword = $this->input->post('txt_keyword', true);

            $reponse = $this->search($faculty_id, $major_id, $curriculum_id, $keyword);   
        }*/
        $reponse['register'] = $this->search('','','','');   

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register_training/register_training_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function training66(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='ข้อมูลการสมัครชุดฝึกอบรม';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_training4';
        
        $reponse['curriculum_id'] = 'C00001';
        $reponse['faculty_id'] = 'F09';
        $reponse['major_id'] = 'M09002';
        $reponse['training_id'] = '';

        $reponse['curriculum_name'] = 'หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน';
        $reponse['faculty_name'] = 'สำนักวิชาวิทยาศาสตร์สุขภาพ';
        $reponse['major_name'] = 'สาธารณสุขศาสตร์ วท.บ.4ปี';
        $reponse['training_name'] = '4';

        $reponse['tb_faculty'] = $this->GetDataTablemodel->form_dropdown_tb_faculty();

        /*if($this->input->post('search', true) == 1){
            $faculty_id = $this->input->post('faculty_id', true);
            $major_id = $this->input->post('major_id', true);
            $curriculum_id = $this->input->post('curriculum_id', true);
            $keyword = $this->input->post('txt_keyword', true);

            $reponse = $this->search($faculty_id, $major_id, $curriculum_id, $keyword);   
        }*/
        $reponse['register'] = $this->search2('','','','');   

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register_training/register_training_view66', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function training66_v5(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='ข้อมูลการสมัครชุดฝึกอบรม';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_training5';
        
        $reponse['curriculum_id'] = 'C00001';
        $reponse['faculty_id'] = 'F09';
        $reponse['major_id'] = 'M09002';
        $reponse['training_id'] = '';

        $reponse['curriculum_name'] = 'หลักสูตรการศึกษาต่อเนื่อง สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน';
        $reponse['faculty_name'] = 'สำนักวิชาวิทยาศาสตร์สุขภาพ';
        $reponse['major_name'] = 'สาธารณสุขศาสตร์ วท.บ.4ปี';
        $reponse['training_name'] = '5 (รอบพิเศษ)';

        $reponse['tb_faculty'] = $this->GetDataTablemodel->form_dropdown_tb_faculty();

        /*if($this->input->post('search', true) == 1){
            $faculty_id = $this->input->post('faculty_id', true);
            $major_id = $this->input->post('major_id', true);
            $curriculum_id = $this->input->post('curriculum_id', true);
            $keyword = $this->input->post('txt_keyword', true);

            $reponse = $this->search($faculty_id, $major_id, $curriculum_id, $keyword);   
        }*/
        $reponse['register'] = $this->search2_v5('','','','');   

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register_training/register_training_view66_v5', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    function search($fid,$mid,$cid,$keyword){
        $sql = "SELECT
        tb_training_register.training_register_id,
        tb_training_register.training_id,
        tb_training_register.training_register_qty,
        tb_training_register.training_register_reserve,
        tb_training_register.training_register_datetime_start,
        tb_training_register.training_register_datetime_end,
        tb_training_register.training_register_price,
        tb_training_register.personnels_id,
        tb_training_register.training_register_image,
        tb_training_register.training_register_announce,
        tb_training_register.training_register_record,
        tb_training_register.training_register_frist,
        tb_training_register.training_register_status,
        tb_training.training_id,
        tb_training.curriculum_id,
        tb_training.training_name,
        tb_training.training_objective,
        tb_training.training_scope,
        tb_training.showStatus,
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
        tb_curriculum.showStatus
        FROM
        tb_training_register
        INNER JOIN tb_training ON tb_training_register.training_id = tb_training.training_id
        INNER JOIN tb_curriculum ON tb_training.curriculum_id = tb_curriculum.curriculum_id
        WHERE training_register_id < 10
        ORDER BY
        tb_training_register.training_register_id DESC";

        return $this->db->query($sql)->result();
    }

    function search2($fid,$mid,$cid,$keyword){
        $sql = "SELECT
        tb_training_register.training_register_id,
        tb_training_register.training_id,
        tb_training_register.training_register_qty,
        tb_training_register.training_register_reserve,
        tb_training_register.training_register_datetime_start,
        tb_training_register.training_register_datetime_end,
        tb_training_register.training_register_price,
        tb_training_register.personnels_id,
        tb_training_register.training_register_image,
        tb_training_register.training_register_announce,
        tb_training_register.training_register_record,
        tb_training_register.training_register_frist,
        tb_training_register.training_register_status,
        tb_training.training_id,
        tb_training.curriculum_id,
        tb_training.training_name,
        tb_training.training_objective,
        tb_training.training_scope,
        tb_training.showStatus,
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
        tb_curriculum.showStatus
        FROM
        tb_training_register
        INNER JOIN tb_training ON tb_training_register.training_id = tb_training.training_id
        INNER JOIN tb_curriculum ON tb_training.curriculum_id = tb_curriculum.curriculum_id
        WHERE training_register_id >= 10
        ORDER BY
        tb_training_register.training_register_id DESC";

        return $this->db->query($sql)->result();
    }

    function search2_v5($fid,$mid,$cid,$keyword){
        $sql = "SELECT
        tb_training_register.*,
        tb_training.training_id,
        tb_training.curriculum_id,
        tb_training.training_name,
        tb_training.training_objective,
        tb_training.training_scope,
        tb_training.showStatus,
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
        tb_curriculum.showStatus
        FROM
        tb_training_register
        INNER JOIN tb_training ON tb_training_register.training_id = tb_training.training_id
        INNER JOIN tb_curriculum ON tb_training.curriculum_id = tb_curriculum.curriculum_id
        WHERE training_register_id IN ('11', '12')
        ORDER BY
        tb_training_register.training_register_id DESC";

        return $this->db->query($sql)->result();
    }

    public function profile(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='ตรวจสอบข้อมูลผู้สมัคร';
        $reponse['icon_page']='<i class="far fa-address-card"></i>';
        $reponse['page']='register';

        $reponse['id'] = $_POST["member-id"];
        $reponse['cid'] = $_POST["curri-id"];

        $sql = "SELECT
        tb_register_member.register_member_id,
        tb_register_member.curriculum_id,
        tb_register_member.register_member_idcard,
        tb_register_member.card_type_id,
        tb_register_member.prefix_name_id,
        tb_register_member.register_member_fname_th,
        tb_register_member.register_member_lname_th,
        tb_register_member.register_member_fname_en,
        tb_register_member.register_member_lname_en,
        tb_register_member.register_member_gender,
        tb_register_member.register_member_birthday,
        tb_register_member.register_member_origin,
        tb_register_member.register_member_nation,
        tb_register_member.religion_id,
        tb_register_member.register_member_talent,
        tb_register_member.education_level_id,
        tb_register_member.education_degree_id,
        tb_register_member.education_major_id,
        tb_register_member.register_member_graduate,
        tb_register_member.register_member_grade,
        tb_register_member.register_member_old_school,
        tb_register_member.register_member_sgraduate,
        tb_register_member.register_member_swork,
        tb_register_member.register_member_add_no,
        tb_register_member.register_member_add_moo,
        tb_register_member.register_member_alley,
        tb_register_member.register_member_road,
        tb_register_member.PROVINCE_ID,
        tb_register_member.AMPHUR_ID,
        tb_register_member.DISTRICT_ID,
        tb_register_member.register_member_post,
        tb_register_member.register_member_tel,
        tb_register_member.register_member_phone,
        tb_register_member.register_member_email,
        tb_register_member.register_member_line,
        tb_register_member.register_datetime_record,
        tb_register_member.register_datetime_update,
        tb_register_member.register_status,
        tb_prefix_name.prefix_name_code,
        tb_prefix_name.prefix_name_full_th,
        tb_card_type.card_type_name,
        tb_religion.religion_name,
        tb_education_level.education_level_name,
        tb_education_background.education_background_code,
        tb_education_background.education_background_name
        FROM
        tb_register_member
        INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id
        INNER JOIN tb_card_type ON tb_register_member.card_type_id = tb_card_type.card_type_id
        INNER JOIN tb_religion ON tb_register_member.religion_id = tb_religion.religion_id
        INNER JOIN tb_education_level ON tb_register_member.education_level_id = tb_education_level.education_level_id
        INNER JOIN tb_education_background ON tb_register_member.education_degree_id = tb_education_background.education_background_id
        WHERE
        tb_register_member.register_member_id = '".$reponse['id']."'";
        $data = $this->db->query($sql);
        if ($data->num_rows() > 0) {
            $profile = $data->row();
            $reponse['register_member_id'] = $profile->register_member_id;
            $reponse['curriculum_id'] = $profile->curriculum_id;
            $reponse['register_member_idcard'] = $profile->register_member_idcard;
            $reponse['card_type_id'] = $profile->card_type_id;
            $reponse['prefix_name_id'] = $profile->prefix_name_id;
            $reponse['register_member_fname_th'] = $profile->register_member_fname_th;
            $reponse['register_member_lname_th'] = $profile->register_member_lname_th;
            $reponse['register_member_fname_en'] = $profile->register_member_fname_en;
            $reponse['register_member_lname_en'] = $profile->register_member_lname_en;
            $reponse['register_member_gender'] = $profile->register_member_gender;
            $reponse['register_member_birthday'] = do_full_thai_date($profile->register_member_birthday);
            $reponse['register_member_origin'] = $profile->register_member_origin;
            $reponse['register_member_nation'] = $profile->register_member_nation;
            $reponse['religion_id'] = $profile->religion_id;
            $reponse['register_member_talent'] = $profile->register_member_talent;
            $reponse['education_level_id'] = $profile->education_level_id;
            $reponse['education_degree_id'] = $profile->education_degree_id;
            $reponse['education_major_id'] = $profile->education_major_id;
            $reponse['register_member_graduate'] = $profile->register_member_graduate;
            $reponse['register_member_grade'] = $profile->register_member_grade;
            $reponse['register_member_old_school'] = $profile->register_member_old_school;
            $reponse['register_member_sgraduate'] = $profile->register_member_sgraduate;
            $reponse['register_member_swork'] = $profile->register_member_swork;
            $reponse['register_member_add_no'] = $profile->register_member_add_no;
            $reponse['register_member_add_moo'] = $profile->register_member_add_moo;
            $reponse['register_member_alley'] = $profile->register_member_alley;
            $reponse['register_member_road'] = $profile->register_member_road;
            $reponse['PROVINCE_ID'] = $profile->PROVINCE_ID;
            $reponse['AMPHUR_ID'] = $profile->AMPHUR_ID;
            $reponse['DISTRICT_ID'] = $profile->DISTRICT_ID;
            $reponse['register_member_post'] = $profile->register_member_post;
            $reponse['register_member_tel'] = $profile->register_member_tel;
            $reponse['register_member_phone'] = $profile->register_member_phone;
            $reponse['register_member_email'] = $profile->register_member_email;
            $reponse['register_member_line'] = $profile->register_member_line;
            $reponse['register_datetime_record'] = $profile->register_datetime_record;
            $reponse['register_datetime_update'] = $profile->register_datetime_update;
            $reponse['register_status'] = $profile->register_status;
            $reponse['prefix_name_full_th'] = $profile->prefix_name_full_th;
            $reponse['card_type_name'] = $profile->card_type_name;
            $reponse['religion_name'] = $profile->religion_name;
            $reponse['education_level_name'] = $profile->education_level_name;
            $reponse['education_background_code'] = $profile->education_background_code;
            $reponse['education_background_name'] = $profile->education_background_name;
        }

        $reponse['display'] = $this->getTable_ALL("tb_document","document_file_name","register_member_id ='".$reponse['id']."' AND document_type_id ='1'");
        $reponse['display'] = ($reponse['display']!="")? "assets/document/".$reponse['display']:"assets/images/no-user-image.gif";
        $reponse['DISTRICT'] = $this->getTable_fname("districts","id",$reponse['DISTRICT_ID'],"name_th");
        $reponse['AMPHUR'] = $this->getTable_fname("amphures","id",$reponse['AMPHUR_ID'],"name_th");
        $reponse['PROVINCE'] = $this->getTable_fname("province","province_id",$reponse['PROVINCE_ID'],"province_name");

        $reponse['document'] = $this->get_document($reponse['id']);

        
        $reponse['back_curriculum_id'] = $this->input->post('curri-id', true);
        $reponse['back_faculty_id'] = $this->input->post('txt-faculty_id', true);
        $reponse['back_major_id'] = $this->input->post('txt-major_id', true);
        $reponse['back_training_id'] = $this->input->post('txt-training_id', true);

        $reponse['back_curriculum_name'] = $this->input->post('txt-curriculum_name', true);
        $reponse['back_faculty_name'] = $this->input->post('txt-faculty_name', true);
        $reponse['back_major_name'] = $this->input->post('txt-major_name', true);
        $reponse['back_training_name'] = $this->input->post('txt-training_name', true);

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register/profile_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function getTable_fname($tb,$fid,$id,$fname){ //ดึงชื่อฟิวส์ออกมาแสดง  พารามิเตอร์คือ ชื่อตาราง,ชื่อฟิวส์อ้างอิง,ค่าที่อ้างอิง,ชื่อฟิวส์ที่จะแสดง
		$sql = "select $fname from $tb where $fid = '$id' ";
        $data = $this->db->query($sql);
        if ($data->num_rows() > 0) {
            $result = $data->row();
            return $result->$fname;
        }
	}

    public function getTable_ALL($tb,$id, $where){ //ดึงชื่อฟิวส์ออกมาแสดง  พารามิเตอร์คือ ชื่อตาราง,ชื่อฟิวส์อ้างอิง,เงื่อนไข
		$sql = "select $id from $tb where $where ";
        $data = $this->db->query($sql);
        if ($data->num_rows() > 0) {
            $result = $data->row();
            return $result->$id;
        }
	}

    public function get_document($id){
        $sql ="SELECT
                tb_document.document_id,
                tb_document.register_member_id,
                tb_document.document_type_id,
                tb_document.document_file_name,
                tb_document.document_file_type,
                tb_document.document_upload,
                tb_document.document_update,
                tb_document.document_reason_id,
                tb_document.ducument_reason,
                tb_document.ducument_reason_update,
                tb_document.admin_id,
                tb_document_type.document_type_id,
                tb_document_type.document_type_name,
                tb_document_type.document_type_detail,
                tb_document_type.document_type_prefix,
                tb_document_type.document_type_folder,
                tb_document_reason.document_reason_id,
                tb_document_reason.document_reason_name,
                tb_document_reason.document_reason_pass,
                tb_document_reason.showStatus
                FROM
                tb_document
                INNER JOIN tb_document_reason ON tb_document.document_reason_id = tb_document_reason.document_reason_id
                INNER JOIN tb_document_type ON tb_document.document_type_id = tb_document_type.document_type_id
                WHERE
                tb_document.register_member_id = '$id'
                ORDER BY
                tb_document.document_id ASC";
                
        return $this->db->query($sql)->result();
    }

    public function load_form_upload()
    {
        $reponse = [];  
        $document_id = $this->input->post('document_id', true);

        $sql_document = "SELECT
            tb_document.*, 
            tb_document.document_id, 
            tb_document.register_member_id, 
            tb_document.document_type_id, 
            tb_document.document_file_name, 
            tb_document.document_file_type, 
            tb_document.document_upload, 
            tb_document.document_update, 
            tb_document.document_reason_id, 
            tb_document.ducument_reason, 
            tb_document.ducument_reason_update, 
            tb_document.admin_id, 
            tb_document_type.document_type_name, 
            tb_document_type.document_type_detail, 
            tb_document_type.document_type_prefix, 
            tb_document_type.document_type_folder
        FROM
            tb_document
            INNER JOIN
            tb_document_type
            ON 
                tb_document.document_type_id = tb_document_type.document_type_id
            WHERE document_id = '$document_id' ";
        
        $reponse['tb_document'] = $this->db->query($sql_document)->row();

        $this->load->view('admin/register/load_form_upload', $reponse);
    }

    public function update_document()
    {
        date_default_timezone_set("Asia/Bangkok");
        $document_id = $this->input->post('document_id', true);
        $document_reason_status= $this->input->post('document_reason_status', true);
        $document_reason = $this->input->post('document_reason', true);
        $admin_id = $this->session->userdata('user_id');

        $data_document = [
            'document_reason_id'    => $document_reason_status,
            'ducument_reason'       => $document_reason,
            'ducument_reason_update'       => date('Y-m-d H:i:s'),
            'admin_id'              => $admin_id
        ];

        if($this->db->update('tb_document', $data_document, array('document_id' => $document_id))){
            $json = json_encode(array(
                'status' => true,
                'message' => 'บันทึกเรียบร้อย'
            ));
            echo $json;
            exit();
        }else{
            $json = json_encode(array(
                'status' => false,
                'message' => 'เกิดข้อผิดพลาด'
            ));
            echo $json;
            exit();
        }
    }

    public function get_major()
    { 
        if (isset($_POST['function']) && $_POST['function'] == 'faculty') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM tb_major WHERE faculty_id='$id' ORDER BY major_id ASC";
            $query = $this->db->query($sql)->result_array();
            echo '<option value="" selected disabled>-เลือกสาขาวิชา-</option>';
            foreach ($query as $value) {
                echo '<option value="' . $value['major_id'] . '">' . $value['major_name'] . '</option>';

            }
        }

        if (isset($_POST['function']) && $_POST['function'] == 'curriculum') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM tb_curriculum WHERE major_id='$id' AND showStatus='1' ORDER BY curriculum_id ASC";
            $query = $this->db->query($sql)->result_array();
            echo '<option value="" selected disabled>-เลือกหลักสูตร-</option>';
            foreach ($query as $value2) {
                echo '<option value="' . $value2['curriculum_id'] . '">' . $value2['curriculum_name_th'] . '</option>';

            }
        }

    }

    public function addregister(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='เปิดรับสมัครผู้เรียนใหม่';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register';

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register/register_add_form', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

	public function switch(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='เปิด / ปิด ฟอร์มรับสมัครผู้เรียน';
        $reponse['icon_page']='<i class="fas fa-toggle-on"></i>';
        $reponse['page']='register_switch';

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register/register_switch', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

	public function result(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='ผู้สมัครในชุดฝึกอบรม';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_training';
        
        $reponse['training_register_id'] = $this->input->post('txt-training_register_id', true);
        $reponse['curriculum_id'] = $this->input->post('txt-curriculum_id', true);
        $reponse['faculty_id'] = $this->input->post('txt-faculty_id', true);
        $reponse['major_id'] = $this->input->post('txt-major_id', true);
        $reponse['training_id'] = $this->input->post('txt-training_id', true);

        $reponse['curriculum_name'] = $this->input->post('txt-curriculum_name', true);
        $reponse['faculty_name'] = $this->input->post('txt-faculty_name', true);
        $reponse['major_name'] = $this->input->post('txt-major_name', true);
        $reponse['training_name'] = $this->input->post('txt-training_name', true);

        $sql = "SELECT * FROM tb_training_register WHERE training_register_id = '".$reponse['training_register_id']."'";
        $reponse['training_register'] = $this->db->query($sql)->result();

        $reponse['training_member'] = $this->get_training_member($reponse['training_register_id']);

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register_training/register_training_result', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function result66(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='ผู้สมัครในชุดฝึกอบรม';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_training4';
        
        $reponse['training_register_id'] = $this->input->post('txt-training_register_id', true);
        $reponse['curriculum_id'] = $this->input->post('txt-curriculum_id', true);
        $reponse['faculty_id'] = $this->input->post('txt-faculty_id', true);
        $reponse['major_id'] = $this->input->post('txt-major_id', true);
        $reponse['training_id'] = $this->input->post('txt-training_id', true);

        $reponse['curriculum_name'] = $this->input->post('txt-curriculum_name', true). " รุ่น 4";
        $reponse['faculty_name'] = $this->input->post('txt-faculty_name', true);
        $reponse['major_name'] = $this->input->post('txt-major_name', true);
        $reponse['training_name'] = $this->input->post('txt-training_name', true);

        $sql = "SELECT * FROM tb_training_register WHERE training_register_id = '".$reponse['training_register_id']."'";
        $reponse['training_register'] = $this->db->query($sql)->result();

        $reponse['training_member'] = $this->get_training_member($reponse['training_register_id']);

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register_training/register_training_result66', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function result66_v5(){
        $reponse = $this->main_variable();   
        $reponse['title_page']='ผู้สมัครในชุดฝึกอบรม';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_training5';
        
        $reponse['training_register_id'] = $this->input->post('txt-training_register_id', true);
        $reponse['curriculum_id'] = $this->input->post('txt-curriculum_id', true);
        $reponse['faculty_id'] = $this->input->post('txt-faculty_id', true);
        $reponse['major_id'] = $this->input->post('txt-major_id', true);
        $reponse['training_id'] = $this->input->post('txt-training_id', true);

        $reponse['curriculum_name'] = $this->input->post('txt-curriculum_name', true). " รุ่น 4";
        $reponse['faculty_name'] = $this->input->post('txt-faculty_name', true);
        $reponse['major_name'] = $this->input->post('txt-major_name', true);
        $reponse['training_name'] = $this->input->post('txt-training_name', true);

        $sql = "SELECT * FROM tb_training_register WHERE training_register_id = '".$reponse['training_register_id']."'";
        $reponse['training_register'] = $this->db->query($sql)->result();

        $sql = "SELECT
                tb_training_member_66.training_member_id,
                tb_training_member_66.training_member_idcard,
                tb_training_member_66.training_register_id,
                tb_training_member_66.training_member_date_register,
                tb_training_member_66.training_member_spay,
                tb_training_member_66.bank_id,
                tb_training_member_66.training_member_bank,
                tb_training_member_66.training_member_slip,
                tb_training_member_66.training_member_amount,
                tb_training_member_66.training_member_transfer_date,
                tb_training_member_66.training_member_transfer_time,
                tb_training_member_66.member_status,
                tb_training_member_66.training_member_status,
                tb_register_member_66.register_member_id,
                tb_register_member_66.curriculum_id,
                tb_register_member_66.register_member_idcard,
                tb_register_member_66.card_type_id,
                tb_register_member_66.prefix_name_id,
                tb_register_member_66.register_member_fname_th,
                tb_register_member_66.register_member_lname_th,
                tb_register_member_66.register_member_fname_en,
                tb_register_member_66.register_member_lname_en,
                tb_register_member_66.register_member_gender,
                tb_register_member_66.register_member_birthday,
                tb_register_member_66.register_member_origin,
                tb_register_member_66.register_member_nation,
                tb_register_member_66.religion_id,
                tb_register_member_66.register_member_talent,
                tb_register_member_66.education_level_id,
                tb_register_member_66.education_degree_id,
                tb_register_member_66.education_major_id,
                tb_register_member_66.register_member_graduate,
                tb_register_member_66.register_member_grade,
                tb_register_member_66.register_member_old_school,
                tb_register_member_66.register_member_sgraduate,
                tb_register_member_66.register_member_swork,
                tb_register_member_66.register_member_add_no,
                tb_register_member_66.register_member_add_moo,
                tb_register_member_66.register_member_alley,
                tb_register_member_66.register_member_road,
                tb_register_member_66.PROVINCE_ID,
                tb_register_member_66.AMPHUR_ID,
                tb_register_member_66.DISTRICT_ID,
                tb_register_member_66.register_member_post,
                tb_register_member_66.register_member_tel,
                tb_register_member_66.register_member_phone,
                tb_register_member_66.register_member_email,
                tb_register_member_66.register_member_line,
                tb_register_member_66.register_datetime_record,
                tb_register_member_66.register_datetime_update,
                tb_register_member_66.register_status,
                tb_prefix_name.prefix_name_id,
                tb_prefix_name.prefix_name_code,
                tb_prefix_name.prefix_name_full_th,
                tb_prefix_name.prefix_name_short_th,
                tb_prefix_name.prefix_name_full_en,
                tb_prefix_name.prefix_name_short_en
                FROM
                tb_training_member_66
                INNER JOIN tb_register_member_66 ON tb_training_member_66.training_member_idcard = tb_register_member_66.register_member_idcard
                INNER JOIN tb_prefix_name ON tb_register_member_66.prefix_name_id = tb_prefix_name.prefix_name_id
                WHERE
                tb_training_member_66.training_register_id = '".$reponse['training_register_id']."'
                ORDER BY
                tb_register_member_66.register_member_id ASC";

        $reponse['training_member'] = $this->db->query($sql)->result();

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register_training/register_training_result66_v5', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function getSlip()
    {
        $reponse = [];  
        $id = $this->input->post('id', true);

        $sql = "SELECT
                        tb_training_member.training_member_id,
                        tb_training_member.training_member_idcard,
                        tb_training_member.training_register_id,
                        tb_training_member.training_member_date_register,
                        tb_training_member.training_member_spay,
                        tb_training_member.bank_id,
                        tb_training_member.training_member_bank,
                        tb_training_member.training_member_slip,
                        tb_training_member.training_member_amount,
                        tb_training_member.training_member_transfer_date,
                        tb_training_member.training_member_transfer_time,
                        tb_training_member.member_status,
                        tb_training_member.training_member_status,
                        tb_bank.bank_id,
                        tb_bank.bank_name,
                        tb_bank.showStatus
                        FROM
                        tb_training_member
                        INNER JOIN tb_bank ON tb_training_member.bank_id = tb_bank.bank_id
                        WHERE
                        tb_training_member.training_member_id = '$id' ";
        
        $reponse['tb_training_member'] = $this->db->query($sql)->row();

        $this->load->view('admin/register_training/load_slip', $reponse);
    }

    public function getSlip_v5()
    {
        $reponse = [];  
        $id = $this->input->post('id', true);

        $sql = "SELECT
                        tb_training_member_66.training_member_id,
                        tb_training_member_66.training_member_idcard,
                        tb_training_member_66.training_register_id,
                        tb_training_member_66.training_member_date_register,
                        tb_training_member_66.training_member_spay,
                        tb_training_member_66.bank_id,
                        tb_training_member_66.training_member_bank,
                        tb_training_member_66.training_member_slip,
                        tb_training_member_66.training_member_amount,
                        tb_training_member_66.training_member_transfer_date,
                        tb_training_member_66.training_member_transfer_time,
                        tb_training_member_66.member_status,
                        tb_training_member_66.training_member_status,
                        tb_bank.bank_id,
                        tb_bank.bank_name,
                        tb_bank.showStatus
                        FROM
                        tb_training_member_66
                        INNER JOIN tb_bank ON tb_training_member_66.bank_id = tb_bank.bank_id
                        WHERE
                        tb_training_member_66.training_member_id = '$id' ";
        
        $reponse['tb_training_member'] = $this->db->query($sql)->row();

        $this->load->view('admin/register_training/load_slip_v5', $reponse);
    }

    function get_training_member($id){
        $sql = "SELECT
                tb_training_member.training_member_id,
                tb_training_member.training_member_idcard,
                tb_training_member.training_register_id,
                tb_training_member.training_member_date_register,
                tb_training_member.training_member_spay,
                tb_training_member.bank_id,
                tb_training_member.training_member_bank,
                tb_training_member.training_member_slip,
                tb_training_member.training_member_amount,
                tb_training_member.training_member_transfer_date,
                tb_training_member.training_member_transfer_time,
                tb_training_member.member_status,
                tb_training_member.training_member_status,
                tb_register_member.register_member_id,
                tb_register_member.curriculum_id,
                tb_register_member.register_member_idcard,
                tb_register_member.card_type_id,
                tb_register_member.prefix_name_id,
                tb_register_member.register_member_fname_th,
                tb_register_member.register_member_lname_th,
                tb_register_member.register_member_fname_en,
                tb_register_member.register_member_lname_en,
                tb_register_member.register_member_gender,
                tb_register_member.register_member_birthday,
                tb_register_member.register_member_origin,
                tb_register_member.register_member_nation,
                tb_register_member.religion_id,
                tb_register_member.register_member_talent,
                tb_register_member.education_level_id,
                tb_register_member.education_degree_id,
                tb_register_member.education_major_id,
                tb_register_member.register_member_graduate,
                tb_register_member.register_member_grade,
                tb_register_member.register_member_old_school,
                tb_register_member.register_member_sgraduate,
                tb_register_member.register_member_swork,
                tb_register_member.register_member_add_no,
                tb_register_member.register_member_add_moo,
                tb_register_member.register_member_alley,
                tb_register_member.register_member_road,
                tb_register_member.PROVINCE_ID,
                tb_register_member.AMPHUR_ID,
                tb_register_member.DISTRICT_ID,
                tb_register_member.register_member_post,
                tb_register_member.register_member_tel,
                tb_register_member.register_member_phone,
                tb_register_member.register_member_email,
                tb_register_member.register_member_line,
                tb_register_member.register_datetime_record,
                tb_register_member.register_datetime_update,
                tb_register_member.register_status,
                tb_prefix_name.prefix_name_id,
                tb_prefix_name.prefix_name_code,
                tb_prefix_name.prefix_name_full_th,
                tb_prefix_name.prefix_name_short_th,
                tb_prefix_name.prefix_name_full_en,
                tb_prefix_name.prefix_name_short_en
                FROM
                tb_training_member
                INNER JOIN tb_register_member ON tb_training_member.training_member_idcard = tb_register_member.register_member_idcard
                INNER JOIN tb_prefix_name ON tb_register_member.prefix_name_id = tb_prefix_name.prefix_name_id
                WHERE
                tb_training_member.training_register_id = '$id'
                ORDER BY
                tb_register_member.register_member_id ASC";

        return $this->db->query($sql)->result();
    }

    public function set_approve(){
        $training_member_id = $this->input->post('id', true);
        $training_member_idcard = $this->input->post('idc', true);
        $member_status = $this->input->post('status', true);

        $data = [
            'member_status' => $member_status
        ];
        $query_status = $this->db->update('tb_training_member', $data, array('training_member_id' => $training_member_id));

        if($member_status == 1){
            $data = [
                'register_status' => 0
            ];
            $query_status = $this->db->update('tb_register_member', $data, array('register_member_idcard' => $training_member_idcard));
        }elseif($member_status == 2){
            /*$data = [
                'training_member_spay' => 0,
            ];
            $query_status = $this->db->update('tb_training_member', $data, array('training_member_id' => $training_member_id));*/

            $data = [
                'register_status' => 4
            ];
            $query_status = $this->db->update('tb_register_member', $data, array('register_member_idcard' => $training_member_idcard));
        }elseif($member_status == 3){
            $data = [
                'register_status' => 6
            ];
            $query_status = $this->db->update('tb_register_member', $data, array('register_member_idcard' => $training_member_idcard));
        }

        if($query_status){
            echo 1;
            exit();
        }else{
            echo 0;
            exit();
        }
    }

    public function set_approve_v5(){
        $training_member_id = $this->input->post('id', true);
        $training_member_idcard = $this->input->post('idc', true);
        $member_status = $this->input->post('status', true);

        $data = [
            'member_status' => $member_status
        ];
        $query_status = $this->db->update('tb_training_member_66', $data, array('training_member_id' => $training_member_id));

        if($member_status == 1){
            $data = [
                'register_status' => 0
            ];
            $query_status = $this->db->update('tb_register_member_66', $data, array('register_member_idcard' => $training_member_idcard));
        }elseif($member_status == 2){
            /*$data = [
                'training_member_spay' => 0,
            ];
            $query_status = $this->db->update('tb_training_member', $data, array('training_member_id' => $training_member_id));*/

            $data = [
                'register_status' => 4
            ];
            $query_status = $this->db->update('tb_register_member_66', $data, array('register_member_idcard' => $training_member_idcard));
        }elseif($member_status == 3){
            $data = [
                'register_status' => 6
            ];
            $query_status = $this->db->update('tb_register_member_66', $data, array('register_member_idcard' => $training_member_idcard));
        }

        if($query_status){
            echo 1;
            exit();
        }else{
            echo 0;
            exit();
        }
    }

	public function applicant(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='ข้อมูลผู้สมัคร';
        $reponse['icon_page']='<i class="far fa-id-card"></i>';
        $reponse['page']='register_result';

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/register/register_applicant', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}
}