<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
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
        $reponse['page']='';
        return $reponse;
        
      }

	public function index()
	{
        $response = $this->main_variable();
        $response['title_page']='Dashboard';
        $response['icon_page']='<i class="fas fa-tachometer-alt"></i>';
        $response['page']='dashboard';
        
        $sql = "SELECT * FROM tb_register_member WHERE curriculum_id = 'C00001' AND register_status <> 0";
        $response['all_register'] = $this->db->query($sql)->num_rows();

        $sql = "SELECT * FROM tb_register_member WHERE tb_register_member.curriculum_id = 'C00001' AND Date(tb_register_member.register_datetime_record) = '".date('Y-m-d')."'";
        $response['today_register'] = $this->db->query($sql)->num_rows();

	$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/home/index', $response);
        $this->load->view('admin/theme/footer', $response);
	}
}
