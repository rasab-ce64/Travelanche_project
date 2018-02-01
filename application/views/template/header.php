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
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyALpBrZOBUJR7jwRe-jR1niW9-CM4K5KZk",
    authDomain: "zubair-f0c10.firebaseapp.com",
    databaseURL: "https://zubair-f0c10.firebaseio.com",
    projectId: "zubair-f0c10",
    storageBucket: "",
    messagingSenderId: "796738553551"
  };
  firebase.initializeApp(config);
  const messaging = firebase.messaging();
  messaging.requestPermission()
  .then(function()
  {
      console.log('Have permission');
      return messaging.getToken();
  })
  .then(function(token){
      console.log(token);
  })

  .catch(function(err)
  {
      console.log('Error Occured.');
  })
  messaging.onMessage(function(payload) {
  console.log('Message received:', payload);
  // ...
});
</script>

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
                        <li class = ""><a href="<?php echo site_url(''); ?>" >Home</a> </li>
                        <li><a href="<?php echo site_url('client_Home/about'); ?>" >About Us</a> </li>
                        <li><a href="<?php echo site_url('client_Home/services'); ?>">Services</a></li>
                        <li><a href="<?php echo site_url('client_Home/contact'); ?>" >Contact</a></li>
                        <li><a href="<?php echo site_url('client_Home/login_option'); ?>">Login</a></li>                        

                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->