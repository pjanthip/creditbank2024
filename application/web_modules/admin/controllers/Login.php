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
		$this->load->view('admin/login/index', $response);
	}

	public function signin()
	{
		$data_session = array(
			'fulllname' => '',
			'is_admin_logged_in' => FALSE,
			'user_id' => '',
			'user_type' => ''		//1=admin,2=coordinator,3=clli
		);
		$this->session->set_userdata($data_session);

		$user_type = $this->input->post('type_login', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		if($username=="admin"){
			$user_type = 1;
		}

		switch ($user_type) {
			case 2:
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
						tb_coordinator.coordinator_username = ".$this->db->escape($username);

				$q = $this->db->query($sql);
				if ($q->num_rows() > 0) {
					$user = $q->row();
					if ($user->coordinator_password === md5($password) ) {
						$data_session = array(
							'fulllname' => $user->prefix_name_full_th.$user->coordinator_fname." ".$user->coordinator_lname,
							'is_admin_logged_in' => TRUE,
							'user_id' => $user->coordinator_id,
							'user_type' => '2'
						);
						$this->session->set_userdata($data_session);
						return redirect('admin/home');
						exit();
					}
				}
				break;
			case 3:
				$sql = "SELECT * FROM users WHERE deleted_at IS NULL AND  username  = ".$this->db->escape($username);
				$q = $this->db->query($sql);
				if ($q->num_rows() > 0) {
					$user = $q->row();
					if ($user->password === md5($password) ) {
						$data_session = array(
							'fulllname' => 'ฝ่ายงานคลังหน่วยกิต',
							'is_admin_logged_in' => TRUE,
							'user_id' => $user->id,
							'user_type' => '3'
						);
						$this->session->set_userdata($data_session);
						return redirect('admin/home');
						exit();
					}
				}
				break;
			default:
				$sql = "SELECT * FROM users WHERE deleted_at IS NULL AND  username  = ".$this->db->escape($username);
				$q = $this->db->query($sql);
				if ($q->num_rows() > 0) {
					$user = $q->row();
					if ($user->password === md5($password) ) {
						$data_session = array(
							'fulllname' => 'ผู้ดูแลระบบ',
							'is_admin_logged_in' => TRUE,
							'user_id' => $user->id,
							'user_type' => '1'
						);
						$this->session->set_userdata($data_session);
						return redirect('admin/home');
						exit();
					}
				}
				break;
		}
		
		$this->load->view('admin/login/index', array('msg_error' => 'รหัสผ่านไม่ถูกต้อง'));
		
	}

	public function logout()
	{
		if (!$this->session->userdata('fulllname')) {
			redirect('admin/login');
		} else {
			$this->session->set_userdata(array('is_admin_logged_in' => FALSE));
			$this->session->sess_destroy();
			redirect('admin/login');
		}
	}
}
