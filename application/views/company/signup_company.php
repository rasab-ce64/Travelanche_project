<!DOCTYPE html>
<html lang='en-US'>

<head>
<!--  jquery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<style>
#success_message{ display: none;}
</style>

<body>
<form class="well form-horizontal" action="<?php echo site_url('company_login/signed_up'); ?> " method="post"  id="contact_form">
<fieldset>
<!-- Form Name -->
<legend><center><h2><b>Create your Account</b></h2></center></legend>
<br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Company Name</label>
  <div class="col-md-4 inputGroupContainer">
     <div class="input-group">
       <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
       <input  name="name" placeholder="Company name" class="form-control" required=""  type="text">
     </div>
  </div>
</div>

  <!-- Text input-->

  <div class="form-group">
    <label class="col-md-4 control-label">Registration No.</label>
    <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="reg_number" placeholder="Company Registration Number" class="form-control" required=""  type="text">
      </div>
    </div>
  </div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Phone no.</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="phone" placeholder="(+92)" class="form-control" required=""  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Contact Person</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="contact_person" placeholder="Person Name" class="form-control" required=""  type="text"  >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="password" placeholder="Password" class="form-control" required=""  type="password">
      <span class="text-danger"> <?php echo form_error('Password'); ?></span>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Confirm Password</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
  <input name="confirm_password" placeholder="Confirm Password" class="form-control" required=""  type="password">
      <span class="text-danger"> <?php echo form_error('Password Match'); ?></span>
    </div>
  </div>
</div>

<!-- Text input -->

<div class="form-group">
  <label class="col-md-4 control-label" >Address</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" required=""   type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="city" placeholder="City" class="form-control" required="" type="text">
    </div>
  </div>
</div>


<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button name="submit" type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp SUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>
</fieldset>
</form>
</div>
</body>
</html>
