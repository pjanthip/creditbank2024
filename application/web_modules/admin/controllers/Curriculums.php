<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Curriculums extends CI_Controller
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
        $response['title_page']='ข้อมูลหลักสูตร';
        $response['icon_page']='<i class="fas fa-book"></i>';
        $response['page']='curriculums';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/curriculums/curriculum_view', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function addcurriculums()
	{
        $response = $this->main_variable();   
        $response['title_page']='เพิ่มข้อมูลหลักสูตร';
        $response['icon_page']='<i class="fas fa-plus-circle"></i>';
        $response['page']='curriculums';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/curriculums/curriculum_add_form', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function category()
	{
        $response = $this->main_variable();   
        $response['title_page']='รูปแบบหลักสูตร';
        $response['icon_page']='<i class="fas fa-book"></i>';
        $response['page']='curriculums_category';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/curriculums/curriculum_category_view', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function addcategory()
	{
        $response = $this->main_variable();   
        $response['title_page']='เพิ่มข้อมูลรูปแบบหลักสูตร';
        $response['icon_page']='<i class="fas fa-book"></i>';
        $response['page']='curriculums_category';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/curriculums/curriculum_add_category', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function type()
	{
        $response = $this->main_variable();   
        $response['title_page']='ประเภทหลักสูตร';
        $response['icon_page']='<i class="fas fa-book"></i>';
        $response['page']='curriculums_type';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/curriculums/curriculum_type_view', $response);
        $this->load->view('admin/theme/footer', $response);
	}

    public function addtype()
	{
        $response = $this->main_variable();   
        $response['title_page']='เพิ่มข้อมูลประเภทหลักสูตร';
        $response['icon_page']='<i class="fas fa-book"></i>';
        $response['page']='curriculums_type';

		$this->load->view('admin/theme/header', $response);
        $this->load->view('admin/curriculums/curriculum_add_type', $response);
        $this->load->view('admin/theme/footer', $response);
	}
}
