<?php 
	class Order extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectByUserId($id){
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where('uid',$id);
			$this->db->order_by('id','asc');

			return $this->db->get();
		}

		function placeOrder($data){
			$data['date'] = date("Y-m-d");
			$this->db->insert('orders',$data);
		}

		function selectJoinProduct($uid){
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where('uid',$uid);
			$this->db->join('products','products.id = orders.pid');

			return $this->db->get();
		}

		function updateData($uid,$data){
			$this->db->set($data);
			$this->db->where('id',$uid);
			$this->db->update('orders');
		}
	}
 ?>