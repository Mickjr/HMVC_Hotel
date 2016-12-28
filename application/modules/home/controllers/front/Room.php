<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='room';
			$this->load->model('rooms_modul','obj');
		}
	public function index()
		{
			$data['roomdata']		=$this->obj->get_roomdata();
			$data['content']		= 'front/Rooms/index';
			$this->load->view('_layout_side',$data);
		}
	// function get_roomdata()
	// 	{

	// 		$data['roomdata']		=$this->obj->get_roomdata();
	// 		$data['content']		= 'front/Rooms/index';

	// 		$this->load->view('_layout_side',$data);
	// 	}
	}
?>
