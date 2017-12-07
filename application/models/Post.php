<?php 
	class Post extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectById($id){
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->where('user_id',$id);
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('posts');

			return $this->db->get();
		}

		function insertPost($data){
			$data['id'] = "NULL";
			$this->db->insert('posts',$data);
		}

		function deletePost($id){
			$this->db->where('id',$id);
			$this->db->delete('posts');
		}

		function updateReplied($id,$data){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('posts');
		}
		function unreplied(){
			$rep = 0;
			$this->db->select('*');
			$this->db->from('posts');
			$this->db->where('replied',$rep);
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

	}
 ?>