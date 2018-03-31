<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 26/03/2018
 * Time: 08:56
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class PlanTrip extends CI_Controller
{

    public function _construct()
    {
        parent::_construct();
        $this->load->model('insert');
        $this->load->helper('path');
        $this->load->helper('form_validation');
        $this->load->library('upload');
    }

    public function index()
    {
        $trip_type = $this->input->post('trip_type');
        $this->load->view('client/tripType');
        echo $trip_type;
    }

    public function carTripType()
    {
        $user_namee['user_name'] = $this->session->userdata('user');
        $trip_type = $this->input->post('trip_type');
        if($trip_type ==1)
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/carSingleTrip');
            $this->load->view('template/footer');
        }
        if($trip_type ==0)
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/carRoundTrip');
            $this->load->view('template/footer');
        }

    }

    public function vanTripType()
    {
        $user_namee['user_name'] = $this->session->userdata('user');
        $trip_type = $this->input->post('trip_type');
        if($trip_type ==0)
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/vanSingleTrip');
            $this->load->view('template/footer');
        }
        if($trip_type ==1)
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/vanRoundTrip');
            $this->load->view('template/footer');

        }

    }

    public function coasterTripType()
    {
        $trip_type = $this->input->post('trip_type');
        $user_namee['user_name'] = $this->session->userdata('user');

        if($trip_type ==0)
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/coasterSingleTrip');
            $this->load->view('template/footer');
        }
        if($trip_type ==1)
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/coasterRoundTrip');
            $this->load->view('template/footer');
        }

    }

}
?>