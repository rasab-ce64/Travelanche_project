<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
    .btn{
        background-color: #ba0710; !important;
        color: #ffffff; !important;
    }
    #btn:hover{
        background-color: #ffffff; !important;
        color: #000000;
        border: solid #ba0710 1px;
    }
</style>
<body>

<div class="container">
    <h2>Success</h2>
    <div class="alert alert-success">
        <strong>Congratulations! </strong> You have successfully added your driver. Click the button below to bid on trips
    </div>

    <button id="btn" class="btn btn-sm" href="<?php echo site_url(''); ?>">Back to Menu</button>
    <h3>Your file was successfully uploaded!</h3>

    <p><?php echo anchor('company_logged_in/add_driver', 'Upload Another File!'); ?></p>
</div>

</body>
</html>
