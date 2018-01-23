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
        .btn-md{
                background-color: #ba0710;
                color: #ffffff;
                text-align: center;
                width: 30%;

        }
</style>

<body>

<body>
<img class="img-responsive" style="width:100%; height:600px;" src="<?php echo base_url('assets/images/trip.jpg'); ?>" > </img>
        <?php foreach($bid as $row) $id =$row->bid_id ?>
        <form class="form-horizontal" id="centered" action="<?php echo site_url("company_logged_in/update_Data/$id"); ?> " method="post"  id="contact_form">
                <?php  foreach($bid as $row) { ?>
                <fieldset>
                        <legend><center><h2><b>Edit Bid</b></h2></center></legend>
                        <div class="form-group">
                                <label class="col-md-4 control-label">Vehicle</label>
                                <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                                <input value="<?php echo $row->vehicle ?>" name="vehicle" placeholder="vehicle" class="form-control" autofocus="" required=""  type="text">
                                        </div>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-4 control-label" >Driver</label>
                                <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                                <input value="<?php echo $row->driver ?>" name="driver" placeholder="Driver" class="form-control" autofocus="" required=""  type="text">
                                        </div>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-4 control-label" >Rate Per Day</label>
                                <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                                <input value="<?php echo $row->rate_per_day ?>" name="rate_per_day" placeholder="Rate per day" class="form-control" autofocus="" required=""  type="text">
                                        </div>
                                </div>
                        </div>

                        <div class="form-group">
                                <label class="col-md-4 control-label">Total Fare</label>
                                <div class="col-md-4 inputGroupContainer">
                                        <div class="input-group">
                                                <input value="<?php echo $row->total_fare ?>" name="total_fare" placeholder="Total Fare" class="form-control" required="" autofocus="" type="text">
                                        </div>
                                </div>
                        </div>

                        <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                        <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4"><br>
                                        <button name="submit" type="submit" class="btn btn-md" >Edit Bid</button>
                                </div>
                        </div>

                </fieldset>
        </form>
<?php } ?>
</div>
</body>
</html>
