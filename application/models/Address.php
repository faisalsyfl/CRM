<?php 
	class Address extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectAll(){
			$this->db->select('*');
			$this->db->from('address');

			return $this->db->get();
		}
		function selectById($id){
			$this->db->select('*');
			$this->db->from('address');
			$this->db->where('uid',$id);

			return $this->db->get();
		}

		function update($id,$data){
			$this->db->set($data);
			$this->db->where('uid',$id);
			$this->db->update('address');
		}
		function insert($data){
			$this->db->insert('address',$data);
		}
	}
 ?>