<?php 
	class Cart extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectByUserId($id){
			$this->db->select('*');
			$this->db->from('cart');
			$this->db->where('user_id',$id);
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('cart');

			return $this->db->get();
		}

		function addCart($data){
			$data['id'] = "NULL";
			$this->db->insert('cart',$data);
		}

		function deleteById($id){
			$this->db->where('user_id',$id);
			$this->db->delete('cart');
		}

		function getCID($PID,$UID){
			$this->db->where('user_id',$UID);
			$this->db->where('product_id',$PID);
			$this->db->delete('cart');
		}


		

	}
 ?>