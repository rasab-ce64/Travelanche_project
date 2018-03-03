<?php
defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<html>
<head>
    <title>Upload Form</title>
</head>
<body>

<?php echo $error; ?>
<form action="<?= site_url('add_driver/image') ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="userfile" size="20"/>

    <br/><br/>

    <input type="submit" value="upload"/>

</form>

</body>
</html>
