<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

    
    public function index()
    {
    //    echo "Index Home";

       $this->main_view();
    }

    public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='ข่าวประชาสัมพันธ์ | CRRU - Credit Bank';
        $reponse['keywords']='Credit Bank, CreditBank, Credit, Credit Bank CRRU, CRRU, คลังหน่วยกิต, สะสมหน่วยกิต, การศึกษาต่อเนื่อง, ชุดฝึกอบรม, Modular, Training, เก็บเกรด, มหาวิทยาลัย, ราชภัฏเชียงราย, เชียงราย, เทียบโอน, เทียบโอนหน่วยกิต, หน่วยกิต, Pre University, เรียนเก็บเกรดก่อน, คลังหน่วยกิตภาคเหนือ';
        $reponse['description']='งานคลังหน่วยกิต มหาวิทยาลัยราชภัฏเชียงราย ดำเนินการโดย สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย (CLLI)';
        $reponse['author']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        $reponse['page']='NEWS';
        $reponse['title_page']='ข่าวประชาสัมพันธ์';
        $reponse['title_page_detail']='News';
        $reponse['ACTIVE']='NEWS';
        $reponse['breadcrumb']=array(
                                        'ข่าวประชาสัมพันธ์' => array(site_url('news'),'active'),
                                    );
        return $reponse;
        
      }

    public function main_view() 
    {
        $reponse = $this->main_variable();
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/news/news_view',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }

    public function detail($id) 
    {
        $reponse = $this->main_variable();
        $reponse['id'] = $id;
        if($reponse['id']=='N0001'){  
            $reponse['topic_news']='รับสมัครผู้เรียนในหลักสูตรการศึกษาต่อเนื่อง “สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน” รุ่นที่ 3';
            $reponse['date_news']='4 ก.พ. 65';
            $reponse['by_news']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        }elseif($reponse['id']=='N0002'){
            $reponse['topic_news']='รับสมัครผู้เข้าร่วมอบรม หลักสูตร“สร้างสมาธิพิชิตอารมณ์ด้วยจิตวิทยาการสื่อสาร”';
            $reponse['date_news']='3 ก.พ. 65';
            $reponse['by_news']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        }elseif($reponse['id']=='N0003'){
            $reponse['topic_news']='รับสมัครผู้เรียนในหลักสูตรการศึกษาต่อเนื่อง “สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน” รุ่นที่ 4';
            $reponse['date_news']='31 ม.ค. 66';
            $reponse['by_news']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        }elseif($reponse['id']=='N0004'){
            $reponse['topic_news']='รับสมัครผู้เรียนในหลักสูตรการศึกษาต่อเนื่อง “สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน” รุ่นที่ 5 (รอบพิเศษ)';
            $reponse['date_news']='1 ก.ย. 66';
            $reponse['by_news']='สถาบันการเรียนรู้ตลอดชีวิต มหาวิทยาลัยราชภัฏเชียงราย';
        }else{
            redirect('news');
        }
        $this->load->view('website/theme/header',$reponse);
        $this->load->view('website/theme/navbar', $reponse);
        $this->load->view('website/news/news_detail',$reponse);
        $this->load->view('website/theme/footer.php',$reponse);
    }

}// END CLASS
