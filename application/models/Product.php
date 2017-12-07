<?php 
	class Product extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectById($id){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->where('id',$id);

			return $this->db->get();
		}

		function selectAll($limit,$off=0){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->order_by('id','desc');
			$this->db->limit($limit,$off);
			return $this->db->get();
		}

		function selectByCategory($cg){
			$this->db->where('category',$cg);
			$this->db->select('*');
			$this->db->from('products');
			$this->db->limit(12);

			return $this->db->get();
		}

	}
 ?>