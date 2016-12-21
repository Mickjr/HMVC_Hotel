
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_modul extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->module = 'booking_modul';
	}
	 function loaddata()
		{
			$sql 			= "SELECT * from v_booking WHERE `status`=1";
			$querybooking 	= 	$this->db->query($sql)->result();

			return $querybooking;

			//return $queryslide->result();
			
		}
	// function get_pro_bybrand($id)
	// 	{
	// 		$sql 			= "SELECT * from tbl_products where b_id='".$id."' AND status=1";
	// 		$brand_product =$this->db->query($sql)->result();

	// 		return $brand_product;
	// 	}
	function get_type()
		{
			$roomquery = $this->db->select('*')
									 ->from('roomtype')
									 ->where('status=',1)
									 // ->order by('id','DESC')
									 ->get()->result();
			return $roomquery;
		}
	// function getproduct()
	// 	{
	// 		$productquery = $this->db->select('*')
	// 								 ->from('tbl_products')
	// 								 ->where('status=',1)
	// 								 // ->order by('id','DESC')
	// 								 ->get()->result();
	// 		return $productquery;
	// 	}
}
?>
