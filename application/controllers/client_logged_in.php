<?php

class client_Logged_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form'); //loading form helper
        $this->load->helper('url'); //loading url helper
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('user_model');
    }

    public function choice()
    {
        $this->load->model('trip');
        //function call from model
        $user['vehicle_type'] = $this->trip->Vehicle_type();
        $user['city'] = $this->trip->City();
        $user['destination'] = $this->trip->Destination();
        $user['pickup_location'] = $this->trip->Pickup_location();
        $user_namee['user_name'] = $this->session->userdata('user');
        $this->load->view('template/header_after_login',$user_namee);
        $this->load->view('client/plan_a_trip',$user);
       // $this->load->view('template/header');
        //$this->load->view('Login/plan_a_trip');
        $this->load->view('template/footer');
    }

    public function trip_info()
    {
        $this->load->model('trip');
        $this->trip->Trip_details(); //function call from model
        $user_namee['user_name'] = $this->session->userdata('user');
        $this->load->view('template/header_after_login',$user_namee);
        $this->load->view('success');
        $this->load->view('template/footer');   
    }
    
    public function my_Trips()
    {
        $this->load->model('trip');
        $user_trips['trips'] = $this->trip->My_trips(); //function call from model
        $user_namee['user_name'] = $this->session->userdata('user');
        $this->load->view('template/header_after_login',$user_namee);
        $var =0;
      //  foreach($user_trips as $row)
        //{
          //  $var= $var+1;

            $this->load->view('client/My_trips',$user_trips);

       // }
       // echo   $var;
       // $this->load->view('Login/trip_view',$user_trips);
        $this->load->view('template/footer');
    }
    public function bids_On_Trip($id)
    {
        $this->session->set_userdata('trip_id',$id);
        $user['user_name'] = $this->session->userdata('user');
        $this->load->model('trip');
        $bids['id'] = $this->trip->bids_On_Trip($id);
        $this->load->view('template/header_after_login',$user);
        $this->load->view('client/bids_By_Rentals',$bids);
        $this->load->view('template/footer');

    }

    public function user_Accepted_Bid($id)
    {
        $trip_id = $this->session->userdata('trip_id');
        echo $trip_id;
        $user['user_name'] = $this->session->userdata('user');
        $this->load->view('template/header_after_login',$user);
        echo $id;
        $this->load->view('client/user_Accepted_Bid');
        $this->load->view('template/footer');

    }
    public function edit_Trip($trip_id)
    {
        $this->load->model('trip');
        $trip_data['trips'] = $this->trip->edit_Trip($trip_id);
        $this->load->view('template/header');
        $this->load->view('client/edit_Trip',$trip_data);
        $this->load->view('template/footer');
    }
    public function del_Trip($trip_id)
    {
        $this->load->model('trip');
        $this->trip->del_Trip($trip_id);
        redirect('client_logged_in/my_Trips');
       // $this->load->view('Login/del_Trip');
    }
    
    public function update_Data($trip_id)
    {
       $this->load->model('trip');

        $data = array(
            'destination' => $this->input->post('destination'),
            'vehicle' => $this->input->post('vehicle'),
            'location_pickup' => $this->input->post('pickup_location'),
            'start_date' => $this->input->post('start_date'),
            'end_date' => $this->input->post('end_date'),
            'time_pickup' => $this->input->post('pickup_time'),
            'time_drop' => $this->input->post('drop_time'),
            'user_city' => $this->input->post('city'),
            'trip_description' => $this->input->post('trip_disc')

        );
        $this->trip->update_Data($trip_id,$data);
    }
}
?>