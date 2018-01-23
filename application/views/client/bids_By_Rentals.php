<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Bootstrap Theme Company Page</title>
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
        h3 {
            font-weight: 200;
            margin: 70px 0;
        }
        .panel {
            /*border: 1px solid #f4511e;*/
            border-radius:1px !important;
            border: 1px solid #ba0710; !important;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
            /*border: 0.5px solid #ba0710 ;*/
        }
        .panel-heading{
            padding: 1px;
            height: 15%;
            margin-bottom: 15px;
        }
        .panel-body{
            background-color: #ffffff !important;
        }
        .panel-footer{
            background-color: #000000; !important;
            text-align: center;
        }
        .btn{
            color: #ffffff;
            background-color: #ba0710;
            width: 40%;
        }
        .btn:hover{
            background-color: #ffffff;
            color: #ba0710;
            border: 1px solid #ba0710; !important;
        }
    </style>

<body>

<div>
    <h2 style="text-align: center;">Pending bids</h2>
    <hr>
</div>

<div class="container wow fadeInUp">
    <div class="row">
        <?php foreach($id as $row) { ?>
        <div class="col-lg-3">
            <div class="panel">
                <div class="panel-heading">
                    <h3 style="color: #000000; font-size: 1em; "><?php echo $row->company_name; ?></h3>
                    <h4 style="color: #000000; font-size: 1em; ">Post Date:
                        <?php
                        $timestamp = $row->timestamp;
                        $data_arr = explode(" ", $timestamp);
                        $date = $data_arr[0];
                        $newDate = date("d-M-Y" , strtotime($date));
                        echo $newDate;
                        ?>
                    </h4>
                </div>

                <div class="panel-body" style="background-color: #ba0710;">
                    <p><strong>Vehicle: </strong><?php echo $row->vehicle; ?> </p>
                    <p><strong>Rate/dat: </strong><?php echo $row->rate_per_day; ?> &nbsp; Rs/-</p>
                    <p><strong>Total Fare: </strong><?php echo $row->total_fare; ?> &nbsp; Rs/-</p>
                </div>

                <div class="panel-footer">
                    <button style="align-items: center; text-align: center"; title="submit" class="btn btn-sm" onclick="window.location='<?php echo site_url("client_logged_in/user_Accepted_bid/$row->bid_id");?>'">Accept Bid</button> &nbsp;
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</body>

</html>
