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
		$this->load->view('sis/login/index', $response);
	}

	public function signin()
	{
		$data_session = array(
			'fulllname' => '',
			'is_student_logged_in' => FALSE,
			'learner_id' => '',
			'learner_display' => ''
		);
		$this->session->set_userdata($data_session);

		$username = $this->input->post('learner_id', true);
		$password = $this->input->post('password', true);

		$sql = "SELECT * FROM tb_learner INNER JOIN tb_prefix_name ON tb_learner.prefix_name_id = tb_prefix_name.prefix_name_id WHERE learner_username  = ".$this->db->escape($username);
		$q = $this->db->query($sql);
		if ($q->num_rows() > 0) {
			$user = $q->row();
			if ($user->learner_password === md5($password) ) {
				$data_session = array(
					'fulllname' => $user->prefix_name_full_th.$user->learner_fname_th." ".$user->learner_lname_th,
					'is_student_logged_in' => TRUE,
					'learner_id' => $user->learner_code,
					'learner_display' => $user->learner_display
				);
				$this->session->set_userdata($data_session);
				return redirect('sis/home');
				exit();
			}
		}
		
		$this->load->view('sis/login/index', array('msg_error' => 'รหัสผ่านไม่ถูกต้อง'));
		
	}

	public function logout()
	{
		if (!$this->session->userdata('fulllname')) {
			redirect('sis/login');
		} else {
			$this->session->set_userdata(array('is_student_logged_in' => FALSE));
			$this->session->sess_destroy();
			redirect('sis/login');
		}
	}
}
