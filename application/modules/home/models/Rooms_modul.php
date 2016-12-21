
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms_modul extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->module = 'rooms_modul';
		$this->table  = 'tbl_room';

	}
	 function loaddata()
		{
			$sql ="SELECT t.tid AS tid, t.tname AS tname, t.status AS status, r.rid AS rid, r.rname AS rname,r.bed, r.price AS price,r.bed AS bed,r.iconpath AS iconpath,r.status AS status FROM(`tbl_room` `r` JOIN `roomtype` `t` ON (`r`.`tid` = `t`.`tid`)) WHERE (`t`.`status`<>0 AND `r`.`status`<>0)";
			$queryroom =$this->db->query($sql)->result();

			return $queryroom;

		}
	function get_single_row($id)
		{

			$sql ="SELECT t.tid AS tid, t.tname AS tname, t.status AS status, r.rid AS rid, r.rname AS rname,r.bed AS bed, r.price AS price,r.iconpath AS iconpath,r.status AS status FROM(`tbl_room` `r` JOIN `roomtype` `t` ON (`r`.`tid` = `t`.`tid`)) WHERE (`r`.`rid`=$id AND `t`.`status`<>0 )";

			$queryroom =$this->db->query($sql)->result();
			return $queryroom;
		}
	function get_type()
		{
			$gettype = $this->db->select('*')
								->from('roomtype')
								->where('status=',1)
								->get()->result();
			return $gettype;
		}

	function delete($id)
		{
			$result = '';
			$sql = "UPDATE tbl_room SET status = 0 WHERE rid = $id";
			$this->db->query($sql);
			$result		= 'Delete success !';
			$this->session->set_flashdata('message', $result);

			return $result;
		}
	function save($data, $id)
		{
			$result = '';
				if($id){
					$where = array('rid'=>$id);
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
	function get_roomdata()
		{
			$sql 				="SELECT `rt`.`tid` AS `tid`,`rt`.`tname` AS `tname`,`r`.`price` AS `price`,`r`.`rid` AS `rid`,`r`.`rname` AS `rname`,`r`.`iconpath` AS `iconpath`,`r`.`bed` AS `bed` FROM (`tbl_room` `r` JOIN `roomtype` `rt` ON (`r`.`tid` = `rt`.`tid`)) WHERE (`r`.`status` <> 0)";
			$roomdata 			=$this->db->query($sql)->result();

			return $roomdata;
		}
}
?>
