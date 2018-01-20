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

    public function forgot(){
        $this->load->view('template/header');
        $this->load->view('forgot_pass');
<<<<<<< HEAD
=======
        $this->load->view('template/footer');
        
>>>>>>> b3611731b4ed26d218680edbe6b4bad0c36f31da
    }
    public function code(){
        $this->load->view('template/header');
        $this->load->view('code');
    }

    public function send_code(){
        $user = $this->session->userdata('client_or_company'); 
        if($user==2)
        {
            $this->load->model('company/company_model');
            $phone = $this->input->post('phone');
            $this->session->set_userdata('fone',$phone);
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
                $this->load->view('code'); //view to enter code
            }
            else 
            {
            echo "phone number does not exist" ;
            redirect('forgot_pass/forgot' , 'refresh');
            }
        }

<<<<<<< HEAD
         $this->load->model('company/company_model');
         $phone = $this->input->post('phone');
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
             $this->load->view('code'); //view to enter code
         }
         else {
            redirect('forgot_pass/forgot' , 'refresh');
=======
        if($user==1)
        {
            $this->load->model('user_model');
            $phone = $this->input->post('phone');
            $this->session->set_userdata('fone',$phone);
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
                $this->load->view('code'); //view to enter code
                $this->load->view('template/footer');
            }
            else 
            {
                echo "phone number does not exist";
                redirect('forgot_pass/forgot' , 'refresh');
            }
        }
>>>>>>> b3611731b4ed26d218680edbe6b4bad0c36f31da
    }

public function check_code(){

<<<<<<< HEAD
    if(isset($_POST['submit'])){
        
        $code = $_POST['code'];
        $this->load->model('company/company_model');
        $sms_code = $this ->company_model->check_otp($code);
        var_dump($sms_code);
         if($code == $sms_code[0]['otp']){
             $data['phone']= $sms_code[0]['phone'];
             $this->load->view('template/header');
            $this->load->view('reset_pwd',$data);
         }
         else{
            $sms_code = $this ->company_model->check_otp($code);
         redirect('forgot_pass/code', 'refresh');
         }
=======
    $user = $this->session->userdata('client_or_company'); 
    if(isset($_POST['submit']))
    {
        $code = $_POST['code'];
        if($user ==2)
        {
            $this->load->model('company/company_model');
            $sms_code = $this ->company_model->check_otp($code);
            foreach($sms_code as $row){
                if($code == $row->otp)
                {
                    $data['phone']=$row->phone;
                    $this->load->view('template/header');
                    $this->load->view('reset_pwd',$data);
                }
                else
                {
                    redirect('forgot_pass/code', 'refresh');
                }
            }
        }
        if($user ==1)
        {
            $this->load->model('user_model');
            $sms_code = $this ->user_model->check_otp($code);
            foreach($sms_code as $row)
            {
                //echo $row->otp;
                if($code == $row->otp)
                {
                    $data['phone']= $row->phone;
                    $this->load->view('template/header');
                    $this->load->view('reset_pwd',$data);
                }
                else
                {
                    redirect('forgot_pass/code', 'refresh');
                }
            }
      }

>>>>>>> b3611731b4ed26d218680edbe6b4bad0c36f31da
    }
}
public function reset(){

    $user = $this->session->userdata('client_or_company'); 
    if(isset($_POST['submit'])){
        $new_pass = $_POST['new_pass'];
        $phone = $_POST['phone'];
        $rep_pass = $_POST['rep_pass'];
        if($user == 2)
        {
            $this->load->model('company/company_model');
            //if($new_pass == $rep_new
            $this->company_model->update_pwd($new_pass, $phone);
            $this->load->view('pwd_reset_success');
        }
        if($user == 1)
        {
            $this->load->model('user_model');
            //if($new_pass == $rep_new
            $this->user_model->update_pwd($new_pass, $phone);
            $this->load->view('pwd_reset_success');
        }
    }
}

}
?>