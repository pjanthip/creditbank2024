<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
                if($this->session->userdata('is_teacher_logged_in')==FALSE){
                        redirect('tis/login');
                }
	}

	public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='ระบบผู้สอน | CRRU-Creditbank';
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
        
        $this->load->view('tis/theme/header', $response);
        $this->load->view('tis/home/index', $response);
        $this->load->view('tis/theme/footer', $response);
	}
}
