<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Plan extends CI_Controller
{


    public function index()
    {
        $this->main_view();
    }

    public function main_view()
    {
        $this->load->view('website/theme/header.php', ['title' => 'Plan']); 
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PLAN']); 


        $this->load->view('website/plan/index.php');


        $this->load->view('website/theme/footer.php'); 
    }

    
}// END CLASS
