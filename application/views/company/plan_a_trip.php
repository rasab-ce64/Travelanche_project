<!DOCTYPE html>
<html lang='en-US'>

<head>
  <title>Reset Password</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- core CSS -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/jumbotron.css" rel="stylesheet">

  <!--[if lt IE 9]>
  <script src="<?php echo base_url('assets/js/html5shiv.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
  <![endif]-->
  <link rel="shortcut icon" href="<?php echo base_url('assets/images/ico/favicon.ico'); ?>">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url('assets/images/ico/apple-touch-icon-144-precomposed.png'); ?>">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('assets/images/ico/apple-touch-icon-114-precomposed.png'); ?>">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('assets/images/ico/apple-touch-icon-72-precomposed.png'); ?> ">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/images/ico/apple-touch-icon-57-precomposed.png'); ?> ">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
  .btn-md{
    background-color: #ba0710;
    color: #ffffff;
    text-align: center;
    width: 30%;

  }
</style>


<body>
<img class="img-responsive" style="width:100%; height:550px;" src="<?php echo base_url('assets/images/trip_plan.jpg'); ?>" > </img>
<form class="form-horizontal" action="<?php echo site_url('client_logged_in/Trip_info'); ?> " method="post"  id="contact_form">
  <fieldset>

    <legend><center><h2><b>Plan Your Trip</b></h2></center></legend>
    <br>

    <!-- Text input-->
    <div class="form-group" >
      <label class="col-md-4 control-label">Choose Destination</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <select name="destination" class ="form-control" required=""  >
            <option value="none" selected="selected"  >Select City</option>
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
      <label class="col-md-4 control-label" >Choose Vehicle</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="	glyphicon glyphicon-plane"></i></span>
          <select name="vehicle" class ="form-control" required=""  >
            <option value="none" selected="selected"  >Select City</option>
            <!----- Displaying fetched cities in options using foreach loop ---->
            <?php foreach($vehicle_type as $row):?>
              <option value="<?php echo $row->vehicle_type?>"><?php echo $row->vehicle_type?></option>
            <?php endforeach;?>
          </select>
        </div></div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">Choose Pickup Location</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <select name="pickup_location" class ="form-control" required=""  >
            <option value="none" selected="selected"  >Select City</option>
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

    <div class="form-group">
      <label class="col-md-4 control-label">Driver</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-drivers-license"></i></span>
          <input name="driver" placeholder="Enter YES or NO" class="form-control" required="" type="text">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label">AC</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-wrench"></i></span>
          <input name="ac" placeholder="Enter Yes or NO" class="form-control" required="" type="text">
        </div>
      </div>
    </div>

    <!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">Select Your City .</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <select name="city" class ="form-control" required="" placeholder="  Trip Discription" >
            <option value="none" selected="selected"  >Select City</option>
            <!----- Displaying fetched cities in options using foreach loop ---->
            <?php foreach($city as $row):?>
              <option value="<?php echo $row->city?>"><?php echo $row->city?></option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Any Discription for Trip.</label>
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <input name="trip_disc" placeholder="  Trip Discription" class="form-control" required=""  type="text">
        </div>
      </div>
    </div>

    <!-- Success message -->
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label"></label>
      <div class="col-md-4"><br>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="Enter" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>

  </fieldset>
</form>
</body>
</html>
