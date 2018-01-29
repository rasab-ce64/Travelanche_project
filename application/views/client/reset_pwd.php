<!DOCTYPE HTML>
<html>
<body>
<div class="container">
    <div class="center">
        <br> <br> <br> <br> <br>
        <h2>Reset your Password</h2> <hr>
        <form action="<?php echo site_url('forgot_pass/reset_user'); ?>" method="POST">

            <input type="hidden" name="phone" value="<?php if(isset($phone)){echo $phone;}?>" >

            Enter New Password &nbsp; &nbsp; &nbsp; <input type="password"  id ="password" autofocus="" required="" name="new_pass"> <br> <br>
            <span class="text-danger"> <?php echo form_error('phone'); ?></span>

            Confirm New Password &nbsp; <input type="password" id ="confirm_password" autofocus="" required="" name="rep_pass"> <br>
            <span class="text-danger"> <?php echo form_error('phone'); ?></span>

            <button class="btn btn-sm btn-primary" style="text-align: left;" type="submit" name="submit">Send Code</button>
            <script type="text/javascript">
            var password = document.getElementById("password")
            , confirm_password = document.getElementById("confirm_password");

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
        </form>
        </div>
    </div>
</body>


</html>