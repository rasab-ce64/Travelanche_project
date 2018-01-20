<?php

class Company_logged_in extends CI_Controller
{
    public function _construct()
    {
        parent::_construc();
        $this->load->helper(array('form_validation','url','form'));
        $this->load->library('session');
        $this->load->model('company/company_model');
        $this->load->database();
    }

    public function index()
    {
        $this->load->model('company/company_model');
        $get_dropdown['vehicle_name'] = $this->company_model->dropdown_vehicle();
        $get_dropdown['driver_name'] = $this->company_model->dropdown_driver();
        $this->load->view('company/template/header');
        $this->load->view('company/bachat', $get_dropdown);
        //$this->load->view('lambSamb' , $get_dropdown);
    }

    public function my_Trips()
    {
        $user['user_name'] = $this->session->userdata('user');                
        $comp_trips = array();
        $this->load->model('company/company_model');
        $comp_trips['result'] = $this->company_model->My_trips(); //function call from model
        $this->load->view('template/header_after_login',$user);
        $this->load->view('company/Trips',$comp_trips);
    }

    public function add_driver(){
        $this->load->model('company/company_model');
        $this->company_model->add_driver();
        $this->load->view('company/success');
    }

    public function vehicle(){
        $this->load->model('company/company_model');
        $this->company_model->add_vehicle();
        $this->load->view('company/success');
    }
    public function companies()
    {
        $user['user_name'] = $this->session->userdata('user'); 
        $this->load->model('company/company_model');
        $data['companies'] = $this->company_model->companies();

        $this->load->view('template/header_after_login',$user);
        $this->load->view('company/companies', $data);

//        $this->load->view('template/footer');
   
    }

    public function place_bid()
    {
        $this->load->model('company/company_model');
        $this->company_model->bid_by_rental();
        $this->load->view('template/header');
        $this->load->view('company/place_bid_success');
    }

    public function bids_on_trip()
    {
        $id = $this->uri->segment(3);
        echo $id;
    }

    public function success(){
        $this->load->view('template/header');
        $this->load->view('company/success');
        $this->load->view('template/footer');
    }
}