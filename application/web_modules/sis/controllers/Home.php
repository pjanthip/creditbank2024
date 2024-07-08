<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
                if($this->session->userdata('is_student_logged_in')==FALSE){
                        redirect('sis/login');
                }
	}

	public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='ระบบผู้เรียน | CRRU-Creditbank';
        $reponse['keywords']='';
        $reponse['description']='';
        $reponse['author']='';
        $reponse['page']='';
        return $reponse;
        
      }

	public function index()
	{
        $response = $this->main_variable();
        $response['title_page']='หน้าหลัก';
        $response['icon_page']='<i class="fa-solid fa-house py-2"></i>';
        $response['page']='';
                                    
        /*$response['breadcrumb']=array(
                'หน้าหลัก' => array(site_url('sis/home'),'active'),
            );*/
        
        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/home/index', $response);
        $this->load->view('sis/theme/footer', $response);
	}
}
