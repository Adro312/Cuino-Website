<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index($errors = null) {
		$array = [
			'page' => 'pages/log/sing_in.php',
			'data' => $errors,
		];
		$this->load->view('layout', $array);
	}
	
	public function login(){
		if ($_POST['form-email'] != "" AND $_POST['form-password'] != ""){
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

			if ($data['errorMessage'] == ''){
				session_start();
				$this->session->set_userdata('id', $data['data']['id']);
				$this->session->set_userdata('name', $data['data']['name']);
				$this->session->set_userdata('cellphone', $data['data']['cellphone']);
				$this->session->set_userdata('email', $data['data']['email']);
				$this->session->set_userdata('created_at', $data['data']['created_at']);
				$this->session->set_userdata('role', $data['data']['role']);
				redirect('Pages/About_Us');
			} else {
				$this->index($data['errorMessage']);
				//redirect('/');
			}
			curl_close($process);
		} else {
			$this->index("Please fill the form");
		}
	}
}