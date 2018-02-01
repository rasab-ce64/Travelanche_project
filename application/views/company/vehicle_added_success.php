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
        background-color: #ba0710;
        color: #ffffff;
    }
    #btn:hover{
        color: #ba0710; !important;
        background-color: #ffffff; !important;
        border: solid #ba0710 1px; !important;
    }
</style>
<body>

<div class="container">
    <h2>Success</h2>
    <div class="alert alert-success">
        <strong>Congratulations! </strong> You have successfully add your vehicle. Click the button below to Bid on trips
    </div>

    <button id="btn" class="btn btn-sm" href="<?php echo site_url('company_login/login'); ?>">Back to Trips</button>
</div>

</body>
</html>