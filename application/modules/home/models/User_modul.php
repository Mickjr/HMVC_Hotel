
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_modul extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->module = 'user_modul';
		$this->table  = 'tbl_user';
	}
	 function loaddata()
		{
			// $sql 			= "SELECT * from tbl_user WHERE `status`=1";
			// $queryusers 	= 	$this->db->query($sql)->result();
			$queryusers= $this->db->select('*')
										->from('tbl_user')
										->where('status=',1)
								 		->order_by('uid','DESC')
										->get()->result();

			return $queryusers;			
		}
	function save($data, $id)
		{	
			$result = '';	
				if($id){
					$where = array('uid'=>$id);		
					// print_r($data);exit;		
					$result = $this->db->update($this->table,$data,$where);
					$result		= 'Update success !';
					$this->session->set_flashdata('message', $result);
				}else{
					$result = $this->db->insert($this->table,$data);
					$result		= 'Create success !';
					$this->session->set_flashdata('message', $result);
				}
			return $result;
		}
	function delete($id)
		{
			$result = '';
			$sql = "UPDATE tbl_user SET status = 0 WHERE uid = $id";
			$this->db->query($sql);
			$result		= 'Delete success !';
			$this->session->set_flashdata('message', $result);

			return $result;
		}
	function get_single_row($id)
		{
			$get_s_row= $this->db->select('*')
										->from('tbl_user')
										->where('status=',1)
										->where('uid=',$id)
										->get()->result();
				return $get_s_row;
		}
}
?>
