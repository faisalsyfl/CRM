<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {


	public function __construct(){
		parent::__construct();

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

	public function index(){
		$data['active'] = "Home";
		$get = $this->Account->checkLL($_SESSION['id']);
		
		//------------
		//Counting carts
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
		//--------------
		if($get){
			$temp = $this->Coupon->generate();
			$data['free'] = implode("",$temp);
			$insert['user_id'] = $_SESSION['id'];
			$insert['code'] = $data['free'];
			$insert['cash'] = 100000;
			$now['point'] = 0;
			$now['stats'] = 0;
			$this->Coupon->insertCoupon($insert);
		}
		$data['hidden'] = "";
		$data['point'] = $this->Account->getPoint($_SESSION['id'])->row()->point;
		$now['lastlogin'] = date("Y-m-d H:i:s");
		$data['enam'] = $this->Product->selectAll(6,6)->result();	
		$data['tiga'] = $this->Product->selectAll(3,8)->result();	
		$this->Account->updateLL($_SESSION['id'],$now);
		$this->load->view('layouts/header2',$data);
		$this->load->view('main/index',$data);
		$this->load->view('layouts/footer',$data);
	}



	public function loggingIn(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first = $this->Account->checkAcc($username,md5($password))->row();

		$numRows = count($first);
		if($numRows > 0){
			$array = array(
				'id' => $first->id,
				'username' => $first->email,
				'first' => $first->first,
				'loggedin' => "TRUE"
			);
			
			$this->session->set_userdata($array);
			if($array['username'] == "admin"){
				redirect(site_url('Admin/'));
				// 
			}else{
				redirect(site_url('Users/'));
			}
		}else{
			//failed
				redirect(site_url('/'));			
		}

	}

	public function loggingOut(){
		$this->session->sess_destroy();
		redirect(site_url('/'));
	}

	public function shop()
	{
		$data['active'] = "Shop";
		$data['star'] = $this->Account->getStar($_SESSION['id']);
		//------------
		//Counting carts
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
		//--------------
		
		$data['products'] = $this->Product->selectAll(12)->result();
		$this->load->view('layouts/header2',$data);
		$this->load->view('shop/index',$data);
		$this->load->view('layouts/footer');
	}

	public function addToCart($id){
		if(isset($_SESSION['loggedin'])){
			$data['user_id'] = $_SESSION['id'];
			$data['product_id'] = $id;
			$this->Cart->addCart($data);
			$ctg = $this->Product->selectById($id)->row()->category;
			if($ctg=='Tablet'){
				redirect(site_url('Shop/category/1'));
			}else if($ctg=='Camera'){
				redirect(site_url('Shop/category/2'));
			}else if($ctg=='TV'){
				redirect(site_url('Shop/category/3'));
			}			
		}else{
			redirect(site_url('/'));
		}
	}

	public function cart($cpn=0){
		$data['active'] = "Shop";
		$data['star'] = $this->Account->getStar($_SESSION['id']);
		//------------
		//Counting carts
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
		//--------------
		
		if($cpn != 0){
			$data['coupon'] = 100000;
		}
		$data['products'] = $this->Product->selectAll(4)->result();
		$data['productsb'] = $this->Product->selectAll(2)->result();

		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$i = 0;
		foreach($carts as $row){
			$data['idc'][$i] = $row->id;
			$data['cart'][$i] = $this->Product->selectById($row->product_id)->result_array();
			$i++;
		}

		$this->load->view('layouts/header2',$data);
		$this->load->view('shop/cart',$data);
		$this->load->view('layouts/footer');
	}

	public function payOut(){
		if(isset($_POST['apply_coupon'])){
			$this->Coupon->deleteCoupon($_POST['coupon_code']);
			redirect(site_url('Users/cart/1'));
		}else{
			redirect(site_url('Users/checkout'));


			// redirect(site_url('Users/cart'));
		}

	}

	public function removeitem($id){
		$this->Cart->getCID($id,$_SESSION['id']);
		redirect(site_url('Users/cart'));
		// redirect
	}

	public function register(){
		$reg['id'] = "NULL";
		$reg['email'] = $this->input->post('username');
		$reg['first'] = $this->input->post('first');
		$reg['last'] = $this->input->post('last');
		$reg['birthday'] = $this->input->post('birthday');
		$reg['password'] = md5($this->input->post('password'));
		$reg['lastlogin'] = strtotime('-1 day', $today);

		$this->Account->insert($reg);
		redirect(site_url('/'));
	}

	public function checkout(){
		if(isset($_POST['apply_coupon'])){
			$this->Coupon->deleteCoupon($_POST['coupon_code']);
			redirect(site_url('Users/cart/1'));
		}else{
			$data['star'] = $this->Account->getStar($_SESSION['id']);

			//Counting carts
			$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
			$data['count'] = count($carts);
			$data['pay'] = $this->getCartTotal();
			$data['billing'] = $this->Address->selectById($_SESSION['id'])->row();
			$data['user'] = $this->Account->selectById($_SESSION['id'])->row();
			$data['products'] = $this->Product->selectAll(4)->result();


			$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
			$i = 0;
			foreach($carts as $row){
				$data['idc'][$i] = $row->id;
				$data['cart'][$i] = $this->Product->selectById($row->product_id)->result_array();
				$i++;
			}
			
			$data['active'] = "Shop";
			$data['ctotal'] = $this->input->post('hidtotal');
			// var_dump($data['ctotal']);
			$this->load->view('layouts/header2',$data);
			$this->load->view('shop/checkout',$data);
			$this->load->view('layouts/footer');
		}
	}

	public function newOrder(){
		$cart = $this->Cart->selectByUserId($_SESSION['id'])->result();
		foreach($cart as $row){
			$this->Order->placeOrder(['uid' => $_SESSION['id'], 'pid' => $row->product_id]);
		}

		if($this->Account->getPoint($_SESSION['id'])->row()->point <100){
			$nums['point'] = (count($cart)*10) + $this->Account->getPoint($_SESSION['id'])->row()->point;
			$this->Account->updateLL($_SESSION['id'],$nums);
		}
		$this->Cart->deleteById($_SESSION['id']);
		redirect(site_url('Users/tracking'));
	}

	public function tracking(){
		$data['active'] = "Shop";
		$data['star'] = $this->Account->getStar($_SESSION['id']);
		//------------
		//Counting carts
		$carts = $this->Cart->selectByUserId($_SESSION['id'])->result();
		$data['count'] = count($carts);
		$data['pay'] = $this->getCartTotal();
		//--------------
		
		$data['products'] = $this->Product->selectAll(4)->result();
		$data['orders'] = $this->Order->selectJoinProduct($_SESSION['id'])->result();
		$data['ido'] = $this->Order->selectByUserId($_SESSION['id'])->result_array();
		// print_r($to);
		$this->load->view('layouts/header2',$data);
		$this->load->view('shop/tracking',$data);
		$this->load->view('layouts/footer');
	}


}
