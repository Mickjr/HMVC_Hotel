<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rooms extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='rooms';
			$this->load->model('rooms_modul','obj');
		}
	public function index()
		{
			$data['roomquery'] 		= $this->obj->loaddata();
			$data['content']		= 'back/Rooms/index';
			$this->load->view('_layout_admin',$data);
		}
	function add()
		{
			$data['content']		= 'back/Rooms/form';
			$data['roomtypes']      = $this->obj->get_type();
			$this->load->view('_layout_admin',$data);
		}
	function edit($id)
		{

			$data['content']		= 'back/Rooms/form';
			$data['rows'] 		=$this->obj->get_single_row($id);
			$data['roomtypes']      = $this->obj->get_type();

			$this->load->view('_layout_admin',$data);
		}
	function detail($id)
		{
			$data['rows'] 		=$this->obj->get_single_row($id);
			$data['content']		= 'back/Rooms/detail';
			$this->load->view('_layout_admin',$data);
		}
	function delete($id)
		{
			$id =$this->input->post('id');
			$this->obj->delete($id);
		}
	function save()
		{
			$id					=  $this->input->post('roomid');
			$roomname			=  $this->input->post('roomname');
			$bednumber			=  $this->input->post('bednumber');
			$price			=  $this->input->post('price');
			$type_name			=  $this->input->post('type_name');
			$imgpath			=  $this->input->post('tmp_logo');
			$status			= '1';

			$data=array(
				'rname'			=> $roomname,
				'bed'			=> $bednumber,
				'tid'			=> $type_name,
				'price'			=> $price,
				'iconpath'		=> $imgpath,
				'status'		=>$status
			);
			// echo "<pre>";
			// print_r($data);exit;
			$this->obj->save($data, $id);
			redirect('rooms');
		}
	function uploadimage()
		{
			$file_name 	= $this->input->post('fileName');
			$imageName = 'r_'.file_name($_FILES["file"]['name'],date('Ymd_his'));
			//echo $imageName;exit;
			upload_resize('file','rooms', $imageName ,300,300);
			$json_data = array(
					'error'		=>false,
					'tmp_name'	=>$file_name,
					'file_name'=>base_url().'assets/uploads/rooms/'.$imageName.'?dummy='.rand(0,1000),
					'file_path'	=>$imageName
			);
			// echo "<pre>";
			// print_r($json_data);exit;
			echo json_encode($json_data);
		}
	}
?>
