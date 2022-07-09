<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index(){
		if(isset($this->session->id)){
			$array = [
				'page' => 'pages/profile.php'
			];
			$this->load->view('layout', $array);
		} else {
			$array = [
				'page' => 'pages/log/sing_in.php',
				'data' => 'You need to Log In',
			];
			$this->load->view('layout', $array);
		}
	}

	public function logOut(){
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('cellphone');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('created_at');
		$this->session->unset_userdata('role');

		redirect('/');
	}
}