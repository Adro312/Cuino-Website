<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$array = [
			'page' => 'pages/log/sing_up.php'
		];
		$this->load->view('layout', $array);
		$this->load->helper('url');
	}

	public function signUp(){
		$url = "http://arcane-brook-55437.herokuapp.com/api/users/users";

		$process = curl_init();

		$headers = array(
			'Content-Type:application/json',
		);
		$array = [
			'email' => $_POST['form-email'],
			'password' => $_POST['form-password'],
			'cellphone' => $_POST['form-phoneNumber'],
			'name' => $_POST['form-name'],
		];

		$payload = http_build_query($array);

		curl_setopt($process, CURLOPT_URL, $url);
		curl_setopt($process, CURLOPT_POST, TRUE);
		curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		
		$response = curl_exec($process);
		
		$data = json_decode($response, true);

		if ($data['errorMessage'] == ''){
			redirect('Login');
		} else {
			$this->index();
			//redirect('Register');
		}
		curl_close($process);
	}
}