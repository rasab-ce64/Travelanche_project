<?php 
 
 foreach($id as $row) {
     echo "BIDS BY RENTALS";
     echo "<br>";
     echo $row->bid_id;
     echo "<br>";
     echo $row->company_name;
     echo "<br>";
     echo $row->company_phone;
     echo "<br>";
     echo $row->total_fare;
 }
?>