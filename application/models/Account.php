<?php 
	class Account extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectAll(){
			$this->db->select('*');
			$this->db->from('users');

			return $this->db->get();
		}
		function selectById($id){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('id',$id);

			return $this->db->get();
		}

		function checkAcc($user,$pass){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('email',$user);
			$this->db->where('password',$pass);

			return $this->db->get();
		}

		function updateLL($id,$data){
			$this->db->set($data);
			$this->db->where('id',$id);
			$this->db->update('users');
		}

		function checkLL($id){
			$this->db->select('lastlogin');
			$this->db->from('users');
			$this->db->where('id',$id);

			$ll = $this->db->get()->row();
			$temp = explode("-",$ll->lastlogin);
			$temp2 = explode(" ",$temp[2]);
			if($temp2[0] != date("d")){
				return TRUE;
			}else{
				return FALSE;
			}

		}
		public function insert($data){
			$this->db->insert('users',$data);
		}

		public function getPoint($id){
			$this->db->select('point');
			$this->db->from('users');
			$this->db->where('id',$id);

			return $this->db->get();
		}
		public function getStats($id){
			$this->db->select('stats');
			$this->db->from('users');
			$this->db->where('id',$id);

			return $this->db->get()->row()->stats;	
		}
		public function getStar($id){
			$this->db->select('stars');
			$this->db->from('users');
			$this->db->where('id',$id);

			return $this->db->get()->row()->stars;	
		}

	}
 ?>