<?php

class Company_login extends CI_Controller{
    public function __construct() {
    parent::__construct();
    $this->load->helper('form'); //loading form helper
    $this->load->helper('url'); //loading url helper
    $this->load->library('session');
    $this->load->library('form_validation');
    $this->load->model('company/company_model');
    }
    public function signup(){
        $this->load->model('company/company_model');
        $this->company_model->signup(); //function call from model
        $company_name['user_name'] = $_POST['name'];
        $this->load->view('template/header_after_login',$company_name);
        $this->load->view('company/main_company');
        $this->load->view('template/footer');        
    }
    public function login(){
        $this->load->view('company/template/header');
        $this->load->view('company/login');
        $this->load->view('company/template/footer');
    }
    public function company(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('phone' , 'Phone', 'required');
        $this->form_validation->set_rules('password' , 'Password' , 'required');

        if($this->form_validation->run()){ // if true
            echo "success";
            $phone = $this->input->post('phone');
            $pass = $this->input->post('password');
            $this->load->model('company/company_model');

            if($this->company_model->fetch_data($phone,$pass)){
                $session_data = array(
                    'phone' => $phone
                );
                $this->session->set_userdata($session_data);

                redirect('company_login/enter' , 'refresh'); // same controller called with method "enter"
            }
            else{
                $this->session->set_flashdata('error' , 'Invalid Phone and Password');
                redirect('company_login/login' ,'refresh'); // will redirect to same login page to enter correct info
            }
        }
        else{
            //echo validation_errors();
            $this->load->view('company/template/header.php');
            $this->load->view('company/login.php');
        }
    }
    // after login
    public function enter(){
        if($this->session->userdata('phone') != '')
        {
            echo '<h2 style="text-align: center"> Welcome ' .$this->session->userdata('phone'). '</h2>';
            echo '<h3 style="text-align: center"> <a href=" ' .site_url('company_login/logout'). ' " > Logout </a> </h3>';
            $this->load->view('company/main_company');
        }
        else{
            redirect('company/company_login/login' , 'refresh');
        }
    }
    public function logout(){
        $this->session->unset_userdata('phone');
        redirect('company/company_login/login' , 'refresh');
    }
}
?>

