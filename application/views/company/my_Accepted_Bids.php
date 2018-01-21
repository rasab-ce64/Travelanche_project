<?php
foreach($bids as $row)
{
    echo "bid id =". $row->bid_id;
    echo "<br>";
    echo "bid id =". $row->timestamp;
    echo "<br>";

    echo  "trip id =".$row->id;
    echo "<br>";

}
 ?>