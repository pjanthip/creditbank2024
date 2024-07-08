<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Training extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
        $this->load->helper('mydate_helper');
        if ($this->session->userdata('is_student_logged_in') == FALSE) {
            redirect('sis/login');
        }
	}

	public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='ลงทะเบียนชุดฝึกอบรม | CRRU-CB(TIS)';
        $reponse['keywords']='';
        $reponse['description']='';
        $reponse['author']='';
        $reponse['page']='';
        return $reponse;
        
      }

	public function index()
	{
        $response = $this->main_variable();
        $response['title_page']='ลงทะเบียนชุดฝึกอบรม';
        $response['icon_page']='<i class="fa-solid fa-user-check py-2"></i>';
        $response['page']='training_register';
                                    
        $response['breadcrumb']=array(
                'ลงทะเบียนชุดฝึกอบรม' => array(site_url('sis/training_register'),'active')
            );

        //$response['tb_training'] = $this->GetDataTablemodel->form_dropdown_tb_training('C00001',2565);
        
        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/training/training_view', $response);
        $this->load->view('sis/theme/footer', $response);
	}

    public function register()
	{
        $response = $this->main_variable();
        $response['title_page']='ลงทะเบียนชุดฝึกอบรม';
        $response['icon_page']='<i class="fa-solid fa-user-check py-2"></i>';
        $response['page']='training_register';
                                    
        $response['breadcrumb']=array(
                'ลงทะเบียนชุดฝึกอบรม' => array(site_url('sis/training_register'),'active')
            );

        //$response['tb_training'] = $this->GetDataTablemodel->form_dropdown_tb_training('C00001',2565);
        $sql = "SELECT * FROM tb_learner WHERE learner_code = '".$this->session->userdata('learner_id')."'";
		$response['learner'] = $this->db->query($sql)->row();

        $sql = "SELECT * FROM tb_training WHERE curriculum_id = '".$response['learner']->curriculum_id."' ORDER BY training_id ASC";
        $response['training'] = $this->db->query($sql)->result();

        $this->load->view('sis/theme/header', $response);
        $this->load->view('sis/training/training_view', $response);
        $this->load->view('sis/theme/footer', $response);
	}

    public function regis_training_member()
    {
       $register_member_idcard = $this->input->post('learner_idcard');
       $training_register_id = $this->input->post('training_register_id');
       $training_member_status = $this->input->post('training_member_status');

       $sql = "SELECT * FROM tb_training_member WHERE  training_member_idcard = '$register_member_idcard' AND  training_register_id='$training_register_id'";
       $check_training = $this->db->query($sql)->row();

       if(empty($check_training)){

            $data_training_member = [
                'training_member_idcard' => $register_member_idcard,
                'training_register_id' => $training_register_id,
                'training_member_date_register' => date('Y-m-d H:i:s'),
                'training_member_spay' => 0,
                'training_member_status' => $training_member_status,
            ];
            if($this->db->insert('tb_training_member', $data_training_member )){
            
                $json = json_encode(array(
                    'status' => TRUE,
                    'id' => $training_register_id,
                    'idcard' => $register_member_idcard
                ));
                echo $json;
            }
       }else{
            $json = json_encode(array(
                'status' => FALSE
            ));
            echo $json;
       }
    }

    public function regis_training_cancel()
    {
       $register_member_idcard = $this->input->post('learner_idcard');
       $training_register_id = $this->input->post('training_register_id');

       $this->db->where(array('training_member_idcard' => $register_member_idcard, 'training_register_id' => $training_register_id));
       if($this->db->delete('tb_training_member')){

            $json = json_encode(array(
                'status' => true,
                'massage' => '' ,
                'id' => $training_register_id,
                'idcard' => $register_member_idcard
            ));
            echo $json;
        }else{
            $json = json_encode(array(
                'status' => FALSE
            ));
            echo $json;
       }
    }

    public function getSlip()
    {
        $reponse = [];  
        $id = $this->input->post('id', true);

        $sql = "SELECT
                        tb_training_member.training_member_id,
                        tb_training_member.training_member_idcard,
                        tb_training_member.training_register_id,
                        tb_training_member.training_member_date_register,
                        tb_training_member.training_member_spay,
                        tb_training_member.bank_id,
                        tb_training_member.training_member_bank,
                        tb_training_member.training_member_slip,
                        tb_training_member.training_member_amount,
                        tb_training_member.training_member_transfer_date,
                        tb_training_member.training_member_transfer_time,
                        tb_training_member.member_status,
                        tb_training_member.training_member_status,
                        tb_bank.bank_id,
                        tb_bank.bank_name,
                        tb_bank.showStatus
                        FROM
                        tb_training_member
                        INNER JOIN tb_bank ON tb_training_member.bank_id = tb_bank.bank_id
                        WHERE
                        tb_training_member.training_member_id = '$id' ";
        
        $reponse['tb_training_member'] = $this->db->query($sql)->row();

        $this->load->view('sis/training/load_slip', $reponse);
    }

    function pay($register_id){
        $reponse = $this->main_variable();
        $reponse['title_page']='ชำระค่าลงทะเบียน';
        $reponse['icon_page']='<i class="fa-solid fa-address-card"></i>';
        $reponse['page']='training_register';
                                    
        $reponse['breadcrumb']=array(
                'ลงทะเบียนชุดฝึกอบรม' => array(site_url('sis/training/register'),''),
                'ชำระค่าลงทะเบียน' => array(site_url('sis/training/pay'),'active')
            );
        
        $reponse['training_register_id'] = $register_id;

        $sql = "SELECT learner_idcard FROM tb_learner WHERE learner_code = '".$this->session->userdata('learner_id')."'";
        $query = $this->db->query($sql);

        if($query->num_rows()>0){
            $reponse['leaner'] = $query->row();
            $register_member_idcard = $reponse['leaner']->learner_idcard;
        }

        
        if(empty($reponse['training_register_id'])){
            redirect('sis/training/register');
        }

        if(empty($register_member_idcard)){
            redirect('sis/training/register');
        }

        $sql = "SELECT
                tb_prefix_name.prefix_name_full_th, 
                tb_register_member.*
            FROM
                tb_prefix_name
                INNER JOIN
                tb_register_member
                ON 
                    tb_prefix_name.prefix_name_id = tb_register_member.prefix_name_id 
                WHERE 
                    register_member_idcard = '$register_member_idcard' ORDER BY register_member_id ASC ";
        $reponse['register'] = $this->db->query($sql)->row();

        $sql_t = "SELECT
            tb_training_register.training_id, 
            tb_training_register.training_register_price, 
            tb_training.training_id, 
            tb_training.curriculum_id, 
            tb_training.training_name, 
            tb_training.training_objective, 
            tb_training.training_scope, 
            tb_training_member.training_member_id, 
            tb_training_member.training_member_idcard, 
            tb_curriculum.curriculum_name_th
        FROM
            tb_training_member
            INNER JOIN
            tb_training_register
            ON 
                tb_training_member.training_register_id = tb_training_register.training_register_id
            INNER JOIN
            tb_training
            ON 
                tb_training_register.training_id = tb_training.training_id
            INNER JOIN
            tb_curriculum
            ON 
                tb_training.curriculum_id = tb_curriculum.curriculum_id
                    
                where 
                tb_training_member.training_member_idcard = '$register_member_idcard'
                AND
                tb_training_member.training_register_id = '".$reponse['training_register_id']."'";
        $query_t = $this->db->query($sql_t);
        if($query_t->num_rows()>0){
            $reponse['training'] = $this->db->query($sql_t)->row();
        }
        
        $reponse['tb_banks']    = $this->GetDataTablemodel->form_dropdown_tb_bank();
        

        $this->load->view('sis/theme/header', $reponse);
        $this->load->view('sis/training/pay', $reponse);
        $this->load->view('sis/theme/footer', $reponse);
    }

}
