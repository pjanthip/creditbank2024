<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Covid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function main_variable()
    {
        define("CANVAS", base_url() . "assets/theme/canvas/");
        define("ABLE", base_url() . "assets/theme/able/dist/");

        $reponse['title'] = '';
        $reponse['keywords'] = '';
        $reponse['description'] = '';
        $reponse['author'] = '';
        $reponse['page'] = '';
        return $reponse;
    }

    // load view function
    public function covid_test_form_view()
    {
        // if get participant_id
        if (isset($_GET['participant_id'])) {
            // create response variable
            $response = $this->main_variable();
            $response['title_page'] = 'แบบฟอร์มแจ้งหลักฐานการตรวจเชื้อโควิด-19';
            $response['icon_page'] = '';
            $response['page'] = '';

            // create data variable to use when submit form
            $data['participant_id'] = $_GET['participant_id'];

            // load view
            $this->load->view('sis/theme/header', $response);
            $this->load->view('sis/covid/covid_test_form', $data);
            $this->load->view('sis/theme/footer', $response);
        }
    }

    // form submit handle function
    public function on_form_submit()
    {
        $this->load->helper(array('form', 'url', 'file'));

        $this->load->library(array('form_validation', 'upload'));

        // validate rule covid_test_date_time
        $this->form_validation->set_rules(
            'covid_test_date_time',
            'Date/Time',
            'required',
            array(
                'required' => 'กรุณากรอกข้อมูล วัน/เวลา'
            )
        );

        // validate rule covid_test_participant_tel
        $this->form_validation->set_rules(
            'covid_test_participant_tel',
            'Participant Tel',
            'trim|required|regex_match[/^[0-9]{10}$/]',
            array(
                'required' => 'กรุณากรอกข้อมูลเบอร์โทรศัพท์',
                'regex_match' => 'กรุณาป้อนข้อมูลเบอร์โทรศัพท์ให้ถูกต้อง'
            )
        );

        // if test method 3 is cheked
        if ($this->input->post('covid_test_method') === "other") {
            // validate rule other detail
            $this->form_validation->set_rules(
                'other_method',
                'other method detail',
                'trim|required',
                array(
                    'required' => 'กรุณากรอกรายละเอียด'
                )
            );
        }

        // validate rule image upload by use callback function file_check
        $this->form_validation->set_rules('covid_test_img', '', 'callback_file_check');

        // if validate pass
        if ($this->form_validation->run() == TRUE) {
            // create and set value to variable for insert to db
            $participant_id = $this->input->post('covid_test_participant_id');
            $participant_datetime = $this->input->post('covid_test_date_time');
            $participant_tel = $this->input->post('covid_test_participant_tel');

            // check test method
            // if test method is "other" then set the value of covid_test_method to other input text
            if ($this->input->post('covid_test_method') === "other") {
                $covid_test_method = $this->input->post('other_method');
            } else {
                $covid_test_method = $this->input->post('covid_test_method');
            }

            $covid_test_result = $this->input->post('covid_test_result');

            $name = $_FILES["covid_test_img"]["name"];
            $extention = explode(".", $name);

            $covid_test_img_result = "covid_img_result_" . $participant_id . "_" . time() . "." . $extention[1];

            $sql = "INSERT INTO tb_covid_test(covid_test_participant_id, covid_test_participant_tel, covid_test_date_time, covid_test_method, covid_test_result, covid_test_img)
            VALUES('$participant_id', '$participant_tel', '$participant_datetime', '$covid_test_method', '$covid_test_result' ,'$covid_test_img_result')";

            $config['upload_path'] = './assets/images/covid_test_images/';
            $config['file_name'] = $covid_test_img_result;
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 5120;

            $this->upload->initialize($config);

            // if success on insert new data and upload images
            if ($this->upload->do_upload('covid_test_img') && $this->db->query($sql)) {
                // redirect page
                redirect(site_url() . 'sis/covid/covid_test_form_view');
            } else {
                // if there is any errors
                $errors = array(
                    'Upload Error : ' => $this->upload->display_errors(),
                    'Query Error : ' => $this->db->error()
                );
                echo $errors;
            }
        }
        // if validate fail
        else {
            // create response variable
            $response = $this->main_variable();
            $response['title_page'] = 'แบบฟอร์มแจ้งหลักฐานการตรวจเชื้อโควิด-19';
            $response['icon_page'] = '<i class="fas fa-font"></i></i>';
            $response['page'] = 'grade';

            // create data variable to use when submit form
            $data['participant_id'] = $this->input->post('covid_test_participant_id');

            // load view
            $this->load->view('sis/theme/header', $response);
            $this->load->view('sis/covid/covid_test_form', $data);
            $this->load->view('sis/theme/footer', $response);
        }
    }

    public function file_check($str)
    {
        $allowed_mime_type_arr = array('image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png');
        $mime = get_mime_by_extension($_FILES['covid_test_img']['name']);
        if (isset($_FILES['covid_test_img']['name']) && $_FILES['covid_test_img']['name'] != "") {
            if (in_array($mime, $allowed_mime_type_arr)) {
                return true;
            } else {
                $this->form_validation->set_message('file_check', 'กรุณาอัพโหลดเฉพาะไฟล์รูปภาพ');
                return false;
            }
        } else {
            $this->form_validation->set_message('file_check', 'กรุณาแนบไฟล์ภาพหลักฐานการตรวจเชื้อ');
            return false;
        }
    }
}
