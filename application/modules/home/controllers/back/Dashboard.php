
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='dashboard';
		}
	public function index()
		{
			$data['content']		= 'back/Dashboard/index';
			$this->load->view('_layout_admin',$data);
		}
	}
?>
