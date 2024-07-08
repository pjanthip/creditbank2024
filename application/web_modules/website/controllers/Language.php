<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Language extends CI_Controller
{
    
    public function sub_lang()
    {

        $lang = $this->input->post('lang', true);

        $data_session = array(
            'lang_is' => $lang
        );
        $this->session->set_userdata($data_session);

        $json = json_encode(array(
            'lang' => $lang
        ));
        echo $json;
        exit();
    }

}// END CLASS
