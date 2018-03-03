<html>
<head>
<title>Edit Trip</title>
</head>

<style>
        #success_message{ display: none;}

        .form-group, .input-group, .inputGroupContainer{
                text-align: center;
                width: 100%;
                background-color: transparent;
        }
        .input-group:focus{
                border: 1px #ba0710;
        }
        .well{
                background-color: #ffffff;
        }
        #centered{
                position: absolute;
                top: 65%;
                left: 55%;
                width: 90%;
                text-align: center;
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
</style>

<body>

<body>
<<<<<<< HEAD


<img class="img-responsive" style="width:100%; height:600px;" src="<?php echo base_url('assets/images/trip.jpg'); ?>" > </img>
        <?php foreach($trips as $trip) $id = $trip->id ?>
<form class="form-horizontal" id="centered" action="<?php echo site_url("client_logged_in/update_Data/$id"); ?> " method="post"  id="contact_form">
                <?php  foreach($trips as $trip) { ?>

=======
<img class="img-responsive" style="width:100%; height:600px;" src="<?php echo base_url('assets/images/back4.jpg'); ?>" > </img>
        <?php foreach($trips as $trip) $id = $trip->id ?>
<form class="form-horizontal" id="centered" action="<?php echo site_url("client_logged_in/update_Data/$id"); ?> " method="post"  id="contact_form">
        <?php  foreach($trips as $trip) { ?>
>>>>>>> 2036c678f82a4d40405a4507f5baac4e51d4a725
        <fieldset>
                <legend><h2><b>Edit Trip</b></h2></legend>
                <div class="form-group">
                        <label class="col-md-4 control-label">Destination</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->destination; ?>" name="destination" placeholder="Destination" class="form-control" autofocus="" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label" >Vehicle</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->vehicle; ?>" name="vehicle" placeholder="Last Name" class="form-control" autofocus="" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label" >pickup Location</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->location_pickup; ?>" name="pickup_location" placeholder="Password" class="form-control" autofocus="" id="pass1" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label">Start date</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->start_date; ?>" name="start_date" placeholder="Enter trip start date" class="form-control" required="" autofocus="" type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label">End Date</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->end_date; ?>" name="end_date" placeholder="Trip End Date" class="form-control" autofocus="" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label">Pickup Time</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->time_pickup; ?>" name="pickup_time" placeholder="Pickup Time" class="form-control" autofocus="" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label">Trip End Time</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->time_drop ?>" name="drop_time" placeholder="Enter trip end time" class="form-control" autofocus="" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label">User City</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->user_city ?>" name="city" placeholder="Enter your city" class="form-control" autofocus="" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="col-md-4 control-label">Description</label>
                        <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                        <input value="<?php echo $trip->trip_description ?>" name="trip_disc" placeholder="Enter trip description     " autofocus="" class="form-control" required=""  type="text">
                                </div>
                        </div>
                </div>

                <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
                        <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4"><br>
                                        <button name="submit" type="submit" class="btn btn-md" >Edit Trip</button>
                                </div>
                        </div>
        </fieldset>
</form>
<?php } ?>
</body>
</html>