<?php

class Company_logged_in extends CI_Controller
{
    public function _construct()
    {
        parent::_construc();
        $this->load->helper(array('form_validation','url','form'));
        $this->load->library(array('session' , 'upload'));
        $this->load->model('company/company_model');
        $this->load->database();
    }

    public function index()
    {
        $this->load->model('company/company_model');
        $get_dropdown['vehicle_name'] = $this->company_model->dropdown_vehicle();
        $get_dropdown['driver_name'] = $this->company_model->dropdown_driver();
        $this->load->view('template/header');
        $this->load->view('company/bachat', $get_dropdown);
        //$this->load->view('lambSamb' , $get_dropdown);
    }

    public function plan_a_Trip()
    {
        $this->load->model('trip');
        //function call from model
        $user['vehicle_type'] = $this->trip->Vehicle_type();
        $user['city'] = $this->trip->City();
        $user['destination'] = $this->trip->Destination();
        $user['pickup_location'] = $this->trip->Pickup_location();
        $user_namee['user_name'] = $this->session->userdata('company');
        $this->load->view('client/header_after_login',$user_namee);
        $this->load->view('company/plan_a_trip',$user);
        $this->load->view('template/footer');
    }

    public function Trip_info()
    {
        $this->load->model('company/company_model');
        $this->company_model->Trip_details(); //function call from model
        $user_namee['user_name'] = $this->session->userdata('company');
        $this->load->view('company/header_after_login',$user_namee);
        $this->load->view('company/plan_trip_success');
        $this->load->view('template/footer');   

    }

    public function my_Trips()
    {
        $user['user_name'] = $this->session->userdata('company');                
        $comp_trips = array();
        $this->load->model('company/company_model');
        $comp_trips['result'] = $this->company_model->My_trips(); //function call from model
        $this->load->view('company/header_after_login',$user);
        $this->load->view('company/Trips',$comp_trips);
    }

    public function bids_By_Other_Companies($trip_id)
    {
        // echo $trip_id;
        $user['user_name'] = $this->session->userdata('company');                
        $this->load->model('company/company_model');
        $comp_bids['result'] = $this->company_model->bids_By_Other_Companies($trip_id); //function call from model
        $this->load->view('company/header_after_login',$user);
        $this->load->view('company/bids_By_Other_Companies',$comp_bids);
        $this->load->view('template/footer');
    }

    public function do_upload()
    {
        $comp_data = $this->session->userdata('company_logged_in');
        $phone = $comp_data['phone'];

        $driver_name = $this->input->post('driver_name');
        $driver_phone = $this->input->post('driver_phone');
        $driver_cnic = $this->input->post('driver_cnic');
        $driver_license = $this->input->post('driver_license');

        $config['upload_path'] = '.uploads/';
        $config['allowed_types'] = 'gif|jpg|png';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error', $this->upload->display_errors());
            $this->load->view('company/driver', $error);
        }
        else {
            $this->load->model('company/company_model');
            $data = array(
                'driver_name' => $driver_name,
                'driver_phone' => $driver_phone,
                'driver_cnic' => $driver_cnic,
                'driver_licenseNo' => $driver_license,
                'driver_picture' => $this->upload->data(),
                'company' => $phone,
            );
            $this->company_model->add_driver($data);
            $this->load->view('template/header');
            $this->load->view('company/driver_added_success', $data);
        }
    }

    public function vehicle(){

        $this->load->model('company/company_model');
        $this->company_model->add_vehicle();
        $this->load->view('company/vehicle_added_success');
    }

//    public function companies()
//    {
//        $user['user_name'] = $this->session->userdata('company');
//        $this->load->model('company/company_model');
//        $data['companies'] = $this->company_model->companies();
//        $this->load->view('company/header_after_login',$user);
//        $this->load->view('client/companies', $data);
//        $this->load->view('template/footer');
//    }

    public function place_bid()
    {
        $company['user_name'] = $this->session->userdata('company');
        $this->load->model('company/company_model');
        $this->company_model->bid_by_rental();
        $this->load->view('company/header_after_login',$company);
        $this->load->view('company/place_bid_success');
        $this->load->view('template/footer');
    }

    public function bid_options(){

        $company['user_name'] = $this->session->userdata('company');
        $this->load->view('company/header_after_login',$company);
        $this->load->view('company/bid_options');
        $this->load->view('template/footer');
    }

    public function my_Pending_Bids()
    {

        $company['user_name'] = $this->session->userdata('company');
        $this->load->model('company/company_model');
        $pending_bids['bids'] =$this->company_model->my_Pending_Bids();
        $this->load->view('company/header_after_login',$company);
       $this->load->view('company/my_Pending_Bids',$pending_bids);
        $this->load->view('template/footer');
        $id = $this->uri->segment(3);
        echo $id;
    }

    public function edit_Bid($bid_id)
    {
        $company['user_name'] = $this->session->userdata('company');
        $this->load->model('company/company_model');
        $edit_bid['bid'] =$this->company_model->edit_Bid($bid_id);
        $this->load->view('company/header_after_login',$company);
        $this->load->view('company/edit_Bid',$edit_bid);
        $this->load->view('template/footer');

    }

    public function update_Data($bid_id)
    {
       $this->load->model('company/company_model');
        $data = array(
            'vehicle' => $this->input->post('vehicle'),
            'driver' => $this->input->post('driver'),
            'rate_per_day' => $this->input->post('rate_per_day'),
            'total_fare' => $this->input->post('total_fare'),
        );
        $this->company_model->update_Data($bid_id,$data);
        redirect('company_logged_in/my_Pending_Bids');

    }

    public function delete_Bid($bid_id)
    {
        $this->load->model('company/company_model');        
        $this->company_model->delete_Bid($bid_id);
        redirect('company_logged_in/my_Pending_Bids');

    }

    public function my_Accepted_Bids()
    {
        $company['user_name'] = $this->session->userdata('company');
        $this->load->model('company/company_model');
        $accepted_bids['bids'] =$this->company_model->my_Accepted_Bids();

        $this->load->view('company/header_after_login',$company);
        $this->load->view('company/my_Accepted_Bids',$accepted_bids);
        $this->load->view('template/footer');        
    }

    public function success(){
        $this->load->view('template/header');
        $this->load->view('company/success');
        $this->load->view('template/footer');
    }
}