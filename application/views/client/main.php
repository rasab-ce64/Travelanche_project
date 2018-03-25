<?php
$session_data = $this->session->userdata('user_logged_in');
// header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");
?>

<style>
a.btn-default{
    width:100%;
    border:1px solid #111111;
    margin:10px; 
    border-radius: 10px;
    color: #bf0f09;
}
.centered {
    position: absolute;
    top: 35%;
    left: 50%;
    font-size: 4em;
    color: white;
    transform: translate(-50%, -50%);

}
ul {
    white-space: nowrap;
}

ul, li {
    list-style: none;
    display: inline;
}

</style>



    <img class="img-responsive" style="width:100%;  " src="<?php echo base_url('assets/images/cars.jpg'); ?>" > </img>
    <div class="centered"  style="">Travelanche</div>
    <div class=""  style=""><p> travles is beskes dweh</p></div>
                <!-- <a href = "<?php echo site_url('client_logged_in/Choice'); ?>" class = "btn btn-lg btn-success"> Plan a trip </a> -->
<div class="container">

    <ul>
        <li><a href="<?php echo site_url('client_logged_in/carBooking'); ?>">  <img src="<?php echo base_url('assets/images/car.jpg'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"></a></li>
        <li><a href="#">  <img src="<?php echo base_url('assets/images/van.png'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>
        <li><a href="#">  <img src="<?php echo base_url('assets/images/car.jpg'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>
    </ul>
</div>

         <!-- Sidebar -->
    
<!--    <div class="container">-->
<!--    -->
<!--    <h2 style="text-align: center;">Choose Whatever you want</h2>-->
<!--    <hr>-->
<!--    <div class="row">-->
<!--    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --> -->
<!--        <a href="--><?php //echo site_url('client_logged_in/Choice'); ?><!--" type="button" class="btn btn-default btn-lg btn-block" name="plan_a_trip"> Plan a trip</a>-->
<!--        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="share_a_ride"> Share a ride</a>-->
<!--        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="find_a_ride"> Find a ride</a>-->
<!--        <a href="--><?php //echo site_url('client_logged_in/trip_option'); ?><!--" type="button" class="btn btn-default btn-lg btn-block" name="my_trips"> My trips</a>-->
<!--        <a href="--><?php //echo site_url('client_logged_in/companies'); ?><!--" type="button" class="btn btn-default btn-lg btn-block" name="companies"> Companies</a>-->
<!--    </div>-->
<!--    <hr>   -->
<!--</div>-->
<!--    -->
<!---->
<!--  <!--  <div id="profile">-->
<!--        --><?php
//        echo "Hello <b id='welcome'><i>" . $session_data['phone'] . "</i> !</b>";
//        echo "Welcome to Admin Page";
//        ?>
<!--    </div>-->
<!--    <b id="logout"><a href="logout">Logout</a></b>-->
<!--</div>-->
-->
