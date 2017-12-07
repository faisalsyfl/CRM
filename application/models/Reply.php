<?php 
	class Reply extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectById($id){
			$this->db->select('*');
			$this->db->from('replies');
			$this->db->where('post_id',$id);
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('replies');

			return $this->db->get();
		}
		function createReply($data){
			$data['id'] = "NULL";
			$this->db->insert('replies',$data);
		}


	}
 ?>