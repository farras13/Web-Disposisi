<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_basic', 'm');
	}
	

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
	}
	
	public function masuk()
	{
		$this->load->view('template/header');
		$this->load->view('masuk/index');
		$this->load->view('template/footer');
	}

	public function ins_masuk()
	{
		
	}

	public function upd_masuk()
	{
		
	}

	public function del_masuk()
	{
		
	}

}

/* End of file Home.php */
