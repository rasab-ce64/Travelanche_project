<!DOCTYPE html>
<html lang='en-US'>

<head>
    <!--  jquery  -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script language="javascript" type="text/javascript"> </script>

</head>

<style>
    #success_message{ display: none;}
</style>

<body>
<div class="container">
    <form class="form-horizontal" action="<?php echo site_url('client_home/signed_up'); ?> " method="post"  id="contact_form">
        <fieldset>
            <legend><center><h2><b>Create your Account</b></h2></center></legend>
            <br>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="first_name" placeholder="First Name" class="form-control" required pattern="[A-Za-z]{1,}" title="Must contain uppercase or lowercase letters"  type="text">
                        <span class="text-danger"> <?php echo form_error('First Name'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="last_name" placeholder="Last Name" class="form-control" required pattern="[A-Za-z]{1,}" title="Must contain uppercase or lowercase letters"  type="text">
                        <span class="text-danger"> <?php echo form_error('Last Name'); ?></span>
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="password" placeholder="Password" class="form-control" id="pass1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required=""  type="password">
                        <span class="text-danger"> <?php echo form_error('Password'); ?></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" >Confirm Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input name="confPassword" placeholder="Password" class="form-control" id="pass2" required=""  type="password">
                        <span class="text-danger"> <?php echo form_error('Password Match'); ?></span>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
                var password = document.getElementById("pass1")
                    , confirm_password = document.getElementById("pass2");

                function validatePassword(){
                    if(password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                    } else {
                        confirm_password.setCustomValidity('');
                    }
                }
                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">City</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input list="cities" name="city" placeholder="city" class="form-control" required=""  type="text">
                        <datalist id="cities">
                            <option value="Lahore">
                            <option value="Karachi">
                            <option value="Faisalabad">
                            <option value="Multan">
                            <option value="Islamabad">
                            <option value="Quetta">
                            <option value="Abottabad">
                            <option value="Sargodha">
                            <option value="Bhawalpur">
                            <option value="Sawat">

                        </datalist>
                    </div>
                </div>
            </div>


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Phone</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="phone" placeholder="(+92)" class="form-control" required  minlength="11" maxlength="11" title="number should be in format like 3144355616"  type="tel">
                    </div>
                </div>
            </div>
            <!-- Text input-->


            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Phone</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input name="pic" placeholder="Choose Picture" class="form-control" required=""  type="file">
                    </div>
                </div>
            </div>

            <!-- Success message -->

            <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <div class="col-md-4">
                            <button name="submit" style="background-color: #ba0710; text-align: center; color: #ffffff; width: 130px" type="submit" class="btn btn-warning" > SUBMIT <span class="glyphicon glyphicon-send"></span></button>
                        </div>
                    </div>
                </div>
            </div>

        </fieldset>
    </form>
</div>
</body>
</html>
