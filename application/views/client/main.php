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

<<<<<<< HEAD
<body class="container" >
=======
<body>
>>>>>>> 75571b9135415e91d2ca2d53c008ba7637da0d1d
<h1 style="text-align: center; color:#000000; font-size: 2em">Travelanche</h1>
<h2 style="text-align: center; color: #000000;" >Choose your relevant vehicle for your trip</h2> <br> <br>
<div class="center" >

    <div class="row" >
        <div class="col-lg-4">
            <img style="width: 180px;" src="<?php echo base_url('assets/images/char.png');?>">
            <br><br>
            <a type="button" class="btn btn-default" href="<?php echo site_url('PlanTrip/carBooking'); ?>" >Book a Car</a>
        </div>

        <div class="col-lg-4">
            <img style="width: 180px" src="<?php echo base_url('assets/images/pan.png');?>">
            <br><br>
            <a type="button" class="btn btn-default" href="<?php echo site_url('PlanTrip/vanBooking'); ?>" >Book a Van</a>
        </div>

        <div class="col-lg-4">
            <img style="width: 180px" src="<?php echo base_url('assets/images/bus.png');?>">
            <br><br>
            <a type="button" class="btn btn-default" href="<?php echo site_url('PlanTrip/coasterBooking'); ?>" >Book a Coaster</a>
        </div>

    </div>

</div>

</body>
</html>

