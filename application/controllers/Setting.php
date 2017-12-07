<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$id = $_SESSION['id'];
		$data['acc'] = $this->Account->selectById($id)->row();
		$data['active'] = "Setting";
		//Counting carts
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
		$this->load->view('layouts/header2',$data);
		$this->load->view('setting/myacc',$data);
		$this->load->view('layouts/footer');
	}

	public function getCartTotal(){
		$pay = 0;
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		foreach($carts as $row){
			$row2 = $this->Product->selectById($row->product_id)->row();
			$pay += $row2->price;
		}

		return $pay;
	}
	public function address(){
		$id = $_SESSION['id'];
		$data['acc'] = $this->Account->selectById($id)->row();
		$data['active'] = "Setting";
		//Counting carts
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
		$data['billing'] = $this->Address->selectById($id)->row();
		// var_dump($data['billing']);
		$this->load->view('layouts/header2',$data);
		$this->load->view('setting/address',$data);
		$this->load->view('layouts/footer');
	}

	public function save(){
		$updated['address'] = $this->input->post('address');
		$updated['city'] = $this->input->post('city');
		$updated['postcode'] = $this->input->post('postcode');
		$updated['phone'] = $this->input->post('phone');
		$updated['uid'] = $_SESSION['id'];
		$cek = $this->Address->update($_SESSION['id'],$updated);
		if(!$cek){
			$this->Address->insert($updated);
		}
		redirect(site_url('Setting/address'));
	}
}
