<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Line extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
        $this->load->helper('mydate_helper');
    }
    
    public function index()
    {
        $reponse = $this->main_variable();

        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/line/line',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }

    public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='LINE | CRRU - Credit Bank';
        $reponse['keywords']='Credit Bank, CreditBank, Credit, Credit Bank CRRU, CRRU, คลังหน่วยกิต, สะสมหน่วยกิต,ระบบสารสนเทศ, การศึกษาต่อเนื่อง, ชุดฝึกอบรม, Modular, Training, เก็บเกรด, มหาวิทยาลัย, ราชภัฏเชียงราย, เชียงราย, เทียบโอน, เทียบโอนหน่วยกิต, หน่วยกิต, Pre University, เรียนเก็บเกรดก่อน, คลังหน่วยกิตภาคเหนือ';
        $reponse['description']='งานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย ดำเนินการโดย สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย (CLLI)';
        $reponse['author']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page']='LINE';
        $reponse['title_page']='ไลน์';
        $reponse['title_page_detail']='Line';
        $reponse['ACTIVE']='LINE';
        $reponse['breadcrumb']=array(
                                        'ไลน์' => array(site_url('line'),'active'),
                                    );
        return $reponse;
        
      }

      public function main_view() 
    {
        $reponse = $this->main_variable();
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/about/about_view',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }
}// END CLASS
