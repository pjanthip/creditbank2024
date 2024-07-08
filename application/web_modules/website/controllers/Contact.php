<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{


    public function index()
    {
        //    echo "Index Home";

        $this->main_view();
    }

    public function main_view()
    {
        $this->load->view('website/theme/header.php', ['title' => 'Contact']); 
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'CONTACT']); 

        $this->load->view('website/contact/index.php');
        
        $this->load->view('website/theme/footer.php');
    }
}// END CLASS
