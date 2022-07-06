<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		$array = [
			'page' => 'pages/log/sing_in.php'
		];
		$this->load->view('layout', $array);
		$this->load->helper('url');
	}
	
	public function login(){
		$url = "http://arcane-brook-55437.herokuapp.com/api/sessions/users";

		$process = curl_init();

		$headers = array(
			'Content-Type:application/json',
		);
		$array = [
			'email' => $_POST['form-email'],
			'password' => $_POST['form-password'],
		];

		$payload = http_build_query($array);

		curl_setopt($process, CURLOPT_URL, $url);
		curl_setopt($process, CURLOPT_POST, TRUE);
		curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		
		$response = curl_exec($process);
		
		$data = json_decode($response, true);
		curl_close($process);

		if ($data['errorMessage'] == ''){
			redirect('Pages/About_Us');
		} else {
			redirect('/');
		}
	}
}