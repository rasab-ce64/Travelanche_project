
<!DOCTYPE html>
<html lang='en-US'>
<head>
    <!--  jquery  -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script language="javascript" type="text/javascript"> </script>

</head>

<style>

    .form-signin {
        max-width: 380px;
        padding: 10px 20px 30px;
        margin: 0 auto;
    }
    .form-signin-heading{
        margin-bottom: 30px;
        text-align: center;
        color: #B22222;
    }
    .form-signin-heading{
        margin-bottom: 30px;
        text-align: center;
        color: black;
    }
    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 8px;
    @include box-sizing(border-box);
    &:focus {
         z-index: 2;
     }
    }
    input[type="text"] {
        margin-bottom: -1px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

</style>

<<<<<<< HEAD
<body>
<img class="img-responsive" style="width:100%; height:600px;" src="<?php echo base_url('assets/images/coaster1.png'); ?>" > </img>
<form class="form-horizontal" id="centered" action="<?php echo site_url("PlanTrip/coasterTripType"); ?> " method="post"  id="contact_form">
=======
<div class="wrapper">
    <body>
    <div class="container">
        <form class="form-signin" method="POST" action="<?php echo site_url('PlanTrip/coasterTripType'); ?>" >
>>>>>>> 75571b9135415e91d2ca2d53c008ba7637da0d1d

            <h1 class="form-signin-heading">Coaster Booking</h1>

<<<<<<< HEAD
        <div class="form-group">
            <label class="col-md-4 control-label">Van Seats</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="vehicle_seats" value="8" checked>8-Seater
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="vehicle_seats" value="10">10-Seater
                    </label> <br>
                    <label class="radio-inline">
                        <input type="radio" name="vehicle_seats" value="12">12-Seater
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="vehicle_seats" value="15">15-Seater
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Driver</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="driver" value="Yes" checked>Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="driver" value="No">No
                    </label>
                </div>
=======
            <span class="fa fa-bus"></span> &nbsp; <label>Choose Seats</label>
            <div class="radio">
                <label><input type="radio" name="optradio">24-seater</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio">29-Seater</label>
>>>>>>> 75571b9135415e91d2ca2d53c008ba7637da0d1d
            </div>

<<<<<<< HEAD
        <div class="form-group">
            <label class="col-md-4 control-label">Trip Type</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="trip_type" value="Round Trip" checked>Round Trip
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="trip_type" value="One Side Tri">Single Trip
                    </label>
                </div>
=======
            <span class="fa fa-tripadvisor"></span> &nbsp;<label>Trip Type</label>
            <div class="radio">
                <label><input type="radio" name="trip_type">Round Trip</label>
>>>>>>> 75571b9135415e91d2ca2d53c008ba7637da0d1d
            </div>

            <div class="radio">
                <label><input type="radio" name="trip_type">Single Trip</label>
            </div>

            <span class="text-danger"> <?php echo form_error('Phone'); ?></span>

            <br>

            <button class="btn btn-md" style="width: 35%; background-color: #ba0710; color: #ffffff" name="login" type="submit">Next</button>

            <span><?php echo $this->session->flashdata("error"); ?> </span>
        </form>
    </div>
    </body>
</div>
</html>
