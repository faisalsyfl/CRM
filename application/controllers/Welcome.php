<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['active'] = "Home";
		$data['enam'] = $this->Product->selectAll(6,6)->result();	
		$data['tiga'] = $this->Product->selectAll(3,8)->result();	
		$this->load->view('layouts/header',$data);
		$this->load->view('main/index',$data);
		$this->load->view('layouts/footer');
	}
}
