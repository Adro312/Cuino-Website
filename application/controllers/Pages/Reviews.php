<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/reviews.php'
		];
		$this->load->view('layout', $array);
	}
}