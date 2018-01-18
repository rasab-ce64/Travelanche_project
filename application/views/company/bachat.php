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

            <h2 class="form-signin-heading">Bachat package</h2>

            <select name="vehicle" class="form-control">
                <option value="" selected data-default> Select Vehicle</option>
                <?php foreach($vehicle_name as $row):?>
                <option value="<?php echo $row->vehicle_name ?>"><?php echo $row->vehicle_name; ?></option>
                <?php endforeach; ?>
            </select>

            <span class="text-danger"> <?php echo form_error('text'); ?></span>

            <select name="driver" class="form-control">
                <option value="" selected data-default> Select Driver</option>
                <?php foreach($driver_name as $row):?>
                    <option  value="<?php echo $row->driver_name ?>"><?php echo $row->driver_name; ?></option>
                <?php endforeach; ?>
            </select>


            <span class="text-danger"> <?php echo form_error('text'); ?></span>

            <!--rate per day-->

            <input type="number"  class="form-control" name="rate_per_day" placeholder="Enter your Rate/day" autofocus="" required=""/>
            <span class="text-danger"> <?php echo form_error('number'); ?></span>

            <label class="checkbox">
                <input type="checkbox" value="Bid-bylambSamb" id="bachat" name="lambSamb"> Bid by LambSamb
            </label>

            <script>

                $('#bachat').click(function() {
                    $("#totalFare").toggle(this.checked);
                });

            </script>

            <!--total fare -->
            <input type="number" style="display: none" id="totalFare" class="form-control" name="total_fare" placeholder="Total Fare (Rs.)" autofocus="" required="" />
            <span class="text-danger"> <?php echo form_error('number'); ?></span>

            <button class="btn btn-sm btn-primary" name="bid_by_bachat" type="submit">Place Bid</button>
        </form>
    </div>
    </body>
</div>
</html>
