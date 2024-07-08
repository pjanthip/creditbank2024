<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Authenticate 
{
 
	private $ci;
	public function __construct()
	{
		// parent::__construct();
		$this->ci = &get_instance();
	}
    
    public function check_authen(){
       
        $class_check_login = array('home');
        if (in_array($this->ci->router->class, $class_check_login)) {
            
            $this->check_authen_systems();
        }
    }
    
    public function check_authen_systems(){
    
        if(empty($this->ci->session->user_id)){
            
            redirect('admin/login');    
            exit();
        }else{
            
            return;
        }
    }
}