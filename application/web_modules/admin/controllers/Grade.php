<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Grade extends CI_Controller
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
        $response['title_page']='ผลการเรียนผู้เรียน';
        $response['icon_page']='<i class="fa-solid fa-font"></i>';
        $response['page']='grade';

	    $this->load->view('admin/theme/header', $response);
        $this->load->view('admin/grade/grade_all', $response);
        $this->load->view('admin/theme/footer', $response);
	}
}
