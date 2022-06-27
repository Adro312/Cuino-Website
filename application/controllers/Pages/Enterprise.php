<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enterprise extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/enterprise.php'
		];
		$this->load->view('layout', $array);
	}
}