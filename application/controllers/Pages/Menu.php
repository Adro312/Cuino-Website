<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/menu.php'
		];
		$this->load->view('layout', $array);
	}
}