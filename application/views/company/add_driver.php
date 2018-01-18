<!DOCTYPE html>
<html lang='en-US'>

<head>
    <!--  jquery  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    #success_message{ display: none;}
    #button{
        background-color: #ba0710;
        color: #ffffff;
        width: 25%;
    }
</style>

<body>
    <form class="well form-horizontal" action="<?php echo site_url('company_logged_in/add_driver'); ?>" method="post"  id="contact_form">
        <fieldset>
            <!-- Form Name -->
            <legend><center><h1 style="color: #000000;"><b>Add Driver</b></h1></center></legend>
            <br>
            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label">Driver Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  name="driver_name" placeholder="Enter Name" class="form-control" required=""  type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->

            <div class="form-group">
                <label class="col-md-4 control-label" >Driver's Phone no.</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input name="driver_phone" placeholder="(+92)" class="form-control" required=""  type="tel">
                    </div>
                </div>
            </div>

            <!-- Text input -->

            <div class="form-group">
                <label class="col-md-4 control-label" >CNIC</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="driver_cnic" placeholder="Enter National ID" class="form-control" required=""   type="text">
                    </div>
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label">License No.</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                        <input name="driver_license" placeholder="Enter License No." class="form-control" required="" type="text">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Profile Photo <br></label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon" id="file_upload"><i class="fa fa-file-image-o"></i></span>
                        <input type="file" name="file_nm" id="file_nm" class="form-control" placeholder="" aria-describedby="file_upload">
                    </div>
                </div>
            </div>

            <!-- Success message -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><br>
                    <button id="button" name="add_driver" type="submit" class="btn btn-default" > Add Driver </button>
                </div>
            </div>

        </fieldset>
    </form>
</body>
</html>