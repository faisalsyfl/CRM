<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$data['active'] = "Home";
		$data['unrep'] = $this->Post->unreplied()->result();
		$data['cunrep'] = count($data['unrep']);
		// var_dump($data['unrep']);
		$data['enam'] = $this->Product->selectAll(6,6)->result();	
		$data['tiga'] = $this->Product->selectAll(3,8)->result();	
		$this->load->view('layouts/adminheader',$data);
		$this->load->view('main/index');
		$this->load->view('layouts/footer');
	}

	public function member(){
		$data['active'] = "Users";

		$data['unrep'] = $this->Post->unreplied()->result();
		$data['cunrep'] = count($data['unrep']);
 		$data['member'] = $this->Account->selectAll()->result();
		$this->load->view('layouts/adminheader',$data);
		$this->load->view('Admin/all',$data);
		$this->load->view('layouts/footer');
	}

	public function trackingstatus($id){
		$data['active'] = "Users";
		$data['unrep'] = $this->Post->unreplied()->result();
		$data['cunrep'] = count($data['unrep']);
		$data['order'] = $this->Order->selectJoinProduct($id)->result();
		$data['ido'] = $this->Order->selectByUserId($id)->result_array();
		// var_dump($data['ido']);
		// print_r($data['ido']);
		$this->load->view('layouts/adminheader',$data);
		$this->load->view('Admin/trackingorder',$data);
		$this->load->view('layouts/footer');
	}

	public function visit($id){
		$data['active'] = "Users";
		$data['unrep'] = $this->Post->unreplied()->result();
		$data['cunrep'] = count($data['unrep']);
		$data['acc'] = $this->Account->selectById($id)->row();
		$data['posts'] = $this->Post->selectById($id)->result();
		$data['rep'] = $this->Reply->selectAll()->result();
		$data['coupon'] = $this->Coupon->selectById($id)->result();
		$this->load->view('layouts/adminheader',$data);
		$this->load->view('contact/index',$data);
		$this->load->view('layouts/footer');
	}

	public function replyPost(){
		$data['post_id'] = $this->input->post('pid');
		$data['content'] = $this->input->post('message');
		$id = $_POST['uid'];
		$data['date'] = date("Y-m-d H:i:s");
		$this->Reply->createReply($data);
		$update['replied'] = 1;
		$this->Post->updateReplied($data['post_id'],$update);

		// echo $id;
		redirect(site_url('Admin/visit/'.$id));
	}

	public function change($id,$oid,$uid){
		$data['status'] = $id;
		$this->Order->updateData($oid,$data);
		redirect(site_url('Admin/trackingstatus/'.$uid));
	}
}
