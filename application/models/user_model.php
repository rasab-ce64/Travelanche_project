<head>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>

<?php

class User_model extends CI_model{

    public function _construct(){
        parent::_construct();
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->database();
    }
    public function insert_data()
    {
        $this->load->library('form_validation');
        if (isset($_POST['submit'])) {
                $f_name = $_POST['first_name'];
                $l_name = $_POST['last_name'];
                $city = $_POST['city'];
                $pass = $_POST['password'];
                $phone = $_POST['phone'];
                $sql = "INSERT INTO users(first_name, last_name, city, pass, phone)
                          VALUES('$f_name','$l_name','$city','$pass','$phone')";
                $this->db->query($sql);
        }
    }

    public function fetch_data($phone,$pass){
        
        $this->db->where('phone', $phone);
        $this->db->where('pass', $pass); 
        $this->db->limit(1);
        $query = $this->db->get('users');
        if ($query-> num_rows() > 0) {
            return true;
        }
        else{
            return false;
            }
    }

    public function user_name()
    {
        $user_data = $this->session->userdata('user_logged_in');
        $phone = $user_data['phone'];
        $this->db->where('phone', $phone);
        $query = $this->db->get('users');
        $data = $query->result();
        return $data;
    }

    public function check_phone($phone){

        if (isset($_POST['phone'])) 
       //  $phone = $_POST['phone'];
         $this->db->where('user_phone', $phone);
         $query = $this->db->get('users');
         $data = $query->result();      
         foreach ($data as $row)
         {   
             $code = $row->user_phone;
             if( $code == NULL)
             return false;
             else 
             return true; 
         }
     }

    public function update_otp($phone,$otp){

        $this->db->where('otp' , $otp);
        $this->db->where('user_phone', $phone);
        $sql = "UPDATE users SET otp = $otp WHERE user_phone = $phone ";
        $this->db->query($sql);
    }

    public function check_otp($otp){

        $phone = $this->session->userdata('user_fone');
        echo $phone;
        $this->db->where('user_phone',$phone);        
        $this->db->where('otp' , $otp);
        $query = $this->db->get('users');
        $data = $query->result();
        return $data;
    }

    public function update_pwd($pwd,$phone){
        $this->db->where('pass', $pwd);
        $sql = "UPDATE users SET pass = '$pwd' WHERE user_phone = $phone ";
        $this->db->query($sql);
    }

}
?>