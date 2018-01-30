<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client_Home extends CI_Controller {
	
		public function _construct(){
			parent::_construct();
			$this->load->model('insert');
			$this->load->helper('path');
		}
		public function index(){
			$this->load->view('template/header');
			$this->load->view('template/slider');
			$this->load->view('template/home');
			$this->load->view('template/footer');
		}
		public function about(){
			$this->load->view('template/header');
			$this->load->view('about');
			$this->load->view('template/footer');
		}
		public function services(){
			$this->load->view('template/header');
			$this->load->view('services');
			$this->load->view('template/footer');
		}
		public function contact(){
			$this->load->view('template/header');
			$this->load->view('contact');
			$this->load->view('template/footer');
		}
		public function login_option(){
			$this->load->view('template/header');
			$this->load->view('login_options');
			$this->load->view('template/footer');
		}
		public function login(){
			$this->load->view('template/header');
			$this->load->view('client/login');
			$this->load->view('template/footer');
		}

		public function signup(){
			/*  retrieve  session and check whether it is a client or company  */
			$this->load->view('template/header');
			$this->load->view('client/signup');
			$this->load->view('template/footer');
		}
        public function signed_up(){
			$this->load->model('user_model');
			$this->user_model->insert_data(); //function call from model
			$this->load->view('template/header');
	 		$this->load->view('client/signup_success');
			$this->load->view('template/footer');
		}
        public function forgot_pass(){
			$this->load->view('forgot_pass');
		}
	}
