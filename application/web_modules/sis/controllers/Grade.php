<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Grade extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('mydate_helper');
        if($this->session->userdata('is_student_logged_in')==FALSE){
                redirect('sis/login');
        }
    }


    public function main_variable()
    {
        define("CANVAS", base_url() . "assets/theme/canvas/");
        define("ABLE", base_url() . "assets/theme/able/dist/");

        $reponse['title'] = 'ระบบข้อมูลผู้เรียน | CRRU-CREDITBANK';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = '';
        $reponse['page'] = '';
        return $reponse;
    }

    public function index()
    {
        $response = $this->main_variable();
        $response['title_page'] = 'ผลการศึกษาเรียนรู้';
        $response['icon_page'] = '<i class="fas fa-font"></i></i>';
        $response['page'] = 'grade';

        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/grade/grade');
        $this->load->view('sis/theme/footer', $response);
    }

    public function check_gpa()
    {
        $response = $this->main_variable();
        $response['title_page'] = 'เกรด';
        $response['icon_page'] = '<i class="fas fa-font"></i></i>';
        $response['page'] = 'grade';

        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/grade/check_gpa');
        $this->load->view('sis/theme/footer', $response);
    }
}
