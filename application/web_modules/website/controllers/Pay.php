<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pay extends CI_Controller
{


    public function save_register_pay()
    {
       
        $this->load->library('form_validation');
        $frm = $this->form_validation;

        $frm->set_rules('bank_id', 'ธนาคารที่โอน :', 'trim|required');
        $frm->set_rules('training_member_bank', 'สาขาที่โอน', 'trim|required');
        $frm->set_rules('day', 'วันที่โอน', 'trim|required');
        $frm->set_rules('month', 'เดือน', 'trim|required');
        $frm->set_rules('year', 'ปี', 'trim|required');
        $frm->set_rules('time1', 'เวลาที่โอน', 'trim|required');
        $frm->set_rules('time2', 'นาที', 'trim|required');
       
        $frm->set_message('required', 'กรุณากรอก %s');

        if ($frm->run() == FALSE) {
          $message = '';
    
          $message .= form_error('bank_id');
          $message .= form_error('training_member_bank');
          $message .= form_error('day');
          $message .= form_error('month');
          $message .= form_error('year');
          $message .= form_error('time1');
          $message .= form_error('time2');



          $json = json_encode(array(
            'status' => false,
            'message' => $message
            ));
            echo $json;
        exit();
          

        }

        $bank_id = $this->input->post('bank_id');
        $training_member_bank = $this->input->post('training_member_bank');
        $day = $this->input->post('day');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $time1 = $this->input->post('time1');
        $time2 = $this->input->post('time2');
        $training_member_id = $this->input->post('training_member_id');
        $training_member_idcard = $this->input->post('training_member_idcard');


        $str_pay = strtotime($year."-".$month."-".$day);
        $training_member_transfer_date = date('Y-m-d',$str_pay);

        $str_time = strtotime($time1.":".$time2.":00");
        $training_member_transfer_time = date('H:i:s',$str_time);
       
        if (isset($_FILES["file"])) {
            
            $forder = "./assets/document/slip/";
            $ret = array();
            $error = $_FILES["file"]["error"];
            $extention_file = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $result_explode = explode('.', trim($extention_file));
            $document_file_name = $training_member_id.'-'.date('Ymdhis').round(microtime(true)).'.'.strtolower($result_explode[0]);
            $document_file_type = strtolower($result_explode[0]);
           
            if (!is_array($_FILES["file"]["name"])) { //single file
                move_uploaded_file($_FILES["file"]["tmp_name"], $forder . $document_file_name);
              

                $data  = [
                    'bank_id' => $bank_id,
                    'training_member_bank' => $training_member_bank,
                    'training_member_slip' => $document_file_name,
                    'training_member_transfer_date' => $training_member_transfer_date,
                    'training_member_transfer_time' => $training_member_transfer_time,
                    'training_member_spay' => 1,
                    'member_status' => '',
                ];

                $this->db->update('tb_training_member', $data, array('training_member_id' => $training_member_id ));

                $this->db->update('tb_register_member',array('register_status' => '5'), array('register_member_idcard' => $training_member_idcard) );
                
                $json = json_encode(array(
                    'status' => true,
                    'id' => $training_member_id,
                    'message' => ''
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

    public function save_register_pay_66()
    {
       
        $this->load->library('form_validation');
        $frm = $this->form_validation;

        $frm->set_rules('bank_id', 'ธนาคารที่โอน :', 'trim|required');
        $frm->set_rules('training_member_bank', 'สาขาที่โอน', 'trim|required');
        $frm->set_rules('day', 'วันที่โอน', 'trim|required');
        $frm->set_rules('month', 'เดือน', 'trim|required');
        $frm->set_rules('year', 'ปี', 'trim|required');
        $frm->set_rules('time1', 'เวลาที่โอน', 'trim|required');
        $frm->set_rules('time2', 'นาที', 'trim|required');
       
        $frm->set_message('required', 'กรุณากรอก %s');

        if ($frm->run() == FALSE) {
          $message = '';
    
          $message .= form_error('bank_id');
          $message .= form_error('training_member_bank');
          $message .= form_error('day');
          $message .= form_error('month');
          $message .= form_error('year');
          $message .= form_error('time1');
          $message .= form_error('time2');



          $json = json_encode(array(
            'status' => false,
            'message' => $message
            ));
            echo $json;
        exit();
          

        }

        $bank_id = $this->input->post('bank_id');
        $training_member_bank = $this->input->post('training_member_bank');
        $day = $this->input->post('day');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $time1 = $this->input->post('time1');
        $time2 = $this->input->post('time2');
        $training_member_id = $this->input->post('training_member_id');
        $training_member_idcard = $this->input->post('training_member_idcard');


        $str_pay = strtotime($year."-".$month."-".$day);
        $training_member_transfer_date = date('Y-m-d',$str_pay);

        $str_time = strtotime($time1.":".$time2.":00");
        $training_member_transfer_time = date('H:i:s',$str_time);
       
        if (isset($_FILES["file"])) {
            
            $forder = "./assets/document_66/slip/";
            $ret = array();
            $error = $_FILES["file"]["error"];
            $extention_file = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $result_explode = explode('.', trim($extention_file));
            $document_file_name = $training_member_id.'-'.date('Ymdhis').round(microtime(true)).'.'.strtolower($result_explode[0]);
            $document_file_type = strtolower($result_explode[0]);
           
            if (!is_array($_FILES["file"]["name"])) { //single file
                move_uploaded_file($_FILES["file"]["tmp_name"], $forder . $document_file_name);
              

                $data  = [
                    'bank_id' => $bank_id,
                    'training_member_bank' => $training_member_bank,
                    'training_member_slip' => $document_file_name,
                    'training_member_transfer_date' => $training_member_transfer_date,
                    'training_member_transfer_time' => $training_member_transfer_time,
                    'training_member_spay' => 1,
                    'member_status' => '',
                ];

                $this->db->update('tb_training_member_66', $data, array('training_member_id' => $training_member_id ));

                $this->db->update('tb_register_member_66',array('register_status' => '5'), array('register_member_idcard' => $training_member_idcard) );
                
                $json = json_encode(array(
                    'status' => true,
                    'id' => $training_member_id,
                    'message' => ''
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

    public function save_register_pay_66_v5()
    {
       
        $this->load->library('form_validation');
        $frm = $this->form_validation;

        $frm->set_rules('bank_id', 'ธนาคารที่โอน :', 'trim|required');
        $frm->set_rules('training_member_bank', 'สาขาที่โอน', 'trim|required');
        $frm->set_rules('day', 'วันที่โอน', 'trim|required');
        $frm->set_rules('month', 'เดือน', 'trim|required');
        $frm->set_rules('year', 'ปี', 'trim|required');
        $frm->set_rules('time1', 'เวลาที่โอน', 'trim|required');
        $frm->set_rules('time2', 'นาที', 'trim|required');
       
        $frm->set_message('required', 'กรุณากรอก %s');

        if ($frm->run() == FALSE) {
          $message = '';
    
          $message .= form_error('bank_id');
          $message .= form_error('training_member_bank');
          $message .= form_error('day');
          $message .= form_error('month');
          $message .= form_error('year');
          $message .= form_error('time1');
          $message .= form_error('time2');



          $json = json_encode(array(
            'status' => false,
            'message' => $message
            ));
            echo $json;
        exit();
          

        }

        $bank_id = $this->input->post('bank_id');
        $training_member_bank = $this->input->post('training_member_bank');
        $day = $this->input->post('day');
        $month = $this->input->post('month');
        $year = $this->input->post('year');
        $time1 = $this->input->post('time1');
        $time2 = $this->input->post('time2');
        $training_member_id = $this->input->post('training_member_id');
        $training_member_idcard = $this->input->post('training_member_idcard');


        $str_pay = strtotime($year."-".$month."-".$day);
        $training_member_transfer_date = date('Y-m-d',$str_pay);

        $str_time = strtotime($time1.":".$time2.":00");
        $training_member_transfer_time = date('H:i:s',$str_time);
       
        if (isset($_FILES["file"])) {
            
            $forder = "./assets/document_66/slip/";
            $ret = array();
            $error = $_FILES["file"]["error"];
            $extention_file = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
            $result_explode = explode('.', trim($extention_file));
            $document_file_name = $training_member_id.'-'.date('Ymdhis').round(microtime(true)).'.'.strtolower($result_explode[0]);
            $document_file_type = strtolower($result_explode[0]);
           
            if (!is_array($_FILES["file"]["name"])) { //single file
                move_uploaded_file($_FILES["file"]["tmp_name"], $forder . $document_file_name);
              

                $data  = [
                    'bank_id' => $bank_id,
                    'training_member_bank' => $training_member_bank,
                    'training_member_slip' => $document_file_name,
                    'training_member_transfer_date' => $training_member_transfer_date,
                    'training_member_transfer_time' => $training_member_transfer_time,
                    'training_member_spay' => 1,
                    'member_status' => '',
                ];

                $this->db->update('tb_training_member_66', $data, array('training_member_id' => $training_member_id ));
                
                $json = json_encode(array(
                    'status' => true,
                    'id' => $training_member_id,
                    'message' => ''
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


}// END CLASS
