<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 26/03/2018
 * Time: 09:31
 */?>
<!DOCTYPE html>
<html lang='en-US'>
<head>
    <!--  jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
<!--    <script type="text/javascript" src="http://www.google.com/jsapi?key=AIzaSyCFh_83LvhwV33pky1tepUWLzN7wTlKI4M"></script>-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFh_83LvhwV33pky1tepUWLzN7wTlKI4M&callback=initMap" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/locationpicker.jquery.js'); ?>"></script>
    <!--link jquery ui css-->
</head>
<style>
    #success_message{ display: none;}
</style>

<body>

<div class="container" >
    <form class="well form-horizontal" action="<?php echo site_url('PlanTrip/RoundTrip'); ?> " method="post"  id="contact_form">
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

            <div class="form-group">
                <label class="col-md-4 control-label" >Choose Start Date</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="start_date" placeholder="  Start Date" class="form-control" required=""  type="date">
                    </div>
                </div>
            </div>
            <!-- Text input -->

            <div class="form-group">
                <label class="col-md-4 control-label" >Choose End Date</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="end_date" placeholder="  End Date" class="form-control" required=""   type="date">
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

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">Choose Drop Time</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="	glyphicon glyphicon-time"></i></span>
                        <input name="drop_time" placeholder="  Drop Time" class="form-control" required="" type="time">
                    </div>
                </div>
            </div>
            <!-- Success message -->

            Location: <input type="text" id="us2-address" style="width: 200px"/>
            <div id="us2" style="width: 500px; height: 400px;"></div>
            Lat.: <input type="text" id="us2-lat"/>
            Long.: <input type="text" id="us2-lon"/>
            <script>
                $('#us2').locationpicker({
                    enableAutocomplete: true,
                    enableReverseGeocode: true,
                    radius: 0,
                    inputBinding: {
                        latitudeInput: $('#us2-lat'),
                        longitudeInput: $('#us2-lon'),
                        radiusInput: $('#us2-radius'),
                        locationNameInput: $('#us2-address')
                    },
                    onchanged: function (currentLocation, radius, isMarkerDropped) {
                        var addressComponents = $(this).locationpicker('map').location.addressComponents;
                        console.log(currentLocation);  //latlon
                        updateControls(addressComponents); //Data
                    }
                });

                function updateControls(addressComponents) {
                    console.log(addressComponents);
                }
            </script><!-- Text input-->

            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
            <!-- Button -->

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="submit_trip" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                </div>
            </div>
</div>
</fieldset>
</form>
</div>
</div><!-- /.container -->

</body>
</html>
