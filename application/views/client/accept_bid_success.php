<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jumbotron.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png'); ?> ">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png'); ?> ">
</head><!--/head-->

<style>
    strong{
        color: #ba0710;
    }
    .btn{
        width: 16%;
        height: 8%;
        background-color: #ba0710;
        color: #ffffff;
    }
    .btn:hover {
        border: 0.3px solid #ba0710;
        background-color: #fff !important;
        color: #ba0710;
    }
    .centered {
        position: absolute;
        top: 40%;
        left: 35%;
        font-size: 2em;
        color: white;
        transform: translate(-50%, -50%);
    }
    #bid_more {
        position: absolute;
        top: 52%;
        left: 14%;
        font-size: 1.5em;
        transform: translate(-50%, -50%);
    }
</style>

<body>
<img class="img-responsive" style="width:100%; height:550px;" src="<?php echo base_url('assets/images/bid1.jpg'); ?>" > </img>
<p class="centered">You have accepted client Bid. your client will be notified through.</p>
<a type="submit" id="bid_more" href="<?php echo site_url('company_logged_in/my_Pending_Bids'); ?>"  class="btn btn-md" name="bid_now" >Accept More Bids</a>
</body>
</html>