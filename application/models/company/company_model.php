<?php

class Company_model extends CI_model
{

    public function _construct()
    {
        parent::_construct();
        $this->load->helper(array('form', 'url', 'form_validation'));
        $this->load->library('session');
        $this->load->database();
    }

    public function signup()
    {
        $this->load->database();
        if (isset($_POST['submit'])) {

            $company_name = $_POST['name'];
            $company_reg_no = $_POST['reg_number'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $contact_person = $_POST['contact_person'];
            $address = $_POST['address'];
            $city = $_POST['city'];
        }

        $sql = "INSERT INTO companies( password, company_name, company_registration_no, phone, address, city, contact_person)
                          VALUES('$password','$company_name','$company_reg_no','$phone', '$address','$city', '$contact_person')";
        $this->db->query($sql);
    }

    public function fetch_data($phone, $password)
    {
        $this->load->database();
        $this->db->where('phone', $phone);
        $this->db->where('password', $password);
        $this->db->limit(1);
        $query = $this->db->get('companies');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function check_phone($phone)
    {
        $this->load->database();
        if (isset($_POST['phone']))
            $phone = $_POST['phone'];

        $this->db->where('phone', $phone);
        $query = $this->db->get('companies');
        $data = $query->result();
        foreach ($data as $row) {
            $code = $row->phone;
            if ($code == NULL)
                return false;
            else
                return true;
        }
    }

    public function update_otp($phone, $otp)
    {
        $this->db->where('otp', $otp);
        $this->db->where('phone', $phone);
        $sql = "UPDATE companies SET otp = $otp WHERE phone = $phone ";
        $this->db->query($sql);
    }

    public function check_otp($otp)
    {
        $phone = $this->session->userdata('fone');
        $this->load->database();
        $this->db->where('otp', $otp);
        $this->db->where('phone',$phone);        
        $query = $this->db->get('companies');
        $data =$query->result();
        return $data;
    }

    public function update_pwd($pwd, $phone)
    {
        $this->load->database();
        $this->db->where('password', $pwd);
        $sql = "UPDATE companies SET password = '$pwd' WHERE phone = $phone ";
        $this->db->query($sql);
    }

    public function My_trips()
    {
        $this->load->database();
        $query = $this->db->get('trip');
        return $result = $query->result();
    }

    public function add_driver(){

        $this->load->database();
        if (isset($_POST['add_driver'])) {

            $phone = $this->session->userdata('phone'); // matching user phone with session
            $this->db->where('phone' , $phone);

            $driver_name = $_POST['driver_name'];
            $driver_phone = $_POST['driver_phone'];
            $driver_cnic = $_POST['driver_cnic'];
            $driver_license = $_POST['driver_license'];
            $photo = $_POST['file_nm'];
        }

        $sql = "INSERT INTO company_drivers( driver_name, driver_phone, driver_cnic, driver_licenseNo, driver_picture, company)
                          VALUES('$driver_name','$driver_phone','$driver_cnic','$driver_license','$photo' , $phone)";
        $this->db->query($sql);
    }

    public function add_vehicle(){

        $this->load->database();
        if (isset($_POST['add_vehicle'])) {

            $phone = $this->session->userdata('phone'); // matching user phone with session TO INSERT FOREIGN KEY
            $this->db->where('phone' , $phone);

            $vehicle_name = $_POST['name'];
            $vehicle_number = $_POST['number'];
            $vehicle_model = $_POST['model'];
            $vehicle_photo = $_POST['file_nm'];
        }
        $sql = "INSERT INTO company_vehicles(vehicle_name, vehicle_model, vehicle_number , image , company )
                          VALUES('$vehicle_name' , '$vehicle_model' ,'$vehicle_number', '$vehicle_photo' , $phone)";
        $this->db->query($sql);
    }

    public function dropdown_vehicle()
    {
        $query = $this->db->get('company_vehicles');
        $data =  $query->result();
        return $data;
    }

    public function dropdown_driver(){
        $query = $this->db->get('company_drivers');
        $data = $query->result();
        return $data;
    }

    public function bid_by_rental()
    {
        $this->load->database();
        $trip_id = $this->session->userdata('trip_id');
        $company_name = $this->session->userdata('user');        
        $this->db->where('id',$trip_id);
        $query=$this->db->get('trip');
        $data =$query->result();
        foreach($data as $row)
        {
            $client_phone =$row->user_phone;
        }
        if (isset($_POST['bid_by_bachat'])) {

           // $trip_id = $this->uri->segment(3);
            $vehicle = $this->input->post('vehicle');
            $driver = $this->input->post('driver');
            $rate_per_day = $this->input->post('rate_per_day');
            $total_fare = $this->input->post('total_fare');
            $curr_timestamp = date("Y-m-d h:i:sa ");
            $user_data = $this->session->userdata('logged_in');
            $company_phone = $user_data['phone'];
            
            $sql = "INSERT INTO bids_by_rentals(company_name,company_phone, vehicle, driver, rate_per_day, total_fare,client_phone, trip_id, timestamp)
                   VALUES('$company_name' , '$company_phone', '$vehicle', '$driver' , '$rate_per_day' ,'$total_fare','$client_phone' , '$trip_id' , '$curr_timestamp')";

            $this->db->query($sql);
        }
    }
    public function my_Pending_Bids()
    {
         $company_data = $this->session->userdata('logged_in');
         $company_phone = $company_data['phone'];
         echo $company_phone;     
        // $sql = "SELECT bid.bid_id,bid.vehicle,bid.rate_per_day,bid.total_fare,trip.destination,trip.vehicle,trip.start_date,trip.end_date,trip.time_pickup,trip.time_drop,trip.location_pickup,trip.diver,trip.ac,trip.bids_on_trip,
        // bid.vehicle_image,bid.timestamp,trip.timestamp,trip.user_phone,trip.id from bids_by_rentals as bid
        // LEFT JOIN  trip
        // ON bid.trip_id=trip.id AND trip.trip_status='Pending'
        // WHERE bid.company_phone='$company_phone' ORDER BY bid.timestamp DESC";
        // $data= $this->db->query($sql);
        $this->db->select('*');
        $this->db->from('bids_by_rentals');
        $this->db->join('trip', 'trip.id = bids_by_rentals.trip_id');
        $this->db->where(array('bids_by_rentals.company_phone' => $company_phone) );
        $this->db->where('trip.trip_status' , 'Pending' );
 
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function get_bids($id){

        $id = $this->uri->segment(3);
        $this->load->database();
        $this->db->select('*');
        $this->db->from('bids_by_rentals');
        $this->db->where($id);
        $query = $this->db->get();
        $this->db->limit(1);
        if($query -> result() ){
            return $query->result();
        }
        else
        {
            return false;
        }
    }
    public function user_name(  )
    {
        $user_data = $this->session->userdata('logged_in');
        $phone = $user_data['phone'];
        $this->db->where('phone', $phone);
        $query = $this->db->get('companies');
        $data = $query->result();
        return $data;

    }
 public function companies()
 {
        $query = $this->db->get('companies');
        $data = $query->result();
        return $data;

 }   

}
?>