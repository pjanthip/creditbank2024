<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Training extends CI_Controller
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
        $response['title_page']='ข้อมูลชุดฝึกอบรม';
        $response['icon_page']='<i class="fas fa-book-open"></i>';
        $response['page']='training';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/training/training_view', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function addtraining()
	{
        $response = $this->main_variable();   
        $response['title_page']='เพิ่มข้อมูลชุดฝึกอบรม';
        $response['icon_page']='<i class="fas fa-plus-circle"></i>';
        $response['page']='training';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/training/training_add_form', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function compare()
	{
        $response = $this->main_variable();   
        $response['title_page']='ข้อมูลเทียบโอนรายวิชา';
        $response['icon_page']='<i class="fas fa-book"></i>';
        $response['page']='training_compare';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/training/training_compare', $response);
        $this->load->view('admin/theme/footer', $response);
	}
}
