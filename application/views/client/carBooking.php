<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Edit Trip</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    #success_message{ display: none;}

    .form-group, .input-group, .inputGroupContainer{
        text-align: center;
        width: 100%;
        background-color: #ffffff;
        color: #000000;
        background-color: transparent;
    }
    .input-group:focus{
        border: 1px #ba0710;
        border-radius: 30px ;
    }
    .well{
        background-color: #ffffff;
    }
    #centered{
        position: absolute;
        top: 50%;
        left: 25%;
        width: 90%;
        color: white;
        transform: translate(-50%, -50%);
    }
    .btn-md:hover{
        color: #ba0710; !important;
        background-color: #ffffff;
        border: solid 1px #ba0710;
    }
    .btn-md{
        background-color: #ba0710;
        color: #ffffff;
        text-align: center;
        width: 30%;

    }

    /*fazooll*/

    .wrapper {
        margin-top: 80px;
        margin-bottom: 80px;
    }

    .form-signin {
        max-width: 380px;
        padding: 15px 35px 45px;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid rgba(0,0,0,0.1);
    }
    .checkbox {
        margin-bottom: 30px;
        color: black;
        text-align: left;
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

    .checkbox {
        font-weight: normal;
    }

    .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 5px;
    @include box-sizing(border-box);
    &:focus {
         z-index: 2;
     }
    }
    input[type="text"] {
        margin-bottom: 0px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }
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
<!--<img class="img-responsive" style="width:100%; height:600px;" src="--><?php //echo base_url('assets/images/car1.jpg'); ?><!--" > </img>-->
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
                        <input type="radio" name="">All Cars
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="">Specific Cars
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" >Vehicle</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <input name="vehicle" placeholder="Choose Vehicle" class="form-control" autofocus="" required=""  type="text">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Driver</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="">Yes
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="">No
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Trip Type</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <label class="radio-inline">
                        <input type="radio" name="">Round Trip
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="">Single Trip
                    </label>
                </div>
            </div>
        </div>

        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
                <button name="submit" type="submit" class="btn btn-md" >Next</button>



            <!--            </select>
            <span class="text-danger"> <?php echo form_error('text'); ?></span>



            <span class="text-danger"> <?php echo form_error('text'); ?></span>

            <!--rate per day-->



<div>
            <label> Driver</label>
            <input class="form-check-input" name="group100" type="radio" id="radio100" checked>
            <label class="form-check-label" for="radio100">Yes</label>
            <input class="form-check-input" name="group100" type="radio" id="radio101" >
            <label class="form-check-label" for="radio101">No</label>
</div>
            <div>
            <label> Trip Type</label>
            <input class="form-check-input" name="trip_type"  value ="0" type="radio" id="radio100" checked>
            <label class="form-check-label" for="radio100">Round Trip</label>
            <input class="form-check-input" name="trip_type" type="radio" value ="1" id="radio101" >
            <label class="form-check-label" for="radio101">Single Trip</label>
>>>>>>> fbea55a2b8e4a37a8a1b7bbe9a53bea71333d207
            </div>
        </div>

    </fieldset>
</form>
</body>
</html>