<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['active'] = "Dashboard";
		//----------------
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();		
		//----------------
		$id = $_SESSION['id'];
		$data['acc'] = $this->Account->selectById($id)->row();
		$data['posts'] = $this->Post->selectById($id)->result();
		$data['rep'] = $this->Reply->selectAll()->result();

		$data['point'] = $this->Account->getPoint($_SESSION['id'])->row()->point;
		$data['upoint'] = 100 - $data['point'];
		if($data['upoint'] == 0 && $this->Account->getStats($_SESSION['id']) == 0){
			$data['claim'] = TRUE;
			$bungkus['stats'] = 1;
			$this->Account->updateLL($_SESSION['id'],$bungkus);
			//-------------
			$temp = $this->Coupon->generate();
			$data['bonuz'] = implode("",$temp);
			$insert['user_id'] = $_SESSION['id'];
			$insert['code'] = $data['bonuz'];
			$insert['cash'] = 100000;
			$this->Coupon->insertCoupon($insert);
		}else{
			$data['claim'] = FALSE;
		}

		$data['coupon'] = $this->Coupon->selectById($id)->result();
		$this->load->view('layouts/header2',$data);
		$this->load->view('contact/index',$data);
		$this->load->view('layouts/footer',$data);
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

	public function post(){
		$data['user_id'] = $_SESSION['id'];
		$data['title'] = $this->input->post('category');
		if($data['title'] == "success"){
			$current = $this->Account->selectById($_SESSION['id'])->row()->stars;
			if($current < 5){
				$bngks['stars'] = $current + 1;
				echo $bngks['stars'];
				$this->Account->updateLL($_SESSION['id'],$bngks);
			}
		}
		$data['isi'] = $this->input->post('content');
		$this->Post->insertPost($data);

		redirect(site_url('Contact/'));
	}

	public function deletePost($id){
		$this->Post->deletePost($id);

		redirect(site_url('Contact/'));
	}
}
