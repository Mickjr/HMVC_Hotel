
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='users';
			$this->load->model('user_modul','obj');
		}
	public function index()
		{
			$data['queryusers'] 		= $this->obj->loaddata();
			$data['content']			= 'back/users/index';
			$this->load->view('_layout_admin',$data);
		}
	function add()
		{
			$data['content']		= 'back/users/form';
			$this->load->view('_layout_admin',$data);
		}
	function edit($id)
		{

			$data['content']		= 'back/users/form';
			$data['rows'] 	=$this->obj->get_single_row($id);

			$this->load->view('_layout_admin',$data);
		}
	function detail($id)
		{
			$data['content']		= 'back/users/detail';
			$data['rows'] 	=$this->obj->get_single_row($id);

			$this->load->view('_layout_admin',$data);
		}
	function delete($id)
		{
			$id =$this->input->post('id');
			$this->obj->delete($id);
		}
	function save()
		{
			$id					=  $this->input->post('user_id');
			$username			=  $this->input->post('username');
			$email				=  $this->input->post('email');
			$phone				=  $this->input->post('phone');
			$nationa_id			=  $this->input->post('nationa_id');
			$passwort			=  $this->input->post('passwort');
			$status			= '1';

			$data=array(
				'uName'			=> $username,
				'email'			=> $email,
				'phone'			=> $phone,
				'national_ID'	=> $nationa_id,
				'passport'		=> $passwort,
				'status'		=>$status
			);
			// echo "<pre>";
			// print_r($data);exit;
			$this->obj->save($data, $id);
			redirect('users');
		}
	function uploadimage()
		{
			$file_name 	= $this->input->post('fileName');
			$imageName = 'u_'.file_name($_FILES["file"]['name'],date('Ymd_his'));
			upload_resize('file','rooms', $imageName ,300,300);
			$json_data = array(
					'error'		=>false,
					'tmp_name'	=>$file_name,
					'file_name'=>base_url().'assets/uploads/users/'.$imageName.'?dummy='.rand(0,1000),
					'file_path'	=>$imageName
			);
			echo json_encode($json_data);
		}
	}
?>
