<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function _construct(){
		parent::_construct();
		$this->load->model('company/company_model');
	}
/*	public function index(){
		$this->load->view('company/template/header');
		$this->load->view('company/template/home');
		$this->load->view('company/template/footer');
	}*/
/*	public function signup(){
		$this->load->view('company/template/header');
		$this->load->view('company/signup_company');
		$this->load->view('company/template/footer');
	}*/
/*
	public function login(){
		$this->load->view('company/template/header');
		$this->load->view('company/login_options');
		$this->load->view('company/template/footer');
	}

	public function login_company(){
		$this->load->view('company/template/header');
		$this->load->view('company/login');
	}*/
	
	//views after login
/*	public function plan_a_trip(){
		$this->load->view('template/header');
		$this->load->view('client/plan_a_trip');
		$this->load->view('template/footer');
	}
*/	public function add_driver(){

		$this->load->view('template/header');
		$this->load->view('company/add_driver');
		$this->load->view('template/footer');
	}
	public function add_vehicle(){
		$this->load->view('template/header');
		$this->load->view('company/add_vehicle');
		$this->load->view('template/footer');
	}
	public function bachat($trip_id){
		$this->session->set_userdata('trip_id',$trip_id);
		$user['user_name'] = $this->session->userdata('company');                
		$this->load->view('template/header_after_login',$user);
		$this->load->model('company/company_model');
		$get_dropdown['vehicle_name'] = $this->company_model->dropdown_vehicle();
		$get_dropdown['driver_name'] = $this->company_model->dropdown_driver();
		$this->load->view('company/bachat', $get_dropdown);
		$this->load->view('template/footer');
	}

	public function lambSamb(){
		$user['user_name'] = $this->session->userdata('user');                
		$this->load->view('template/header_after_login',$user);
		$this->load->model('company/company_model');
		$get_dropdown['vehicle_name'] = $this->company_model->dropdown_vehicle();
		$get_dropdown['driver_name'] = $this->company_model->dropdown_driver();
		$this->load->view('company/LambSamb', $get_dropdown);
		$this->load->view('template/footer');
	}
}
