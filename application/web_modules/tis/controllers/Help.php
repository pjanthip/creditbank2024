<?php

if (!defined('BASEPATH'))
        exit('No direct script access allowed');

class Help extends CI_Controller
{

        public function __construct()
        {
                parent::__construct();
                $this->load->helper('mydate_helper');
                $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
                if ($this->session->userdata('is_teacher_logged_in') == FALSE) {
                        redirect('tis/login');
                }
        }

        public function main_variable()
        {
                define("CANVAS", base_url() . "assets/theme/canvas/");
                define("ABLE", base_url() . "assets/theme/able/dist/");

                $reponse['title'] = 'คู่มือ | CRRU-CB(TIS)';
                $reponse['keywords'] = '';
                $reponse['description'] = '';
                $reponse['author'] = '';
                $reponse['page'] = '';
                return $reponse;
        }

        public function checkin_help()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ระบบเช็คชื่อ';
                $response['icon_page'] = '<i class="fa-regular fa-circle py-2"></i>';
                $response['page'] = '';

                $response['breadcrumb'] = array(
                        'คู่มือ' => array(site_url('tis/help'), ''),
                        'ระบบเช็คชื่อ' => array(site_url('tis/checkin_help'), 'active')
                );

                $response['file'] = "checkin_help";
                $response['filetype'] = "pdf";

                $this->load->view('tis/theme/header', $response);
                $this->load->view('tis/help/help_view', $response);
                $this->load->view('tis/theme/footer', $response);
        }

        public function admin_help()
        {
                $response = $this->main_variable();
                $response['title_page'] = 'ติดต่อผู้ดูแลระบบ';
                $response['icon_page'] = '<i class="fa-regular fa-circle py-2"></i>';
                $response['page'] = '';

                $response['breadcrumb'] = array(
                        'คู่มือ' => array(site_url('tis/help'), ''),
                        'ติดต่อผู้ดูแลระบบ' => array(site_url('tis/admin_help'), 'active')
                );

                $this->load->view('tis/theme/header', $response);
                $this->load->view('tis/help/admin_view', $response);
                $this->load->view('tis/theme/footer', $response);
        }
}
