<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{

    
    public function index()
    {
    //    echo "Index Home";

       $this->main_view();
    }

    public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='เกี่ยวกับเรา | CRRU - Credit Bank';
        $reponse['keywords']='Credit Bank, CreditBank, Credit, Credit Bank CRRU, CRRU, คลังหน่วยกิต, สะสมหน่วยกิต,ระบบสารสนเทศ, การศึกษาต่อเนื่อง, ชุดฝึกอบรม, Modular, Training, เก็บเกรด, มหาวิทยาลัย, ราชภัฏเชียงราย, เชียงราย, เทียบโอน, เทียบโอนหน่วยกิต, หน่วยกิต, Pre University, เรียนเก็บเกรดก่อน, คลังหน่วยกิตภาคเหนือ';
        $reponse['description']='งานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย ดำเนินการโดย สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย (CLLI)';
        $reponse['author']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page']='ABOUT';
        $reponse['title_page']='เกี่ยวกับเรา';
        $reponse['title_page_detail']='About';
        $reponse['ACTIVE']='ABOUT';
        $reponse['breadcrumb']=array(
                                        'เกี่ยวกับเรา' => array(site_url('about'),'active'),
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
