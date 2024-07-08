<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Shorturl extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
	}

	public function main_variable(){
        define("CANVAS",base_url()."assets/theme/canvas/");
        define("ABLE",base_url()."assets/theme/able/dist/");

        $reponse['title']='Redirect URL | CRRU-CBMIS';
        $reponse['keywords']='';
        $reponse['description']='';
        $reponse['author']='';
        $reponse['page']='';
        return $reponse;
        
      }

	public function index(){
	}

        public function get_link($id){
                $reponse = $this->main_variable();
                $reponse['code'] = $id;


                $sql = "SELECT * FROM tb_shorturl WHERE url_link = '$id' ";
                $reponse['url'] = $this->db->query($sql)->row();
                if($reponse['url']){
                        $this->load->view('website/shorturl/redirect_view', $reponse);
                }else{
                        $this->load->view('website/shorturl/redirect_none', $reponse);
                }
        }
}
