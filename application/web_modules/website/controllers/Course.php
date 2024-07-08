<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
   		check_lang(); 
	}
    
    public function index()
    {
        $reponse = $this->main_variable();

        //$reponse = $this->get_filter();

        $sql = "SELECT * FROM tb_faculty WHERE showStatus = 1";
        $reponse['list_faculty'] = $this->db->query($sql)->result();

        $reponse['page']='COURSE';
        $reponse['sub_page']='';
        $reponse['title'] = $this->lang->line('nav_course');
        $reponse['breadcrumb'] = [
            $this->lang->line('nav_course') => ["url" => site_url('course'), "active" => true]
        ];
        
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/course/main_view',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }

    public function get_filter(){
        $sql = "SELECT * FROM tb_faculty";
        $q = $this->db->query($sql);
        if($q->num_rows() > 0):
            $reponse['list_faculty'] = $q->result();
        endif;

        return $reponse;
    }

    public function main_variable(){
        //$sql = "SELECT * FROM tb_websetting WHERE websetting_code = '".$this->lang->line('lang')."_title' AND websetting_status = 1"; $q = $this->db->query($sql);
        $sql = "SELECT * FROM tb_websetting WHERE websetting_code = '".$this->lang->line('lang')."_title_connect' AND websetting_status = 1"; $q = $this->db->query($sql);
        $reponse['title_connect'] = ($q->num_rows() > 0)? $q->row()->websetting_value:"";
        $sql = "SELECT * FROM tb_websetting WHERE websetting_code = '".$this->lang->line('lang')."_keywords' AND websetting_status = 1"; $q = $this->db->query($sql);
        $reponse['keywords']=($q->num_rows() > 0)? $q->row()->websetting_value:"";
        $sql = "SELECT * FROM tb_websetting WHERE websetting_code = '".$this->lang->line('lang')."_description' AND websetting_status = 1"; $q = $this->db->query($sql);
        $reponse['description']=($q->num_rows() > 0)? $q->row()->websetting_value:"";
        $sql = "SELECT * FROM tb_websetting WHERE websetting_code = '".$this->lang->line('lang')."_author' AND websetting_status = 1"; $q = $this->db->query($sql);
        $reponse['author']=($q->num_rows() > 0)? $q->row()->websetting_value:"";
        return $reponse;
    }

    public function detail($id){
        $reponse = $this->main_variable();
        $reponse['page']='COURSE';
        $reponse['sub_page']='';
        $reponse['title'] = "หลักสูตรสาธารณสุขศาสตรบัณฑิต";
        $reponse['breadcrumb'] = [
            $this->lang->line('nav_course') => ["url" => site_url('course'), "active" => false],
            "รายละเอียดหลักสูตร" => ["url" => "", "active" => true]
        ];
        
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/course/course_detail',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }

}// END CLASS