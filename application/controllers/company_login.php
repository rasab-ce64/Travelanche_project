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
    public function index(){

    }
    public function signed_up(){
        $this->load->model('company/company_model');
        $this->company_model->signup(); //function call from model
        $company_name['user_name'] = $_POST['name'];
        $this->load->view('company/header_after_login',$company_name);
        $this->load->view('company/signup_success');
        $this->load->view('template/footer');        
    }

        public function company_signup(){

        $this->load->view('template/header');
        $this->load->view('company/signup_company');
        $this->load->view('template/footer');
    }

    public function login(){
        $this->load->view('template/header');
        $this->load->view('company/login');
        $this->load->view('template/footer');
    }
    public function company(){

        $session_set_value = $this->session->all_userdata();
        // Check for remember_me data in retrieved session data
        if (isset($session_set_value['remember_company']) && $session_set_value['remember_company'] == "1")
        {
            $this->load->model('company/company_model');
            $user_namee['user_name'] = $this->session->userdata('company');
            $this->load->view('company/header_after_login',$user_namee);
            $this->load->view('company/main_company');
            $this->load->view('template/footer');
        }
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('phone' , 'Phone', 'required');
            $this->form_validation->set_rules('password' , 'Password' , 'required');
            if($this->form_validation->run()==false)
            {
                $this->load->view('template/header');
                $this->load->view('company/login');
                $this->load->view('template/footer');

            } // if true
            else
            {
                $phone = $this->input->post('phone');
                $pass = $this->input->post('password');
                $this->load->model('company/company_model');
                if($this->company_model->fetch_data($phone,$pass))
                {
                    $remember = $this->input->post('remember_me');
                    if ($remember)
                    {
                        // Set remember me value in session
                        $this->session->set_userdata('remember_company', TRUE);
                    }
                    $sess_data = array(
                        'phone' => $phone,
                        'password' => $pass
                    );
                    $this->session->set_userdata('company_logged_in', $sess_data);
                    $this->load->model('company/company_model');
                    $user_name = $this->company_model->company_name();
                    foreach($user_name as $row)
                    {
                        $user['user_name'] = $row->company_name;

                    }
                    $userr =   $user['user_name'];
                    $this->session->set_userdata('company', $userr);
                    $this->load->view('company/header_after_login',$user);
                    $this->load->view('company/main_company');
                    $this->load->view('template/footer');
                }
                else
                {
                    $this->session->set_flashdata('error' , 'Invalid Phone number and Password');
                    /* will redirect to same login page to enter correct info */
                    redirect('company_login/login' ,'refresh');
                }
            }
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
            redirect('company_login/login' , 'refresh');
        }
    }
    public function logout(){
        $this->session->unset_userdata('remember_company');
        $this->session->unset_userdata('company_logged_in');
        $this->session->unset_userdata('company');
        $this->load->view('template/header');
        $this->load->view('login_options');
        $this->load->view('template/footer');
    }
}
?>

