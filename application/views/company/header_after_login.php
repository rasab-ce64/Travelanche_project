<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Travelanche</title>
	
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
</head><!--/head-->

<body class="homepage">

    <header id="header">

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo" style="width:115px;height:52px;"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class = "active"><a href="<?php echo site_url('company_Logged_in/my_Trips'); ?>" >Trips</a> </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo "My Bids"; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('company_logged_in/my_Pending_Bids'); ?>">Pending Bids</a></li>
                                <li id="logout"><a href="<?php echo site_url('company_logged_in/my_Accepted_Bids'); ?>">Accepted Bids</a><li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo "My Account"; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Drivers</a></li>
                                <li id="logout"><a href="#">Vehicles</a><li>
                                <li><a href="<?php echo site_url('Home/add_driver'); ?>">Add Drivers</a></li>
                                <li><a href="<?php echo site_url('Home/add_vehicle'); ?>">Add Vehilces</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php  echo $user_name; ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li id="logout"><a href="<?php echo site_url('company_login/logout'); ?>"><em>Logout</em></a><li>
                            </ul>
                        </li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->