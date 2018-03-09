<?php

class Add_vehicle extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('company/add_vehicle', array('error' => ' '));
        $this->load->view('template/footer');
    }

    public function vehicle()
    {
        $comp_data = $this->session->userdata('company_logged_in');
        $phone = $comp_data['phone'];

        $vehicle_name = $this->input->post('driver_name');
        $vehicle_model = $this->input->post('driver_phone');
        $vehicle_number = $this->input->post('driver_cnic');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 100;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload(array('image1', 'image2' , 'image3' , 'image4')))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('company/add_driver', $error);
        }
        else {

            $image_data = $this->upload->data();

                $data = array(
                    'driver_name' => $vehicle_name,
                    'driver_phone' => $vehicle_model,
                    'driver_cnic' => $vehicle_number,
                    'image_1' => $image_data['full_path'],
                    'image_2' => $image_data['full_path'],
                    'image_3' => $image_data['full_path'],
                    'image_4' => $image_data['full_path'],
                    'company' => $phone,
                );
                $this->load->model('company/company_model');
                $this->company_model->add_vehicle($data);
                $this->load->view('template/header');
                $this->load->view('company/add_vehicle_success');
            }
    }
}
?>