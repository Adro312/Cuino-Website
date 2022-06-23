<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$view = 'home';
		$array = ['page' => 'pages/log/Login.php'];
		$this->load->view($view, $array);
	}
}