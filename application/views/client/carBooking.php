
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
<<<<<<< HEAD
    input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    select option[data-default] {
        color: #808080;
    }
</style>

<body>

<body>
<img class="img-responsive" style="width:100%; height:600px;" src="<?php echo base_url('assets/images/car1.jpg'); ?>" > </img>
<form class="form-horizontal" id="centered" action="<?php echo site_url("PlanTrip/carTripType"); ?> " method="post"  id="contact_form">

    <h2 style="color: #000000" ><b>Car Booking</b></h2>
    <fieldset>
            <h2 style="text-align: center; color: #000000">CAR BOOKING</h2>
<!--            <h3 style="text-align: center; color: #000000;">Trip Details</h3>-->

        <div class="form-group">
            <label class="col-md-4 control-label">Choose Cars</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="car"  value="All Cars" checked>All Cars
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="car" value="Specific Car">Specific Cars
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" >Vehicle</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input name="vehicle_name" placeholder="Choose Vehicle" class="form-control" autofocus="" required=""  type="text">
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
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Trip Type</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="trip_type" value="Round Trip" checked>Round Trip
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="trip_type" value="One Side Tri" >Single Trip
                    </label>
                </div>
            </div>
        </div>

        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
                <button name="next" type="submit" class="btn btn-md" >Next</button>

 </div>

    </fieldset>
</form>
</body>
</html>
=======

</style>

<div class="wrapper">
    <body>
    <div class="container">
        <form class="form-signin" method="POST" action="<?php echo site_url('PlanTrip/carTripType'); ?>" >

            <h1 class="form-signin-heading">Car Booking</h1>

            <span class="fa fa-car"></span> &nbsp; <label>Choose Cars</label>
            <div class="radio">
                <label><input type="radio" name="optradio">Specific Cars</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio">All Cars</label>
            </div>

            <span class="fa fa-car"></span> &nbsp; <label> Choose your Car </label>

            <input type="text" class="form-control" name="car" placeholder="Choose Car"  autofocus="" />
            <br>

            &nbsp;<span class="fa fa-user"></span> &nbsp; <label>Driver</label>
            <div class="radio">
                <label><input type="radio" name="optradio">Yes</label>
            </div>

            <div class="radio">
                <label><input type="radio" name="optradio">No</label>
            </div>

            <span class="fa fa-tripadvisor"></span> &nbsp;<label>Trip Type</label>
            <div class="radio">
                <label><input type="radio" name="trip_type">Round Trip</label>
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
>>>>>>> 75571b9135415e91d2ca2d53c008ba7637da0d1d
