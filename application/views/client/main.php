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
        border:1px solid #ffffff;
        margin:10px;
        background-color: #ba0710;
        border-radius: 5px;
        color: #ffffff;
    }
    a.btn-default:hover{
        background-color: #ffffff; !important;
        border: 1px solid #000000;
        color: #ba0710; !important;
    }
ul {
    white-space: nowrap;
}

ul, li {
    list-style: none;
    display: inline;
}

</style>

<body class="container">
<h1 style="text-align: center; color:#000000; font-size: 2em">Travelanche</h1>
<h2 style="text-align: center; color: #000000;" >Choose your relevant vehicle for your trip</h2> <br> <br>
<div class="center">

    <div class="row">
        <div class="col-lg-4">
            <img style="width: 180px;" src="<?php echo base_url('assets/images/char.png');?>">
            <br><br>
            <a type="button" class="btn btn-default" href="<?php echo site_url('client_logged_in/carBooking'); ?>" >Book a Car</a>
        </div>

        <div class="col-lg-4">
            <img style="width: 180px" src="<?php echo base_url('assets/images/van.png');?>">
            <br><br>
            <a type="button" class="btn btn-default" href="<?php echo site_url('client_logged_in/vanBooking'); ?>" >Book a Van</a>
        </div>

        <div class="col-lg-4">
            <img style="width: 180px" src="<?php echo base_url('assets/images/bus.png');?>">
            <br><br>
            <a type="button" class="btn btn-default" href="<?php echo site_url('client_logged_in/coasterBooking'); ?>" >Book a Coaster</a>
        </div>

    </div>
<<<<<<< HEAD
    <ul>
        <li><a href="<?php echo site_url('client_logged_in/carBooking'); ?>">  <img src="<?php echo base_url('assets/images/car.jpg'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"></a></li>
        <li><a href="<?php echo site_url('client_logged_in/vanBooking'); ?>">  <img src="<?php echo base_url('assets/images/van.png'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>
        <li><a href="<?php echo site_url('client_logged_in/coasterBooking'); ?>">  <img src="<?php echo base_url('assets/images/car.jpg'); ?>" class="img-circle" alt="Cinque Terre" width="304" height="236"> </a></li>
    </ul>

=======
>>>>>>> a9b09b8377c20c435742a8fe000424588ed6335c
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
