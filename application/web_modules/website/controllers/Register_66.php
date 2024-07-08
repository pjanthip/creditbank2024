<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_66 extends CI_Controller
{   


    public function __construct()
    {
        parent::__construct();

        /* $user_id = $this->session->userdata('user_id');
        if ($user_id == "") {
            $this->session->sess_destroy();
            redirect('fontend/login/index');
            exit();

        } */

        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
        $this->load->helper('mydate_helper');
    }


    public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='ระบบรับสมัครผู้เรียน';
        $reponse['keywords']='';
        $reponse['description']='';
        $reponse['author']='';
        $reponse['page']='';
        return $reponse;
        
      }

    public function get_date_register(){
        $reponse['start_register_date']='2023-09-01 00:00:00';
        $reponse['end_register_date']='2023-10-11 23:59:59';
        $reponse['regis_full']='100';
        return $reponse;
      }

      

    public function index()
    {
        $this->main_view();
    }

    public function main_view()
    {
        $reponse = $this->main_variable();
        
        $this->load->view('website/register-66/include/header', $reponse);
        //$this->load->view('website/register/include/sidebar', $reponse);
        $this->load->view('website/register-66/include/navbar', $reponse);

        $this->load->view('website/register-66/main_view', $reponse);
        $this->load->view('website/register-66/include/footer', $reponse);
    }

    public function load_form_upload()
    {
        $reponse = [];  
        $document_id = $this->input->post('document_id', true);

        $sql_document = "SELECT
            tb_document_66.*, 
            tb_document_66.document_id, 
            tb_document_66.register_member_id, 
            tb_document_66.document_type_id, 
            tb_document_66.document_file_name, 
            tb_document_66.document_file_type, 
            tb_document_66.document_upload, 
            tb_document_66.document_update, 
            tb_document_66.document_reason_id, 
            tb_document_66.ducument_reason, 
            tb_document_66.ducument_reason_update, 
            tb_document_66.admin_id, 
            tb_document_type_66.document_type_name, 
            tb_document_type_66.document_type_detail, 
            tb_document_type_66.document_type_prefix, 
            tb_document_type_66.document_type_folder
        FROM
            tb_document_66
            INNER JOIN
            tb_document_type_66
            ON 
                tb_document_66.document_type_id = tb_document_type_66.document_type_id
            WHERE document_id = '$document_id' ";
        
        $reponse['tb_document'] = $this->db->query($sql_document)->row();

        $this->load->view('website/register-66/load_form_upload', $reponse);
    }

    public function getReason()
    {
        $reponse = [];  
        $document_id = $this->input->post('document_id', true);

        $sql_document = "SELECT
                        tb_document_66.ducument_reason,
                        tb_document_66.ducument_reason_update,
                        tb_document_type_66.document_type_name,
                        tb_prefix_name.prefix_name_full_th,
                        tb_coordinator.coordinator_fname,
                        tb_coordinator.coordinator_lname
                        FROM
                        tb_document_66
                        INNER JOIN tb_coordinator ON tb_document_66.admin_id = tb_coordinator.coordinator_id
                        INNER JOIN tb_prefix_name ON tb_coordinator.prefix_name_id = tb_prefix_name.prefix_name_id
                        INNER JOIN tb_document_typ_66e ON tb_document_66.document_type_id = tb_document_type_66.document_type_id
                        WHERE
                        tb_document_66.document_id = '$document_id' ";
        
        $reponse['tb_document'] = $this->db->query($sql_document)->row();

        $this->load->view('website/register-66/load_reason', $reponse);
    }

    public function update_document()
    {
        $document_id = $this->input->post('document_id', true);


        $sql_document = "SELECT
            tb_document_66.*, 
            tb_document_66.document_id, 
            tb_document_66.register_member_id, 
            tb_document_66.document_type_id, 
            tb_document_66.document_file_name, 
            tb_document_66.document_file_type, 
            tb_document_66.document_upload, 
            tb_document_66.document_update, 
            tb_document_66.document_reason_id, 
            tb_document_66.ducument_reason, 
            tb_document_66.ducument_reason_update, 
            tb_document_66.admin_id, 
            tb_document_type_66.document_type_name, 
            tb_document_type_66.document_type_detail, 
            tb_document_type_66.document_type_prefix, 
            tb_document_type_66.document_type_folder
        FROM
            tb_document_66
            INNER JOIN
            tb_document_type_66
            ON 
                tb_document_66.document_type_id = tb_document_type_66.document_type_id
            WHERE document_id = '$document_id' ";
        
        $tb_document = $this->db->query($sql_document)->row();

        $forder = "./assets/document_66/";
        if (isset($_FILES["file"])) {

            $ret = array();
            $error = $_FILES["file"]["error"];
            $extention_file = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $result_explode = explode('.', trim($extention_file));
            $document_file_name = $tb_document->register_member_id.'-'.date('Ymdhis').round(microtime(true)).'.'.strtolower($result_explode[0]);
            $document_file_type = strtolower($result_explode[0]);
           
            if (!is_array($_FILES["file"]["name"])) { //single file
                move_uploaded_file($_FILES["file"]["tmp_name"], $forder . $document_file_name);
              
                $ret[] = $document_file_name;


                $data_document = [
                    'document_file_name' =>$document_file_name,
                    'document_file_type' =>$document_file_type,
                    'document_upload' => date('Y-m-d H:i:s'),
                    'document_reason_id' => 2
                ];

                $this->db->update('tb_document_66', $data_document, array('document_id' => $document_id));

                $json = json_encode(array(
                    'status' => true,
                    'message' => 'อัพโหลดเรียบร้อย',
                    'member_id' => $tb_document->register_member_id,
                    'document_id' => $document_id
                ));
                echo $json;
                exit();
                
            }
        }else{

            $json = json_encode(array(
                'status' => false,
                'message' => 'ไม่พบ เอกสารอัพโหลด'
            ));
            echo $json;
            exit();
        }
    }

    public function frm1()
    {
        $reponse = $this->main_variable();
        $response = $this->get_date_register();

        $reponse['citizen_id'] = $this->input->post('citizen_id', true);
        $citizen_id = $reponse['citizen_id'];

        $reponse['tb_card_type'] = $this->GetDataTablemodel->form_dropdown_tb_card_type();
        $reponse['tb_prefix_name'] = $this->GetDataTablemodel->form_dropdown_tb_prefix_name();
        $reponse['tb_religion'] = $this->GetDataTablemodel->form_dropdown_tb_religion();
        $reponse['tb_education_level'] = $this->GetDataTablemodel->form_dropdown_tb_education_level();
        $reponse['provices']    = $this->GetDataTablemodel->load_province();


        $this->load->view('website/register-66/include/header', $reponse);
        $this->load->view('website/register-66/include/navbar', $reponse);

        if(empty($citizen_id)){

            redirect('register');
        }

        $sql = "SELECT * FROM tb_register_member_66 WHERE register_member_idcard = '$citizen_id' AND register_datetime_record >= '".$response['start_register_date']."' AND register_datetime_record <= '".$response['end_register_date']."' ORDER BY register_member_id ASC ";
        $reponse['register'] = $this->db->query($sql)->row();
        if($reponse['register']){

            $this->load->view('website/register-66/frm1_edit', $reponse);
            $this->load->view('website/register-66/include/footer', $reponse);
        }else{

            $this->load->view('website/register-66/frm1', $reponse);
            $this->load->view('website/register-66/include/footer', $reponse);
        }
    }

    public function search_curriculum()
    {
        
        $reponse = [];

        $sql 	= "SELECT
            tb_faculty.faculty_name_th, 
            tb_faculty.faculty_name_en, 
            tb_curriculum.curriculum_id, 
            tb_curriculum.curriculum_name_th, 
            tb_curriculum.curriculum_name_en, 
            tb_curriculum.curriculum_degree_th, 
            tb_curriculum.curriculum_degree_en
        FROM
            tb_curriculum
            INNER JOIN
            tb_major
            ON 
                tb_curriculum.major_id = tb_major.major_id
            INNER JOIN
            tb_faculty
            ON 
                tb_major.faculty_id = tb_faculty.faculty_id";
        $reponse['tb_faculty'] = $this->db->query($sql)->result();

        $this->load->view('website/register-66/search_curriculum', $reponse);
    }

    public function check_alumni(){
        
        $response = $this->get_date_register();
        $curriculum_id  = $this->input->post('curriculum_id', true);
        $id_card  = $this->input->post('id', true);
        $sql = "SELECT * FROM tb_register_member WHERE register_member_idcard = '$id_card' AND curriculum_id='$curriculum_id'";
        $row = $this->db->query($sql);
        if($row->num_rows()>0){
            $data = $row->row();
            $date1 = new DateTime("2023-02-01");
            $date2 = new DateTime($data->register_datetime_record);
            if($date1 > $date2 && $data->register_status == "6"){echo true;}else{echo false;}
            
        }else{
            echo false;
        }
    }

    public function get_data_curriculum()
    {
        
        $reponse = [];

        $curriculum_id  = $this->input->post('curriculum_id', true);

        $sql 	= "SELECT
            tb_faculty.faculty_name_th, 
            tb_faculty.faculty_name_en, 
            tb_curriculum.curriculum_id, 
            tb_curriculum.curriculum_name_th, 
            tb_curriculum.curriculum_name_en, 
            tb_curriculum.curriculum_degree_th, 
            tb_curriculum.curriculum_degree_en
        FROM
            tb_curriculum
            INNER JOIN
            tb_major
            ON 
                tb_curriculum.major_id = tb_major.major_id
            INNER JOIN
            tb_faculty
            ON 
                tb_major.faculty_id = tb_faculty.faculty_id
            WHERE curriculum_id = '$curriculum_id'
            ";
        $reponse['tb_faculty'] = $this->db->query($sql)->row();

        $json = json_encode(array(
            'status' => true,
            'data' => $reponse['tb_faculty']
        ));
        echo $json;
    }

    public function frm2()
    {
        $reponse = $this->main_variable();
        $reponse['citizen_id'] = $this->input->post('citizen_id', true);
        $reponse['register_id'] = $this->input->post('register_id', true);
        $citizen_id = $reponse['citizen_id'];
        $register_id = $reponse['register_id'];

        if(empty($citizen_id) && empty($register_id)){

            redirect('register');
        }
        
        $sql_document = "SELECT
            tb_document_66.*, 
            tb_document_66.document_id, 
            tb_document_66.register_member_id, 
            tb_document_66.document_type_id, 
            tb_document_66.document_file_name, 
            tb_document_66.document_file_type, 
            tb_document_66.document_upload, 
            tb_document_66.document_update, 
            tb_document_66.document_reason_id, 
            tb_document_66.ducument_reason, 
            tb_document_66.ducument_reason_update, 
            tb_document_66.admin_id, 
            tb_document_type_66.document_type_name, 
            tb_document_type_66.document_type_detail, 
            tb_document_type_66.document_type_prefix, 
            tb_document_type_66.document_type_folder
        FROM
            tb_document_66
            INNER JOIN
            tb_document_type_66
            ON 
                tb_document_66.document_type_id = tb_document_type_66.document_type_id 
            WHERE 
                register_member_id = '$register_id';
            ";
        

        // if(empty($citizen_id)){

        //     redirect('register');
        // }

        // $sql = "SELECT * FROM tb_register_member WHERE register_member_idcard = '$citizen_id' ORDER BY register_member_id ASC ";
        // $register = $this->db->query($sql)->row();

        // $sql_document = "SELECT
        //     tb_document.*, 
        //     tb_document.document_id, 
        //     tb_document.register_member_id, 
        //     tb_document.document_type_id, 
        //     tb_document.document_file_name, 
        //     tb_document.document_file_type, 
        //     tb_document.document_upload, 
        //     tb_document.document_update, 
        //     tb_document.document_reason_id, 
        //     tb_document.ducument_reason, 
        //     tb_document.ducument_reason_update, 
        //     tb_document.admin_id, 
        //     tb_document_type.document_type_name, 
        //     tb_document_type.document_type_detail, 
        //     tb_document_type.document_type_prefix, 
        //     tb_document_type.document_type_folder
        // FROM
        //     tb_document
        //     INNER JOIN
        //     tb_document_type
        //     ON 
        //         tb_document.document_type_id = tb_document_type.document_type_id 
        //     WHERE 
        //         register_member_id = '$register->register_member_id';
        //     ";
            
        $reponse['tb_documents'] = $this->db->query($sql_document)->result();

        $this->load->view('website/register-66/include/header', $reponse);
        $this->load->view('website/register-66/include/navbar', $reponse);
        $this->load->view('website/register-66/frm2', $reponse);
        $this->load->view('website/register-66/include/footer2', $reponse);
    }

    function update_status_register()
    {
        $register_member_id = $this->input->post('register_member_id', true);

        if($this->db->update('tb_register_member_66', array('register_status' => '3'), array('register_member_id' => $register_member_id))){

            $sql = "SELECT * FROM tb_register_member_66 WHERE register_member_id = '$register_member_id' ORDER BY register_member_id ASC ";
            $register = $this->db->query($sql)->row();

            $data_session = array(
                'register_member_idcard' => $register->register_member_idcard,
                'register_member_id' => $register->register_member_id,
            );
            $this->session->set_userdata($data_session);

            $json = json_encode(array(
                'status' => true,
                'massage' => '' 
            ));
            echo $json;
        }
    }
    
    function get_education_background()
    {

        $reponse = [];

        $education_level_id = $this->input->post('education_level_id', true);

        $tb_education_background = $this->GetDataTablemodel->form_dropdown_tb_education_background($education_level_id);

        echo '<option value="" selected disabled>-กรุณาวุฒิการศึกษา-</option>';
        foreach($tb_education_background as $key => $item){
            echo '<option value="' . $item['education_background_id'] . '">' . $item['education_background_code'] .' '.$item['education_background_name'] . '</option>';
        }
    }

    public function get_province()
    { 
        if (isset($_POST['function']) && $_POST['function'] == 'provinces') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM amphures WHERE province_id='$id'";
            $query = $this->db->query($sql)->result_array();
            echo '<option value="" selected disabled>-กรุณาเลือกอำเภอ-</option>';
            foreach ($query as $value) {
                echo '<option value="' . $value['id'] . '">' . $value['name_th'] . '</option>';

            }
        }

        if (isset($_POST['function']) && $_POST['function'] == 'amphures') {
            $id = $_POST['id'];
            $sql = "SELECT * FROM districts WHERE amphure_id='$id'";
            $query = $this->db->query($sql)->result_array();
            echo '<option value="" selected disabled>-กรุณาเลือกตำบล-</option>';
            foreach ($query as $value2) {
                echo '<option value="' . $value2['id'] . '">' . $value2['name_th'] . '</option>';

            }
        }

    }


    public function frm3()
    {
        $reponse = $this->main_variable();

        $reponse['citizen_id'] = $this->input->post('citizen_id', true);
        $register_member_idcard = $this->session->userdata('register_member_idcard');
        $reponse['register_member_idcard'] = $register_member_idcard;

        $sql = "SELECT
                    tb_training.curriculum_id, 
                    tb_training.training_name, 
                    tb_training.training_objective, 
                    tb_training.training_scope, 
                    tb_training.showStatus, 
                    tb_training_register.training_register_id, 
                    tb_training_register.training_id, 
                    tb_training_register.training_register_qty, 
                    tb_training_register.training_register_datetime_start, 
                    tb_training_register.training_register_datetime_end, 
                    tb_training_register.training_register_pay_start, 
                    tb_training_register.training_register_pay_end, 
                    tb_training_register.training_register_price, 
                    tb_training_register.personnels_id, 
                    tb_training_register.training_register_image, 
                    tb_training_register.training_register_announce, 
                    tb_training_register.training_register_record, 
                    tb_training_register.training_register_frist, 
                    tb_training_register.training_register_status,
                    tb_training_register.training_register_reserve
                FROM
                    tb_training_register
                    INNER JOIN
                    tb_training
                    ON 
                        tb_training_register.training_id = tb_training.training_id
                WHERE training_register_id IN (11,12,13,14)";
        $reponse['tb_training_registers'] = $this->db->query($sql)->result();


        $this->load->view('website/register-66/include/header', $reponse);
        $this->load->view('website/register-66/include/navbar', $reponse);
        $this->load->view('website/register-66/frm3', $reponse);
        $this->load->view('website/register-66/include/footer', $reponse);
    }

    public function pay()
    {
        $reponse = $this->main_variable();
        $this->load->view('website/register-66/include/header', $reponse);
        $this->load->view('website/register-66/include/navbar', $reponse);

        
        $reponse['training_register_id'] = $this->input->post('training_register_id', true);

        $register_member_idcard = $this->session->userdata('register_member_idcard');

        if(empty($register_member_idcard)){
            
            redirect('register');
        }

        $sql = "SELECT
                tb_prefix_name.prefix_name_full_th, 
                tb_register_member_66.*
            FROM
                tb_prefix_name
                INNER JOIN
                tb_register_member_66
                ON 
                    tb_prefix_name.prefix_name_id = tb_register_member_66.prefix_name_id 
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
            tb_training_member_66.training_member_id, 
            tb_training_member_66.training_member_idcard, 
            tb_curriculum.curriculum_name_th,
            tb_training_register.training_register_pay_start,
            tb_training_register.training_register_pay_end 
        FROM
            tb_training_member_66
            INNER JOIN
            tb_training_register
            ON 
                tb_training_member_66.training_register_id = tb_training_register.training_register_id
            INNER JOIN
            tb_training
            ON 
                tb_training_register.training_id = tb_training.training_id
            INNER JOIN
            tb_curriculum
            ON 
                tb_training.curriculum_id = tb_curriculum.curriculum_id
                    
                where 
                tb_training_member_66.training_member_idcard = '$register_member_idcard'";
        $reponse['training'] = $this->db->query($sql_t)->row();

        $reponse['tb_banks']    = $this->GetDataTablemodel->form_dropdown_tb_bank();

       
        $this->load->view('website/register-66/pay', $reponse);
        //$this->load->view('website/register/include/footer', $reponse);

    }

    public function complete()
    {
        $reponse = $this->main_variable();
        
        $this->load->view('website/register-66/include/header', $reponse);
        $this->load->view('website/register-66/include/navbar', $reponse);


        $register_member_idcard = $this->session->userdata('register_member_idcard');

        if(empty($register_member_idcard)){
            
            redirect('register');
        }

        $sql = "SELECT
                tb_prefix_name.prefix_name_full_th, 
                tb_register_member_66.*
            FROM
                tb_prefix_name
                INNER JOIN
                tb_register_member_66
                ON 
                    tb_prefix_name.prefix_name_id = tb_register_member_66.prefix_name_id 
                WHERE 
                    register_member_idcard = '$register_member_idcard' ORDER BY register_member_id ASC ";
        $reponse['register'] = $this->db->query($sql)->row();


        $this->load->view('website/register-66/register_complete', $reponse);
        $this->load->view('website/register-66/include/footer', $reponse);
    }

    public function reserve()
    {
        $reponse = $this->main_variable();
        $reponse['citizen_id'] = $this->input->post('citizen_id', true);
        $this->load->view('website/register/include/header', $reponse);
        $this->load->view('website/register/include/navbar', $reponse);
        $this->load->view('website/register/register_reserve', $reponse);
        $this->load->view('website/register/include/footer', $reponse);
    }

    public function isValidNationalId($nationalId)
    {
        if (strlen($nationalId) === 13) {
            $digits = str_split($nationalId);
            $lastDigit = array_pop($digits);
            $sum = array_sum(array_map(function($d, $k) {
            return ($k+2) * $d;
            }, array_reverse($digits), array_keys($digits)));
            return $lastDigit === strval((11 - $sum % 11) % 10);
        }
        return false;
    }

    public function check_register()
    {
        $response = $this->get_date_register();
        $citizen_id = $this->input->post('citizen_id', true);
        $citizen_id = str_replace("-", "", $citizen_id);

        $checkValid =  $this->isValidNationalId($citizen_id);
        
        if($checkValid == 1){

            

            $sql = "SELECT * FROM tb_register_member_66 WHERE tb_register_member_66.curriculum_id = 'C00001' AND register_member_idcard = '$citizen_id' AND register_datetime_record >= '".$response['start_register_date']."' AND register_datetime_record <= '".$response['end_register_date']."'";
            $chk_has = $this->db->query($sql)->num_rows();
            if($chk_has==0){
                $sql = "SELECT * FROM tb_register_member_66 WHERE tb_register_member_66.curriculum_id = 'C00001' AND register_datetime_record >= '".$response['start_register_date']."' AND register_datetime_record <= '".$response['end_register_date']."'";
                $chk_full = $this->db->query($sql)->num_rows();
                if($chk_full >=$response['regis_full']){
                    $json = json_encode(array(
                        'status' => FALSE,
                        'message' => 'FULL_code'
                    ));
                    echo $json;
                    exit();
                }
            }
            

            $sql = "SELECT * FROM tb_register_member_66 WHERE  register_member_idcard = '$citizen_id' AND register_status in ('0', '3', '4', '5', '6') AND register_datetime_record >= '".$response['start_register_date']."' AND register_datetime_record <= '".$response['end_register_date']."'";
            $register = $this->db->query($sql)->row();

            if($register){
                $data_session = array(
                    'register_member_idcard' => $register->register_member_idcard,
                    'register_member_id' => $register->register_member_id,
                );
                $this->session->set_userdata($data_session);
            }

            $json = json_encode(array(
                'status' => TRUE,
                'citizen_id' =>$citizen_id,
                'message' => '',
                'register_status'=> $register->register_status ?? ""
            ));
            echo $json;
            exit();
        }else{
            $json = json_encode(array(
                'status' => FALSE,
                'message' => 'รหัสประชาชนไม่ถูกต้อง'
            ));
            echo $json;
            exit();
        }      
    }

    public function check_full()
    {
        $response = $this->get_date_register();
        $citizen_id = $this->input->post('citizen_id', true);
        $citizen_id = str_replace("-", "", $citizen_id);
        $sql = "SELECT * FROM tb_register_member WHERE tb_register_member.curriculum_id = 'C00001' AND register_member_idcard='".$citizen_id."' AND register_datetime_record >= '".$response['start_register_date']."' AND register_datetime_record >= '".$response['end_register_date']."'";
        $chk = $this->db->query($sql)->num_rows();
        if($chk>0){
            echo 2;
            exit();
        }elseif($chk>50){
            echo 1;
            exit();
        }else{
            echo 0;
            exit();
        }
        // }else{
        //     $sql = "SELECT * FROM tb_register_member WHERE curriculum_id='C00001' AND register_member_idcard='".$citizen_id."' AND register_datetime_record >= '".$start_register_date."' AND register_datetime_record <= '".$end_register_date."'";
        //     $chk_full = $this->db->query($sql)->num_rows();
        //     if($chk_full>0){
        //         echo 1;
        //         exit();
        //     }else{
        //         echo 0;
        //         exit();
        //     }
        // }
    }

    public function regis_training_member()
    {
        $register_member_idcard = $this->session->userdata('register_member_idcard');
        $training_register_id = $this->input->post('training_register_id');
        $training_member_status = $this->input->post('training_member_status');


        $save_status = false;
        $sid = array();
        $setST = 0;
        foreach($training_register_id as $id){
            $sql = "SELECT * FROM tb_training_member_66 WHERE  training_member_idcard = '$register_member_idcard' AND  training_register_id='$id'";
            $check_training = $this->db->query($sql)->row();
            
            if(empty($check_training)){
                
                $data_training_member = [
                    'training_member_idcard' => $register_member_idcard,
                    'training_register_id' => $id,
                    'training_member_date_register' => date('Y-m-d H:i:s'),
                    'training_member_spay' => 0,
                    'training_member_status' => $training_member_status,
                ];
                if($this->db->insert('tb_training_member_66', $data_training_member )){
                    $setST=$setST+1;
                    $save_status = true;
                }else{
                    $save_status = false;
                }
            }else{
                $save_status = false;
            }
            
            array_push($sid,array("id" => $id , "status" => $save_status));
        }
        
        if($setST==4){
            $this->db->update('tb_register_member_66', array('register_status' => '4'), array('register_member_idcard' => $register_member_idcard));
        }

        $datenow = date('Y-m-d H:i:s');
        $date_start = date('2023-10-01 00:00:00');
        $date_end = date('2023-10-05 23:59:59');

        $chk_date = ($datenow>=$date_start && $datenow<=$date_end)? "in":"out";

        $json = json_encode(array(
            'status' => $save_status,
            'id' => $sid,
            'idcard' => $register_member_idcard,
            'date' => $chk_date,
            'st' => $setST
        ));
        echo $json;

    //    $register_member_idcard = $this->session->userdata('register_member_idcard');
    //    $training_register_id = $this->input->post('training_register_id');
    //    $training_member_status = $this->input->post('training_member_status');

    //    $sql = "SELECT * FROM tb_training_member_66 WHERE  training_member_idcard = '$register_member_idcard' AND  training_register_id='$training_register_id'";
    //    $check_training = $this->db->query($sql)->row();

    //    if(empty($check_training)){


    //         $this->db->update('tb_register_member_66', array('register_status' => '4'), array('register_member_idcard' => $register_member_idcard));

    //         $data_training_member = [
    //             'training_member_idcard' => $register_member_idcard,
    //             'training_register_id' => $training_register_id,
    //             'training_member_date_register' => date('Y-m-d H:i:s'),
    //             'training_member_spay' => 0,
    //             'training_member_status' => $training_member_status,
    //         ];
    //         if($this->db->insert('tb_training_member_66', $data_training_member )){
            
    //             $json = json_encode(array(
    //                 'status' => TRUE,
    //                 'id' => $training_register_id,
    //                 'idcard' => $register_member_idcard,
    //                 'register_id' => $training_register_id
    //             ));
    //             echo $json;
    //         }


            
    //    }
    }

    public function save()
    {   

        $this->load->library('form_validation');
        $frm = $this->form_validation;

        $frm->set_rules('curriculum_id', 'ชื่อหลักสูตร :', 'trim|required');
        $frm->set_rules('register_member_idcard', 'เลขบัตรประจำตัวประชาชน', 'trim|required');
        $frm->set_rules('card_type_id', 'เลขบัตรประจำตัวประชาชน', 'trim|required');
        $frm->set_rules('prefix_name_id', 'คำนำหน้านาม ', 'trim|required');
        $frm->set_rules('register_member_fname_th', 'ชื่อ(ไทย)', 'trim|required');
        $frm->set_rules('register_member_lname_th', 'นามสกุล(ไทย)', 'trim|required');
        $frm->set_rules('register_member_fname_en', 'ชื่อ (ภาษาอังกฤษ)', 'trim|required');
        $frm->set_rules('register_member_lname_en', 'นามสกุล (ภาษาอังกฤษ)', 'trim|required');
        $frm->set_rules('register_member_gender', 'เพศ', 'trim|required');
        $frm->set_rules('register_member_birthday', 'วันเกิด วัน-เดือน-ปี', 'trim|required');
        $frm->set_rules('register_member_origin', 'เชื้อชาติ ', 'trim|required');
        $frm->set_rules('register_member_nation', 'สัญชาติ ', 'trim|required');
        $frm->set_rules('religion_id', 'ศาสนา ', 'trim|required');
        //$frm->set_rules('register_member_talent', 'ความสามารถพิเศษ :', 'trim|required');
        $frm->set_rules('education_level_id', 'ระดับการศึกษา ', 'trim|required');
        $frm->set_rules('education_degree_id', 'วุฒิการศึกษา ', 'trim|required');
        //$frm->set_rules('register_member_graduate', 'ปีที่จบ', 'trim|required');
        $frm->set_rules('register_member_grade', 'เกรดเฉลี่ย', 'trim|required');
       // $frm->set_rules('register_member_old_school', 'โรงเรียน/สถานศึกษา', 'trim|required');
        //$frm->set_rules('register_member_sgraduate', 'สถานะเรียนจบ', 'trim|required');
        //$frm->set_rules('register_member_swork', 'สถานะทำงาน', 'trim|required');
        $frm->set_rules('register_member_add_no', 'ที่อยู่เลขที่', 'trim|required');
        /*$frm->set_rules('register_member_add_moo', 'Register_member_add_moo', 'trim|required');
        $frm->set_rules('register_member_alley', 'Register_member_alley', 'trim|required');
        $frm->set_rules('register_member_road', 'Register_member_road', 'trim|required');*/
        $frm->set_rules('PROVINCE_ID', 'จังหวัด ', 'trim|required');
        $frm->set_rules('AMPHUR_ID', 'อำเภอ ', 'trim|required');
        $frm->set_rules('DISTRICT_ID', 'ตำบล ', 'trim|required');
        $frm->set_rules('register_member_post', ' รหัสไปรษณีย์ ', 'trim|required');
       // $frm->set_rules('register_member_tel', 'Register_member_tel', 'trim|required');
        $frm->set_rules('register_member_phone', ' โทรศัพท์มือถือ', 'trim|required');
        $frm->set_rules('register_member_email', ' E-mail ', 'trim|valid_email|required');
        //$frm->set_rules('register_member_line', 'Register_member_line', 'trim|required');


        $frm->set_message('required', 'กรุณากรอก %s');

        if ($frm->run() == FALSE) {
          $message = '';
    
          $message .= form_error('curriculum_id');
          $message .= form_error('register_member_idcard');
          $message .= form_error('card_type_id');
          $message .= form_error('prefix_name_id');
          $message .= form_error('register_member_fname_th');
          $message .= form_error('register_member_lname_th');
          $message .= form_error('register_member_fname_en');
          $message .= form_error('register_member_lname_en');
          $message .= form_error('register_member_gender');
          $message .= form_error('register_member_birthday');
          $message .= form_error('register_member_origin');
          $message .= form_error('register_member_nation');
          $message .= form_error('religion_id');
          //$message .= form_error('register_member_talent');
          $message .= form_error('education_level_id');
          $message .= form_error('education_degree_id');
          $message .= form_error('education_major_id');
         // $message .= form_error('register_member_graduate');
          $message .= form_error('register_member_grade');
         // $message .= form_error('register_member_old_school');
          //$message .= form_error('register_member_sgraduate');
          //$message .= form_error('register_member_swork');
          $message .= form_error('register_member_add_no');
          //$message .= form_error('register_member_add_moo');
          //$message .= form_error('register_member_alley');
          //$message .= form_error('register_member_road');
          $message .= form_error('PROVINCE_ID');
          $message .= form_error('AMPHUR_ID');
          $message .= form_error('DISTRICT_ID');
          $message .= form_error('register_member_post');
          $message .= form_error('register_member_phone');
          $message .= form_error('register_member_email');

            $json = json_encode(array(
                'status' => FALSE,
                'message' => $message
            ));
            echo $json;
            exit();
        }

        $curriculum_id = $this->input->post('curriculum_id');
        $register_member_idcard = $this->input->post('register_member_idcard');
        $card_type_id = $this->input->post('card_type_id');
        $prefix_name_id = $this->input->post('prefix_name_id');
        $register_member_fname_th = $this->input->post('register_member_fname_th');
        $register_member_lname_th = $this->input->post('register_member_lname_th');
        $register_member_fname_en = $this->input->post('register_member_fname_en');
        $register_member_lname_en = $this->input->post('register_member_lname_en');
        $register_member_gender = $this->input->post('register_member_gender');
        $register_member_birthday = $this->input->post('register_member_birthday');
        $register_member_origin = $this->input->post('register_member_origin');
        $register_member_nation = $this->input->post('register_member_nation');
        $religion_id = $this->input->post('religion_id');
        $register_member_talent = $this->input->post('register_member_talent');
        $education_level_id = $this->input->post('education_level_id');
        $education_degree_id = $this->input->post('education_degree_id');
        $education_major_id = $this->input->post('education_major_id');
        $register_member_graduate = $this->input->post('register_member_graduate');
        $register_member_grade = $this->input->post('register_member_grade');
        $register_member_old_school = $this->input->post('register_member_old_school');
        $register_member_sgraduate = $this->input->post('register_member_sgraduate');
        $register_member_swork = $this->input->post('register_member_swork');
        $register_member_add_no = $this->input->post('register_member_add_no');
        $register_member_add_moo = $this->input->post('register_member_add_moo');
        $register_member_alley = $this->input->post('register_member_alley');
        $register_member_road = $this->input->post('register_member_road');
        $PROVINCE_ID = $this->input->post('PROVINCE_ID');
        $AMPHUR_ID = $this->input->post('AMPHUR_ID');
        $DISTRICT_ID = $this->input->post('DISTRICT_ID');
        $register_member_post = $this->input->post('register_member_post');
        $register_member_tel = $this->input->post('register_member_tel');
        $register_member_phone = $this->input->post('register_member_phone');
        $register_member_email = $this->input->post('register_member_email');
        $register_member_line = $this->input->post('register_member_line');
        
        $register_member_birthday =   date("Y-m-d", strtotime($register_member_birthday));
      
          $data = array(
            'curriculum_id' => $curriculum_id
            ,'register_member_idcard' => $register_member_idcard
            ,'card_type_id' => $card_type_id
            ,'prefix_name_id' => $prefix_name_id
            ,'register_member_fname_th' => $register_member_fname_th
            ,'register_member_lname_th' => $register_member_lname_th
            ,'register_member_fname_en' => $register_member_fname_en
            ,'register_member_lname_en' => $register_member_lname_en
            ,'register_member_gender' => $register_member_gender
            ,'register_member_birthday' => $register_member_birthday
            ,'register_member_origin' => $register_member_origin
            ,'register_member_nation' => $register_member_nation
            ,'religion_id' => $religion_id
            ,'register_member_talent' => $register_member_talent
            ,'education_level_id' => $education_level_id
            ,'education_degree_id' => $education_degree_id
            ,'register_member_graduate' => $register_member_graduate
            ,'register_member_grade' => $register_member_grade
            ,'register_member_old_school' => $register_member_old_school
            ,'register_member_sgraduate' => $register_member_sgraduate
            ,'register_member_swork' => $register_member_swork
            ,'register_member_add_no' => $register_member_add_no
            ,'register_member_add_moo' => $register_member_add_moo
            ,'register_member_alley' => $register_member_alley
            ,'register_member_road' => $register_member_road
            ,'PROVINCE_ID' => $PROVINCE_ID
            ,'AMPHUR_ID' => $AMPHUR_ID
            ,'DISTRICT_ID' => $DISTRICT_ID
            ,'register_member_post' => $register_member_post
            ,'register_member_tel' => $register_member_tel
            ,'register_member_phone' => $register_member_phone
            ,'register_member_email' => $register_member_email
            ,'register_member_line' => $register_member_line
            ,'register_status' => 2
            ,'register_datetime_record' => date('Y-m-d H:i:s')
         );

       //  echo $this->db->insert_string('tb_register_member', $data);
        //exit();
        if( $this->db->insert('tb_register_member_66', $data)){

            $register_member_id = $this->db->insert_id();
            
            $tb_document_type = $this->db->get('tb_document_type_66')->result();

            foreach($tb_document_type as $item){
                
                $document = [
                    'register_member_id' => $register_member_id,
                    'document_type_id' => $item->document_type_id,
                    'document_reason_id' => 1,
                ];

                $this->db->insert('tb_document_66', $document);
            }

            $json = json_encode(array(
                'status' => TRUE,
                'message' => 'บันทึกสำเร็จ',
                'id' => $register_member_id
            ));
            echo $json;
        }
    }

    function line_notify(){
        
        $response = $this->get_date_register();
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");
        $sToken = "L1bKLrWdGuF4wqwWjyPsc8UaXQWxMVzDTwF872Ou4bV";

        $function = $this->input->post('function', true);
        if($function=="new"){
            $id = $this->input->post('id', true);

            $sql = "SELECT * FROM tb_register_member_66 WHERE register_datetime_record >='".$response['start_register_date']."' AND register_datetime_record<='".$response['end_register_date']."'";
            $no_member = $this->db->query($sql)->num_rows();

            $sql = "SELECT * FROM tb_register_member_66 INNER JOIN tb_prefix_name ON tb_register_member_66.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member_66.register_member_id = '$id'";
            $member = $this->db->query($sql)->row();

            $content = "** NEW **";
            $content .= "\n-----------------------------------";
            $content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
            $content .= "\nเบอร์โทร : ".$member->register_member_phone;
            $content .= "\nเวลาสมัคร :".$member->register_datetime_record;
            $content .= "\nลำดับที่สมัคร : ".$no_member."/".$response['regis_full'];
        }elseif($function=='upload'){
            $id = $this->input->post('id', true);
            $did = $this->input->post('document_id', true);
            
            $sql = "SELECT * FROM tb_register_member_66 INNER JOIN tb_prefix_name ON tb_register_member_66.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member_66.register_member_id = '$id'";
            $member = $this->db->query($sql)->row();

            $sql = "SELECT * FROM tb_document_66 INNER JOIN tb_document_type_66 ON tb_document_66.document_type_id = tb_document_type_66.document_type_id WHERE tb_document_66.document_id = '$did'";
            $document = $this->db->query($sql)->row();
            
            $content = "** UPLOAD **";
            $content .= "\n-----------------------------------";
            $content .= "\nเอกสาร : ".$document->document_type_name;
            $content .= "\nLink : ".site_url('assets/document_66/'.$document->document_file_name);
            $content .= "\n-----------------------------------";
            $content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
            $content .= "\nเบอร์โทร : ".$member->register_member_phone;
            $time = ($document->document_update !="")? $document->document_update:$document->document_upload;
            $content .= "\nเวลาอัพโหลด :".$time;
        }elseif($function=='training'){
            $regis_id = $this->input->post('id', true);
            $idcard = $this->input->post('idcard', true);
            //$register_id = $this->input->post('register_id', true);
            
            // $sql = "SELECT * FROM tb_training_member_66 WHERE 	training_register_id = '$register_id'";
            // $no_member = $this->db->query($sql)->num_rows();

            $sql = "SELECT * FROM tb_register_member_66 INNER JOIN tb_prefix_name ON tb_register_member_66.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member_66.register_member_idcard = '$idcard'";
            $member = $this->db->query($sql)->row();

            $training_name = "";
            foreach($regis_id as $sid){
                $sql = "SELECT * FROM tb_training_member_66 WHERE training_member_idcard = '$idcard' AND  training_register_id='$sid'";
                $training = $this->db->query($sql)->row();

                $sql = "SELECT * FROM tb_training_register WHERE training_register_id = '$sid'";
                $row = $this->db->query($sql)->row();

                $sql2 = "SELECT * FROM tb_training WHERE training_id = '$row->training_id'";
                $row2 = $this->db->query($sql2)->row();

                $sql = "SELECT * FROM tb_training_member_66 WHERE 	training_register_id = '$sid'";
                $no_member = $this->db->query($sql)->num_rows();

                $training_name.= $row2->training_name."\n";
                $training_name.= "ลำดับที่ ".$no_member."/30 (".$training->training_member_date_register.")\n";
            }

            $content = "** TRIANING **\n";
            $content .= $training_name;
            $content .= "-----------------------------------";
            $content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
            $content .= "\nเบอร์โทร : ".$member->register_member_phone;
        }elseif($function=='pay'){

            $training_id = $this->input->post('id', true);

            $sql = "SELECT * FROM tb_training_member_66 INNER JOIN tb_bank ON tb_training_member_66.bank_id = tb_bank.bank_id WHERE tb_training_member_66.training_member_id = '$training_id'";
            $training = $this->db->query($sql)->row();

            $sql = "SELECT * FROM tb_register_member_66 INNER JOIN tb_prefix_name ON tb_register_member_66.prefix_name_id = tb_prefix_name.prefix_name_id WHERE tb_register_member_66.register_member_idcard = '$training->training_member_idcard'";
            $member = $this->db->query($sql)->row();

            $content = "** PAYMENT **";
            $content .= "\n-----------------------------------";
            $content .= "\nผู้สมัคร : ".$member->prefix_name_full_th.$member->register_member_fname_th.' '.$member->register_member_lname_th;
            $content .= "\nเลขบัตร ปชช. : ".$training->training_member_idcard;
            $content .= "\nเบอร์โทร : ".$member->register_member_phone;
            $content .= "\n-----------------------------------";
            $content .= "\nธนาคาร : ".$training->bank_name;
            $content .= "\nสาขา : ".$training->training_member_bank;
            $content .= "\nวันที่ชำระ : ".$training->training_member_transfer_date;

            $date = new DateTime($training->training_member_transfer_time);
            $date = $date->format('H:i');
            $content .= "\nเวลาชำระ : ".$date.' น.';
            $content .= "\n-----------------------------------";
            $content .= "\nPayment Slip : ".site_url('assets/document_66/slip/'.$training->training_member_slip);
        }

        $sMessage = $content;

        $chOne = curl_init(); 
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt( $chOne, CURLOPT_POST, 1); 
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec( $chOne ); 
        //Result error 
        if(curl_error($chOne)){ 
            echo 'error:' . curl_error($chOne);
        }else{ 
            $result_ = json_decode($result, true); 
            echo "status : ".$result_['status']; echo "message : ". $result_['message'];
        } 
        curl_close( $chOne );
    }

    public function update()
    {       

        $this->load->library('form_validation');
        $frm = $this->form_validation;

        $frm->set_rules('curriculum_id', 'ชื่อหลักสูตร :', 'trim|required');
        $frm->set_rules('register_member_idcard', 'เลขบัตรประจำตัวประชาชน', 'trim|required');
        $frm->set_rules('card_type_id', 'เลขบัตรประจำตัวประชาชน', 'trim|required');
        $frm->set_rules('prefix_name_id', 'คำนำหน้านาม ', 'trim|required');
        $frm->set_rules('register_member_fname_th', 'ชื่อ(ไทย)', 'trim|required');
        $frm->set_rules('register_member_lname_th', 'นามสกุล(ไทย)', 'trim|required');
        $frm->set_rules('register_member_fname_en', 'ชื่อ (ภาษาอังกฤษ)', 'trim|required');
        $frm->set_rules('register_member_lname_en', 'นามสกุล (ภาษาอังกฤษ)', 'trim|required');
        $frm->set_rules('register_member_gender', 'เพศ', 'trim|required');
        $frm->set_rules('register_member_birthday', 'วันเกิด วัน-เดือน-ปี', 'trim|required');
        $frm->set_rules('register_member_origin', 'เชื้อชาติ ', 'trim|required');
        $frm->set_rules('register_member_nation', 'สัญชาติ ', 'trim|required');
        $frm->set_rules('religion_id', 'ศาสนา ', 'trim|required');
        //$frm->set_rules('register_member_talent', 'ความสามารถพิเศษ :', 'trim|required');
        $frm->set_rules('education_level_id', 'ระดับการศึกษา ', 'trim|required');
        $frm->set_rules('education_degree_id', 'วุฒิการศึกษา ', 'trim|required');
        //$frm->set_rules('register_member_graduate', 'ปีที่จบ', 'trim|required');
        $frm->set_rules('register_member_grade', 'เกรดเฉลี่ย', 'trim|required');
       // $frm->set_rules('register_member_old_school', 'โรงเรียน/สถานศึกษา', 'trim|required');
        //$frm->set_rules('register_member_sgraduate', 'สถานะเรียนจบ', 'trim|required');
        //$frm->set_rules('register_member_swork', 'สถานะทำงาน', 'trim|required');
        $frm->set_rules('register_member_add_no', 'ที่อยู่เลขที่', 'trim|required');
        /*$frm->set_rules('register_member_add_moo', 'Register_member_add_moo', 'trim|required');
        $frm->set_rules('register_member_alley', 'Register_member_alley', 'trim|required');
        $frm->set_rules('register_member_road', 'Register_member_road', 'trim|required');*/
        $frm->set_rules('PROVINCE_ID', 'จังหวัด ', 'trim|required');
        $frm->set_rules('AMPHUR_ID', 'อำเภอ ', 'trim|required');
        $frm->set_rules('DISTRICT_ID', 'ตำบล ', 'trim|required');
        $frm->set_rules('register_member_post', ' รหัสไปรษณีย์ ', 'trim|required');
       // $frm->set_rules('register_member_tel', 'Register_member_tel', 'trim|required');
        $frm->set_rules('register_member_phone', ' โทรศัพท์มือถือ', 'trim|required');
        $frm->set_rules('register_member_email', ' E-mail ', 'trim|valid_email|required');
        //$frm->set_rules('register_member_line', 'Register_member_line', 'trim|required');


        $frm->set_message('required', 'กรุณากรอก %s');

        if ($frm->run() == FALSE) {
          $message = '';
    
          $message .= form_error('curriculum_id');
          $message .= form_error('register_member_idcard');
          $message .= form_error('card_type_id');
          $message .= form_error('prefix_name_id');
          $message .= form_error('register_member_fname_th');
          $message .= form_error('register_member_lname_th');
          $message .= form_error('register_member_fname_en');
          $message .= form_error('register_member_lname_en');
          $message .= form_error('register_member_gender');
          $message .= form_error('register_member_birthday');
          $message .= form_error('register_member_origin');
          $message .= form_error('register_member_nation');
          $message .= form_error('religion_id');
          //$message .= form_error('register_member_talent');
          $message .= form_error('education_level_id');
          $message .= form_error('education_degree_id');
          $message .= form_error('education_major_id');
         // $message .= form_error('register_member_graduate');
          $message .= form_error('register_member_grade');
         // $message .= form_error('register_member_old_school');
          //$message .= form_error('register_member_sgraduate');
          //$message .= form_error('register_member_swork');
          $message .= form_error('register_member_add_no');
          //$message .= form_error('register_member_add_moo');
          //$message .= form_error('register_member_alley');
          //$message .= form_error('register_member_road');
          $message .= form_error('PROVINCE_ID');
          $message .= form_error('AMPHUR_ID');
          $message .= form_error('DISTRICT_ID');
          $message .= form_error('register_member_post');
          $message .= form_error('register_member_phone');
          $message .= form_error('register_member_email');

            $json = json_encode(array(
                'status' => FALSE,
                'message' => $message
            ));
            echo $json;
            exit();
        }

        $curriculum_id = $this->input->post('curriculum_id');
        $register_member_id = $this->input->post('register_member_id');
        $register_member_idcard = $this->input->post('register_member_idcard');
        $card_type_id = $this->input->post('card_type_id');
        $prefix_name_id = $this->input->post('prefix_name_id');
        $register_member_fname_th = $this->input->post('register_member_fname_th');
        $register_member_lname_th = $this->input->post('register_member_lname_th');
        $register_member_fname_en = $this->input->post('register_member_fname_en');
        $register_member_lname_en = $this->input->post('register_member_lname_en');
        $register_member_gender = $this->input->post('register_member_gender');
        $register_member_birthday = $this->input->post('register_member_birthday');
        $register_member_origin = $this->input->post('register_member_origin');
        $register_member_nation = $this->input->post('register_member_nation');
        $religion_id = $this->input->post('religion_id');
        $register_member_talent = $this->input->post('register_member_talent');
        $education_level_id = $this->input->post('education_level_id');
        $education_degree_id = $this->input->post('education_degree_id');
        $education_major_id = $this->input->post('education_major_id');
        $register_member_graduate = $this->input->post('register_member_graduate');
        $register_member_grade = $this->input->post('register_member_grade');
        $register_member_old_school = $this->input->post('register_member_old_school');
        $register_member_sgraduate = $this->input->post('register_member_sgraduate');
        $register_member_swork = $this->input->post('register_member_swork');
        $register_member_add_no = $this->input->post('register_member_add_no');
        $register_member_add_moo = $this->input->post('register_member_add_moo');
        $register_member_alley = $this->input->post('register_member_alley');
        $register_member_road = $this->input->post('register_member_road');
        $PROVINCE_ID = $this->input->post('PROVINCE_ID');
        $AMPHUR_ID = $this->input->post('AMPHUR_ID');
        $DISTRICT_ID = $this->input->post('DISTRICT_ID');
        $register_member_post = $this->input->post('register_member_post');
        $register_member_tel = $this->input->post('register_member_tel');
        $register_member_phone = $this->input->post('register_member_phone');
        $register_member_email = $this->input->post('register_member_email');
        $register_member_line = $this->input->post('register_member_line');
        
        $register_member_birthday =   date("Y-m-d", strtotime($register_member_birthday));
      
          $data = array(
            'curriculum_id' => $curriculum_id
            ,'register_member_idcard' => $register_member_idcard
            ,'card_type_id' => $card_type_id
            ,'prefix_name_id' => $prefix_name_id
            ,'register_member_fname_th' => $register_member_fname_th
            ,'register_member_lname_th' => $register_member_lname_th
            ,'register_member_fname_en' => $register_member_fname_en
            ,'register_member_lname_en' => $register_member_lname_en
            ,'register_member_gender' => $register_member_gender
            ,'register_member_birthday' => $register_member_birthday
            ,'register_member_origin' => $register_member_origin
            ,'register_member_nation' => $register_member_nation
            ,'religion_id' => $religion_id
            ,'register_member_talent' => $register_member_talent
            ,'education_level_id' => $education_level_id
            ,'education_degree_id' => $education_degree_id
            ,'register_member_graduate' => $register_member_graduate
            ,'register_member_grade' => $register_member_grade
            ,'register_member_old_school' => $register_member_old_school
            ,'register_member_sgraduate' => $register_member_sgraduate
            ,'register_member_swork' => $register_member_swork
            ,'register_member_add_no' => $register_member_add_no
            ,'register_member_add_moo' => $register_member_add_moo
            ,'register_member_alley' => $register_member_alley
            ,'register_member_road' => $register_member_road
            ,'PROVINCE_ID' => $PROVINCE_ID
            ,'AMPHUR_ID' => $AMPHUR_ID
            ,'DISTRICT_ID' => $DISTRICT_ID
            ,'register_member_post' => $register_member_post
            ,'register_member_tel' => $register_member_tel
            ,'register_member_phone' => $register_member_phone
            ,'register_member_email' => $register_member_email
            ,'register_member_line' => $register_member_line
            ,'register_status' => 2
            ,'register_datetime_record' => date('Y-m-d H:i:s')
         );

       //  echo $this->db->insert_string('tb_register_member', $data);
        //exit();
        if( $this->db->update('tb_register_member_66', $data, ['register_member_id' => $register_member_id])){

            $json = json_encode(array(
                'status' => TRUE,
                'message' => 'แก้ไขข้อมูลสำเร็จ'
            ));
            echo $json;
        }   
    }

    public function payment(){
        echo "<pre>";
        print_r($_POST);
        print_r($_FILES);
    }
}// END CLASS