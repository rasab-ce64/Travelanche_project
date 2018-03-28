<?php
$session_data = $this->session->userdata('user_logged_in');
// header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");
?>

<html>
<head>
    <title>
        Main
    </title>
</head>

<style>
    a.btn-default{
    width:50%;
    border:1px solid #111111;
    margin:10px; 
    border-radius: 5px;
    color: #bf0f09;
}
.centered {
    position: absolute;
    top: 50%;
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

<body>

<!--    <img class="img-responsive" style="width:100%; height: 520px;" src="--><?php //echo base_url('assets/images/Road-Trip.jpg'); ?><!--" > </img>-->
<!--    <div class="centered"  style="">Travelanche</div>-->

<!--                 <a href = "--><?php //echo site_url('client_logged_in/Choice'); ?><!--" class = "btn btn-lg btn-success"> Plan a trip </a>-->

<!--    <ul>-->
<!--        <li><a href="--><?php //echo site_url('client_logged_in/carBooking'); ?><!--">  <img src="--><?php //echo base_url('assets/images/car.jpg'); ?><!--" class="img-circle" alt="Cinque Terre" width="304" height="236"></a></li>-->
<!--        <li><a href="#">  <img src="--><?php //echo base_url('assets/images/van.png'); ?><!--" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>-->
<!--        <li><a href="#">  <img src="--><?php //echo base_url('assets/images/car.jpg'); ?><!--" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>-->
<!--    </ul>-->
<br> <br>
<div class="center" id="main">
    <div class="row">
        <div class="col-lg-4">
            <img style="width: 200px;" src="<?php echo base_url('assets/images/car.png');?>">
            <a type="button" class="btn btn-default" href="<?php echo site_url('client_logged_in/carBooking'); ?>" >Book a Car</a>
        </div>

        <div class="col-lg-4">
            <img style="width: 260px" src="<?php echo base_url('assets/images/van1.png');?>">
            <a type="button" class="btn btn-default" href="<?php echo site_url(''); ?>" >Book a Van</a>
        </div>

        <div class="col-lg-4">
            <img style="width: 235px" src="<?php echo base_url('assets/images/coaster.png');?>">
            <a type="button" class="btn btn-default" href="<?php echo site_url(''); ?>" >Book a Coaster</a>
        </div>

    </div>
    <ul>
        <li><a href="<?php echo site_url('client_logged_in/carBooking'); ?>">  <img src="<?php echo base_url('assets/images/car.jpg'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"></a></li>
        <li><a href="<?php echo site_url('client_logged_in/vanBooking'); ?>">  <img src="<?php echo base_url('assets/images/van.png'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>
        <li><a href="<?php echo site_url('client_logged_in/coasterBooking'); ?>">  <img src="<?php echo base_url('assets/images/car.jpg'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>
    </ul>

</div>

</body>
</html>

         <!-- Sidebar -->
    
<!--    <div class="container">-->
<!--    -->
<!--    <h2 style="text-align: center;">Choose Whatever you want</h2>-->
<!--    <hr>-->
<!--    <div class="row">-->
<!--    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
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
