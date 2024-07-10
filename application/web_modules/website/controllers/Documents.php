<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Documents extends CI_Controller
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

        $reponse['page']='SERVICE';
        $reponse['sub_page']='MANUAL';
        $reponse['title'] = $this->lang->line('nav_services_manual');
        $reponse['breadcrumb'] = [
            $this->lang->line('nav_services_manual') => ["url" => site_url('docs'), "active" => true]
        ];

        $sql = "SELECT * FROM tb_faculty WHERE showStatus = 1";
        $reponse['list_faculty'] = $this->db->query($sql)->result();
        
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/documents/main_view',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
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

}// END CLASS