<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Database extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('mydate_helper');
	}

	public function creare_table()
	{
      
	}
}
