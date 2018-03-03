<!DOCTYPE html>
<html lang='en-US'>

<head>
    <!--  jquery  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>
    #success_message{ display: none;}
    #button{
        background-color: #ba0710;
        color: #ffffff;
        width: 25%;
    }
</style>

<body>
<form class="well form-horizontal" action="<?php echo site_url('add_vehicle/vehicle'); ?> " method="post"  id="contact_form">
    <fieldset>
        <!-- Form Name -->
        <legend><center><h1 style="color: #000000;"><b>Add Vehicle</b></h1></center></legend>
        <br>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Vehicle Name</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-car" aria-hidden="true" id=""></i></span>
                    <input  name="name" placeholder="Enter Vehicle Name" class="form-control" required=""  type="text">
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label" >Model</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-car"></i></span>
                    <input name="model" placeholder="Enter Modal of vehicle" class="form-control" required=""  type="text">
                </div>
            </div>
        </div>

        <!-- Text input -->

        <div class="form-group">
            <label class="col-md-4 control-label" >Car No.</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-car"></i></span>
                    <input name="number" placeholder="Enter Vehicle No." class="form-control" required=""   type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Front Side<br></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon" id="file_upload"><i class="fa fa-image"></i></span>
                    <input type="file" name="image" required="" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Back Side<br></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon" id="file_upload"><i class="fa fa-image"></i></span>
                    <input type="file" name="image" required="" class="form-control" >
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Left Side<br></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon" id="file_upload"><i class="fa fa-image"></i></span>
                    <input type="file" name="image" required="" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Right Side<br></label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon" id="file_upload"><i class="fa fa-image"></i></span>
                    <input type="file" name="image" class="form-control" >
                </div>
            </div>
        </div>

        <!-- Success message -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
                <button id="button" name="add_vehicle" type="submit" class="btn btn-default" > Add Vehicle </button>
            </div>
        </div>

    </fieldset>
</form>
</body>
</html>
