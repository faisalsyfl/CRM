<?php 
	class Coupon extends CI_Model{

		function __construct(){
			parent::__construct();
		}
		
		function selectById($id){
			$this->db->select('*');
			$this->db->from('coupons');
			$this->db->where('user_id',$id);
			$this->db->order_by('id','desc');

			return $this->db->get();
		}

		function selectAll(){
			$this->db->select('*');
			$this->db->from('coupons');

			return $this->db->get();
		}

		function insertCoupon($data){
			$data['id'] = "NULL";
			$this->db->insert('coupons',$data);
		}
		function deleteCoupon($data){
			$this->db->where('code',$data);
			$this->db->delete('coupons');
		}
		function generate(){
			$data = [
			'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9',
			];
			$coupon = array();
			for($i=0;$i<6;$i++){
				$temp = random_int(0,35);
				$coupon[$i] = $data[$temp];
			}

			return $coupon;

		}

	}
 ?>