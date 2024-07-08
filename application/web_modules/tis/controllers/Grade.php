<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Grade extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
                if($this->session->userdata('is_teacher_logged_in')==FALSE){
                        redirect('tis/login');
                }
	}

	public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='ส่งเกรด | CRRU-CB(TIS)';
        $reponse['keywords']='';
        $reponse['description']='';
        $reponse['author']='';
        $reponse['page']='';
        return $reponse;
        
      }

	public function index()
	{
        $response = $this->main_variable();
        $response['title_page']='ส่งเกรดผู้เรียน';
        $response['icon_page']='<i class="fa-solid fa-font py-2"></i>';
        $response['page']='';
                                    
        $response['breadcrumb']=array(
                'ส่งเกรด' => array(site_url('tis/grade'),'active')
            );

        //$response['tb_training'] = $this->GetDataTablemodel->form_dropdown_tb_training('C00001',2565);
        
        $this->load->view('tis/theme/header', $response);
        $this->load->view('tis/grade/grade', $response);
        $this->load->view('tis/theme/footer', $response);
	}

    public function process()
	{
                $response = $this->main_variable();   
                $response['title_page']='รายชื่อนักเรียน วิชา สาธารณสุขศาสตร์ วท.บ.4ปี';
                $response['icon_page']='<i class="fas fa-toggle-on"></i>';
                $response['page']='checkin';
                $response['sub-page']='';

                $this->load->view('tis/theme/header', $response);
                $this->load->view('tis/checkin/process', $response);
                $this->load->view('tis/theme/footer', $response);
	}
}
