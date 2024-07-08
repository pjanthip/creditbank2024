<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{


    public function index()
    {
        //    echo "Index Home";

        $this->main_view();
    }

    public function main_view()
    {
        $this->load->view('website/theme/header.php', ['title' => 'Blog']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'BLOG']);

        $this->load->view('website/contact/index.php');

        $this->load->view('website/theme/footer.php');
    }

    public function article_1()
    {
        $this->load->view('website/theme/header.php', ['title' => 'Blog']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'BLOG']);

        $this->load->view('website/blog/article-1.php');

        $this->load->view('website/theme/footer.php');
    }
    public function article_2()
    {
        $this->load->view('website/theme/header.php', ['title' => 'Blog']);
        $this->load->view('website/theme/navbar.php', ['ACTIVE' => 'BLOG']);

        $this->load->view('website/blog/article-2.php');

        $this->load->view('website/theme/footer.php');
    }
}// END CLASS
