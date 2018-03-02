
<?php

class Add_driver extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $this->load->view('company/driver', array('error' => ' ' ));
    }

    public function do_upload()
    {
//        $comp_data = $this->session->userdata('company_logged_in');
//        $phone = $comp_data['phone'];
//
//        $driver_name = $this->input->post('driver_name');
//        $driver_phone = $this->input->post('driver_phone');
//        $driver_cnic = $this->input->post('driver_cnic');
//        $driver_license = $this->input->post('driver_license');

        $config['upload_path']   = '.assets/images/uploads/';
        $config['allowed_types']   = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('company/driver', $error);
        }
        else
        {
//            $data = array('upload_data' => $this->upload->data());
            $this->load->model('company/company_model');
            $data = array(
//                'driver_name' => $driver_name,
//                'driver_phone' => $driver_phone,
//                'driver_cnic' => $driver_cnic,
//                'driver_licenseNo' => $driver_license,
                'driver_picture' => array('upload_data' => $this->upload->data()),
//                'company' => $phone,
            );
            $this->company_model->add_driver($data);
            $this->load->view('template/header');
            $this->load->view('company/driver_added_success', $data);
        }
    }
}
?>