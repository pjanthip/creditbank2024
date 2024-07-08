<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Checkin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
        $this->load->model('GetDataTablemodel', 'GetDataTablemodel');
                if($this->session->userdata('is_teacher_logged_in')==FALSE){
                        redirect('tis/login');
                }
	}

	public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='เช็คชื่อผู้เรียน | CRRU-CB(TIS)';
        $reponse['keywords']='';
        $reponse['description']='';
        $reponse['author']='';
        $reponse['page']='';
        return $reponse;
        
      }

	public function index()
	{
        $response = $this->main_variable();
        $response['title_page']='เช็คชื่อผู้เรียน';
        $response['icon_page']='<i class="fa-solid fa-user-check py-2"></i>';
        $response['page']='checkin';
                                    
        $response['breadcrumb']=array(
                'เช็คชื่อผู้เรียน' => array(site_url('tis/checkin'),'active')
            );

        //$response['tb_training'] = $this->GetDataTablemodel->form_dropdown_tb_training('C00001',2565);
        
        $this->load->view('tis/theme/header', $response);
        $this->load->view('tis/checkin/checkin_view', $response);
        $this->load->view('tis/theme/footer', $response);
	}

    public function process()
	{
                $response = $this->main_variable();   
                $response['title_page']='รายชื่อผู้เรียน';
                $response['icon_page']='<i class="fas fa-toggle-on"></i>';
                $response['page']='checkin_learner';
                $response['sub-page']='';

                if($this->input->post('check_date') != ""){
                        $response['current_date'] = $this->input->post('check_date',true);
                }else{
                        $response['current_date'] = date("Y-m-d");
                }

                $sql = "SELECT * FROM tb_checkin WHERE
                        tb_checkin.course_id ='1' AND
                        tb_checkin.group_id ='1' AND
                        tb_checkin.checkin_date ='".$response['current_date']."'";
                $rows = $this->db->query($sql);

                if($rows->num_rows()>0){
                        $response['learner']=array();
                        $response['form']="edit";
                        $checkin = $rows->row();
                        $sql = "SELECT
                                tb_checkin_learner.checkin_learner_id,
                                tb_checkin_learner.checkin_id,
                                tb_checkin_learner.learner_code,
                                tb_checkin_learner.checkin_learner1,
                                tb_checkin_learner.checkin_learner1_note,
                                tb_checkin_learner.checkin_learner2,
                                tb_checkin_learner.checkin_learner2_note,
                                tb_checkin_learner.checkin_learner_recode,
                                tb_checkin_learner.checkin_learner_status,
                                tb_learner.learner_fname_th,
                                tb_learner.learner_lname_th,
                                tb_prefix_name.prefix_name_full_th
                                FROM
                                tb_checkin_learner
                                INNER JOIN tb_learner ON tb_checkin_learner.learner_code = tb_learner.learner_code
                                INNER JOIN tb_prefix_name ON tb_learner.prefix_name_id = tb_prefix_name.prefix_name_id
                                WHERE
                                tb_checkin_learner.checkin_id = '".$checkin->checkin_id."'
                                ORDER BY
                                tb_checkin_learner.learner_code ASC";
                        $response['learner'] = $this->db->query($sql)->result();
                }else{
                        $response['form']="new";
                        $sql = "SELECT
                        tb_learner.learner_code,
                        tb_prefix_name.prefix_name_full_th,
                        tb_learner.learner_fname_th,
                        tb_learner.learner_lname_th
                        FROM
                        tb_learner
                        INNER JOIN tb_learner_group ON tb_learner_group.learner_id = tb_learner.learner_code
                        INNER JOIN tb_prefix_name ON tb_learner.prefix_name_id = tb_prefix_name.prefix_name_id
                        WHERE
                        tb_learner_group.group_id = 1
                        ORDER BY
                        tb_learner.learner_code ASC
                        ";
                        $response['learner'] = $this->db->query($sql)->result();
                }

                
                $this->load->view('tis/theme/header', $response);
                $this->load->view('tis/checkin/process', $response);
                $this->load->view('tis/theme/footer', $response);
	}

        function save(){
                if($this->input->post('typefrm')=="new"){
                        $data = array(
                                'checkin_id' => NULL,
                                'course_id' => 1,
                                'group_id' => 1,
                                'checkin_date' => $this->input->post('fulldate',true),
                                'teacher_id' => $this->session->userdata('teacher_id'),
                                'checkin_record' => date('Y-m-d H:i:s'),
                                'checkin_status' => 1
                        );
                        if($this->db->insert('tb_checkin', $data)){
                                $checkin_id = $this->db->insert_id();
                                foreach($this->input->post('learner_code',true) as $option_num => $learner_code){
                                        $checkin_learner1_note = ($this->input->post('1-learner_'.$learner_code,true) == "2")? $this->input->post('1-note_'.$learner_code,true):NULL;
                                        $checkin_learner2_note = ($this->input->post('2-learner_'.$learner_code,true) == "2")? $this->input->post('2-note_'.$learner_code,true):NULL;
                                        $checkin_learner = array(
                                                'checkin_learner_id' => NULL,
                                                'checkin_id' => $checkin_id,
                                                'learner_code' => $learner_code,
                                                'checkin_learner1' => $this->input->post('1-learner_'.$learner_code,true),
                                                'checkin_learner1_note' => $checkin_learner1_note,
                                                'checkin_learner2' => $this->input->post('2-learner_'.$learner_code,true),
                                                'checkin_learner2_note' => $checkin_learner2_note,
                                                'checkin_learner_recode' => date('Y-m-d H:i:s'),
                                                'checkin_learner_status' => 1
                                        );
                                        $this->db->insert('tb_checkin_learner', $checkin_learner);
                                }
                                $json = json_encode(array(
                                        'status' => TRUE
                                    ));
                                    echo $json;
                        }
                }else{
                        foreach($this->input->post('learner_code',true) as $option_num => $learner_code){
                                $id = $this->input->post('id-'.$learner_code,true);
                                $checkin_learner1_note = ($this->input->post('1-learner_'.$learner_code,true) == "2")? $this->input->post('1-note_'.$learner_code,true):NULL;
                                $checkin_learner2_note = ($this->input->post('2-learner_'.$learner_code,true) == "2")? $this->input->post('2-note_'.$learner_code,true):NULL;
                                $data = array(
                                        'checkin_learner1' => $this->input->post('1-learner_'.$learner_code,true),
                                        'checkin_learner1_note' => $checkin_learner1_note,
                                        'checkin_learner2' => $this->input->post('2-learner_'.$learner_code,true),
                                        'checkin_learner2_note' => $checkin_learner2_note,
                                        'checkin_learner_recode' => date('Y-m-d H:i:s')
                                );
                                $this->db->update('tb_checkin_learner', $data, ['checkin_learner_id' => $id]);
                        }

                        $json = json_encode(array(
                                'status' => TRUE
                            ));
                            echo $json;
                }
        }
}
