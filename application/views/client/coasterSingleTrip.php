<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 26/03/2018
 * Time: 14:11
 */?>

<!DOCTYPE html>
<html lang='en-US' xmlns="http://www.w3.org/1999/html">

<head>
    <!--  jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--link jquery ui css-->
</head>

<style>
    #success_message{ display: none;}
</style>


<body>
<form class="well form-horizontal" action="<?php echo site_url('PlanTrip/SingleTrip'); ?> " method="post"  id="contact_form">

    <fieldset>
        <!-- Form Name -->
        <legend><center><h2><b>Plan Your Trip</b></h2></center></legend>
        <br>

        <!-- Text input-->


        <div class="form-group" >
            <label class="col-md-4 control-label">Choose Destination</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <select name="destination" class ="form-control" required=""  >
                        <option value="none" selected="selected"  >--------------------Destination------------------</option>
                        <!----- Displaying fetched cities in options using foreach loop ---->
                        <?php foreach($destination as $row):?>
                            <option value="<?php echo $row->destination?>"><?php echo $row->destination?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label">Choose Pickup Location</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                    <select name="pickup_location" class ="form-control" required=""  >
                        <option value="none" selected="selected"  >-----------------Pickup Location--------------------</option>
                        <!----- Displaying fetched cities in options using foreach loop ---->
                        <?php foreach($pickup_location as $row):?>
                            <option value="<?php echo $row->pickup_location?>"><?php echo $row->pickup_location?></option>
                        <?php endforeach;?>
                    </select>
                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label" >Choose Start Date</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <input name="start_date" placeholder="  Start Date" class="form-control" required=""  type="date">


                </div>
            </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
            <label class="col-md-4 control-label" >Choose Pickup Time</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="	glyphicon glyphicon-time"></i></span>
                    <input name="pickup_time" placeholder="  Pickup Time" class="form-control" required=""  type="time">
                </div>
            </div>
        </div>


        <!-- Success message -->
        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="submit_trip" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
            </div>
        </div>

    </fieldset>
</form>
<!-- /.container -->
</body>

</html>
