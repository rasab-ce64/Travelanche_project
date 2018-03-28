<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 13/03/2018
 * Time: 00:01
 */
?>
<!DOCTYPE html>
<html lang='en-US'>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>


<style>

/*@import "bourbon";*/
body {
    background: #eee !important;
}

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

<div class="wrapper">
    <body>
    <div class="container">
        <form class="form-signin" method="POST" action="<?php echo site_url("PlanTrip/carTripType"); ?>" >
            <h2 style="text-align: center; color: #000000">CAR BOOKING</h2>
            <h3 class="form-signin-heading">Trip Details</h3>


                <label> Cars</label>
                <input class="form-check-input" name="car" value="0" type="checkbox" id="radio101" >
                <label class="form-check-label" for="radio101">Specific car</label>
                <input class="form-check-input" name="car" value="1" type="radio" id="radio102">
                <label class="form-check-label" for="radio102">All cars</label>
            <script>

                $('#radio101').click(function() {
                    $("#abc").toggle(this.checked);
                });

            </script>

            <select name="car"  id="abc" class="form-control">
                    <option value="" selected data-default> Select Car</option>
                    <?php foreach($driver_name as $row):?>
                        <option  value="<?php echo $row->driver_name ?>"><?php echo $row->driver_name; ?></option>
                    <?php endforeach; ?>
                </select>




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
            </div>

<button class="btn btn-sm btn-primary" name="bid_by_bachat" type="submit">Next</button>
</form>
</div>
</body>
</div>
</html>
