<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('rooms_modul','obj');
			$this->load->model('roomtype_modul','rtype');
		}

	function index(){
		$data['roomdata']		=$this->obj->get_roomdata();
		$data['rtype']			=$this->rtype->loaddata();
		$data['content'] 		= 'front/Home/index';

		$this->load->view('_layout_side',$data);
	}

	function about(){
		$data['content'] = 'front/About/index';
		$this->load->view('_layout_side',$data);
	}

	function contactus(){
		$data['content'] = 'front/Contactus/index';
		$this->load->view('_layout_side',$data);
	}
}
?>