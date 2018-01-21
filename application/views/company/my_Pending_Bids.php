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
.btn{
    width: 20%;
    background-color: #ba0710;
    color: #ffffff;
}
</style>

<body>
<section>
    <div class="container wow fadeInUp">
        <div class="row">
            <?php foreach($bids as $row) { ?>
            <div class="col-sm-12">
                <div class="panel panel_default">
                    <div class="panel-body">

                        <div class="col-lg-6">
                            <h1 style="color: #000000">Trip Details</h1>
                            <p><strong>Destination: &nbsp; </strong><?php echo $row->destination; ?> </p>
                            <p><strong>Pickup Location: &nbsp; </strong><?php echo $row->location_pickup; ?> </p>
                            <p><strong>Vehicle: &nbsp; </strong> <?php echo $row->vehicle; ?> </p>
                            <p><strong>Start Date: &nbsp; </strong><?php echo $row->start_date; ?></p>
                            <p><strong>End Date: &nbsp; </strong> <?php echo $row->end_date; ?> </p>
                            <p><strong>Pickup Time: &nbsp; </strong> <?php echo $row->time_pickup; ?></p>
                            <p><strong>Drop Time: &nbsp; </strong> <?php echo $row->time_drop; ?> </p>

                            <label class="checkbox-inline">
                                <input type="checkbox" onclick="return false" value="checked" <?php if($row->diver==1) echo "checked" ; ?> >Driver
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" onclick="return false" value="checked" <?php if($row->ac==1) echo "checked" ; ?>>AC
                            </label>
                        </div>

                        <div class="col-lg-6">
                            <h1 style="color: #000000">Bid details</h1>
                            <p><strong>Vehicle &nbsp; </strong><?php echo $row->vehicle; ?> </p>
                            <p><strong>Rate/day &nbsp; </strong><?php if($row->rate_per_day ==0) {echo "N/A"; } else{echo $row->rate_per_day; } ?> </p>
                            <p><strong>Total Fare &nbsp; </strong> <?php if($row->total_fare ==0) {echo "N/A"; } else{echo $row->total_fare; } ?> </p>
                            <label class="checkbox-inline">
                                <input type="checkbox" onclick="return false" value="checked" <?php if($row->diver==1) echo "checked" ; ?> >Driver
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" onclick="return false" value="checked" <?php if($row->ac==1) echo "checked" ; ?>>AC
                            </label>
                            <br>
                            <br>
                            <a type="submit" href="<?php echo site_url(""); ?>"  class="btn btn-sm" name="bid_now" >Edit Bid</a>
                            <a type="submit" href="<?php echo site_url(""); ?>" class="btn btn-sm" name="bid_now" >Delete Bid</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

</body>
</html>