<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Our partners</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png'); ?> ">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png'); ?> ">
</head>

<style>
    .container-fluid {
        padding: 60px 50px;
    }
    .btn{
        width: 70%;
    }
    #lambsamb,#bachat{
        width: 50%;
        background-color: #ba0710;
    }
    .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
    }
    .panel {
        /*border: 1px solid #f4511e;*/
        border-radius:0 !important;
        border: 1px solid #ba0710;
        margin-left: 25%;
        width: 50%;
        transition: box-shadow 0.5s;
    }
    .panel:hover {
        box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    }
    .panel-footer .btn:hover {
        /*border: 1px solid #f4511e;*/
        border: 1px solid #ba0710;
        background-color: #fff !important;
        /*color: #f4511e;*/
        color: #ba0710;
    }
    .panel-heading {
        /*color: #fff !important;*/
        color: #ffffff;
        background-color: #ba0710 !important;
        padding: 1px;
        border-bottom: 0px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .panel-footer {
        background-color: white !important;
    }
    .panel-body{
        background-color: #ffffff !important;
    }
    .panel-footer h3 {
        font-size: 32px;
    }
    .panel-footer h4 {
        color: #000000;
        font-size: 14px;
    }
    .panel-footer .btn {
        margin: 5px 0;
        background-color: #ba0710;
        /*background-color: #f4511e;*/
        color: #fff;
    }
    .checked {
        color: orange;
    }
    #testimonials {
        background: #f6f6f6;
        padding: 80px 0;
    }

    #testimonials .profile {
        text-align: center;
    }

    #testimonials .profile .pic {
        border-radius: 50%;
        border: 6px solid #fff;
        margin-bottom: 15px;
        overflow: hidden;
        height: 260px;
        width: 260px;
    }

    #testimonials .profile .pic img {
        max-width: 100%;
    }

    #testimonials .profile h4 {
        font-weight: 700;
        color: #03C4EB;
        margin-bottom: 5px;
    }

    #testimonials .profile span {
        color: #333333;
    }

    #testimonials .quote {
        position: relative;
        background: #fff;
        padding: 60px;
        margin-top: 40px;
        font-size: 16px;
        font-style: italic;
        border-radius: 5px;
    }

    #testimonials .quote b {
        display: inline-block;
        font-size: 22px;
        left: -9px;
        position: relative;
        top: -8px;
    }

    #testimonials .quote small {
        display: inline-block;
        right: -9px;
        position: relative;
        top: 4px;
    }
    .centered {
        position: absolute;
        top: 40%;
        word-spacing: 2px;
        font-size: 25px;
        left: 35%;
        color: white;
        transform: translate(-50%, -50%);
    }
    p{
        word-spacing: 5px;
    }
</style>

<body>

<!--<img class="img-responsive" style="width:100%; height:550px;" src="--><?php //echo base_url('assets/images/bid1.jpg'); ?><!--" > </img>-->
<!--<div class="centered"  style=""><p>Your accepted bids will be those ones which are accepted by either a rental/company or other client. you will-->
<!--get notified when your bid will be accepted</div> </p>-->

<section id="testimonials">
    <h1 style="text-align: center; color: #000000">Your Accepted Bids</h1>
    <div class="container wow fadeInUp">
        <?php foreach($bids as $row) { ?>
            <div class="row">
                <div class="col-md-3">
                    <div class="profile">
                        <div class="pic"><img src="<?php echo base_url('assets/images/dummy_profile.png'); ?>" alt=""></div>
                        <h4><?php echo $row->company_name; ?></h4>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="quote">
                        <strong>Trip Id: &nbsp;</strong> <?php echo $row->client_trip_id;?>
                        <?php echo "<br>"; ?>
                        <strong>Contact no: &nbsp;</strong> <?php echo "+". $row->company_phone;?>
                        <?php echo "<br>"; ?>
                        <strong>Client Contact no: &nbsp;</strong> <?php echo "+". $row->user_phone;?>
                        <?php echo "<br>"; ?>

                        <strong>Rate/Day: &nbsp;</strong> <?php if($row->rate_per_day == 0) { echo "N/A"; } else { echo $row->rate_per_day ." Rs.";} ?>
                        <?php echo "<br>"; ?>
                        <strong>Total Fare: &nbsp;</strong><?php if($row->total_fare == 0) { echo "N/A"; } else { echo $row->total_fare ." Rs.";} ?>
                        <?php echo "<br>"; ?>
                        <strong>Vehicle: &nbsp;</strong> <?php echo $row->vehicle; ?>
                        <?php echo "<br>"; ?>
                        <strong>Accept Date: &nbsp;</strong>
                        <?php
                        $timestamp = $row->timestamp;
                        $data_arr = explode(" ", $timestamp);
                        $date = $data_arr[0];
                        $newDate = date("d-M-Y" , strtotime($date));
                        echo $newDate;
                         ?>
                    </div>
                </div>
            </div>
            <?php echo "<br>"; ?>
        <?php } ?>
    </div>
</section>

</body>
</html>

<?php
//foreach($bids as $row)
//{
//    echo "bid id = ". $row->company_name;
//    echo "<br>";
//    echo "Company Phone = ". $row->company_phone;
//    echo "<br>";
//    echo "time stamp = ". $row->timestamp;
//    echo "<br>";
//    echo "Rate/day = ".$row->rate_per_day;
//    echo "<br>";
//    echo  "client trip id = ".$row->client_trip_id;
//    echo "<br>";
//}
// ?>