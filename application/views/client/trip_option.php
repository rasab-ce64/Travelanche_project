<DOCTYPE html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <html lang="en-US">
    <head>
        <title>
            Login Options
        </title>
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
        .img-wrapper {
            position: relative;
            width: 100%;
        }

        .img-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
        }

        .img-overlay:before {
            content: ' ';
            display: block;
            /* adjust 'height' to position overlay content vertically */
            height: 33%;
        }
        .centered {
            position: absolute;
            top: 10%;
            left: 50%;
            font-size: 3em;
            color: #000000;
            transform: translate(-50%, -50%);
        }
        .btn {
            position: relative;
            display: inline-block;
            /*to change the width of button*/
            width: 20%;
            letter-spacing: 1.2px;
            padding: 12px 32px;
            text-align: center;
            text-transform: uppercase;
            overflow: hidden;
            z-index: 1;
            cursor: pointer;
        }
        .btn:focus {
            outline: none;
        }
        .btn--primary {
            color: #ffffff;
        }
        .btn--border {
            border-width: 1px;
            border-style: solid;
            border-radius: 10px;
            box-sizing: border-box;
        }
        .btn--animated {
            transition-property: color;
            transition-duration: 0.5s;
        }
        .btn--animated.btn--border.btn--primary {
            border: 1px solid #ffffff;
            color: #ffffff;
        }
        .btn--animated:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #ba0710;
            transform: scaleX(0);
            transform-origin: 0 50%;
            transition-property: transform;
            transition-duration: 0.5s;
            transition-timing-function: ease-out;
            z-index: -1;
        }
        .btn--animated:hover {
            text-color: white;
        }
        .btn--animated:hover:before {
            transform: scaleX(1);
            transition-timing-function: cubic-bezier(0.45, 1.64, 0.47, 0.66);
        }
    </style>

    <body>

    <div class="img-wrapper">
        <img class="img-responsive" style="width: 100%; height: 650px; " src="<?php echo base_url('assets/images/bid2.png'); ?>" </img>
        <div class="centered">Choose the one</div>
        <br>
        <div class="img-overlay">
            <a href="<?php echo site_url('client_logged_in/my_Accepted_Trips'); ?>" class="btn btn--border btn--primary btn--animated" >Accepted Bids</a>
            <br> <br>
            <a href="<?php echo site_url('client_logged_in/my_Pending_Trips'); ?>" class="btn btn--border btn--primary btn--animated"> Pending Bids</a>
        </div>
    </div>
    </body>

    </html>