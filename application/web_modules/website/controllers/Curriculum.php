<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Curriculum extends CI_Controller
{

    
    public function index()
    {
    //    echo "Index Home";

       $this->main_view();
    }

    public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='หลักสูตรคลังหน่วยกิต | CRRU - Credit Bank';
        $reponse['keywords']='Credit Bank, CreditBank, Credit, Credit Bank CRRU, CRRU, คลังหน่วยกิต, สะสมหน่วยกิต, การศึกษาต่อเนื่อง, ชุดฝึกอบรม, Modular, Training, เก็บเกรด, มหาวิทยาลัย, ราชภัฏเชียงราย, เชียงราย, เทียบโอน, เทียบโอนหน่วยกิต, หน่วยกิต, Pre University, เรียนเก็บเกรดก่อน, คลังหน่วยกิตภาคเหนือ';
        $reponse['description']='งานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย ดำเนินการโดย สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย (CLLI)';
        $reponse['author']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page']='CURRICULUM';
        $reponse['title_page']='หลักสูตรคลังหน่วยกิต';
        $reponse['title_page_detail']='มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['ACTIVE']='CURRICULUM';
        $reponse['breadcrumb']=array(
                                        'หลักสูตรคลังหน่วยกิต' => array(site_url('curriculum'),'active'),
                                    );
        return $reponse;
        
      }

    public function main_view() 
    {
        $reponse = $this->main_variable();
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/curriculum/curriculum_view',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }

}// END CLASS
