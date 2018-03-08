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
    <img src="<?php echo base_url().$row->driver_picture; ?>" style="width: 100px; height: 100px; ">
    <br> <br>
    <?php echo "<img src='" . base_url().$row->driver_picture."' width=150px; height=100px;>";?>
    <br> <br>
<?php } ?>
</body>
</html>
