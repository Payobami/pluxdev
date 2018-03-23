<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->library(array('form_validation','session'));
		$this->load->database();


	}


	public function  index(){


		$this->load->view('template/header.php');
		$this->load->view('index');
		$this->load->view('template/footer');

	}

	public function airdrop()
	{
		$data['success']="";

		$this->form_validation->set_rules('firstname','First Name','required|trim');
		$this->form_validation->set_rules('lastname','Last Name','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('telegram','Telegram','required|trim');
		$this->form_validation->set_rules('eth','ETH Address','required|trim');
		$this->form_validation->set_rules('country','Country','required|trim');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">&times;</button>', '</div>');
		if($this->form_validation->run() == false){

			$this->load->view('index', $data);

		}

		else{

			$email  = $this->input->post('email');
			$referrerId = 'ref_'.rand(99999999999999, 0000000000000);
			//check if user already registered

			$this->db->where("email='$email'");
			$countUser = $this->db->count_all_results('airdrop');

			if($countUser >=1){
				$data['success'] = "<div class='alert alert-danger'><a class='close' data-dismiss='alert'>x</a> We have your data already... thanks for showing concern</div>";

				$this->load->view('index', $data);
			}

			else {

				$insertArray = array(
						'firstname' => $this->input->post('firstname'),
						'lastname' => $this->input->post('lastname'),
						'email' => $this->input->post('email'),
						'telegram_add' => $this->input->post('telegram'),
						'eth_add' => $this->input->post('eth'),
						'country' => $this->input->post('country'),
						'date' => date('Y-m-d H:i:s'),
						'referrer' => $referrerId,
						'status' => 0,
				);

				$this->db->insert('airdrop',$insertArray);

				$data['success'] = "<div class='alert alert-success'><a class='close' data-dismiss='alert'>x</a> Registration Successfull!!!.. Please Refer people and earn more bonus with this link: https://havanaplux.com?ref=".$referrerId." </div>";

				$this->load->view('index', $data);


			}



		}



	}



}




