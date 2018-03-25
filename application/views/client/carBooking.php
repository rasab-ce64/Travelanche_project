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

        <form class="form-signin" method="POST" action="<?php echo site_url("company_logged_in/place_bid"); ?>" >

            <h2 class="form-signin-heading">Trip Details</h2>

            <div>
                <label> Cars</label>
                <input class="form-check-input" name="group102" value="0" type="radio" id="radio1">
                <label class="form-check-label" for="radio101">Specific car</label>
                <input class="form-check-input" name="group102" value="1" type="radio" id="radio2" checked>
                <label class="form-check-label" for="radio102">All cars</label>
            </div>

            <script>


                $('#radio1').click(function() {
                    if($(this).val() == "0") {
                        $("#totalFare").toggle(this.checked);

                    }

                });

            </script>
            <select name="vehicle" class="form-control">
                <option value="" selected data-default> Select Car</option>
                <?php foreach($vehicle_name as $row):?>
                    <option value="<?php echo $row->vehicle_name ?>"><?php echo $row->vehicle_name; ?></option>
                <?php endforeach; ?>
            </select>
            <select name="vehicle" class="form-control">
                <option value="" selected data-default> Select Car</option>
                <?php foreach($vehicle_name as $row):?>
            <option value="<?php echo $row->vehicle_name ?>"><?php echo $row->vehicle_name; ?></option>
                <?php endforeach; ?>
            </select>
<span class="text-danger"> <?php echo form_error('text'); ?></span>



<span class="text-danger"> <?php echo form_error('text'); ?></span>

<!--rate per day-->

<input type="number"  class="form-control" name="rate_per_day" placeholder="Enter your Rate/day" autofocus="" required=""/>
<span class="text-danger"> <?php echo form_error('number'); ?></span>


<div>
            <label> Driver</label>
            <input class="form-check-input" name="group100" type="radio" id="radio100">
            <label class="form-check-label" for="radio100">Yes</label>
            <input class="form-check-input" name="group100" type="radio" id="radio101" checked>
            <label class="form-check-label" for="radio101">No</label>
</div>
            <div>
            <label> Trip Type</label>
            <input class="form-check-input" name="group101" type="radio" id="radio100">
            <label class="form-check-label" for="radio101">Round Trip</label>
            <input class="form-check-input" name="group101" type="radio" id="radio101" checked>
            <label class="form-check-label" for="radio102">Single Trip</label>
            </div>

<button class="btn btn-sm btn-primary" name="bid_by_bachat" type="submit">Next</button>
</form>
</div>
</body>
</div>
</html>
