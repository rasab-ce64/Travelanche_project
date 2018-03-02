<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Vehicles</title>
</head>
<body>

<?php foreach($result as $row) { ?>

    <?php echo $row->vehicle_name; ?>
    <br>
    <?php echo $row->vehicle_model; ?>
    <br>
    <?php echo $row->vehicle_number; ?>
    <br>
    <br>
<?php } ?>

</body>
</html>
