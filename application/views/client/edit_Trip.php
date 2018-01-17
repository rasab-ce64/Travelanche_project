<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 12/01/2018
 * Time: 10:35
 */
?>

<html>
<head>
<title>Update Data In Database Using CodeIgniter</title>
</head>
<body>
<div id="container">
<div id="wrapper">
<h1>Update Data In Database Using CodeIgniter </h1><hr/>
<div id="detail">
    <!-- Fetching All Details of Selected Student From Database And Showing In a Form -->
        <p>Edit Detail & Click Update Button</p>
    <?php foreach($trips as $trip) $id =$trip->id ?>
            <form method="post" action="<?php echo site_url("client_logged_in/update_Data/$id"); ?>">
              <?php  foreach($trips as $trip) {?>
            <label id="hide">Destination :</label>
            <input type="text" id="hide" name="destination" value="<?php echo $trip->destination; ?>">
            <label>Vehicle :</label>
            <input type="text" name="vehicle" value="<?php echo $trip->vehicle; ?>">
            <label>Pickup Location :</label>
            <input type="text" name="pickup_location" value="<?php echo $trip->location_pickup; ?>">
            <label>Start date :</label>
            <input type="text" name="start_date" value="<?php echo $trip->start_date; ?>">
            <label>End date :</label>
            <input type="text" name="end_date" value="<?php echo $trip->end_date; ?>">
            <label>Pickup Time :</label>
            <input type="text" name="pickup_time" value="<?php echo $trip->time_pickup; ?>">
            <label>Trip End Time :</label>
            <input type="text" name="drop_time" value="<?php echo $trip->time_drop; ?>">
            <label>USer City :</label>
            <input type="text" name="city" value="<?php echo $trip->user_city; ?>">
            <label>Description :</label>
            <input type="text" name="trip_disc" value="<?php echo $trip->trip_description; ?>">
            <input type="submit" id="submit" name="submit" value="Update">
            <?php }?>
            </form>
</div>
</div>
</div>
</body>
</html>
