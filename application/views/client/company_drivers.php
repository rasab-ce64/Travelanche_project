<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Drivers</title>
</head>
<body>

<?php foreach($result as $row) { ?>

    <?php echo $row->driver_name; ?>
    <br>
    <?php echo $row->driver_phone; ?>
    <br>
    <br>
<?php } ?>
</body>
</html>
