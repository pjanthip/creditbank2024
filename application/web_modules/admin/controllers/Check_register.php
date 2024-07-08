<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Check_register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
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
                return $reponse;
        
    }

    public function index(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='ตรวจสอบข้อมูลผู้สมัคร';
        $reponse['icon_page']='<i class="far fa-address-card"></i>';
        $reponse['page']='check_register';

        $coordinator = $this->get_data_user();
        if ($coordinator->num_rows() > 0) {
            $user = $coordinator->row();
            $reponse['faculty_id'] = $user->faculty_id;
            $reponse['major_id'] = $user->major_id;
        }

        $reponse['curriculum'] = $this->load_curriculum($reponse['major_id']);

        $reponse['cid'] = isset($_POST['curriculum']) ? $_POST['curriculum'] : "C00001";
        //$reponse['tid'] = isset($_POST['training_id']) ? $_POST['training_id'] : "";

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/check_register/check_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function profile(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='ตรวจสอบข้อมูลผู้สมัคร';
        $reponse['icon_page']='<i class="far fa-address-card"></i>';
        $reponse['page']='check_register';

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

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/check_register/profile_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function load_curriculum($mid)
    {
        $sql = "SELECT curriculum_id, curriculum_name_th FROM tb_curriculum  WHERE major_id='".$mid."' ORDER BY curriculum_id ASC";
        $curriculum = $this->db->query($sql)->result_array();

        return $curriculum;
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

    public function get_training(){ 
        $id = $_POST['id'];
        $sql = "SELECT
                tb_training.training_id,
                tb_training.training_name
                FROM
                tb_training
                WHERE
                tb_training.curriculum_id = '".$id."' AND
                tb_training.showStatus = 1
                ORDER BY
                tb_training.training_id ASC";
        $query = $this->db->query($sql)->result_array();
        echo '<option value="0" selected disabled>-กรุณาเลือกชุดฝึกอบรม-</option>';
        foreach ($query as $value) {
            echo '<option value="'.$value['training_id'].'">' . $value['training_name'] . '</option>';
        }
    }

    public function get_data_user(){
        $sql = "SELECT
        tb_coordinator.coordinator_id,
        tb_coordinator.prefix_name_id,
        tb_coordinator.coordinator_fname,
        tb_coordinator.coordinator_lname,
        tb_coordinator.rank_id,
        tb_coordinator.faculty_id,
        tb_coordinator.major_id,
        tb_coordinator.coordinator_tel,
        tb_coordinator.coordinator_email,
        tb_coordinator.coordinator_idcard,
        tb_coordinator.coordinator_username,
        tb_coordinator.coordinator_password,
        tb_coordinator.coordinator_status,
        tb_prefix_name.prefix_name_full_th,
        tb_faculty.faculty_name_th,
        tb_major.major_name
        FROM
        tb_coordinator
        INNER JOIN tb_prefix_name ON tb_coordinator.prefix_name_id = tb_prefix_name.prefix_name_id
        INNER JOIN tb_faculty ON tb_coordinator.faculty_id = tb_faculty.faculty_id
        INNER JOIN tb_major ON tb_coordinator.major_id = tb_major.major_id
        WHERE
        tb_coordinator.coordinator_id = ".$this->session->userdata('user_id');
        
        /*foreach ($coordinator as $user_data) {
            $reponse['coordinator_id']         = $user_data->coordinator_id;
            $reponse['prefix_name_id']         = $user_data->prefix_name_id;
            $reponse['coordinator_fname']      = $user_data->coordinator_fname;
            $reponse['coordinator_lname']      = $user_data->coordinator_lname;
            $reponse['rank_id']                = $user_data->rank_id;
            $reponse['faculty_id']             = $user_data->faculty_id;
            $reponse['major_id']               = $user_data->major_id;
            $reponse['coordinator_tel']        = $user_data->coordinator_tel;
            $reponse['coordinator_email']      = $user_data->coordinator_email;
            $reponse['coordinator_idcard']     = $user_data->coordinator_idcard;
            $reponse['coordinator_username']   = $user_data->coordinator_username;
            $reponse['coordinator_password']   = $user_data->coordinator_password;
            $reponse['coordinator_status']     = $user_data->coordinator_status;
            $reponse['prefix_name_full_th']    = $user_data->prefix_name_full_th;
            $reponse['faculty_name_th']        = $user_data->faculty_name_th;
            $reponse['major_name']             = $user_data->major_name;
        }*/
        return $this->db->query($sql);
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

        $this->load->view('admin/check_register/load_form_upload', $reponse);
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

}// END CLASS