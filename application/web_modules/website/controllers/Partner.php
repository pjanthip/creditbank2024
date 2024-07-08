<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partner extends CI_Controller
{


    public function index()
    {
        //    echo "Index Home";

        $this->main_view();
    }

    public function main_view()
    {
        //Header
        $this->load->view('website/theme/header.php', ['title' => 'Partner']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PARTNER']);

        $this->load->view('website/partner/index.php');

        //Footer
        $this->load->view('website/theme/footer.php');
    }

    public function cana() 
    {
        //Header
        $this->load->view('website/theme/header.php', ['title' => 'Cana Enterprise Co., Ltd.']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PARTNER']);


        $this->load->view('website/partner/cana.php');

        //Footer
        $this->load->view('website/theme/footer.php');

    }
    public function triplej() 
    {
        //Header
        $this->load->view('website/theme/header.php', ['title' => 'Triple J Software and Consulting Co.,Ltd']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PARTNER']);


        $this->load->view('website/partner/triplej.php');

        //Footer
        $this->load->view('website/theme/footer.php');

    }

    public function thaigps()
    {
        //Header
        $this->load->view('website/theme/header.php', ['title' => 'THAIGPSTRACKER CORPORATION Co.,Ltd)']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PARTNER']);


        $this->load->view('website/partner/thaigps.php');

        //Footer
        $this->load->view('website/theme/footer.php');
    }

    public function smartf()
    {
        //Header
        $this->load->view('website/theme/header.php', ['title' => 'บริษัท Smart Finder จำกัด ']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PARTNER']);


        $this->load->view('website/partner/smartf.php');

        //Footer
        $this->load->view('website/theme/footer.php');
    }

    public function worldgps()
    {
        //Header
        $this->load->view('website/theme/header.php', ['title' => 'World Gps Tracker Co.,Ltd']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'PARTNER']);


        $this->load->view('website/partner/worldgps.php');

        //Footer
        $this->load->view('website/theme/footer.php');
    }


}// END CLASS
