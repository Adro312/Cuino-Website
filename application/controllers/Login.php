<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/log/sing_in.php'
		];
		$this->load->view('layout', $array);
	}
}