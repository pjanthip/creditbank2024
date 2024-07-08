<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    private $_fields_data = array();

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->page_login();
    }

    public function page_login() {
        $this->load->view('codegen/login/page_login_view', array('msg_error' => ''));
    }

    public function page_login_failed() {
        $this->load->view('codegen/login/page_login_view', array('msg_error' => 'ข้อมูลไม่ถูกต้อง'));
    }

    public function login_process() {
        $sdata = array(
            'codegen_display_name' => '',
            'codegen_is_logged_in' => FALSE
        );
        $this->session->set_userdata($sdata);

        $password = $this->input->post('gen_password', true);

        if ($password === '1234') {

            $sdata = array(
                'codegen_display_name' => 'CROTON ADMIN',
                'codegen_is_logged_in' => TRUE
            );
            $this->session->set_userdata($sdata);

            redirect('codegen/dashboard');
        } else {
            redirect('codegen/login/page_login_failed');
        }
    }

    public function logout() {
        $this->session->set_userdata(array('codegen_is_logged_in' => FALSE));
        $this->session->sess_destroy();
        redirect('crru_loan/admin_login');
    }

    private function is_logged_in() {
        return $this->session->userdata('codegen_is_logged_in');
    }

}

// ---------------------------- END Controller Class --------------------------------
