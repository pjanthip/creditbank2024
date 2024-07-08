<?php

if ( ! function_exists('check_lang'))
{
    function check_lang()
    {
        $CI =& get_instance();
        if($CI->input->get('lang') AND ($CI->input->get('lang')=='th' || $CI->input->get('lang')=='en' || $CI->input->get('lang')=='cn')){
            $CI->session->set_userdata('language',$CI->input->get('lang'));
        }

        if(!$CI->session->userdata('language')){
            $CI->session->set_userdata('language','th');
        }else{
            switch ($CI->session->userdata('language')) {
                case 'th':
                    $CI->lang->load('pages', 'thai');
                    break;
                case 'en':
                    $CI->lang->load('pages', 'english');
                    break;
                case 'cn':
                    $CI->lang->load('pages', 'china');
                    break;
                
            }
        }
    }   
}

function language($locate,$page){
    if($locate == "TH"){

    }else{

    }
}

?>