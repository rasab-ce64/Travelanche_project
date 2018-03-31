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
//var $car ;
//var  $vehicle_name ;
//var $driver ;
//var $vehicle_type;
//var $vehicle_seats;
//var $trip_type;
    public function _construct()
    {
        parent::_construct();
        $this->load->model('insert');
        $this->load->helper('path');
        $this->load->helper('date');
        $this->load->helper('form_validation');
        $this->load->library('upload');
        $this->load->library('registry');
    }

    public function index()
    {
        $trip_type = $this->input->post('trip_type');
        $this->load->view('client/tripType');
        echo $trip_type;
    }

    public function carBooking()
    {
        $vehicle_type = "Car";
        $vehicle_seats = 4;
        $this->session->set_userdata('vehicle_type',$vehicle_type);
        $this->session->set_userdata('vehicle_seats',$vehicle_seats);
        $user['user_name'] = $this->session->userdata('user');
        $this->load->view('client/header_after_login',$user);
        $this->load->view('client/carBooking');
        $this->load->view('template/footer');

    }
    public function vanBooking()
    {
        $vehicle_type = "Van";
        $this->session->set_userdata('vehicle_type',$vehicle_type);
        $user['user_name'] = $this->session->userdata('user');
        $this->load->view('client/header_after_login',$user);
        $this->load->view('client/vanBooking');
        $this->load->view('template/footer');
    }
    public function coasterBooking()
    {
        $vehicle_type = "Coaster";
        $this->session->set_userdata('vehicle_type',$vehicle_type);
        $user['user_name'] = $this->session->userdata('user');
        $this->load->view('client/header_after_login',$user);
        $this->load->view('client/coasterBooking');
        $this->load->view('template/footer');
    }

    public function carTripType()
    {
        $user_namee['user_name'] = $this->session->userdata('user');
        $trip_type = $this->input->post('trip_type');
        $car = $this->input->post('car');
        $vehicle_name = $this->input->post('vehicle_name');
        $driver = $this->input->post('driver');
        $tripType =array(
            'vehicle_name'  =>  $vehicle_name,
            'trip_type'     =>$trip_type,
            'driver'        =>$driver
        ) ;
        $this->session->set_userdata('tripType',$tripType);


        if($trip_type =="One Side Tri" )
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/carSingleTrip');

        }
        if($trip_type =="Round Trip")
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/carRoundTrip');

        }

    }

    public function vanTripType()
    {
        $vehicle_seats = $this->input->post('vehicle_seats');
        $this->session->set_userdata('vehicle_seats',$vehicle_seats);
        $user_namee['user_name'] = $this->session->userdata('user');
        $trip_type = $this->input->post('trip_type');
        $vehicle_name = "N/A";
        $driver = $this->input->post('driver');
        $tripType =array(
            'vehicle_name'  =>  $vehicle_name,
            'trip_type'     =>$trip_type,
            'driver'        =>$driver
        ) ;
        $this->session->set_userdata('tripType',$tripType);

        if($trip_type =="One Side Tri")
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/vanSingleTrip');
        }
        if($trip_type =="Round Trip")
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/vanRoundTrip');
        }

    }

    public function coasterTripType()
    {
        $vehicle_seats = $this->input->post('vehicle_seats');
        $this->session->set_userdata('vehicle_seats',$vehicle_seats);
        $trip_type = $this->input->post('trip_type');
        $user_namee['user_name'] = $this->session->userdata('user');
        $trip_type = $this->input->post('trip_type');
        $vehicle_name = "N/A";
        $driver = $this->input->post('driver');
        $tripType =array(
            'vehicle_name'  =>  $vehicle_name,
            'trip_type'     =>$trip_type,
            'driver'        =>$driver
        ) ;
        $this->session->set_userdata('tripType',$tripType);

        if($trip_type =="One Side Tri")
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/coasterSingleTrip');
        }
        if($trip_type =="Round Trip")
        {
            $this->load->view('client/header_after_login',$user_namee);
            $this->load->view('client/coasterRoundTrip');
        }

    }
    public function RoundTrip()
    {
        $user_data = $this->session->userdata('user_logged_in');
        $client_phone = $user_data['phone'];
        $tripType = $this->session->userdata('tripType');
        $vehicle_type = $this->session->userdata('vehicle_type');
        $vehicle_seats = $this->session->userdata('vehicle_seats');
        $vehicle_name =$tripType['vehicle_name'];
        $driver =$tripType['driver'];
        $trip_type =$tripType['trip_type'];
        $format = "Y-m-d H:i:s";
        $timezone  = 4;
        $date= gmdate($format,time()+ 3600*($timezone+date("I")));

        $this->load->model('trip');
        $data = array(
            'vehicle_name' => $vehicle_name,
            'vehicle_type'=> $vehicle_type,
            'driver' => $driver,
            'vehicle_seats' => $vehicle_seats,
            'trip_type' => $trip_type,
            'destination'=>$this->input->post('destination'),
            'location_pickup'=>$this->input->post('pickup_location'),
            'start_date'=>$this->input->post('start_date'),
            'end_date'=>$this->input->post('end_date'),
            'time_pickup'=>$this->input->post('pickup_time'),
            'time_drop'=>$this->input->post('drop_time'),
            'trip_status'=>"Pending",
            'client_phone'=> $client_phone,
            'timestamp'=> $date

        );

        $this->trip->Trip_details($data);

        $user_namee['user_name'] = $this->session->userdata('user');
        $this->load->view('client/header_after_login',$user_namee);
        $this->load->view('client/plan_trip_success');
        $this->load->view('template/footer');
        $this->session->unset_userdata('tripType');
        $this->session->unset_userdata('vehicle_type');
        $this->session->unset_userdata('vehicle_seats');

    }
    public function SingleTrip()
    {
        $user_data = $this->session->userdata('user_logged_in');
        $client_phone = $user_data['phone'];
        $tripType = $this->session->userdata('tripType');
        $vehicle_type = $this->session->userdata('vehicle_type');
        $vehicle_seats = $this->session->userdata('vehicle_seats');
        $vehicle_name =$tripType['vehicle_name'];
        $driver =$tripType['driver'];
        $trip_type =$tripType['trip_type'];
        $format = "Y-m-d H:i:s";
        $timezone  = 4;
        $date= gmdate($format,time()+ 3600*($timezone+date("I")));

        $this->load->model('trip');
        $data = array(
            'vehicle_name' => $vehicle_name,
            'vehicle_type'=> $vehicle_type,
            'driver' => $driver,
            'vehicle_seats' => $vehicle_seats,
            'trip_type' => $trip_type,
            'destination'=>$this->input->post('destination'),
            'location_pickup'=>$this->input->post('pickup_location'),
            'start_date'=>$this->input->post('start_date'),
            'end_date'=> "N/A",
            'time_pickup'=>$this->input->post('pickup_time'),
            'time_drop'=> "N/A",
            'trip_status'=>"Pending",
            'client_phone'=> $client_phone,
            'timestamp'=> $date

        );
        $this->trip->Trip_details($data);

        $user_namee['user_name'] = $this->session->userdata('user');
        $this->load->view('client/header_after_login',$user_namee);
        $this->load->view('client/plan_trip_success');
        $this->load->view('template/footer');
        $this->session->unset_userdata('tripType');
        $this->session->unset_userdata('vehicle_type');
        $this->session->unset_userdata('vehicle_seats');

    }


}
?>