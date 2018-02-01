<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Travelanche</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="<?php echo base_url(); ?>assets2/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!--Custom-Theme-files-->

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets2/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>assets2/css/component.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>assets2/css/font-awesome.css" rel='stylesheet' type='text/css' />
    <!--Custom-Theme-files-->
    <input type="hidden" value="<?php echo site_url(); ?>" id="baseurl"/>
</head>
<script type="text/javascript">
    /* delete notification function */
    function Delete(bol)
    {
        var user_id = bol;
        var con = confirm("Deleting trip will cancel all bids on the trip ," +
        "are you sure you want to delete trip ?");
        if(con == true)
        {
            window.location.href="<?php echo site_url('client_logged_in/del_Trip/'); ?>"+user_id;
            return true;
        }
        else
        {
            return false;
        }
    }
    /* edit notification function */
    function Edit(bol)
    {
        var user_id = bol;
        var con = confirm("Editing  trip will cancel all previous bids on the trip ," +
        "are you sure you want to edit the trip ?");
        if(con == true)
        {
            window.location.href="<?php echo site_url('client_logged_in/edit_Trip/');?>"+user_id;
            return true;
        }
        else
        {
            return false;
        }
    }

</script>
<body>
<!--top_section2-->
<?php  
// header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");
foreach ($trips as $row){ ?>
        <div class="top_section two">
            <div class="bnr-btm-right two">
                <h3>User Trip Details</h3>
                <p>Here I will Put All my Trip Details..</p>
                <div class="form-group">
                    <label class="col-md-6 control-label">User City.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                           <strong> <?php echo "ZUBAIR"; /*$row->user_city*/ ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label"> Vehicle.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->vehicle; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Destination.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->destination; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Start Date.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->start_date; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">End Date.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->end_date; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Pickup Time.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->time_pickup; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Pickup Location.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                            <strong> <?php echo $row->location_pickup; ?> </strong>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Trip Discription.</label>
                    <div class="col-md-6 inputGroupContainer">
                        <div class="input-group">
                        </div>
                    </div>
                </div>
                <br>
                <div class="inputContainer">
                    <br><br><br>
                    <button class="btn btn-sm" name="button" onclick="Edit(<?php echo $row->id; ?>)" value="<?php echo $row->id; ?>">Edit Trip</button>
                    <button class="btn btn-sm" name="button" onclick="Delete(<?php echo $row->id; ?>)" value="<?php echo $row->id; ?>">Delete Trip</button>
                    <button class="btn btn-sm" name="button" onclick="window.location='<?php echo site_url("client_logged_in/bids_On_Trip/$row->id");?>'" value="<?php echo $row->id; ?>">Bids on Trip</button>
                    <?php echo $row->id; ?>
<!--                    <button class="buy btn-wayra" style="width: 100px "  name="button" value="--><?php //echo $row->id; ?><!--<"  data-target="##myModal1" data-toggle="modal" onclick="window.location='--><?php //echo site_url("client_logged_in/bids_On_Trip/$row->id");?></button>
<!--//                    <button class="buy    btn-wayra" name="button" value="--><?php ////echo $row->id; ?><!--<!--"  data-target="##myModal1" data-toggle="modal" onclick="window.location='--><?php ////echo site_url("client_logged_in/bids_On_Trip/$row->id");?></button>
<!--//                    <button class="buy btn-wayra" name="button" value="--><?php ////echo $row->id; ?><!--<!--"  data-target="##myModal1" data-toggle="modal" onclick="window.location='--><?php ////echo site_url("client_logged_in/bids_On_Trip/$row->id");?></button>
<!--//                    <input type="button" class="buy btn-wayra" style="color:#0086b3" name="button" value=" BIDS --><?php ////echo $row->id; ?><!--<!--" onclick="window.location='--><?php ////echo site_url("client_logged_in/bids_On_Trip/$row->id");?>
<!--//                    <input type="button" class="buy btn-wayra" style="color:#0086b3" name="button" value=" EDIT TRIP" onclick="Edit( --><?php ////echo $row->id;?>
<!--//                    <input type="button" class="buy btn-wayra" style="color:#0086b3" name="button" value="DELETE TRIP" onclick="Delete( --><?php ////echo $row->id;?>
                </div>
            </div>
                <div class="bnr-btm-left two grid">
                    <figure class="effect-ming wow fadeInRight animated animated" data-wow-delay=".5s">
                    <img src="<?php echo base_url(); ?>assets2/images/2.jpg" alt="img09"/>
                    <figcaption>
                        <h3><span>Travelanche</span></h3>
                        <p>We Share What's Rare..</p>
                    </figcaption>
                    </figure>

                </div>

                 <div class="clearfix"></div>
            </div>
        <?php }?>



        <!--//end-top_section-->
    </div>
</div>
<!-- app-->
<!-- //app-->
                  </div>
<!--//end-inner-content-->

</body>
</html>
