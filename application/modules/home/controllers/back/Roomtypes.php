
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roomtypes extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='roomtypes';
			$this->load->model('roomtype_modul','obj');
		}
	public function index()
		{
			$data['room_type_query'] 		= $this->obj->loaddata();;
			$data['content']		= 'back/Roomtypes/index';
			$this->load->view('_layout_admin',$data);
		}
	function add()
		{
			$data['content']		= 'back/Roomtypes/form';
			$this->load->view('_layout_admin',$data);
		}
	function save()
		{
			$id				=  $this->input->post('roomt_id');
			$tname			=  $this->input->post('typename');
			$status			= '1';

			$data=array(
				'tname'			=> $tname,
				'status'		=>$status
			);
			// echo "<pre>";
			// print_r($data);exit;
			$this->obj->save($data, $id);
			redirect('roomtypes');
		}
	function delete($id)
		{
			$id =$this->input->post('id');
			$this->obj->delete($id);
		}
	function edit($id)
		{
			$data['content'] 	= 'back/Roomtypes/form';
			$data['rows'] 	=$this->obj->get_single_row($id);

			$this->load->view("_layout_admin",$data);
		}
	function detail($id)
		{
			$data['content'] 	= 'back/Roomtypes/detail';
			$data['rows'] 	=$this->obj->get_single_row($id);

			$this->load->view("_layout_admin",$data);
		}
	}
?>
