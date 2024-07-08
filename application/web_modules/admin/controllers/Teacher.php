<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Teacher extends CI_Controller
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
                $response['title_page']='ข้อมูลผู้สอน';
                $response['icon_page']='<i class="fas fa-toggle-on"></i>';
                $response['page']='teacher';
                $response['sub-page']='schedule';

                $this->load->view('admin/theme/header', $response);
                $this->load->view('admin/teacher/index', $response);
                $this->load->view('admin/theme/footer', $response);
	}


	public function grade_review()
	{
                $response = $this->main_variable();   
                $response['title_page']='เลือกวิชาที่ต้องการจะส่งคะแนน';
                $response['icon_page']='<i class="fas fa-toggle-on"></i>';
                $response['page']='grade_review';
                $response['sub-page']='schedule';

                $this->load->view('admin/theme/header', $response);
                $this->load->view('admin/teacher/grade_review', $response);
                $this->load->view('admin/theme/footer', $response);
	}

        public function grade_input()
	{
                $response = $this->main_variable();   
                $response['title_page']='เลือกวิชาที่ต้องการจะส่งคะแนน';
                $response['icon_page']='<i class="fas fa-toggle-on"></i>';
                $response['page']='grade_input';
                $response['sub-page']='schedule';

                $this->load->view('admin/theme/header', $response);
                $this->load->view('admin/teacher/grade_input', $response);
                $this->load->view('admin/theme/footer', $response);
	}
}
