<?php

define('SMSUSER','Fatima123');
define('PASSWORD','123456789');
class Forgot_pass extends CI_controller{
    
    public function _construct(){
        parent::_construct();
        $this->load->helper(array('url' , 'form' , 'cookie'));
        $this->load->library(array('session' ,'form_validation'));
        $this->load->model('company/company_model');
    }

    public function forgot_user(){
        $this->load->view('template/header');
        $this->load->view('client/forgot_pass');
        $this->load->view('template/footer');
        
    }
    public function forgot_company(){
        $this->load->view('template/header');
        $this->load->view('company/forgot_pass');
        $this->load->view('template/footer');
        
    }

    public function code_user(){
        $this->load->view('template/header');
        $this->load->view('client/code');
    }
    public function code_company(){
        $this->load->view('template/header');
        $this->load->view('company/code');
    }


    public function send_code_user(){

        $this->load->model('user_model');
        $phone = $this->input->post('phone');
        $this->session->set_userdata('user_fone',$phone);
        $var = $this->user_model->check_phone($phone);
        if($var==true)
        {
            $otp = rand(100000, 999999);
            /* sending generated code to database */ 
            $this->user_model->update_otp($phone,$otp);
            $sms_content = "Your Password reset code for Travelanche is ".$otp;
            echo $sms_content;
            /* Encoding the text in url format */
            $sms_text = urlencode($sms_content); 
            //$api_url='https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0?username='.SMSUSER.'&password='.PASSWORD.'&message='.$sms_text.'&msisdn='.$phone.''; 
            //$response = file_get_contents($api_url); //Envoking the API url and getting the response
            //echo $response;
            //echo "Code has been sent to your phone! Please enter to proceed";
            $this->load->view('template/header');
            $this->load->view('client/code'); //view to enter code
            $this->load->view('template/footer');
        }
        else 
        {
            echo "phone number does not exist";
            redirect('forgot_pass/forgot_user' , 'refresh');
        }
    }
    public function send_code_company(){
        
        $this->load->model('company/company_model');
        $phone = $this->input->post('phone');
<<<<<<< HEAD
        $this->session->set_userdata('company_fone',$phone);
=======
        $this->session->set_userdata('fone',$phone);

>>>>>>> 2036c678f82a4d40405a4507f5baac4e51d4a725
        $var = $this->company_model->check_phone($phone);
        if($var==true)
        {
            $otp = rand(100000, 999999);
            /* sending generated code to database */ 
            $this->company_model->update_otp($phone,$otp);
            $sms_content = "Your Password reset code for Travelanche is ".$otp;
            echo $sms_content;
            /* Encoding the text in url format */
            $sms_text = urlencode($sms_content); 
            //$api_url='https://bulksms.vsms.net/eapi/submission/send_sms/2/2.0?username='.SMSUSER.'&password='.PASSWORD.'&message='.$sms_text.'&msisdn='.$phone.''; 
            //$response = file_get_contents($api_url); //Envoking the API url and getting the response
            //echo $response;
            //echo "Code has been sent to your phone! Please enter to proceed";
            $this->load->view('template/header');
            $this->load->view('company/code'); //view to enter code
        }
        else 
        {
            echo "phone number does not exist" ;
            redirect('forgot_pass/forgot_company' , 'refresh');
        }
    }


    public function check_code_user(){

    if(isset($_POST['submit']))
    {
        $code = $_POST['code'];
        $this->load->model('user_model');
        $sms_code = $this ->user_model->check_otp($code);
        foreach($sms_code as $row)
        {
            //echo $row->otp;    
            if($code == $row->otp)
            {
                $data['phone']= $row->phone;
                $this->load->view('template/header');
                $this->load->view('client/reset_pwd',$data);
            }
            else
            {
                redirect('forgot_pass/code_user', 'refresh');
            }
        }
    }
}
    public function check_code_company(){

        if(isset($_POST['submit']))
        {
            $code = $_POST['code'];
            $this->load->model('company/company_model');
            $sms_code = $this ->company_model->check_otp($code);
            foreach($sms_code as $row){
                if($code == $row->otp)
                {
                    $data['phone']=$row->phone;
                    $this->load->view('template/header');
                    $this->load->view('company/reset_pwd',$data);
                }
                else
                {
                    redirect('forgot_pass/code_company', 'refresh');
                }
            }
        }
    }

public function reset_user(){

    if(isset($_POST['submit'])){
        $new_pass = $_POST['new_pass'];
        $phone = $_POST['phone'];
        $rep_pass = $_POST['rep_pass'];
        $this->load->model('user_model');
        $this->user_model->update_pwd($new_pass, $phone);
        $this->load->view('pwd_reset_success');
    }
}
public function reset_company(){

    if(isset($_POST['submit'])){
        $new_pass = $_POST['new_pass'];
        $phone = $_POST['phone'];
        $rep_pass = $_POST['rep_pass'];
        $this->load->model('company/company_model');
        $this->company_model->update_pwd($new_pass, $phone);
        $this->load->view('pwd_reset_success');
    }
}

}
?>