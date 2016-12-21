
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roomtype_modul extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->module = 'roomtype_modul';
		$this->table  = 'roomtype';
	}
	 function loaddata()
		{
			$queryroom= $this->db->select('*')
										->from('roomtype')
										->where('status=',1)
								 		->order_by('tid','DESC')
										->get()->result();
				return $queryroom;			
		}
	function save($data, $id)
		{	
			$result = '';	
				if($id){
					$where = array('tid'=>$id);		
					// print_r($where);exit;		
					$result		= 'Update success !';
					$this->session->set_flashdata('message', $result);
					$result = $this->db->update($this->table,$data,$where);
				}else{
					$result		= 'Create success !';
					$this->session->set_flashdata('message', $result);
					$result = $this->db->insert($this->table,$data);
				}
			return $result;
		}
	function delete($id)
		{
			$result = '';
			$sql = "UPDATE roomtype SET status = 0 WHERE tid = $id";
			$this->db->query($sql);
			$result		= 'Delete success !';
			$this->session->set_flashdata('message', $result);

			return $result;
		}
	function get_single_row($id)
		{
			$get_s_row= $this->db->select('*')
										->from('roomtype')
										->where('status=',1)
										->where('tid=',$id)
										->get()->result();
				return $get_s_row;
		}
}
?>
