<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reviews extends CI_Controller {

	public function index($errors = null){

		if(isset($this->session->id)){
			//Checamos si el usuario ya ha evaluado el sitio
			$process = curl_init();
			$id_str= $this->session->id;
			$url = "http://arcane-brook-55437.herokuapp.com/api/reviews/reviews/$id_str";
			curl_setopt($process, CURLOPT_URL, $url);
			curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
			$response = curl_exec($process);	
			$data = json_decode($response, true);
			if ($data['errorMessage'] == ''){
				$exists = true;
			} else {
				$exists = false;
			}
			curl_close($process);

			//Obtenemos todas las reseñas
			$processList = curl_init();
			$urlList = "http://arcane-brook-55437.herokuapp.com/api/reviews/reviews";
			curl_setopt($processList, CURLOPT_URL, $urlList);
			curl_setopt($processList, CURLOPT_RETURNTRANSFER, TRUE);
			$responseList = curl_exec($processList);	
			$dataList = json_decode($responseList, true);
			if ($dataList['errorMessage'] == ''){
				$total = sizeof($dataList['data']);
				$average = 0;
				$Star5 = 0;
				$Star4 = 0;
				$Star3 = 0;
				$Star2 = 0;
				$Star1 = 0;

				foreach($dataList['data'] as $review){
					$average += $review['score'];
					if($review['score']<=1) $Star1++;
					else if($review['score']<=2) $Star2++;
					else if($review['score']<=3) $Star3++;
					else if($review['score']<=4) $Star4++;
					else if($review['score']<=5) $Star5++;

					if($review['user_id']==$this->session->id) $this->session->set_userdata('id_review', $review['id']);
				}
				$average /= $total;

				$array = [
					'page' => 'pages/reviews.php',
					'data' => [
						'list' => $dataList['data'],
						'errors' => $errors,
						'exists' => $exists,
						'total' => $total,
						'average' => $average,
						'1Star' => $Star1,
						'2Star' => $Star2,
						'3Star' => $Star3,
						'4Star' => $Star4,
						'5Star' => $Star5,
					],
				];
				$this->load->view('layout', $array);
			}
		} else {
			$array = [
				'page' => 'pages/log/sing_in.php',
				'data' => 'You need to Log In',
			];
			$this->load->view('layout', $array);
		}
		
	}

	public function postReview(){
		if ($_POST['form-comment'] != "" AND $_POST['form-rating'] != 0){
			$url = "http://arcane-brook-55437.herokuapp.com/api/reviews/reviews";

			$process = curl_init();
			$headers = array(
				'Content-Type:application/json',
			);
			$array = [
				'userName' => $this->session->name,
				'comment' => $_POST['form-comment'],
				'score' => $_POST['form-rating'],
				'user_id' => $this->session->id,
			];

			$payload = http_build_query($array);

			curl_setopt($process, CURLOPT_URL, $url);
			curl_setopt($process, CURLOPT_POST, TRUE);
			curl_setopt($process, CURLOPT_POSTFIELDS, $payload);
			curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
			
			$response = curl_exec($process);
			
			$data = json_decode($response, true);

			if ($data['errorMessage'] == ''){
				redirect('Pages/Reviews');
			} else {
				$this->index($data['errorMessage']);
			}
			curl_close($process);
		} else {
			$this->index("Please fill the form");
		}
	}

	public function deleteReview(){
		
		$id_str= $this->session->id_review;
		$url = "http://arcane-brook-55437.herokuapp.com/api/reviews/reviews/$id_str";
		$process = curl_init();

		curl_setopt($process, CURLOPT_URL, $url);
		curl_setopt($process, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		
		$response = curl_exec($process);
		
		$data = json_decode($response, true);

		if ($data['errorMessage'] == ''){
			$this->index();
		} else {
			$this->index($data['errorMessage']);
		}
		curl_close($process);
	}
}