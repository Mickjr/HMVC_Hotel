
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->module='login';
			//$this->load->model('booking_modul','obj');
		}
	public function index()
		{
			$this->load->view('_login_form');
		}
	}
?>
