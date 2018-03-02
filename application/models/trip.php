<?php

class Trip extends CI_model
{

    public function _construct()
    {
        parent::_construct();
        $this->load->helper(array('form', 'url', 'form_validation'));
        $this->load->database();
        $this->load->library('session');
    }

    public function Trip_details()
    {
        $this->load->database();
        $user_data = $this->session->userdata('user_logged_in');
        $phone = $user_data['phone'];
        if (isset($_POST['Enter']))
        {

            $destination = $_POST['destination'];
            $vehicle = $_POST['vehicle'];
            $pickup_location = $_POST['pickup_location'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $pickup_time = $_POST['pickup_time'];
            $drop_time = $_POST['drop_time'];
            $trip_disc = $_POST['trip_disc'];
            $user_city = $_POST['city'];
            $sql = "INSERT INTO trip(destination, vehicle, start_date, end_date, time_pickup, time_drop, trip_description, location_pickup,user_phone,timestamp,user_city,trip_status)
                      VALUES('$destination','$vehicle','$start_date','$end_date','$pickup_time','$drop_time','$trip_disc','$pickup_location','$phone',CURTIME(),'$user_city','Pending')";

            $this->db->query($sql);
            }
            
            
    }
    
    public function My_trips()
    {
        $user_data = $this->session->userdata('user_logged_in');
        $phone = $user_data['phone'];
        $this->db->where('user_phone', $phone);
        $this->db->where('trip_status' ,'Pending');
        $query = $this->db->get('trip');
        $data = $query->result();
        return $data;
    }

    public function My_Accepted_trips()
    {
        $user_data = $this->session->userdata('user_logged_in');
        $phone = $user_data['phone'];
        $this->db->where('user_phone', $phone);
        $this->db->where('trip_status' ,'Bid Completed');
        $query = $this->db->get('trip');
        $data = $query->result();
        return $data;
    }

    public function bids_On_Trip($trip_id){

        $this->db->where('trip_id', $trip_id);
        $query = $this->db->get('bids_by_rentals');
        $data  = $query->result();
        return $data;
    }

    public function user_Accepted_Bid($id)
    {
        $this->db->where('bid_id', $id['bid_id']);
        $query = $this->db->get('bids_by_rentals');
        foreach( $query->result() as $row)
        {
            $data = array(
            'company_name' => $row->company_name,
            'company_phone' => $row->company_phone,
            'vehicle' => $row->vehicle,
            'rate_per_day' => $row->rate_per_day,
            'total_fare' => $row->total_fare,
            'client_phone' => $row->client_phone,
            'client_trip_id' => $row->trip_id,
            'timestamp' => date("Y-m-d h:i:sa ")
            
            );

        }
        $dat= array(
            'trip_status'=> 'Bid Completed'
        );  
        $this->db->where('id',$id['trip_id']);
        $this->db->update('trip', $dat);

        $this->db->insert('accepted_bids_clients', $data);
        $this->db->where('trip_id',$id['trip_id']);
        $this->db->delete('bids_by_rentals');
    }

    public function edit_Trip($trip_id)
    {
        $this->db->where('trip_id', $trip_id);
        $this->db->delete('bids_by_rentals');   

        $this->db->where('id', $trip_id);
        $query = $this->db->get('trip');

        $data = $query->result();
        return $data;
    }

    public function update_Data($trip_id,$data)
      {
          $this-> db-> where('id', $trip_id);
          $this-> db-> update('trip', $data);
      }

    public function del_Trip($trip_id)
    {
        $this -> db -> where('trip_id', $trip_id);
        $this -> db -> delete('bids_by_rentals');
        $this -> db -> where('id', $trip_id);
        $this -> db -> delete('trip');
    }

    public function Trip_data()
    {
        $query = $this->db->get('trip_data');
        $data = $query->result();
        return $data;
    }

    public function Vehicle_type()
    {
        $query = $this->db->get('vehicle_type');
        $data = $query->result();
        return $data;
    }

    public function Destination()
    {
        $query = $this->db->get('destination');
        $data = $query->result();
        return $data;
    }

    public function City()
    {
        $query = $this->db->get('city');
        $data = $query->result();
        return $data;
    }

    public function Pickup_location()
    {
        $query = $this->db->get('pickup_location');
        $data = $query->result();
        return $data;
    }

}
?>