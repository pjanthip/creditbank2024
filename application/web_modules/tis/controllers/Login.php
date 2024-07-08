<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
	}

	public function index()
	{
		$response = [
			'msg_error' =>'',
			'title' => 'เข้าสู่ระบบ'
		];

		/*$sql ="SELECT
			view_person_detail_qa.person_id, 
			view_person_detail_qa.citizen_id, 
			view_person_detail_qa.prename, 
			view_person_detail_qa.th_ed, 
			view_person_detail_qa.fullname, 
			view_person_detail_qa.en_ed, 
			view_person_detail_qa.fullename, 
			view_person_detail_qa.belong_fac_id, 
			view_person_detail_qa.person_fac_name_th, 
			view_person_detail_qa.person_stafftype_name_th, 
			view_person_detail_qa.postline_name, 
			view_person_detail_qa.fname_th, 
			view_person_detail_qa.lanme_th, 
			view_person_detail_qa.fname_en, 
			view_person_detail_qa.lname_en, 
			view_person_detail_qa.mobile_no
		FROM
			hrm.view_person_detail_qa";

		$personnel_db = $this->load->database('personnel_crru',TRUE);
$response['person']= $personnel_db->query($sql)->result();*/
		$this->load->view('tis/login/index', $response);
	}

	public function signin()
	{
		$data_session = array(
			'fulllname' => '',
			'is_teacher_logged_in' => FALSE,
			'teacher_id' => '',
			'teacher_display' => ''
		);
		$this->session->set_userdata($data_session);

		$username = $this->input->post('teacher_id', true);
		$password = $this->input->post('password', true);

		$sql = "SELECT * FROM tb_teacher INNER JOIN tb_prefix_name ON tb_teacher.prefix_name_id = tb_prefix_name.prefix_name_id WHERE teacher_username  = ".$this->db->escape($username);
		$q = $this->db->query($sql);
		if ($q->num_rows() > 0) {
			$user = $q->row();
			if ($user->teacher_password === md5($password) ) {
				$data_session = array(
					'fulllname' => $user->prefix_name_full_th.$user->teacher_fname." ".$user->teacher_lname,
					'is_teacher_logged_in' => TRUE,
					'teacher_id' => $user->teacher_id,
					'teacher_display' => $user->teacher_display
				);
				$this->session->set_userdata($data_session);
				return redirect('tis/home');
				exit();
			}
		}
		
		$this->load->view('tis/login/index', array('msg_error' => 'รหัสผ่านไม่ถูกต้อง'));
		
	}

	public function logout()
	{
		if (!$this->session->userdata('fulllname')) {
			redirect('tis/login');
		} else {
			$this->session->set_userdata(array('is_teacher_logged_in' => FALSE));
			$this->session->sess_destroy();
			redirect('tis/login');
		}
	}
}
