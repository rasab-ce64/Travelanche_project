<?php
$session_data = $this->session->userdata('user_logged_in');
// header("Cache-Control: no cache");
// session_cache_limiter("private_no_expire");
?>

<style>
a.btn-default{
    width:100%;
    border:1px solid #111111;
    margin:10px; 
    border-radius: 10px;
    color: #bf0f09;
}
.centered {
    position: absolute;
    top: 35%;
    left: 50%;
    font-size: 4em;
    color: white;
    transform: translate(-50%, -50%);
}
</style>

  

    <img class="img-responsive" style="width:100%; height:500px; " src="<?php echo base_url('assets/images/Bost.png'); ?>" > </img>
    <div class="centered"  style="">Travelanche</div>
                <!-- <a href = "<?php echo site_url('client_logged_in/Choice'); ?>" class = "btn btn-lg btn-success"> Plan a trip </a> -->
        
      <!-- Sidebar -->
    
    <div class="container">
    
    <h2 style="text-align: center;">Choose Whatever you want</h2>
    <hr>
    <div class="row">
    <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> --> 
        <a href="<?php echo site_url('client_logged_in/Choice'); ?>" type="button" class="btn btn-default btn-lg btn-block" name="plan_a_trip"> Plan a trip</a>
        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="share_a_ride"> Share a ride</a>
        <a href="#" type="button" class="btn btn-default btn-lg btn-block" name="find_a_ride"> Find a ride</a>
        <a href="<?php echo site_url('client_logged_in/trip_option'); ?>" type="button" class="btn btn-default btn-lg btn-block" name="my_trips"> My trips</a>
        <a href="<?php echo site_url('client_logged_in/companies'); ?>" type="button" class="btn btn-default btn-lg btn-block" name="companies"> Companies</a>
    </div>
    <hr>   
</div>
    

  <!--  <div id="profile">
        <?php
        echo "Hello <b id='welcome'><i>" . $session_data['phone'] . "</i> !</b>";
        echo "Welcome to Admin Page";
        ?>
    </div>
    <b id="logout"><a href="logout">Logout</a></b>
</div>
-->
