<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
		$this->load->helper('mydate_helper');
                if($this->session->userdata('is_teacher_logged_in')==FALSE){
                        redirect('tis/login');
                }
	}

	public function main_variable(){
                define("CANVAS",base_url()."assets/theme/canvas/");
                define("ABLE",base_url()."assets/theme/able/dist/");

                $reponse['title']='ข้อมูลส่วนตัว | CRRU-CB(TIS)';
                $reponse['keywords']='';
                $reponse['description']='';
                $reponse['author']='';
                return $reponse;
    }

    public function index(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='ข้อมูลส่วนตัว';
        $reponse['icon_page']='<i class="fas fa-book"></i>';
        $reponse['page']='profile';

        $reponse['tb_prefix_name'] = $this->GetDataTablemodel->form_dropdown_tb_prefix_name();

        $reponse['teacher'] = $this->get_data_user();
		$this->load->view('tis/theme/header', $reponse);
        $this->load->view('tis/profile/profile_view', $reponse);
        $this->load->view('tis/theme/footer', $reponse);
	}

    public function change_password(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='เปลี่ยนรหัสผ่าน';
        $reponse['icon_page']='<i class="fas fa-key"></i>';
        $reponse['page']='change_password';

        $reponse['teacher'] = $this->get_data_user();
		$this->load->view('tis/theme/header', $reponse);
        $this->load->view('tis/profile/password_view', $reponse);
        $this->load->view('tis/theme/footer', $reponse);
	}

    public function get_data_user(){
        $sql = "SELECT
        tb_teacher.teacher_id,
        tb_teacher.prefix_name_id,
        tb_prefix_name.prefix_name_full_th,
        tb_teacher.teacher_fname,
        tb_teacher.teacher_lname,
        tb_teacher.teacher_position,
        tb_teacher.teacher_tel,
        tb_teacher.teacher_email,
        tb_teacher.teacher_line,
        tb_teacher.teacher_type_work,
        tb_teacher.teacher_work_name,
        tb_faculty.faculty_id,
        tb_faculty.faculty_name_th,
        tb_teacher.major_id,
        tb_major.major_name,
        tb_teacher.teacher_username,
        tb_teacher.teacher_password,
        tb_teacher.teacher_display,
        tb_teacher.teacher_record,
        tb_teacher.showStatus
        FROM
        tb_teacher
        INNER JOIN tb_prefix_name ON tb_teacher.prefix_name_id = tb_prefix_name.prefix_name_id
        INNER JOIN tb_major ON tb_teacher.major_id = tb_major.major_id
        INNER JOIN tb_faculty ON tb_major.faculty_id = tb_faculty.faculty_id
        WHERE
        tb_teacher.teacher_id = ".$this->session->userdata('teacher_id');
        return $this->db->query($sql)->result();
    }

    public function update_profile()
    {
        $coordinator_id = $this->input->post('coordinator_id', true);
        $prefix_name_id = $this->input->post('prefix_name_id', true);
        $coordinator_fname = $this->input->post('coordinator_fname', true);
        $coordinator_lname = $this->input->post('coordinator_lname', true);
        $rank_id = $this->input->post('rank_id', true);
        $coordinator_tel = $this->input->post('coordinator_tel', true);
        $coordinator_email = $this->input->post('coordinator_email', true);

        $data = [
            'prefix_name_id'    => $prefix_name_id,
            'coordinator_fname' => $coordinator_fname,
            'coordinator_lname' => $coordinator_lname,
            'rank_id'           => $rank_id,
            'coordinator_tel'   => $coordinator_tel,
            'coordinator_email' => $coordinator_email
        ];

        if($this->db->update('tb_coordinator', $data, array('coordinator_id' => $coordinator_id))){
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
    public function chk_pass(){
        $teacher_username = $this->input->post('id', true);
        $teacher_password = $this->input->post('password', true);

        $sql = "SELECT * FROM tb_teacher WHERE teacher_username = '".$teacher_username."' AND teacher_password = '".md5($teacher_password)."'";
        $q = $this->db->query($sql);
        if($q->num_rows() > 0){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function update_password()
    {
        $teacher_username = $this->input->post('id', true);
        $teacher_password = $this->input->post('password', true);
        $teacher_id = $this->session->userdata('teacher_id');

        $data = [
            'teacher_password' => md5($teacher_password)
        ];

        if($this->db->update('tb_teacher', $data, array('teacher_username' => $teacher_username, 'teacher_id'=>$teacher_id))){
            echo 1;
        }else{
            echo 0;
        }
    }

}// END CLASS