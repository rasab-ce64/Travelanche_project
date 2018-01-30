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
        .btn{
            width: 70%;
        }
        #lambsamb,#bachat{
            width: 50%;
            background-color: #ba0710;
        }
        .h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }
        .panel {
            border-radius:0 !important;
            border: 1px solid #ba0710;
            transition: box-shadow 0.5s;
        }
        .panel:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        .panel-footer .btn:hover {
            border: 1px solid #ba0710;
            background-color: #fff !important;
            color: #ba0710;
        }
        .panel-heading {
            color: #ffffff;
            background-color: #ba0710 !important;
            padding: 0.5px;
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
            color: #ffffff;
            font-size: 14px;
        }
        .panel-footer .btn {
            margin: 5px 0;
            background-color: #ba0710;
            color: #fff;
        }
    </style>

<body>
<div>
    <h2 style="text-align: center;">My Trips</h2>
    <hr>
</div>

<div class="container fadeInUp">
    <div class="row">
        <?php foreach($result as $row) { ?>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <!-- panel heading-->
                <div class="panel-heading">
                    <h2 style="color: #ffffff; font-size: 2em; "><?php echo $row->destination; ?></h2>
                    <h3 style="color: #ffffff; ">Post Date:
                        <?php
                        $timestamp = $row->timestamp;
                        $data_arr = explode(" ", $timestamp);
                        $date = $data_arr[0];
                        $newDate = date("d-M-Y" , strtotime($date));
                        echo $newDate;
                        ?>
                    </h3>
                </div>
                <!--panel body-->
                <div class="panel-body">
                    <p><strong>Pickup Location: &nbsp; </strong><?php echo $row->location_pickup; ?></p>
                    <p><strong>Start Date: &nbsp; </strong><?php echo $row->start_date; ?></p>
                    <p><strong>End Date: &nbsp; </strong> <?php echo $row->end_date; ?> </p>
                    <p><strong>Pickup Time: &nbsp; </strong> <?php echo $row->time_pickup; ?></p>
                    <p><strong>Drop Time: &nbsp; </strong> <?php echo $row->time_drop; ?> </p>
                    <p><strong>Vehicle: &nbsp; </strong> <?php echo $row->vehicle; ?> </p>

                    <label class="checkbox-inline">
                        <input type="checkbox" onclick="return false" value="checked" <?php if($row->diver==1) echo "checked" ; ?> >Driver
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" onclick="return false" value="checked" <?php if($row->ac==1) echo "checked" ; ?>>AC
                    </label>
                </div>

                <!--panel footer-->
                <div class="panel-footer">
                    <h4 style="color: #000000">trip ID: <?php echo $row->id; ?></h4>
                    <h3>Total Bids: <?php  echo $row->bids_on_trip; ?> </h3>
                    <a type="submit" href="<?php echo site_url("Home/bachat/$row->id"); ?>"  class="btn btn-md" name="bid_now" >Bid by Bachat</a>
                    <a type="submit" href="<?php echo site_url("Home/lambSamb/$row->id"); ?>" class="btn btn-md" name="bid_now" >Bid by LambSamb</a>
<<<<<<< HEAD
                    <input type="button" class="btn btn-md" name="bid_now" value="Bids on Trip <?php echo $row->bids_on_trip ?> " onclick="window.location='<?php echo site_url("company_logged_in/bids_By_Other_Companies/$row->id");?>'">
=======

                    <input type="button" class="btn btn-md" name="bid_now" value="Bids on Trip <?php echo $row->bids_on_trip ?> " data-toggle="modal" data-target="#modal" onclick="window.location='<?php echo site_url("company_logged_in/bids_By_Other_Companies/$row->id");?>'">


<!--                    <a type="button" class="btn btn-md" name="bid_now" data-toggle="modal" data-target="#modal" >Bid Now</a>-->
<!--                    <a type="button" class="btn btn-md" name="bid_now"  onclick="window.location='<?php echo site_url("company_logged_in/bids_By_Other_Companies/$row->id");?>'">Bids on Trip</a>
                    <input type="button" class="btn btn-md" name="bid_now" value="Bids on Trip <?php echo $row->bids_on_trip ?> " data-toggle="modal" data-target="#modal" onclick="window.location='<?php echo site_url("company_logged_in/bids_By_Other_Companies/$row->id");?>'">
  -->                  <input type="hidden" name="t_id" value="<?php echo $row->id; ?>"/>
>>>>>>> 8b0e8d8761f60ed359c7851117e439b29602ab52
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!--<div class="modal fade" id="modal" aria-hidden="true" role="dialog" tabindex="-1">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <button type="button" aria-hidden="true" class="close" data-dismiss="modal">&times;</button>-->
<!--                <h4 class="modal-title">Choose Bidding Type</h4>-->
<!--            </div>-->
<!---->
<!--            <div class="modal-body">-->
<!--                <button type="button" style="background-color: #ba0710; color: #ffffff; .btn{width: 30%;}; " class="btn btn-sm">Bachat Package</button> <br>-->
<!--                <br>-->
<!--                <button type="button" style="background-color: #ba0710; color: #ffffff" class="btn btn-sm">LambSamb Package</button>-->
<!--            </div>-->
<!--            <div class="modal-footer">-->
<!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

</body>
</html>
