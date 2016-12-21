
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='booking';
			$this->load->model('booking_modul','obj');
		}
	public function index()
		{
			$data['querybooking'] 		= $this->obj->loaddata();
			$data['content']		= 'back/Booking/index';
			$this->load->view('_layout_admin',$data);
		}
	function add()
		{

			$data['content']			= 'back/Booking/form';
			$data['bookingquery']      = $this->obj->get_type();

			$this->load->view('_layout_admin',$data);
		}
	function edit($id)
		{
			$data['content']		= 'back/Booking/form';
			$this->load->view('_layout_admin',$data);
		}
	function detail($id)
		{
			$data['content']		= 'back/Booking/detail';
			$this->load->view('_layout_admin',$data);
		}
	function save()
		{
			$id					=  $this->input->post('roomid');
			$roomname			=  $this->input->post('roomname');
			$type_name			=  $this->input->post('type_name');
			$price				=  $this->input->post('price');
			$status			= '1';

			$data=array(
				'rname'			=> $roomname,
				'rid'			=> $type_name,
				'price'			=> $price,
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
			upload_resize('file','rooms', $imageName ,300,300);
			$json_data = array(
					'error'		=>false,
					'tmp_name'	=>$file_name,
					'file_name'=>base_url().'assets/uploads/rooms/'.$imageName.'?dummy='.rand(0,1000),
					'file_path'	=>$imageName
			);
			echo json_encode($json_data);
		}
	}
?>
