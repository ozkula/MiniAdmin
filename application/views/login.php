<!DOCTYPE html>
<html>
    <head>
        <title>Administrator Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap.min.css">

        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/bootstrap-theme.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/themes.css">
    </head>
    <body>
        <div class="container">
          <?php $this->load->view('login_content'); ?>
        </div>
    </body>
        
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
</html>