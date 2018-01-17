
<!DOCTYPE html>
<html lang='en-US'>

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
        padding: 7px;
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
        margin-bottom: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    #totalFare {
        display:none;
    }
    #lambSamb:checked ~ #totalFare {
        display: block;
    }
</style>

<div class="wrapper">
    <body>
    <?php echo form_open('logged_in/') ?>
    <br>
    <br>
    <?php echo form_input(['Vehicle'=>'vehicle', 'placeholder'=>'Select vehicle']); ?>
    <select name="get_vehicle">
        <option value="">Select</option>
        <?php foreach($get_vehicle as $row):?>
            <option value="<?php echo $row->id; ?>"> <?php echo $row->vehicle_name; ?> </option>
        <?php endforeach; ?>
    </select>
    </body>
</div>
</html>
