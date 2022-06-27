<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/profile.php'
		];
		$this->load->view('layout', $array);
	}
}