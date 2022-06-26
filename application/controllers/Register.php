<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$array = ['page' => 'pages/log/sing_up.php'];
		$this->load->view('layout', $array);
	}
}