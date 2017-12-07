<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['active'] = "Shop";
		$data['products'] = $this->Product->selectAll(12)->result();
		$data['star'] = 0;
		$data['title'] = "Shop";
		$this->load->view('layouts/header',$data);
		$this->load->view('shop/index',$data);
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
	public function category($category=''){
		if($category=='1'){
			$data['title'] = 'Tablet & Gadget';
			$data['products'] = $this->Product->selectByCategory("Tablet")->result();
		}else if($category=='2'){
			$data['title'] = 'Camera & Handycam';
			$data['products'] = $this->Product->selectByCategory("Camera")->result();
		}else if($category=='3'){
			$data['title'] = 'Home Electronics';
			$data['products'] = $this->Product->selectByCategory("TV")->result();
		}else{
			// $data['products'] = $this->Product->selectAll(12)->result();
		}
		$data['active'] = "Shop";
		$data['star'] = 0;
		if(isset($_SESSION)){
		//Counting carts
		$data['star'] = $this->Account->getStar($_SESSION['id']);
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
			$this->load->view('layouts/header2',$data);
		}else{
			$this->load->view('layouts/header',$data);
		}
		$this->load->view('shop/index',$data);
		$this->load->view('layouts/footer');
	}
}
