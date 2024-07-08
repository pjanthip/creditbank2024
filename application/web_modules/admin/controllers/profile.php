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
        $reponse['title_page']='ข้อมูลส่วนตัว';
        $reponse['icon_page']='<i class="fas fa-book"></i>';
        $reponse['page']='profile';

        $reponse['tb_prefix_name'] = $this->GetDataTablemodel->form_dropdown_tb_prefix_name();

        $reponse['coordinator'] = $this->get_data_user();
		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/profile/profile_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

    public function change_password(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='เปลี่ยนรหัสผ่าน';
        $reponse['icon_page']='<i class="fas fa-key"></i>';
        $reponse['page']='change_password';

        $reponse['coordinator'] = $this->get_data_user();
		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/profile/password_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
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
        $coordinator_username = $this->input->post('id', true);
        $coordinator_password = $this->input->post('password', true);

        $sql = "SELECT * FROM tb_coordinator WHERE coordinator_username = '".$coordinator_username."' AND coordinator_password = '".md5($coordinator_password)."'";
        $q = $this->db->query($sql);
        if($q->num_rows() > 0){
            echo 1;
        }else{
            echo 0;
        }
    }

    public function update_password()
    {
        $coordinator_username = $this->input->post('id', true);
        $coordinator_password = $this->input->post('password', true);
        $coordinator_id = $this->session->userdata('user_id');

        $data = [
            'coordinator_password' => md5($coordinator_password)
        ];

        if($this->db->update('tb_coordinator', $data, array('coordinator_username' => $coordinator_username, 'coordinator_id'=>$coordinator_id))){
            echo 1;
        }else{
            echo 0;
        }
    }

}// END CLASS