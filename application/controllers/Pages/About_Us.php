<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Us extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/about_us.php'
		];
		$this->load->view('layout', $array);
	}
}