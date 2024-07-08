<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Setting extends CI_Controller
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
                return $reponse;
    }

    public function index(){
        $reponse = $this->main_variable(); 
        $reponse['title_page']='คู่มือ';
        $reponse['icon_page']='<i class="fas fa-book"></i>';
        $reponse['page']='setting';

		$this->load->view('admin/theme/header', $reponse);
        $this->load->view('admin/setting/manual_view', $reponse);
        $this->load->view('admin/theme/footer', $reponse);
	}

}// END CLASS