<?php

@ob_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
		{
			parent::__construct();

			$this->module='home';
			$this->load->model('rooms_modul','obj');
			$this->load->model('roomtype_modul','rtype');

		}
	public function index()
		{

			$data['roomdata']		=$this->obj->get_roomdata();
			$data['rtype']			=$this->rtype->loaddata();
			$data['content']		= 'front/Home/index';
			$this->load->view('_layout_side',$data);
		}
	}
